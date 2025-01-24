<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Year Resources</title>
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

    <div class="resources-container">
        <h2 class="tips-title">Tips</h2>
        <div class="tips-grid">
            <div class="tips-card">
                <img src="images/firstyear-tip1.jpg" alt="Tip 1">
                <h3>Productivity Tips</h3>
                <p>Learn effective ways to increase your productivity as a first-year student.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C03puJaMwY1/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C03puJaMwY1/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/firstyear-tip2.jpg" alt="Tip 2">
                <h3>Essentials</h3>
                <p>Discover the essentials you need to know as you start university.</p>
                <a href="https://www.instagram.com/p/C3P5x-hI5kw/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/p/C3P5x-hI5kw/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/firstyear-tip3.jpg" alt="Tip 3">
                <h3>Stress Management</h3>
                <p>Check out methods on dealing with stress.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C3nfCFOIbFu/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C3nfCFOIbFu/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/firstyear-tip4.jpg" alt="Tip 4">
                <h3>Revision Tips</h3>
                <p>As you prepare for your first university exams find out how best to deal with them.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C3YAeQ8oLos/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C3YAeQ8oLos/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/firstyear-tip5.jpg" alt="Tip 5">
                <h3>Starting Your CV</h3>
                <p>As you begin university here are some tips on how to start a CV.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C3Czb4Po8wb/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C3Czb4Po8wb/?img_index=1 -->
            </div>
        </div>

        <h2 class="section-title">Articles</h2>
        <div class="articles-grid">
            <div class="article-card">
                <h3>How to Stay Motivated</h3>
                <p>Read this article to find ways to stay motivated throughout the semester.</p>
                <a href="#" target="_blank">Read Here</a>
            </div>
            <div class="article-card">
                <h3>Healthy Eating for Students</h3>
                <p>Tips on maintaining a healthy diet while managing a busy schedule.</p>
                <a href="#" target="_blank">Read Here</a>
            </div>
        </div>
    </div>
</body>
</html>
