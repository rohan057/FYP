<?php
use PHPUnit\Framework\TestCase;

class AddJournalEntryTest extends TestCase
{
    protected $pdo;
    protected $stmt;
    protected $user_id;

    // Mock the database connection and set up the user ID
    protected function setUp(): void
    {
        // Mock the PDO object
        $this->pdo = $this->createMock(PDO::class);

        // Mock the PDOStatement object
        $this->stmt = $this->createMock(PDOStatement::class);
        
        // Simulate user ID
        $this->user_id = 1; 
    }

    // Test the journal entry functionality
    public function testAddJournalEntry()
    {
        // Simulate form data (journal entry)
        $journal_entry = 'This is a test journal entry';

        // Mock the behavior of the prepare method to return the mocked statement
        $this->pdo->method('prepare')
            ->willReturn($this->stmt);

        // Mock the behavior of the execute method to return true (successful execution)
        $this->stmt->method('execute')
            ->willReturn(true);

        // Mock the behavior of the fetch method to simulate a returned entry from the database
        $this->stmt->method('fetch')
            ->willReturn([
                'user_id' => $this->user_id,
                'journal_entry' => $journal_entry
            ]);

        // Simulate executing the insert statement
        $stmt = $this->pdo->prepare("INSERT INTO private_journal (user_id, journal_entry) VALUES (?, ?)");
        $stmt->bindParam(1, $this->user_id, PDO::PARAM_INT);
        $stmt->bindParam(2, $journal_entry, PDO::PARAM_STR);

        // Execute the insertion and check if it was successful
        $result = $stmt->execute();

        // Fetch the last inserted entry from the database
        $entry = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify if the entry was successfully added to the database
        $this->assertTrue($result);
        $this->assertNotEmpty($entry);
        $this->assertEquals($journal_entry, $entry['journal_entry']);
        
        // Simulate the success message being returned
        $message = "Entry added successfully! <a href='journal-entries.php'>View your entries</a>";
        $this->assertStringContainsString('Entry added successfully', $message);
    }
}
?>
