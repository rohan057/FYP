<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Feedback</title>
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
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

    <div class="feedback-page">
    <h1>Anonymous Feedback</h1>
        <div class="textbox-container">
            <p class="info-text">
                Welcome to the Anonymous Feedback Form. Your responses will help us improve the resources and support offered to students. All feedback is anonymous, and your input will be used to enhance the services we provide. Please feel free to share any thoughts, suggestions, or concerns you may have.
            </p>
        </div>

        <div class="form-container">
            <form id="feedback-form">
                <label for="feedback">Your Feedback:</label>
                <textarea id="feedback" name="feedback" rows="5" required></textarea>
                <input type="submit" value="Submit Feedback">
            </form>
        </div>
    </div>

    <script type="text/javascript">
        (function() {
            emailjs.init("-a7UR2xJyP_IEy_ok");
        })();

        document.getElementById("feedback-form").addEventListener("submit", function(event) {
            event.preventDefault();

            const formData = new FormData(event.target);

            emailjs.sendForm("service_zr8tb7a", "template_0h2gdjs", document.getElementById("feedback-form"))
                .then(function(response) {
                    console.log("Success:", response);
                    alert("Your feedback has been sent!");
                })
                .catch(function(error) {
                    console.error("Error:", error);
                    alert("There was an error sending your feedback. Please try again.");
                });
        });
    </script>

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
