<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second Year Resources</title>
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

    <div class="resources-container">
        <h2 class="tips-title">Tips</h2>
        <div class="tips-grid">
            <div class="tips-card">
                <img src="images/secondyear-tip1.jpg" alt="Tip 1">
                <h3>CV Tips</h3>
                <p>Looking for a placement in your second year. Check out these tips on making your CV stand out.</p>
                <a href="https://www.instagram.com/p/C1oyglxoVlY/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C1oyglxoVlY/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/secondyear-tip2.jpg" alt="Tip 2">
                <h3>Wellness Tips</h3>
                <p>Discover how to increase your wellness during university.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C8XA8wXI2tb/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C8XA8wXI2tb/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/secondyear-tip3.jpg" alt="Tip 3">
                <h3>Mental Health</h3>
                <p>Discover ways to take care of your mental health.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C8EyGVeItoU/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C8EyGVeItoU/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/secondyear-tip4.jpg" alt="Tip 4">
                <h3>Study Technique</h3>
                <p>Try the 2357 technique as you prepare for exam season.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C6drBmdMKYC/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C6drBmdMKYC/?img_index=1 -->
            </div>
            <div class="tips-card">
                <img src="images/secondyear-tip5.jpg" alt="Tip 5">
                <h3>Pros of a Placement Year</h3>
                <p>Check out what's to gain from doing a placement year.</p>
                <a href="https://www.instagram.com/_gensuccess/p/C3SXIPBITxH/?img_index=1" target="_blank">View Here</a> <!-- https://www.instagram.com/_gensuccess/p/C3SXIPBITxH/?img_index=1 -->
            </div>
        </div>

        <h2 class="section-title">Articles</h2>
        <div class="articles-grid">
            <div class="article-card">
                <h3>Preparing For Second Year</h3>
                <p>Read this article to prepare you best for your second year.</p>
                <a href="https://wearehomesforstudents.com/blog/preparing-for-second-year-of-uni-heres-everything-you-should-know" target="_blank">Read Here</a> <!-- https://wearehomesforstudents.com/blog/preparing-for-second-year-of-uni-heres-everything-you-should-know -->
            </div>
            <div class="article-card">
                <h3>Placement Year</h3>
                <p>Learn how a placement year can benefit you.</p>
                <a href="https://www.iqstudentaccommodation.com/articles/everything-you-need-know-about-university-placement-year" target="_blank">Read Here</a> <!-- https://www.iqstudentaccommodation.com/articles/everything-you-need-know-about-university-placement-year -->
            </div>
            <div class="article-card">
                <h3>Revision</h3>
                <p>Find out top tips on revising for exams.</p>
                <a href="https://www.thecompleteuniversityguide.co.uk/student-advice/after-you-start/how-to-revise-for-exams-top-tips" target="_blank">Read Here</a> <!-- https://www.thecompleteuniversityguide.co.uk/student-advice/after-you-start/how-to-revise-for-exams-top-tips -->
            </div>
            <div class="article-card">
                <h3>Accomodation</h3>
                <p>When to start looking for next years accomodation.</p>
                <a href="https://studyinn.com/advice-for-students/when-to-look-for-second-year-student-housing/" target="_blank">Read Here</a> <!-- https://studyinn.com/advice-for-students/when-to-look-for-second-year-student-housing/ -->
            </div>
            <div class="article-card">
                <h3>Wellbeing</h3>
                <p>Check out ways to best support your wellbeing.</p>
                <a href="https://studyinn.com/advice-for-students/student-wellbeing-resources-for-mental-health-study-inn/" target="_blank">Read Here</a> <!-- https://studyinn.com/advice-for-students/student-wellbeing-resources-for-mental-health-study-inn/ -->
            </div>
            <div class="article-card">
                <h3>Useful Websites</h3>
                <p>Check out 26 of the most useful websites for university students.</p>
                <a href="https://studyinn.com/advice-for-students/26-useful-websites-every-university-student-should-know/" target="_blank">Read Here</a> <!-- https://studyinn.com/advice-for-students/26-useful-websites-every-university-student-should-know/ -->
            </div>
        </div>
    </div>
</body>
</html>