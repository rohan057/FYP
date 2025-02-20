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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $goal = isset($_POST['goal']) ? trim($_POST['goal']) : '';

    if (!empty($goal) && isset($goal_rewards[$goal])) {
        $reward_credits = $goal_rewards[$goal];
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
        $message = "<p class='goals-add-error'>Please select a valid goal.</p>";
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
        <select class="goals-add-input" name="goal" id="goal" required>
            <option value="" disabled selected>Select a goal</option>
            <?php foreach ($goal_rewards as $goal => $credits): ?>
                <option value="<?php echo htmlspecialchars($goal); ?>"><?php echo htmlspecialchars($goal); ?></option>
            <?php endforeach; ?>
        </select><br><br>

        <button class="goals-add-button" type="submit">Add Goal</button>
    </form>

</body>
</html>