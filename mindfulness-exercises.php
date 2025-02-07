<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindfulness Exercises</title>
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
    
    <div class="mindfulness-container">
        <h1 class="mindfulness-title">Mindfulness Exercises</h1>
        <div class="mindfulness-grid">
            <div class="mindfulness-card">
                <h3>Mindful Eating</h3>
                <p>Discover the practice of mindful eating to enhance your relationship with food, focusing on the present moment and improving digestion and overall well-being.</p>
                <a href="pdfs/mindful_eating.pdf" class="download-btn" download>Download PDF</a> <!-- https://www.headspace.com/mindfulness/mindful-eating?origin=mindfulness-cat -->
            </div>
            <div class="mindfulness-card">
                <h3>Everyday Mindfulness</h3>
                <p>Learn simple mindfulness techniques that can be incorporated into daily life to reduce stress, increase focus, and promote emotional well-being.</p>
                <a href="pdfs/mindfulness_everyday.pdf" class="download-btn" download>Download PDF</a> <!-- https://www.headspace.com/articles/5-ways-to-get-mindfulness-into-your-everyday-life?origin=navigation -->
            </div>
            <div class="mindfulness-card">
                <h3>Mindfulness Meditation</h3>
                <p>Explore mindfulness meditation practices to calm the mind, reduce stress, and cultivate a deeper sense of awareness and peace.</p>
                <a href="pdfs/mindfulness_meditation.pdf" class="download-btn" download>Download PDF</a> <!-- https://www.headspace.com/meditation/exercises?origin=navigation -->
            </div>
            <div class="mindfulness-card">
                <h3>Stress</h3>
                <p>Understand the causes and effects of stress and learn practical strategies to manage and reduce stress for a healthier lifestyle.</p>
                <a href="pdfs/stress.pdf" class="download-btn" download>Download PDF</a> <!-- https://www.headspace.com/stress/stress-101?origin=navigation -->
            </div>
            <div class="mindfulness-card">
                <h3>Reduce Anxiety</h3>
                <p>Learn effective techniques to reduce anxiety, including mindful breathing and relaxation exercises, to help you regain control and calm your mind.</p>
                <a href="pdfs/anxiety.pdf" class="download-btn" download>Download PDF</a> <!-- https://www.headspace.com/articles/how-to-reduce-anxiety?origin=navigation -->
            </div>
            <div class="mindfulness-card">
                <h3>Mindful Exercise</h3>
                <p>Discover how to incorporate mindfulness into your exercise routine to improve focus, enhance performance, and create a more enjoyable workout experience.</p>
                <a href="pdfs/mindful_exercise.pdf" class="download-btn" download>Download PDF</a> <!-- https://www.headspace.com/articles/5-components-of-mindful-exercise?origin=navigation -->
            </div>
        </div>
    </div>

</body>
</html>
