<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonymous Feedback</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Global styles for all pages -->
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
            <li><a href="counselling.php">Counselling</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="journal.php">Journal</a></li>
            <li><a href="goals.php">Goals</a></li>
        </ul>
    </nav>

    <div class="feedback-page">
        <div class="textbox-container">
            <p class="info-text">
                Welcome to the Anonymous Feedback Form. Your responses will help us improve the resources and support offered to students. All feedback is anonymous, and your input will be used to enhance the services we provide. Please feel free to share any thoughts, suggestions, or concerns you may have.
            </p>
        </div>

        <div class="form-container">
            <form action="submit-feedback.php" method="POST">
                <label for="feedback">Your Feedback:</label>
                <textarea id="feedback" name="feedback" rows="5" required></textarea>
                <input type="submit" value="Submit Feedback">
            </form>
        </div>
    </div>
</body>
</html>
