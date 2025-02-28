<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Students Funding</title>
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

    <!-- Links below for information on this page -->
    <!-- https://www.aston.ac.uk/international/scholarships -->

    <h1 class="funding-header">International Students Funding and Scholarships</h1>

    <div class="funding-container">
        
        <h3 class="funding-description">We're investing over £2 million in scholarships to help you achieve your career ambitions here at Aston University.
                                        We have a range of international scholarships to recognise your academic, professional, and personal experience.
                                        To apply for a scholarship, you will need to apply for and receive an offer for an Aston University course first.
                                        Scholarship applications open on key dates throughout the year, and we will share information on how to apply closer to those dates.</h3>
        
        <h2 class="funding-subheader">Scholarships for International Students Completing MSc Degrees (April 2025):</h2>

        <div class="funding-item">
            <input type="checkbox" id="funding1" class="funding-checkbox">
            <label for="funding1" class="funding-question">Automatic Merit Scholarship - £3,000</label>
            <div class="funding-answer">We aim to attract the brightest and best students to our practical, industry relevant degrees. If you achieve the equivalent of a UK upper second class (2:1) degree, you will automatically receive a £3,000 scholarship. There is no need to submit a separate application, your eligibility will be assessed by our admissions team when your application is reviewed.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding2" class="funding-checkbox">
            <label for="funding2" class="funding-question">Sir Adrian Cadbury Chancellor's Scholarship - £7,000</label>
            <div class="funding-answer">Applications for the Sir Adrian Cadbury Chancellor's Scholarship are now open<br><br>
                                        Sir Adrian Cadbury, was a corporate governance pioneer and a champion of education and community engagement, serving as chancellor of Aston University. His commitment to integrity, ethical business practices, and social responsibility permeated his work and left an indelible mark on the corporate landscape.<br><br>
                                        This scholarship recognises Sir Adrian’s values and contributions. As a Civic University we are looking for students who are committed to making a difference, who will take the learning and experience gained on their degree to make a positive impact in their communities internationally.<br><br>
                                        The Sir Adrian Cadbury Chancellor’s Scholarship comprises of a £7,000 fee reduction and exclusive opportunities for networking and self-development, including opportunities to meet VIP business leaders, attend exclusive events with the Vice-Chancellor Professor Aleks Subic and attend games at Aston Villa FC.<br><br>
                                        To be considered for this scholarship you must submit an application in the form of a one minute video, introducing yourself, and explaining why you should be considered for the scholarship.<br><br>

                                        Application method:<br>
                                        - Offer holders will receive an individual scholarship application link by email.<br><br>

                                        Application period:<br>
                                        - 1st November 2024 - 12th January 2025 23:59 (UK time)<br><br>

                                        Result release date:<br>
                                        - No later than week commencing 27th January 2025</div>
        </div><br>
        
        <h2 class="funding-subheader">Scholarships for International Students Completing Either Undergraduate or Postgraduate Degrees (September 2025, January 2026 and April 2026):</h2>
        
        <h2 class="funding-subheader">Undergraduate:</h2>
        
        <div class="funding-item">
            <input type="checkbox" id="funding3" class="funding-checkbox">
            <label for="funding3" class="funding-question">Sir Adrian Cadbury Chancellor's Scholarship - £10,000</label>
            <div class="funding-answer">Applications for the Sir Adrian Cadbury Chancellor's Scholarship will open in January 2025<br><br>
                                        Sir Adrian Cadbury, was a corporate governance pioneer and a champion of education and community engagement, serving as chancellor of Aston University. His commitment to integrity, ethical business practices, and social responsibility permeated his work and left an indelible mark on the corporate landscape.<br><br>
                                        This scholarship recognises Sir Adrian’s values and contributions. As a Civic University we are looking for students who are committed to making a difference, who will take the learning and experience gained on their degree to make a positive impact in their communities internationally.<br><br>
                                        The Sir Adrian Cadbury Chancellor’s Scholarship comprises of a £10,000 fee reduction and exclusive opportunities for networking and self-development, including opportunities to meet VIP business leaders, attend exclusive events with the Vice-Chancellor Professor Aleks Subic and attend games at Aston Villa FC.<br><br>
                                        To be considered for this scholarship you must submit an application in the form of a one minute video, introducing yourself, and explaining why you should be considered for the scholarship.<br><br>

                                        Exclusions: MBChB, Adult Nursing, Mental Health Nursing<br><br>

                                        Application method:<br>
                                        - Offer holders will receive an individual scholarship application link by email.<br><br>

                                        Application period:<br>
                                        - Applications will open in January 2025 and close 31 March 2025<br><br>

                                        Result release date:<br>
                                        - 15th April 2025</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding4" class="funding-checkbox">
            <label for="funding4" class="funding-question">Automatic Merit Scholarship - up to £2,000</label>
            <div class="funding-answer">We aim to attract the brightest and best students to our practical, industry relevant degrees. If you achieve the equivalent to a A*AA, you will automatically receive a £2,000 scholarship. If you achieve the equivalent to AAB, you will automatically receive a £1,000 scholarship. There is no need to submit a separate application, your eligibility will be assessed by our admissions team when your application is reviewed.</div>
        </div><br>

        <h2 class="funding-subheader">Postgraduate:</h2>

        <div class="funding-item">
            <input type="checkbox" id="funding5" class="funding-checkbox">
            <label for="funding5" class="funding-question">Sir Adrian Cadbury Chancellor's Scholarship - £10,000</label>
            <div class="funding-answer">Applications for the Sir Adrian Cadbury Chancellor's Scholarship will open in January 2025<br><br>
                                        Sir Adrian Cadbury, was a corporate governance pioneer and a champion of education and community engagement, serving as chancellor of Aston University. His commitment to integrity, ethical business practices, and social responsibility permeated his work and left an indelible mark on the corporate landscape.<br><br>
                                        This scholarship recognises Sir Adrian’s values and contributions. As a Civic University we are looking for students who are committed to making a difference, who will take the learning and experience gained on their degree to make a positive impact in their communities internationally.<br><br>
                                        The Sir Adrian Cadbury Chancellor’s Scholarship comprises of a £10,000 fee reduction and exclusive opportunities for networking and self-development, including opportunities to meet VIP business leaders, attend exclusive events with the Vice-Chancellor Professor Aleks Subic and attend games at Aston Villa FC.<br><br>
                                        To be considered for this scholarship you must submit an application in the form of a one minute video, introducing yourself, and explaining why you should be considered for the scholarship.<br><br>

                                        Exclusions: MBA, OSPAP and Physician Associate<br><br>

                                        Application method:<br>
                                        - Offer holders will receive an individual scholarship application link by email.<br><br>

                                        Application period:<br>
                                        - Applications will open in January 2025 and close 31 March 2025<br><br>

                                        Result release date:<br>
                                        - 15th April 2025</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding6" class="funding-checkbox">
            <label for="funding6" class="funding-question">Vice-Chancellor's Enterprise Scholarship - up to 100% full fee</label>
            <div class="funding-answer">The Vice-Chancellors Enterprise Scholarship awards one full (100%) and two partial (40%) scholarships for students looking to start their own business when they graduate.<br><br>
                                        Exclusions: OSPAP</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding7" class="funding-checkbox">
            <label for="funding7" class="funding-question">Automatic Merit Scholarship - up to £2,000</label>
            <div class="funding-answer">We aim to attract the brightest and best students to our practical, industry relevant degrees. If you achieve the equivalent of a UK first class degree, you will automatically receive a £2,000 scholarship. If you achieve the equivalent of a UK upper second class (2:1)  degree, you will automatically receive a £1,000 scholarship. There is no need to submit a separate application, your eligibility will be assessed by our admissions team when your application is reviewed.</div>
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