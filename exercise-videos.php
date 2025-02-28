<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Videos</title>
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

    <h1 class="exercisevideo-title">Exercise Videos</h1>

    <h3 class="filter-header">Select one or more options to filter the exercise videos.</h3>

    <div id="filters">
        <label><input type="checkbox" value="beginner"> Beginner</label>
        <label><input type="checkbox" value="intermediate"> Intermediate</label>
        <label><input type="checkbox" value="advanced"> Advanced</label>
        <label><input type="checkbox" value="full-body"> Full Body</label>
        <label><input type="checkbox" value="abs"> Abs</label>
        <label><input type="checkbox" value="legs"> Legs</label>
        <label><input type="checkbox" value="cardio"> Cardio</label>
        <label><input type="checkbox" value="chest"> Chest</label>
        <label><input type="checkbox" value="biceps"> Biceps</label>
        <label><input type="checkbox" value="triceps"> Triceps</label>
        <label><input type="checkbox" value="shoulders"> Shoulders</label>
        <label><input type="checkbox" value="back"> Back</label>
        <label><input type="checkbox" value="pilates"> Pilates</label>
        <label><input type="checkbox" value="calisthenics"> Calisthenics</label>
        <label><input type="checkbox" value="yoga"> Yoga</label>
        <label><input type="checkbox" value="core"> Core</label>
        <label><input type="checkbox" value="low-intensity"> Low Intensity</label>
        <label><input type="checkbox" value="moderate-intensity"> Moderate Intensity</label>
        <label><input type="checkbox" value="high-intensity"> High Intensity</label>
        <label><input type="checkbox" value="HIIT"> HIIT</label>
        <label><input type="checkbox" value="stress"> Stress</label>
        <label><input type="checkbox" value="anxiety"> Anxiety</label>
        <label><input type="checkbox" value="depression"> Depression</label>
    </div>

    <div class="video-container">
        <div class="video-grid">
            <div class="video-item" data-tags="beginner, full-body, low-intensity, strength">
                <h3>Home Workout For Beginners</h3>
                <iframe src="https://www.youtube.com/embed/2fCKd-BQOhw" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=2fCKd-BQOhw -->
            </div>
            <div class="video-item" data-tags="beginner, full-body, low-intensity, strength">
                <h3>Full Body Beginner Workout</h3>
                <iframe src="https://www.youtube.com/embed/Oe5CDt3dp8Q" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=Oe5CDt3dp8Q -->
            </div>
            <div class="video-item" data-tags="beginner, full-body, moderate-intensity, strength">
                <h3>Full Body Home Workout</h3>
                <iframe src="https://www.youtube.com/embed/zh1Kq3Qv-2U" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=zh1Kq3Qv-2U -->
            </div>
            <div class="video-item" data-tags="beginner, abs, core, low-intensity">
                <h3>ABS For Beginners</h3>
                <iframe src="https://www.youtube.com/embed/3p8EBPVZ2Iw" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=3p8EBPVZ2Iw -->
            </div>
            <div class="video-item" data-tags="beginner, legs, strength, low-intensity">
                <h3>Home Leg Workout</h3>
                <iframe src="https://www.youtube.com/embed/q7rCeOa_m58" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=q7rCeOa_m58 -->
            </div>
            <div class="video-item" data-tags="beginner, full-body, cardio, moderate-intensity">
                <h3>Full Body Cardio Workout</h3>
                <iframe src="https://www.youtube.com/embed/79cx5vmf3Qg" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=79cx5vmf3Qg -->
            </div>
            <div class="video-item" data-tags="beginner, chest, strength, moderate-intensity">
                <h3>Home Chest Workout</h3>
                <iframe src="https://www.youtube.com/embed/BkS1-El_WlE" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=BkS1-El_WlE -->
            </div>
            <div class="video-item" data-tags="intermediate, biceps, triceps, shoulders, strength, moderate-intensity">
                <h3>Biceps, Triceps and Shoulders</h3>
                <iframe src="https://www.youtube.com/embed/M42-2wgRWkA" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=M42-2wgRWkA -->
            </div>
            <div class="video-item" data-tags="beginner, arms, biceps, triceps, strength, low-intensity">
                <h3>Beginners Arm Workout</h3>
                <iframe src="https://www.youtube.com/embed/J1-SDv_kwiY" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=J1-SDv_kwiY -->
            </div>
            <div class="video-item" data-tags="beginner, back, strength, low-intensity">
                <h3>Home Back Workout</h3>
                <iframe src="https://www.youtube.com/embed/QqZV3JEoOlc" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=QqZV3JEoOlc -->
            </div>
            <div class="video-item" data-tags="beginner, pilates, low-intensity">
                <h3>Pilates Workout</h3>
                <iframe src="https://www.youtube.com/embed/C2HX2pNbUCM" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=C2HX2pNbUCM -->
            </div>
            <div class="video-item" data-tags="beginner, calisthenics">
                <h3>Beginner Calisthenics Workout</h3>
                <iframe src="https://www.youtube.com/embed/kuUZYUBHryw" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=kuUZYUBHryw -->
            </div>
            <div class="video-item" data-tags="HIIT, cardio, high-intensity">
                <h3>HIIT/Cardio Workout</h3>
                <iframe src="https://www.youtube.com/embed/edIK5SZYMZo" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=edIK5SZYMZo -->
            </div>
            <div class="video-item" data-tags="yoga, beginner">
                <h3>Yoga For Beginners</h3>
                <iframe src="https://www.youtube.com/embed/T41mYCmtWls" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=T41mYCmtWls -->
            </div>
            <div class="video-item" data-tags="yoga, beginner">
                <h3>Gentle Yoga For Beginners</h3>
                <iframe src="https://www.youtube.com/embed/3X0hEHop8ec" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=3X0hEHop8ec -->
            </div>
            <div class="video-item" data-tags="yoga, full-body">
                <h3>Full Body Yoga</h3>
                <iframe src="https://www.youtube.com/embed/Eml2xnoLpYE" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=Eml2xnoLpYE -->
            </div>
            <div class="video-item" data-tags="core, abs, strength">
                <h3>Core Workout</h3>
                <iframe src="https://www.youtube.com/embed/stuPkzWMdIg" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=stuPkzWMdIg -->
            </div>
            <div class="video-item" data-tags="shoulders, strength">
                <h3>Shoulder Workout</h3>
                <iframe src="https://www.youtube.com/embed/jBPdbt0Fxb4" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=jBPdbt0Fxb4 -->
            </div>
            <div class="video-item" data-tags="HIIT, cardio, high-intensity, full-body">
                <h3>HIIT Workout</h3>
                <iframe src="https://www.youtube.com/embed/g3CiXrjJ7cs" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=g3CiXrjJ7cs -->
            </div>
            <div class="video-item" data-tags="legs, strength">
                <h3>Lower Body Workout</h3>
                <iframe src="https://www.youtube.com/embed/6atz9eroPBs" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=6atz9eroPBs -->
            </div>
            <div class="video-item" data-tags="depression">
                <h3>Yoga For Depression</h3>
                <iframe src="https://www.youtube.com/embed/Sxddnugwu-8" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=Sxddnugwu-8 -->
            </div>
            <div class="video-item" data-tags="stress">
                <h3>Stress Relief Exercises</h3>
                <iframe src="https://www.youtube.com/embed/tYddPTEfS_8" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=tYddPTEfS_8 -->
            </div>
            <div class="video-item" data-tags="anxiety">
                <h3>Yoga For Anxiety</h3>
                <iframe src="https://www.youtube.com/embed/bJJWArRfKa0" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=bJJWArRfKa0 -->
            </div>
            <div class="video-item" data-tags="anxiety">
                <h3>Anxiety Release Workout</h3>
                <iframe src="https://www.youtube.com/embed/0X6qRWrnIEE" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=0X6qRWrnIEE -->
            </div>
            <div class="video-item" data-tags="anxiety, stress">
                <h3>Stretches For Anxiety & Stress</h3>
                <iframe src="https://www.youtube.com/embed/yqeirBfn2j4" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=yqeirBfn2j4 -->
            </div>
            <div class="video-item" data-tags="anxiety">
                <h3>Yoga For Panic and Anxiety</h3>
                <iframe src="https://www.youtube.com/embed/8Lg4EzektCw" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=8Lg4EzektCw -->
            </div>
            <div class="video-item" data-tags="stress, anxiety">
                <h3>Workout For Stress and Anxiety</h3>
                <iframe src="https://www.youtube.com/embed/ah4PAK18Rtg" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=ah4PAK18Rtg -->
            </div>
            <div class="video-item" data-tags="anxiety, stress">
                <h3>Yoga For Anxiety and Stress</h3>
                <iframe src="https://www.youtube.com/embed/hJbRpHZr_d0" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=hJbRpHZr_d0 -->
            </div>
        </div>
    </div>

    <script>
    document.querySelectorAll("#filters input").forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            let selectedTags = Array.from(document.querySelectorAll("#filters input:checked"))
                                    .map(input => input.value);

            let exerciseVideos = document.querySelectorAll(".video-item");
            exerciseVideos.forEach(exerciseVideo => {
                let exerciseVideoTags = exerciseVideo.getAttribute("data-tags").split(", ").map(tag => tag.trim());

                let matches = selectedTags.every(tag => exerciseVideoTags.includes(tag));

                if (matches) {
                    exerciseVideo.style.display = "block";
                } else {
                    exerciseVideo.style.display = "none";
                }
            });
        });
    });
</script>

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
