<?php
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    private $pdoMock;

    protected function setUp(): void
    {
        // Create a mock of the PDO class
        $this->pdoMock = $this->createMock(PDO::class);
    }

    public function testSuccessfulLogin()
    {
        $email = '220074349@aston.ac.uk';
        $password = 'pass';

        // Create a mock statement for the PDO object
        $stmtMock = $this->createMock(PDOStatement::class);
        $stmtMock->expects($this->once())
            ->method('execute')
            ->willReturn(true);
        $stmtMock->expects($this->once())
            ->method('fetch')
            ->willReturn(['email' => $email, 'password' => 'pass']); // Mocking a correct password

        // Mock the prepare method of PDO to return the mocked statement
        $this->pdoMock->expects($this->once())
            ->method('prepare')
            ->willReturn($stmtMock);

        // Test the actual method
        $stmt = $this->pdoMock->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->assertNotFalse($user, "User should exist in the mock database");
        $this->assertEquals($password, $user['password'], "Password should match");
    }

    public function testFailedLoginWithWrongPassword()
    {
        $email = '220074349@aston.ac.uk';
        $wrongPassword = 'wrongpassword';

        // Create a mock statement for the PDO object
        $stmtMock = $this->createMock(PDOStatement::class);
        $stmtMock->expects($this->once())
            ->method('execute')
            ->willReturn(true);
        $stmtMock->expects($this->once())
            ->method('fetch')
            ->willReturn(['email' => $email, 'password' => 'pass']); // Mocking a correct password

        // Mock the prepare method of PDO to return the mocked statement
        $this->pdoMock->expects($this->once())
            ->method('prepare')
            ->willReturn($stmtMock);

        // Test the actual method
        $stmt = $this->pdoMock->prepare("SELECT * FROM users WHERE email = :email LIMIT 1");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->assertNotFalse($user, "User should exist in the mock database");
        $this->assertNotEquals($wrongPassword, $user['password'], "Password should not match");
    }
}
?>