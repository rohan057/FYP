<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply For Counselling</title>
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

    <div class="apply-container">
        <h1>Apply for Counselling/Workshops</h1>
        <form action="counselling-workshops.php" method="POST" class="apply-form">
            <div class="form-group">
                <label for="dob">Date of Birth <span>*</span></label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" placeholder="e.g., 123-456-7890">
            </div>

            <div class="form-group">
                <label>Are you currently seeking external professional support? <span>*</span></label>
                <div class="radio-group">
                    <label for="yes">
                        <input type="radio" id="yes" name="external_support" value="yes" required> Yes, I am currently seeing an external counsellor
                    </label>
                    <label for="no">
                        <input type="radio" id="no" name="external_support" value="no"> No
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="contact_method">What are your preferred method(s) of contact?</label>
                <div class="checkbox-group">
                    <label for="face_to_face">
                        <input type="checkbox" id="face_to_face" name="contact_method" value="face_to_face"> Face to Face
                    </label>
                    <label for="online_meeting">
                        <input type="checkbox" id="online_meeting" name="contact_method" value="online_meeting"> Online Meeting
                    </label>
                    <label for="telephone">
                        <input type="checkbox" id="telephone" name="contact_method" value="telephone"> Telephone
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="availability">When would you be available?</label>
                <div class="availability-group">
                    <label for="monday">Mondays:</label>
                    <input type="checkbox" id="monday_am" name="availability[monday]" value="AM"> AM
                    <input type="checkbox" id="monday_pm" name="availability[monday]" value="PM"> PM
                    <input type="checkbox" id="monday_all_day" name="availability[monday]" value="All Day"> All Day
                </div>
                <div class="availability-group">
                    <label for="tuesday">Tuesdays:</label>
                    <input type="checkbox" id="tuesday_am" name="availability[tuesday]" value="AM"> AM
                    <input type="checkbox" id="tuesday_pm" name="availability[tuesday]" value="PM"> PM
                    <input type="checkbox" id="tuesday_all_day" name="availability[tuesday]" value="All Day"> All Day
                </div>
                <div class="availability-group">
                    <label for="wednesday">Wednesdays:</label>
                    <input type="checkbox" id="wednesday_am" name="availability[wednesday]" value="AM"> AM
                    <input type="checkbox" id="wednesday_pm" name="availability[wednesday]" value="PM"> PM
                    <input type="checkbox" id="wednesday_all_day" name="availability[wednesday]" value="All Day"> All Day
                </div>
                <div class="availability-group">
                    <label for="thursday">Thursdays:</label>
                    <input type="checkbox" id="thursday_am" name="availability[thursday]" value="AM"> AM
                    <input type="checkbox" id="thursday_pm" name="availability[thursday]" value="PM"> PM
                    <input type="checkbox" id="thursday_all_day" name="availability[thursday]" value="All Day"> All Day
                </div>
                <div class="availability-group">
                    <label for="friday">Fridays:</label>
                    <input type="checkbox" id="friday_am" name="availability[friday]" value="AM"> AM
                    <input type="checkbox" id="friday_pm" name="availability[friday]" value="PM"> PM
                    <input type="checkbox" id="friday_all_day" name="availability[friday]" value="All Day"> All Day
                </div>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
