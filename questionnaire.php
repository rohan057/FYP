<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Resources</title>
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
            <li><a href="login.php">Login</a></li>
            <li><a href="journal.php">Journal</a></li>
            <li><a href="goals.php">Goals</a></li>
        </ul>
    </nav>

    <div class="request-resources-page">
        <div class="container">
            <div class="form-container">
                <form action="submit_resources.php" method="POST">
                    <label for="resource-request">Request Resources:</label>
                    <input type="text" id="resource-request" name="resource-request" placeholder="Enter your request">
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="textbox-container">
                <div class="info-text">
                    <p>
                        Write info here about what the form is for and what happens and where it gets sent to and the process
                        to get you the necessary resources.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
