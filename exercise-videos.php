<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Videos</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/exercise-videos.css">
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

    <h1 class="exercisevideo-title">Exercise Videos</h1>

    <div class="video-container">
        <div class="video-grid">
            <div class="video-item">
                <h3>Full Body Workout</h3>
                <iframe src="https://www.youtube.com/embed/VIDEO_ID_1" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video-item">
                <h3>Leg Strength Training</h3>
                <iframe src="https://www.youtube.com/embed/VIDEO_ID_2" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video-item">
                <h3>Core and Abs Routine</h3>
                <iframe src="https://www.youtube.com/embed/VIDEO_ID_3" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="video-item">
                <h3>Upper Body Strength</h3>
                <iframe src="https://www.youtube.com/embed/VIDEO_ID_4" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</body>
</html>
