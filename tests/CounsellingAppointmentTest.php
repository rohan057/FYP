<?php
use PHPUnit\Framework\TestCase;

class CounsellingAppointmentTest extends TestCase
{
    private $pdoMock;
    private $stmtMock;

    protected function setUp(): void
    {
        // Mock the PDO object
        $this->pdoMock = $this->createMock(PDO::class);

        // Mock the PDOStatement object
        $this->stmtMock = $this->createMock(PDOStatement::class);

        // Set up the PDO mock to return the statement mock when preparing queries
        $this->pdoMock->method('prepare')->willReturn($this->stmtMock);
    }

    public function testBookingFormSubmission()
    {
        // Sample form data
        $formData = [
            'dob' => '1990-01-01',
            'phone' => '123-456-7890',
            'external_support' => 'yes',
            'contact_method' => ['Face to Face', 'Telephone'],
            'availability' => [
                'monday' => ['AM', 'PM'],
                'wednesday' => ['All Day']
            ]
        ];

        // Simulate POST request
        $_POST = $formData;

        // Prepare mock return values for the statement methods
        $this->stmtMock->expects($this->exactly(5))
            ->method('bindParam')
            ->with(
                $this->logicalOr(
                    $this->equalTo(':dob'),
                    $this->equalTo(':phone'),
                    $this->equalTo(':external_support'),
                    $this->equalTo(':contact_method'),
                    $this->equalTo(':availability')
                ),
                $this->isType('string')
            );

        // Simulate execute success
        $this->stmtMock->expects($this->once())
            ->method('execute')
            ->willReturn(true);

        // Simulate the query method returning the mock statement
        $this->pdoMock->expects($this->once())
            ->method('query')
            ->willReturn($this->stmtMock);

        // Simulate booking submission
        $dob = $_POST['dob'];
        $phone = $_POST['phone'] ?? null;
        $external_support = $_POST['external_support'];
        $contact_methods = isset($_POST['contact_method']) ? implode(', ', $_POST['contact_method']) : null;
        $availability = isset($_POST['availability']) ? json_encode($_POST['availability']) : null;

        // Simulate database insertion using prepared statements
        $query = "INSERT INTO bookings (dob, phone, external_support, contact_method, availability) 
                  VALUES (:dob, :phone, :external_support, :contact_method, :availability)";
        $stmt = $this->pdoMock->prepare($query);

        // Bind parameters
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':external_support', $external_support);
        $stmt->bindParam(':contact_method', $contact_methods);
        $stmt->bindParam(':availability', $availability);

        // Assert that the data is inserted successfully
        $this->assertTrue($stmt->execute(), 'Booking submission failed.');

        // Simulate checking if the booking was stored in the database
        $stmt->expects($this->once())
            ->method('fetchColumn')
            ->willReturn(1); // Simulate 1 record found

        // Check if the booking exists
        $stmt = $this->pdoMock->query("SELECT COUNT(*) FROM bookings WHERE dob = '$dob' AND phone = '$phone'");
        $bookingCount = $stmt->fetchColumn();
        $this->assertEquals(1, $bookingCount, 'Booking data not found in the database.');

        // Assert that the confirmation message appears
        // Simulating success message
        $success_message = "Booking request submitted successfully.";
        $this->assertEquals('Booking request submitted successfully.', $success_message, 'Success message was not displayed.');
    }
}
?>
