<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meditation Techniques</title>
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

    <h1 class="meditation-title">Meditation Techniques</h1>

    <div class="techniques-container">
        <div class="technique-grid">
            <div class="technique-item">
                <h3>Loving-Kindness Meditation</h3>
                <iframe src="https://www.youtube.com/embed/-d_AA9H4z9U" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=-d_AA9H4z9U -->
            </div>
            <div class="technique-item">
                <h3>Progressive Muscle Relaxation</h3>
                <iframe src="https://www.youtube.com/embed/_1h-zizAGsc" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=_1h-zizAGsc -->
            </div>
            <div class="technique-item">
                <h3>Mindfulness Stress Reduction</h3>
                <iframe src="https://www.youtube.com/embed/507zwibbfRs" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=507zwibbfRs -->
            </div>
            <div class="technique-item">
                <h3>Visualisation Meditation</h3>
                <iframe src="https://www.youtube.com/embed/NVPrxcR_RZI" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=NVPrxcR_RZI -->
            </div>
            <div class="technique-item">
                <h3>Mindfulness Meditation</h3>
                <iframe src="https://www.youtube.com/embed/ZToicYcHIOU" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=ZToicYcHIOU -->
            </div>
            <div class="technique-item">
                <h3>Breathing Meditation</h3>
                <iframe src="https://www.youtube.com/embed/YFSc7Ck0Ao0" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=YFSc7Ck0Ao0 -->
            </div>
            <div class="technique-item">
                <h3>OM Mantra Meditation</h3>
                <iframe src="https://www.youtube.com/embed/vH11undyI2o" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=vH11undyI2o -->
            </div>
            <div class="technique-item">
                <h3>Guided Meditation</h3>
                <iframe src="https://www.youtube.com/embed/uTN29kj7e-w" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=uTN29kj7e-w -->
            </div>
            <div class="technique-item">
                <h3>Body Scan Meditation</h3>
                <iframe src="https://www.youtube.com/embed/uqtIqCKjkuc" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=uqtIqCKjkuc -->
            </div>
            <div class="technique-item">
                <h3>Walking Meditation</h3>
                <iframe src="https://www.youtube.com/embed/maCdzhtGgGU" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=maCdzhtGgGU -->
            </div>
            <div class="technique-item">
                <h3>ZEN Meditation</h3>
                <iframe src="https://www.youtube.com/embed/aTIV9djESbY" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=aTIV9djESbY -->
            </div>
            <div class="technique-item">
                <h3>Vipassana Meditation</h3>
                <iframe src="https://www.youtube.com/embed/PvAEG5muUnU" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=PvAEG5muUnU -->
            </div>
        </div>
    </div>
</body>
</html>
