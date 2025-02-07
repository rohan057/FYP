<?php
session_start();
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

    <h1 class="faq-header">Frequently Asked Questions</h1>

    <div class="faq-container">
        <div class="faq-item">
            <input type="checkbox" id="faq1" class="faq-checkbox">
            <label for="faq1" class="faq-question">What is the purpose of this platform?</label>
            <div class="faq-answer">This platform is designed to provide resources and support for students to improve their wellbeing, balance education, and enhance mental health.</div>
        </div>
        <div class="faq-item">
            <input type="checkbox" id="faq2" class="faq-checkbox">
            <label for="faq2" class="faq-question">How can I request resources?</label>
            <div class="faq-answer">You can request resources by navigating to the "Request Resources" page and filling out the provided questionnaire.</div>
        </div>
        <div class="faq-item">
            <input type="checkbox" id="faq3" class="faq-checkbox">
            <label for="faq3" class="faq-question">Who can access the anonymous feedback section?</label>
            <div class="faq-answer">The anonymous feedback section is open to all students to provide their feedback while keeping their identity private.</div>
        </div>
        <div class="faq-item">
            <input type="checkbox" id="faq4" class="faq-checkbox">
            <label for="faq4" class="faq-question">Where can I find emergency hotline numbers?</label>
            <div class="faq-answer">You can find a list of emergency hotline numbers under the "Hotline Numbers" page for quick access.</div>
        </div>
    </div>
</body>
</html>
