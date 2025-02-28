<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise</title>
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

    <div class="container">
        <div class="exercise-box">
            <h2>Exercise Plans</h2>
            <p>Browse a variety of exercise plans designed to help you reach your fitness goals.</p>
            <a href="exercise-plans.php">Explore Plans</a>
        </div>
        <div class="exercise-box">
            <h2>Workout Videos</h2>
            <p>Watch workout videos to guide you through exercises and help you stay motivated.</p>
            <a href="exercise-videos.php">Watch Videos</a>
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
