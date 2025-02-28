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
    die("Database connection failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
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

    <h1 class="faq-header">Frequently Asked Questions</h1>

    <div class="faq-container">
        <?php
        $stmt = $pdo->query("SELECT * FROM faq");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $faq_id = 'faq' . $row['id'];
            echo '
            <div class="faq-item">
                <input type="checkbox" id="' . $faq_id . '" class="faq-checkbox">
                <label for="' . $faq_id . '" class="faq-question">' . htmlspecialchars($row['question']) . '</label>
                <div class="faq-answer">' . htmlspecialchars($row['answer']) . '</div>
            </div>';
        }
        ?>
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