<?php
session_start();

$host = 'localhost';
$dbname = 'fyp';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); //https://www.w3schools.com/php/php_mysql_connect.asp
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $goal = isset($_POST['goal']) ? trim($_POST['goal']) : '';
    $reward_credits = isset($_POST['reward_credits']) ? (int) $_POST['reward_credits'] : 0;

    if (!empty($goal) && $reward_credits > 0) {
        $user_id = $_SESSION['user_id'];

        $stmt = $pdo->prepare("INSERT INTO goals (user_id, goal, is_completed, reward_credits) VALUES (?, ?, 0, ?)");
        $stmt->bindParam(1, $user_id, PDO::PARAM_INT);
        $stmt->bindParam(2, $goal, PDO::PARAM_STR);
        $stmt->bindParam(3, $reward_credits, PDO::PARAM_INT);

        if ($stmt->execute()) {
            $message = "<p class='goals-add-success'>Goal added successfully!</p>";
        } else {
            $message = "<p class='goals-add-error'>Error: " . $stmt->errorInfo()[2] . "</p>";
        }
    } else {
        $message = "<p class='goals-add-error'>Please enter a valid goal and reward credits.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Goal</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="year-resources.php">Student Resources</a></li>
            <li><a href="exercise.php">Exercise</a></li>
            <li><a href="nutrition.php">Nutrition</a></li>
            <li><a href="meditation-mindfulness.php">Meditation and Mindfulness</a></li>
            <li><a href="funding.php">Funding</a></li>
            <li><a href="questionnaire.php">Request Resources</a></li>
            <li><a href="anonymous-feedback.php">Anonymous Feedback</a></li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="journal.php">Journal</a></li>
                <li><a href="goals.php">Goals</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <h1 class="goals-add-header">Add a New Goal</h1>

    <?php if ($message): ?>
        <div class="goals-add-message-container">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <form class="goals-add-form" method="POST">
        <label for="goal">Goal:</label><br>
        <input type="text" class="goals-add-input" name="goal" id="goal" placeholder="Enter your goal" required><br><br>

        <label for="reward_credits">Reward Credits:</label><br>
        <input type="number" class="goals-add-input" name="reward_credits" id="reward_credits" min="1" placeholder="Enter reward credits" required><br><br>

        <button class="goals-add-button" type="submit">Add Goal</button>
    </form>

</body>
</html>
