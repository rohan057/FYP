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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $journal_entry = isset($_POST['journal_entry']) ? trim($_POST['journal_entry']) : '';

    if (!empty($journal_entry)) {
        $user_id = $_SESSION['user_id'];
        
        $stmt = $pdo->prepare("INSERT INTO private_journal (user_id, journal_entry) VALUES (?, ?)");
        $stmt->bindParam(1, $user_id, PDO::PARAM_INT);
        $stmt->bindParam(2, $journal_entry, PDO::PARAM_STR);

        if ($stmt->execute()) {
            echo "<p>Entry added successfully!</p>";
        } else {
            echo "<p>Error: " . $stmt->errorInfo()[2] . "</p>";
        }
    } else {
        echo "<p>Please enter some text.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Entries</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="questionnaire.php">Request Resources</a></li>
            <li><a href="anonymous-feedback.php">Anonymous Feedback</a></li>
            <li><a href="funding.php">Funding</a></li>
            <li><a href="year-resources.php">Student Resources</a></li>
            <li><a href="exercise.php">Exercise</a></li>
            <li><a href="nutrition.php">Nutrition</a></li>
            <li><a href="meditation-mindfulness.php">Meditation and Mindfulness</a></li>

            <?php if (isset($_SESSION['user_id'])): ?>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="journal.php">Journal</a></li>
                <li><a href="goals.php">Goals</a></li>
            <?php else: ?>
                <li><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <h1>Add a New Journal Entry</h1>
    <form method="POST">
        <label for="journal_entry">Write your entry here:</label>
        <textarea name="journal_entry" id="journal_entry" rows="5" cols="30"></textarea>
        <br>
        <button type="submit">Add Entry</button>
    </form>
</body>
</html>