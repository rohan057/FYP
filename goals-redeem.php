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
$user_credits = 0;

$stmt = $pdo->prepare("SELECT user_credits FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if ($result) {
    $user_credits = $result['user_credits'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $giftcard = $_POST['giftcard'];
    $amount = (int)$_POST['amount'];

    if ($amount <= $user_credits) {
        try {
            $pdo->beginTransaction();
            
            $updateCredits = $pdo->prepare("UPDATE users SET user_credits = user_credits - ? WHERE id = ?");
            $updateCredits->execute([$amount, $user_id]);
            
            $insertRedemption = $pdo->prepare("INSERT INTO credit_redemptions (user_id, redemption_amount, giftcard_type, redemption_date) VALUES (?, ?, ?, NOW())");
            $insertRedemption->execute([$user_id, $amount, $giftcard]);
            
            $pdo->commit();
            $message = "Successfully redeemed a $giftcard gift card for £" . ($amount / 100) . "!";
            $user_credits -= $amount;
        } catch (Exception $e) {
            $pdo->rollBack();
            $message = "Redemption failed: " . $e->getMessage();
        }
    } else {
        $message = "You do not have enough credits to redeem this amount.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redeem Rewards</title>
    <link rel="stylesheet" href="css/styles.css">
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

    <div class="goals-redeem-container">
    <h1 class="goals-redeem-title">Redeem Rewards</h1>
    <p class="goals-redeem-credits">Your current credits: <strong class="goals-redeem-strong"><?= $user_credits ?></strong></p>

    <?php if (isset($message)): ?>
        <p class="goals-redeem-message"><?= $message ?></p>
    <?php endif; ?>

    <div class="goals-redeem-note">
        <p><strong>Important:</strong> Any attempt to exploit or abuse the reward system will result in retrospective action. This may include the forfeiture of credits and the suspension of your account.</p>
    </div>

    <form method="POST" class="goals-redeem-form">
        <label for="giftcard" class="goals-redeem-label">Select gift card:</label>
        <select name="giftcard" id="giftcard" class="goals-redeem-select" required>
            <option value="Amazon">Amazon</option>
            <option value="Google Play">Google Play</option>
            <option value="Spotify">Spotify</option>
            <option value="Apple">Apple</option>
            <option value="Currys">Currys</option>
        </select>

        <label for="amount" class="goals-redeem-label">Select amount to redeem:</label>
        <select name="amount" id="amount" class="goals-redeem-select" required>
            <option value="500">£5</option>
            <option value="1000">£10</option>
            <option value="2500">£25</option>
            <option value="5000">£50</option>
            <option value="10000">£100</option>
        </select>

        <button type="submit" class="goals-redeem-button">Redeem</button>
    </form>
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
