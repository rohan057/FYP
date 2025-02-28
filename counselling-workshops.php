<?php
session_start();

$host = 'localhost';
$dbname = 'fyp';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); //https://www.w3schools.com/php/php_mysql_connect.asp
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dob = $_POST['dob'];
    $phone = $_POST['phone'] ?? null;
    $external_support = $_POST['external_support'];
    $contact_methods = isset($_POST['contact_method']) ? implode(', ', $_POST['contact_method']) : null;
    $availability = isset($_POST['availability']) ? json_encode($_POST['availability']) : null;

    try {
        $query = "INSERT INTO bookings (dob, phone, external_support, contact_method, availability) 
                  VALUES (:dob, :phone, :external_support, :contact_method, :availability)";
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':external_support', $external_support);
        $stmt->bindParam(':contact_method', $contact_methods);
        $stmt->bindParam(':availability', $availability);

        if ($stmt->execute()) {
            $success_message = "Booking request submitted successfully.";
        } else {
            $error_message = "Failed to submit the booking request. Please try again.";
        }
    } catch (PDOException $e) {
        $error_message = "Error: " . $e->getMessage();
    }
}
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

    <div class="apply-container">
        <h1>Book a Counselling Appointment</h1>

        <?php if (isset($success_message)): ?>
            <p class="success"><?php echo $success_message; ?></p>
        <?php elseif (isset($error_message)): ?>
            <p class="error"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form action="counselling-workshops.php" method="POST" class="apply-form">
            <div class="form-group">
                <label for="dob">Date of Birth <span>*</span></label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required placeholder="e.g., 123-456-7890">
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
                    <label>
                        <input type="checkbox" name="contact_method[]" value="Face to Face"> Face to Face
                    </label>
                    <label>
                        <input type="checkbox" name="contact_method[]" value="Online Meeting"> Online Meeting
                    </label>
                    <label>
                        <input type="checkbox" name="contact_method[]" value="Telephone"> Telephone
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="availability">When would you be available?</label>
                <div class="availability-group">
                    <?php 
                    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];
                    foreach ($days as $day): ?>
                        <div class="day-group">
                            <strong><?php echo $day; ?>:</strong>
                            <label>
                                <input type="checkbox" name="availability[<?php echo strtolower($day); ?>][]" value="AM"> AM
                            </label>
                            <label>
                                <input type="checkbox" name="availability[<?php echo strtolower($day); ?>][]" value="PM"> PM
                            </label>
                            <label>
                                <input type="checkbox" name="availability[<?php echo strtolower($day); ?>][]" value="All Day"> All Day
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <button type="submit">Submit</button>
        </form>
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
