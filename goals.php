<?php
session_start();

$host = 'localhost';
$dbname = 'fyp';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT goal, is_completed, reward_credits FROM goals WHERE user_id = ?");
$stmt->execute([$user_id]);
$goals = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Goals</title>
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

    <div class="goals-container">
        <div class="goals-left">
            <h1>Your Goals</h1>
            <?php if ($goals): ?>
                <ul class="goals-list">
                    <?php foreach ($goals as $goal): ?>
                        <li>
                            <p><strong>Goal:</strong> <?= htmlspecialchars($goal['goal']) ?></p>
                            <p><strong>Status:</strong> <?= $goal['is_completed'] ? "Completed ✅" : "In Progress ⏳" ?></p>
                            <p><strong>Reward Credits:</strong> <?= htmlspecialchars($goal['reward_credits']) ?></p>
                            <hr>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                <p>No goals found. <a href="goals-add.php">Add a new goal</a>.</p>
            <?php endif; ?>
        </div>

        <div class="goals-right">
            <a href="goals-add.php"><button class="add-goal-btn">Add a Goal</button></a>
            <a href="goals-redeem.php"><button class="redeem-rewards-btn">Redeem Rewards</button></a>
        </div>
    </div>
</body>
</html>
