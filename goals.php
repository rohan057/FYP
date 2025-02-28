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

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $goal_id = $_POST['goal_id'];
    $action = $_POST['action'];

    if ($action === 'complete') {
        $stmt = $pdo->prepare("SELECT reward_credits FROM goals WHERE goal_id = ? AND user_id = ?");
        $stmt->execute([$goal_id, $user_id]);
        $goal = $stmt->fetch();

        if ($goal) {
            $reward_credits = $goal['reward_credits'];
            $updateCredits = $pdo->prepare("UPDATE users SET user_credits = user_credits + ? WHERE id = ?");
            $updateCredits->execute([$reward_credits, $user_id]);

            $deleteGoal = $pdo->prepare("DELETE FROM goals WHERE goal_id = ? AND user_id = ?");
            $deleteGoal->execute([$goal_id, $user_id]);

            echo "<p class='success-message'>Goal marked as completed! You earned {$reward_credits} credits.</p>";
        }
    } elseif ($action === 'delete') {
        $deleteGoal = $pdo->prepare("DELETE FROM goals WHERE goal_id = ? AND user_id = ?");
        $deleteGoal->execute([$goal_id, $user_id]);

        echo "<p class='success-message'>Goal deleted successfully.</p>";
    }
}

$stmt = $pdo->prepare("SELECT goal_id, goal, is_completed, reward_credits FROM goals WHERE user_id = ?");
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

    <script>
        function confirmAction(button) {
            var action = button.value;
            var message = '';

            if (action === 'complete') {
                message = 'Are you sure you want to mark this goal as completed?';
            } else if (action === 'delete') {
                message = 'Are you sure you want to delete this goal?';
            }

            return confirm(message);
        }
    </script>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="year-resources.php">Student Resources</a></li>
            <li><a href="exercise.php">Exercise</a></li>
            <li><a href="nutrition.php">Recipes</a></li>
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
        <h1 class="goals-header">Your Goals</h1>
        <?php if ($goals): ?>
            <ul class="goals-list">
                <?php foreach ($goals as $goal): ?>
                    <li>
                        <p><strong>Goal:</strong> <?= htmlspecialchars($goal['goal']) ?></p>
                        <p><strong>Status:</strong> <?= $goal['is_completed'] ? "Completed ✅" : "In Progress ⏳" ?></p>
                        <p><strong>Reward Credits:</strong> <?= htmlspecialchars($goal['reward_credits']) ?></p>
                        <form method="POST" onsubmit="return confirmAction(this.querySelector('button:focus'))">
                            <input type="hidden" name="goal_id" value="<?= $goal['goal_id'] ?>">
                            <button type="submit" name="action" value="complete" class="complete-btn">Mark as Completed</button>
                            <button type="submit" name="action" value="delete" class="delete-btn">Delete Goal</button>
                        </form>
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hamburger = document.createElement('div');
        hamburger.className = 'hamburger';
        hamburger.innerHTML = '☰';
        document.querySelector('nav').insertBefore(hamburger, document.querySelector('nav ul'));

        hamburger.addEventListener('click', function() {
            document.querySelector('nav ul').classList.toggle('show');
        });
    });
</script>

</body>
</html>
