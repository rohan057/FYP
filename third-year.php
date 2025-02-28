<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Third Year Resources</title>
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
                <img src="images/thirdyear-tip1.jpg" alt="Tip 1">
                <h3>Assessment Centre Tips</h3>
                <p>Learn ways to best prepare for assessment centres as you apply for graduate jobs.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C5DxhL-IKtX/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C5DxhL-IKtX/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/thirdyear-tip2.jpg" alt="Tip 2">
                <h3>Surviving Exam Season</h3>
                <p>Check out the best tips for surviving exam season as you look to achieve a top degree.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C0wI_CMIMd2/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C0wI_CMIMd2/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/thirdyear-tip3.jpg" alt="Tip 3">
                <h3>Interview Tips</h3>
                <p>Have you been invited for a second interview, follow these tips to seal the deal.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C86nr5AI3fd/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C86nr5AI3fd/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/thirdyear-tip4.jpg" alt="Tip 4">
                <h3>Job Interviews</h3>
                <p>As you apply for graduate roles look at some tips to make a good first impression.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C8mP_qAIegf/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C8mP_qAIegf/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/thirdyear-tip5.jpg" alt="Tip 5">
                <h3>CVs</h3>
                <p>Looking for that dream role check out these tips on what makes a CV stand out.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C8UObWsoL0_/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C8UObWsoL0_/?img_index=1 -->
            </div>
        </div>

        <h2 class="section-title">Articles</h2>
        <div class="articles-grid">
            <div class="article-card">
                <h3>Surviving Final Year</h3>
                <p>Read these tips for getting through your final year.</p>
                <a href="https://brighterbox.com/blog/article/8-tips-surviving-your-final-year-uni" target="_blank">Read Here</a> <!-- https://brighterbox.com/blog/article/8-tips-surviving-your-final-year-uni -->
            </div>
            <div class="article-card">
                <h3>Exam Season Tips</h3>
                <p>Hear from a final year student on how to combat exam season.</p>
                <a href="https://www.soas.ac.uk/about/blogs/tips-final-year-student-how-i-cope-exam-season" target="_blank">Read Here</a> <!-- https://www.soas.ac.uk/about/blogs/tips-final-year-student-how-i-cope-exam-season -->
            </div>
            <div class="article-card">
                <h3>Land Your Dream Job</h3>
                <p>Tips on how to land that dream job.</p>
                <a href="https://www.adzuna.co.uk/blog/14-tips-for-final-year-students-to-land-the-dream-job/" target="_blank">Read Here</a> <!-- https://www.adzuna.co.uk/blog/14-tips-for-final-year-students-to-land-the-dream-job/ -->
            </div>
            <div class="article-card">
                <h3>Job Interviews</h3>
                <p>Check out the top tips on acing job interviews.</p>
                <a href="https://www.ucas.com/advisers/guides-and-resources/adviser-news/news/acing-job-interviews-top-tips-students" target="_blank">Read Here</a> <!-- https://www.ucas.com/advisers/guides-and-resources/adviser-news/news/acing-job-interviews-top-tips-students -->
            </div>
            <div class="article-card">
                <h3>Life After University</h3>
                <p>Check out this graduate guide on life after university.</p>
                <a href="https://brighterbox.com/blog/article/life-after-university-graduate-survival-guide" target="_blank">Read Here</a> <!-- https://brighterbox.com/blog/article/life-after-university-graduate-survival-guide -->
            </div>
            <div class="article-card">
                <h3>Dissertation Advice</h3>
                <p>Read this for some advice on how to tackle your final year dissertation.</p>
                <a href="https://medium.com/@Kayleigh_Marks/dissertation-advice-from-a-final-year-student-7470b06686bd" target="_blank">Read Here</a> <!-- https://medium.com/@Kayleigh_Marks/dissertation-advice-from-a-final-year-student-7470b06686bd -->
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