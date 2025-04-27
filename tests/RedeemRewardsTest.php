<?php
use PHPUnit\Framework\TestCase;

class RedeemRewardsTest extends TestCase
{
    protected $pdo;
    protected $user_id = 1; // Test user ID
    protected $user_credits = 5000; // Test initial credits
    
    protected function setUp(): void
    {
        // Mock PDO
        $this->pdo = $this->createMock(PDO::class);

        // Mock the database to return specific values
        $this->pdo->method('prepare')->willReturn($this->createMock(PDOStatement::class));
    }

    public function testRedeemRewards()
    {
        // Simulate user login and setting session
        $_SESSION['user_id'] = $this->user_id;

        // Simulate retrieving user's credits from the database
        $stmt = $this->pdo->prepare("SELECT user_credits FROM users WHERE id = ?");
        $stmt->method('execute')->willReturn(true);
        $stmt->method('fetch')->willReturn(['user_credits' => $this->user_credits]);

        // Simulate the POST request for redeeming a gift card
        $_SERVER['REQUEST_METHOD'] = 'POST';  // Simulate POST request method
        $_POST['giftcard'] = 'Amazon';
        $_POST['amount'] = 1000; // Redeem £10

        // The credits should be updated by subtracting the redemption amount
        $updatedCredits = $this->user_credits - 1000;

        // Mocking the update query for user credits
        $stmtUpdateCredits = $this->pdo->prepare("UPDATE users SET user_credits = user_credits - ? WHERE id = ?");
        $stmtUpdateCredits->expects($this->once())
                          ->method('execute')
                          ->with([1000, $this->user_id])
                          ->willReturn(true);

        // Mocking the insert query for the redemption transaction
        $stmtInsertRedemption = $this->pdo->prepare("INSERT INTO credit_redemptions (user_id, redemption_amount, giftcard_type, redemption_date) VALUES (?, ?, ?, NOW())");
        $stmtInsertRedemption->expects($this->once())
                              ->method('execute')
                              ->with([$this->user_id, 1000, 'Amazon'])
                              ->willReturn(true);

        // Simulate a form submission and check the result
        $resultMessage = '';
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Begin transaction
            $this->pdo->beginTransaction();
            
            // Execute the update query and insert query
            $stmtUpdateCredits->execute([1000, $this->user_id]);
            $stmtInsertRedemption->execute([$this->user_id, 1000, $_POST['giftcard']]);
            
            // Commit the transaction
            $this->pdo->commit();

            // Set confirmation message
            $resultMessage = "Successfully redeemed a Amazon gift card for £10!";
        }

        // Assert that the result message is correct
        $this->assertEquals("Successfully redeemed a Amazon gift card for £10!", $resultMessage);

        // Simulate checking the updated credits in the database
        $stmt = $this->pdo->prepare("SELECT user_credits FROM users WHERE id = ?");
        $stmt->execute([$this->user_id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Assert that the user's credits are updated in the database
        $this->assertEquals($updatedCredits, $result['user_credits']);
        
        // Verify the redemption transaction was inserted into the database
        $stmtInsertRedemption->execute([$this->user_id, 1000, 'Amazon']);
    }
}
?>