<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Resources</title>
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
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

    <div class="request-resources-page">
        <h1>Request Resources</h1>
        <div class="container">
            <div class="form-container">
                <form id="resources-form">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>

                    <label for="contact-info">Your Contact Information:</label>
                    <input type="text" id="contact-info" name="contact_info" placeholder="Enter your email or phone number" required>

                    <label for="primary-goal">What is your primary goal for seeking support?</label>
                    <select id="primary-goal" name="primary_goal" required>
                        <option value="">Select an option</option>
                        <option value="Improve academic performance">Improve academic performance</option>
                        <option value="Reduce stress and anxiety">Reduce stress and anxiety</option>
                        <option value="Build healthy habits">Build healthy habits</option>
                        <option value="Improve time management">Improve time management</option>
                        <option value="Connect with peers">Connect with peers</option>
                        <option value="Other">Other</option>
                    </select>

                    <label for="current-resources">Have you used any resources before?</label>
                    <select id="current-resources" name="current_resources" required>
                        <option value="">Select an option</option>
                        <option value="University provided resources">University provided resources</option>
                        <option value="External resources">External resources</option>
                        <option value="First time seeking resources">First time seeking resources</option>
                        <option value="Other">Other</option>
                    </select>

                    <label for="communication-method">Preferred communication method:</label>
                    <select id="communication-method" name="communication_method" required>
                        <option value="">Select an option</option>
                        <option value="Email">Email</option>
                        <option value="Phone">Phone</option>
                    </select>

                    <label for="availability">When are you most available to be contacted?</label>
                    <select id="availability" name="availability" required>
                        <option value="">Select an option</option>
                        <option value="Weekdays (morning)">Weekdays (morning)</option>
                        <option value="Weekdays (afternoon)">Weekdays (afternoon)</option>
                        <option value="Weekdays (evening)">Weekdays (evening)</option>
                        <option value="Weekends">Weekends</option>
                        <option value="Flexible">Flexible</option>
                    </select>

                    <label for="specific-issues">What areas do you need support with?</label>
                    <select id="specific-issues" name="specific_issues[]" required>
                        <option value="">Select an option</option>
                        <option value="Financial aid and scholarships">Financial aid and scholarships</option>
                        <option value="Finding study groups or mentors">Finding study groups or mentors</option>
                        <option value="Access to healthy meals or exercise programs">Access to healthy meals or exercise programs</option>
                        <option value="Mental health support">Mental health support</option>
                        <option value="Time management or productivity tools">Time management or productivity tools</option>
                        <option value="Other">Other</option>
                    </select>

                    <label for="urgency">How urgently do you need help?</label>
                    <select id="urgency" name="urgency" required>
                        <option value="">Select an option</option>
                        <option value="Immediately">Immediately</option>
                        <option value="Within the next few days">Within the next few days</option>
                        <option value="Within the next month">Within the next month</option>
                        <option value="Not urgent, just exploring options">Not urgent, just exploring options</option>
                    </select>

                    <label for="additional-info">Additional Information:</label>
                    <input type="text" id="additional-info" name="additional_info" placeholder="Enter any further details">

                    <input type="submit" value="Submit">
                </form>
            </div>

            <div class="textbox-container">
                <div class="info-text">
                    <p>
                        Fill out this form to let us know about your needs, challenges, and preferences. 
                        Based on your responses, we will recommend tailored resources to support you. 
                        Your information will remain confidential, and our team will follow up promptly.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        (function() {
            emailjs.init("-a7UR2xJyP_IEy_ok");
        })();

        document.getElementById("resources-form").addEventListener("submit", function(event) {
            event.preventDefault();

            const formData = new FormData(event.target);

            emailjs.sendForm("service_zr8tb7a", "template_1xmhyx8", document.getElementById("resources-form"))
                .then(function(response) {
                    console.log("Success:", response);
                    alert("Your request has been sent!");
                })
                .catch(function(error) {
                    console.error("Error:", error);
                    alert("There was an error sending your request. Please try again.");
                });
        });
    </script>
</body>
</html>
