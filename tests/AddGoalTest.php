<?php
use PHPUnit\Framework\TestCase;

class AddGoalTest extends TestCase
{
    protected $pdo;
    protected $session;

    protected function setUp(): void
    {
        // Mock the PDO connection
        $this->pdo = $this->getMockBuilder(PDO::class)
                          ->disableOriginalConstructor()
                          ->getMock();

        // Mock the session
        $this->session = $this->getMockBuilder('stdClass')->getMock();
        $this->session->user_id = 1;  // Simulate a logged-in user with ID 1
        $_SESSION['user_id'] = $this->session->user_id;
    }

    public function testAddGoal()
    {
        // Mock form input
        $goal = "Go for a 30-minute walk or do some physical exercise";
        $_POST['goal'] = $goal;

        // Mock the goal rewards array
        $goal_rewards = [
            "Attend a workshop or complete a wellbeing activity" => 30,
            "Practice mindfulness or meditation for 20 minutes" => 30,
            "Go for a 30-minute walk or do some physical exercise" => 40,
            "Stay hydrated (drink at least 2L of water in a day)" => 40,
            "Study for 2 hours" => 50,
            "Participate in a peer support session or group activity" => 50,
            "Limit social media use to 1 hour or less in a day" => 50,
            "Try a new healthy meal or cook at home" => 50,
            "Get 7-9 hours of sleep consistently for a week" => 60,
            "Attend all lectures and labs for the week" => 70,
            "Finish a piece of coursework" => 100,
            "Volunteer for a student wellbeing initiative" => 100,
            "Attend a university event (e.g. careers fair)" => 150,
            "Complete an exam on a module" => 200
        ];

        // Mock PDO statement and its execution
        $stmt = $this->getMockBuilder(PDOStatement::class)
                     ->onlyMethods(['bindParam', 'execute', 'fetch'])
                     ->getMock();

        // Expect bindParam to be called 3 times
        $stmt->expects($this->exactly(3))
             ->method('bindParam')
             ->willReturn(true);

        // Expect execute to be called once
        $stmt->expects($this->once())
             ->method('execute')
             ->willReturn(true);

        // Simulate goal insertion and goal fetch
        $stmt->expects($this->once())
             ->method('fetch')
             ->willReturn([
                 'user_id' => 1,
                 'goal' => $goal,
                 'reward_credits' => 40
             ]);

        $this->pdo->method('prepare')
                  ->willReturn($stmt);

        // Simulate goal insert logic
        if (isset($_POST['goal']) && !empty($_POST['goal']) && isset($goal_rewards[$_POST['goal']])) {
            $reward_credits = $goal_rewards[$_POST['goal']];
            $user_id = $_SESSION['user_id'];

            $stmt = $this->pdo->prepare("INSERT INTO goals (user_id, goal, is_completed, reward_credits) VALUES (?, ?, 0, ?)");
            $stmt->bindParam(1, $user_id, PDO::PARAM_INT);
            $stmt->bindParam(2, $goal, PDO::PARAM_STR);
            $stmt->bindParam(3, $reward_credits, PDO::PARAM_INT);

            $stmt->execute();
            $message = "Goal added successfully! <a href='goals.php'>View your goals</a>";
        }

        // Assert that the goal has been added
        $this->assertNotEmpty($stmt->fetch(), 'Goal should be added to the database');
        $this->assertEquals("Goal added successfully! <a href='goals.php'>View your goals</a>", $message);
    }

    protected function tearDown(): void
    {
    }
}
?>