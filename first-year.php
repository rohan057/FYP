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
                <h3>What to Expect In Your First Year of Univeristy</h3>
                <p>Read this article to best prepare yourself as you start university life.</p>
                <a href="https://www.thecompleteuniversityguide.co.uk/student-advice/after-you-start/what-to-expect-in-your-first-year-of-university" target="_blank">Read Here</a> <!-- https://www.thecompleteuniversityguide.co.uk/student-advice/after-you-start/what-to-expect-in-your-first-year-of-university -->
            </div>
            <div class="article-card">
                <h3>Healthy Eating for Students</h3>
                <p>Tips on maintaining a healthy diet while at university.</p>
                <a href="https://www.nutrition.org.uk/nutrition-for/students/" target="_blank">Read Here</a> <!-- https://www.nutrition.org.uk/nutrition-for/students/ -->
            </div>
            <div class="article-card">
                <h3>Improve Your Mental Wellbeing</h3>
                <p>Check out ways you can spend 20 minutes in nature to improve your mental health.</p>
                <a href="https://www.wwf.org.uk/prescription-for-nature?utm_source=Google-Generic&utm_medium=PaidSearch-Generic&pc=AWS014003&gad_source=1&gclid=EAIaIQobChMIp9CBjteOiwMVHJJQBh0epjXFEAMYAiAAEgJ1DPD_BwE&gclsrc=aw.ds" target="_blank">Read Here</a> <!-- https://www.wwf.org.uk/prescription-for-nature?utm_source=Google-Generic&utm_medium=PaidSearch-Generic&pc=AWS014003&gad_source=1&gclid=EAIaIQobChMIp9CBjteOiwMVHJJQBh0epjXFEAMYAiAAEgJ1DPD_BwE&gclsrc=aw.ds -->
            </div>
            <div class="article-card">
                <h3>How To Reference</h3>
                <p>As you start university you will be required to reference in your assignments, make sure you don't get caught out.</p>
                <a href="https://slainte.blog/2019/09/07/help-with-harvard-referencing-for-university-students/" target="_blank">Read Here</a> <!-- https://slainte.blog/2019/09/07/help-with-harvard-referencing-for-university-students/ -->
            </div>
            <div class="article-card">
                <h3>Revision Techniques</h3>
                <p>Find out which technique suits you best.</p>
                <a href="https://www.ucas.com/connect/blogs/revision-techniques" target="_blank">Read Here</a> <!-- https://www.ucas.com/connect/blogs/revision-techniques -->
            </div>
            <div class="article-card">
                <h3>Managing Finances</h3>
                <p>Learn how to manage your finances properly.</p>
                <a href="https://www.ucas.com/money-and-student-life/money/budgeting" target="_blank">Read Here</a> <!-- https://www.ucas.com/money-and-student-life/money/budgeting -->
            </div>
        </div>
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
