<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    <div class="hero-image">
        <img src="images/index-image.jpg" alt="Student Wellbeing" /> <!-- https://www.celcis.org/knowledge-bank/search-bank/blog/how-students-are-helping-shape-university-led-and-peer-support-students-care-experience -->
    </div>

    <div class="info-boxes">
    <a href="counselling-workshops.php" class="info-box">
        <img src="images/index-appointment.webp" alt="Book Appointment" class="info-box-img"> <!-- https://www.shutterstock.com/image-vector/book-your-appointment-on-calendar-2305316035 -->
        Book Appointment
    </a>
    <a href="hotline.php" class="info-box">
        <img src="images/index-hotline.jpg" alt="Hotline Numbers" class="info-box-img"> <!-- https://www.shutterstock.com/search/hotline-number -->
        Hotline Numbers
    </a>
    <a href="faq.php" class="info-box">
        <img src="images/index-faq.jpg" alt="Frequently Asked Questions" class="info-box-img"> <!-- https://depositphotos.com/vectors/faq.html -->
        Frequently Asked Questions
    </a>
    <a href="events.php" class="info-box">
        <img src="images/index-events.jpg" alt="Upcoming Events" class="info-box-img"> <!-- https://www.vectorstock.com/royalty-free-vectors/upcoming-events-vectors -->
        Upcoming Events
    </a>
</div>


</body>
</html>
