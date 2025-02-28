<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotline Numbers</title>
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
    <h1 class="hotline-header">Hotline Numbers</h1>
    <table class="hotline-table">
        <tr>
            <th>Type of Emergency</th>
            <th>Number/Website</th>
        </tr>
        <tr>
            <td>Campus Safety</td>
            <td>0121 359 2922</td> <!-- https://www.aston.ac.uk/current-students/health-and-wellbeing/mental-health-wellbeing -->
        </tr>
        <tr>
            <td>Local Emergency Services</td>
            <td>999</td>
        </tr>
        <tr>
            <td>Suicide Prevention</td>
            <td><a href="https://sossilenceofsuicide.org/">0808 115 1505</a></td>
        </tr>
        <tr>
            <td>Domestic Violence</td>
            <td><a href="https://www.nationaldahelpline.org.uk/">0808 2000 247</a></td>
        </tr>
        <tr>
            <td>Mental Health Support (Samaritans)</td>
            <td><a href="https://www.samaritans.org/">116 123</a></td>
        </tr>
        <tr>
            <td>Mental Health Support (Student Minds)</td>
            <td><a href="https://studentspace.org.uk/support-services/text-message-support">Text 'SHOUT' To 85258</a></td>
        </tr>
        <tr>
            <td>Financial Advice (MoneyHelper)</td>
            <td>0800 138 7777</td>
        </tr>
        <tr>
            <td>Citizens Advice (England Adviceline)</td>
            <td><a href="https://www.citizensadvice.org.uk/">0800 144 8848</a></td>
        </tr>
        <tr>
            <td>National Careers Service</td>
            <td><a href="https://nationalcareers.service.gov.uk/">0800 100 900</a></td>
        </tr>
        <tr>
            <td>Alcohol and Drugs (FRANK)</td>
            <td><a href="https://www.talktofrank.com/">0300 123 6600</a></td>
        </tr>
        <tr>
            <td>Learning Disabilities (Mencap)</td>
            <td><a href="https://www.mencap.org.uk/">0808 808 1111</a></td>
        </tr>
    </table>
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
