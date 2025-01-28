<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UK Students Funding</title>
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

    <!-- Links below for information on this page -->
    <!-- https://www.aston.ac.uk/undergraduate/your-application/funding -->
    <!-- https://www.aston.ac.uk/current-students/fees-and-finance/undergraduate/home -->

    <h1 class="funding-header">UK Students Funding and Scholarships</h1>

    <div class="funding-container">
    <h2 class="funding-subheader">Explore a variety of funding options to support your academic journey and below are a few frequently asked questions</h2>
        <div class="funding-item">
            <input type="checkbox" id="funding1" class="funding-checkbox">
            <label for="funding1" class="funding-question">What ways can you fund your studies?</label>
            <div class="funding-answer">How you can fund your studies:<br><br>
                                        - Student loan<br>
                                        - Receiving bursaries and scholarships from Aston<br>
                                        - Parental contributions<br>
                                        - Working part-time<br><br>
                                        
                                        Loans<br><br>
                                        There are two types of student loan to help you cover the costs of university. You pay these loans back after you finish your course, when you’re earning over £25,000 per year.<br><br>
                                        Tuition fee loan: available to undergraduate students from the UK, tuition fee loans are paid directly to your university or college by the Government.You can expect to be paid any amount up to the maximum, which equals the cost of fees per year.<br><br>
                                        Maintenance loan: available to full-time undergraduate students from the UK, maintenance loans help pay for living costs such as food, travel, rent, course materials and accommodation. The amount you are awarded is dependent on household income. The maximum loan you can receive is £8,200 per year.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding2" class="funding-checkbox">
            <label for="funding2" class="funding-question">What is student support funding?</label>
            <div class="funding-answer">Student support funding is UK government funding which is available to all full time “home students” to help cover the costs of their studies whilst at University.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding3" class="funding-checkbox">
            <label for="funding3" class="funding-question">What is a home student?</label>
            <div class="funding-answer">The rules about who qualifies as a “home” student, and who can get this type of funding, are very complicated and depend on your nationality, the immigration status of you and your family members and where you have been living. If you are a British national or hold full 'settled' status and have lived in the UK for at least three years before the start of your course, then it is likely you will qualify. If you have any questions about “home” funding status and whether you will qualify then please feel contact one of our advisers in the Student Funding and Advice Team at The Hub on 0121 204 4007.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding4" class="funding-checkbox">
            <label for="funding4" class="funding-question">When should I apply?</label>
            <div class="funding-answer">In order for your student funding to be in place in time for the start of term in September 2024 you must complete your application by:<br><br>
                                        - Returning students: 24 June 2024<br><br>
                                        - New students: 27 May 2024<br><br>
                                        The absolute deadline for existing students to apply for 2024/25 funding is 9 months after the start of the academic year which would be the end of May 2025.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding5" class="funding-checkbox">
            <label for="funding5" class="funding-question">How and when do I have to repay my student loans?</label>
            <div class="funding-answer">You will become liable to repay your student loans in the April after you complete your studies. Your repayments are linked to your income. You only make repayments when your income is over £25,000 a year. If your income drops below this amount, repayments stop. Your repayments are normally collected directly through your wages whilst you are working in the UK by HMRC (the UK tax authority). Interest will be charged on your student loans from when the first payment of the loan is received and continues until the loan has been repaid in full. The interest rate varies as it is linked to inflation and is set in September each year.</div>
        </div><br>

        <h2 class="funding-subheader">Explore a variety of scholarships you may be eligible for:</h2>
        
        <h3 class="funding-description">We offer a range of scholarships to ensure that anyone who is qualified to come to Aston University can do so, regardless of their financial circumstances. We are committed to supporting the most talented and hardworking students to achieve their potential through schemes that help lower tuition and living costs.<br><br>
                                      Students do not need to apply to be considered for a scholarship because Aston University will use UCAS data, household income information provided by the Student Loans Company and information held on University records for placement years, to determine awards. Scholarship entitlement will normally be determined by the 30th November 2025. Students who are eligible for one or more of the Aston Scholarships will receive communications concerning their award/s through My Aston Portal (MAP).</h3>
        
        <h2 class="funding-subheader">Scholarships for UK students are listed below:</h2>

        <div class="funding-item">
            <input type="checkbox" id="funding6" class="funding-checkbox">
            <label for="funding6" class="funding-question">Aston Achievement / Vice Chancellor's Achievement Scholarship</label>
            <div class="funding-answer">Successful applicants will be awarded £500. You will receive either the Aston Achievement OR the Vice Chancellor's Achievement Scholarship.<br><br>
                                        Available to UK students who achieve BBB or above in A-Levels (or particular grades from a list of other qualifications).<br><br>
                                        No application necessary. The University will automatically assess your eligibility using information on your A Level (or other) results provided by UCAS or at enrolment.  The number of Aston Achievement Scholarships is not limited.<br><br>
                                        If you have been selected to receive this scholarship, we will contact you shortly after your place at Aston has been confirmed.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding7" class="funding-checkbox">
            <label for="funding7" class="funding-question">Aston Support Scholarship</label>
            <div class="funding-answer">Successful applicants will be awarded £1,250 every year of their degree, totalling £5,000.<br><br>
                                        Available to UK students classed as care leavers, young carers and estranged students, children from a military family or refugees.<br><br>
                                        No application necessary. The University will automatically assess your eligibility using information on your A Level (or other) results provided by UCAS or at enrolment. The number of Aston Support Scholarships is not limited.<br><br>
                                        If you have been selected to receive this scholarship, we will contact you.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding8" class="funding-checkbox">
            <label for="funding8" class="funding-question">Aston Foward Scholarships</label>
            <div class="funding-answer">Successful applicants will be awarded £1,500 in the first, second and final year of their degree, with an additional £500 in the first year to go towards initial University costs, totalling £5,000.<br><br>
                                        Available to UK students with a household income of less than £25,000, these scholarships will not be awarded on financial need or academic achievements alone. The scholarships will be awarded to students with amazing ambitions; students wanting to create a better world through community activity or business ideas, or to those who have overcome significant barriers to study at Aston.<br><br>
                                        Application necessary. You will be invited to apply once you have completed the pre-enrolment process on My Aston Portal. Applications dates for 2025 are 19th August to 4th October. Any applications received after this date will not be considered. A limited number of Aston Forward Scholarships are available.<br><br>
                                        Aston University must receive your household income assessment, carried out by the Student Loans Company (SLC). We strongly advise you to start this process now.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding9" class="funding-checkbox">
            <label for="funding9" class="funding-question">Aston Placement Scholarship</label>
            <div class="funding-answer">Successful applicants will be awarded £1,250 to support living expenses during their placement year.<br><br>
                                        In order to receive the Placement scholarship, you must have an Approved placement record on MAP at the time of payment, which will be the end of November 2025.<br><br>
                                        Available to UK students with a household income of £42,875 or below, those taking an unpaid placement year, or those undertaking a placement abroad.<br><br>
                                        No application necessary. If you are selected to receive the scholarship, the university will let you know at the start of your placement year or once your placement details have been finalised - you will need to have registered your placement activity for Term 1 by 1st November 2025.<br><br>
                                        For students where the assessment is based on household income, the university will normally make an assessment in year one.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding10" class="funding-checkbox">
            <label for="funding10" class="funding-question">Aston Aspirational Scholarships</label>
            <div class="funding-answer">Available to UK students a household income of up to and including £42,875.<br><br>
                                        Successful applicants will be awarded £500 in year one of their study.<br><br>
                                        No application necessary. The University will automatically assess your eligibility using information provided at enrolment. The number of Aston Aspiration scholarships is not limited.<br><br>
                                        If you have been selected to receive this scholarship, we will contact you shortly after your place at Aston has been confirmed.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding11" class="funding-checkbox">
            <label for="funding11" class="funding-question">Aston Mature Adult Learners Scholarship</label>
            <div class="funding-answer">Successful applicants will be awarded £500 every year of their degree (excluding placement year), totalling £1,500.<br><br>
                                        Available to UK students aged twenty-one or over at the start of your first year of study.<br><br>
                                        No application necessary. The University will automatically assess your eligibility using information on your A Level (or other) results provided by UCAS or at enrolment. The number of Aston Mature Adult Learners Scholarships is not limited.<br><br>
                                        If you have been selected to receive this scholarship, we will contact you shortly after your place at Aston has been confirmed.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding12" class="funding-checkbox">
            <label for="funding12" class="funding-question">Aston Extra Scholarship</label>
            <div class="funding-answer">Successful applicants will be awarded £50 in each year of their study (excluding placement year).<br><br>
                                        Available to UK students who have completed formal enrolment and all associated checks.<br><br>
                                        No application necessary. The University will automatically assess your eligibility using information provided at enrolment. The number of Aston Extra Scholarships is not limited.<br><br>
                                        If you have been selected to receive this scholarship, we will contact you shortly after the start of the academic year.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding13" class="funding-checkbox">
            <label for="funding13" class="funding-question">The Ernest Edward Scholarships for Asylum Seekers</label>
            <div class="funding-answer">Aston University is delighted to offer up to four sanctuary scholarships for students who are seeking refuge in the UK. These scholarships will benefit asylum seekers or those who have been granted a form of limited permission to stay in the UK, following an unsuccessful asylum application, and who are therefore prevented from accessing student finance.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding14" class="funding-checkbox">
            <label for="funding14" class="funding-question">MSc Motorsport Scholarship Programme</label>
            <div class="funding-answer">Aston University is excited to introduce the MSc Motorsport Scholarship Programme, designed exclusively for home students. This initiative presents an exciting chance for aspiring minds to pursue a master's degree in MSc Future Vehicle Technologies.<br><br>
                                        Through this pioneering opportunity, we aim to support and uplift talented individuals from underrepresented backgrounds, promoting diversity and excellence within the dynamic automotive industry.</div>
        </div>
        <div class="funding-item">
            <input type="checkbox" id="funding15" class="funding-checkbox">
            <label for="funding15" class="funding-question">MSc Applied Artificial Intelligence Scholarship</label>
            <div class="funding-answer">Aston University has secured funding from the UK Office For Students to offer scholarships of £10,000 each to students studying the MSc Applied Artificial Intelligence and the MSc Applied Artificial Intelligence (including professional practice)<br><br>
                                        You must be eligible for a UK Masters Loan.<br><br>
                                        These scholarships are for under-represented groups in the field of Data Science and Artificial Intelligence.</div>
        </div>
    </div>
</body>
</html>
