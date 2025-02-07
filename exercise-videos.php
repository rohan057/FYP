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

    <h1 class="exercisevideo-title">Exercise Videos</h1>

    <div class="video-container">
        <div class="video-grid">
            <div class="video-item">
                <h3>Home Workout For Beginners</h3>
                <iframe src="https://www.youtube.com/embed/2fCKd-BQOhw" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=2fCKd-BQOhw -->
            </div>
            <div class="video-item">
                <h3>Full Body Beginner Workout</h3>
                <iframe src="https://www.youtube.com/embed/Oe5CDt3dp8Q" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=Oe5CDt3dp8Q -->
            </div>
            <div class="video-item">
                <h3>Full Body Home Workout</h3>
                <iframe src="https://www.youtube.com/embed/zh1Kq3Qv-2U" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=zh1Kq3Qv-2U -->
            </div>
            <div class="video-item">
                <h3>ABS For Beginners</h3>
                <iframe src="https://www.youtube.com/embed/3p8EBPVZ2Iw" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=3p8EBPVZ2Iw -->
            </div>
            <div class="video-item">
                <h3>Home Leg Workout</h3>
                <iframe src="https://www.youtube.com/embed/q7rCeOa_m58" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=q7rCeOa_m58 -->
            </div>
            <div class="video-item">
                <h3>Full Body Cardio Workout</h3>
                <iframe src="https://www.youtube.com/embed/79cx5vmf3Qg" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=79cx5vmf3Qg -->
            </div>
            <div class="video-item">
                <h3>Home Chest Workout</h3>
                <iframe src="https://www.youtube.com/embed/BkS1-El_WlE" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=BkS1-El_WlE -->
            </div>
            <div class="video-item">
                <h3>Biceps, Triceps and Shoulders</h3>
                <iframe src="https://www.youtube.com/embed/M42-2wgRWkA" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=M42-2wgRWkA -->
            </div>
            <div class="video-item">
                <h3>Beginners Arm Workout</h3>
                <iframe src="https://www.youtube.com/embed/J1-SDv_kwiY" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=J1-SDv_kwiY -->
            </div>
            <div class="video-item">
                <h3>Home Back Workout</h3>
                <iframe src="https://www.youtube.com/embed/QqZV3JEoOlc" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=QqZV3JEoOlc -->
            </div>
            <div class="video-item">
                <h3>Pilates Workout</h3>
                <iframe src="https://www.youtube.com/embed/C2HX2pNbUCM" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=C2HX2pNbUCM -->
            </div>
            <div class="video-item">
                <h3>Beginner Calisthenics Workout</h3>
                <iframe src="https://www.youtube.com/embed/kuUZYUBHryw" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=kuUZYUBHryw -->
            </div>
            <div class="video-item">
                <h3>HIIT/Cardio Workout</h3>
                <iframe src="https://www.youtube.com/embed/edIK5SZYMZo" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=edIK5SZYMZo -->
            </div>
            <div class="video-item">
                <h3>Yoga For Beginners</h3>
                <iframe src="https://www.youtube.com/embed/T41mYCmtWls" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=T41mYCmtWls -->
            </div>
            <div class="video-item">
                <h3>Gentle Yoga For Beginners</h3>
                <iframe src="https://www.youtube.com/embed/3X0hEHop8ec" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=3X0hEHop8ec -->
            </div>
            <div class="video-item">
                <h3>Full Body Yoga</h3>
                <iframe src="https://www.youtube.com/embed/Eml2xnoLpYE" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=Eml2xnoLpYE -->
            </div>
            <div class="video-item">
                <h3>Core Workout</h3>
                <iframe src="https://www.youtube.com/embed/stuPkzWMdIg" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=stuPkzWMdIg -->
            </div>
            <div class="video-item">
                <h3>Shoulder Workout</h3>
                <iframe src="https://www.youtube.com/embed/jBPdbt0Fxb4" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=jBPdbt0Fxb4 -->
            </div>
            <div class="video-item">
                <h3>HIIT Workout</h3>
                <iframe src="https://www.youtube.com/embed/g3CiXrjJ7cs" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=g3CiXrjJ7cs -->
            </div>
            <div class="video-item">
                <h3>Lower Body Workout</h3>
                <iframe src="https://www.youtube.com/embed/6atz9eroPBs" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=6atz9eroPBs -->
            </div>
        </div>
    </div>
</body>
</html>
