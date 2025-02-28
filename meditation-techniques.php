<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meditation Techniques</title>
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

    <h1 class="meditation-title">Meditation Techniques</h1>

    <h3 class="filter-header">Select one or more options to filter the meditation techniques.</h3>

    <div id="filters">
        <label><input type="checkbox" value="loving-kindness"> Loving-Kindness</label>
        <label><input type="checkbox" value="progressive-muscle-relaxation"> Progressive Muscle Relaxation</label>
        <label><input type="checkbox" value="mindfulness-stress-reduction"> Mindfulness Stress Reduction</label>
        <label><input type="checkbox" value="visualisation"> Visualisation</label>
        <label><input type="checkbox" value="mindfulness"> Mindfulness</label>
        <label><input type="checkbox" value="breathing"> Breathing</label>
        <label><input type="checkbox" value="om-mantra"> OM Mantra</label>
        <label><input type="checkbox" value="guided"> Guided</label>
        <label><input type="checkbox" value="body-scan"> Body Scan</label>
        <label><input type="checkbox" value="walking"> Walking</label>
        <label><input type="checkbox" value="zen"> ZEN</label>
        <label><input type="checkbox" value="vipassana"> Vipassana</label>
        <label><input type="checkbox" value="short"> Short (less than 10 mins)</label>
        <label><input type="checkbox" value="medium"> Medium (10-20 mins)</label>
        <label><input type="checkbox" value="long"> Long (20+ mins)</label>
        <label><input type="checkbox" value="stress-relief"> Stress Relief</label>
        <label><input type="checkbox" value="relaxation"> Relaxation</label>
        <label><input type="checkbox" value="body-awareness"> Body Awareness</label>
        <label><input type="checkbox" value="depression"> Depression</label>
        <label><input type="checkbox" value="anxiety"> Anxiety</label>
        <label><input type="checkbox" value="fatigue"> Fatigue</label>
        <label><input type="checkbox" value="burnout"> Burnout</label>
    </div>

    <div class="techniques-container">
        <div class="technique-grid">
            <div class="technique-item" data-tags="loving-kindness, guided, stress-relief, relaxation, mindfulness, medium">
                <h3>Loving-Kindness Meditation</h3>
                <iframe src="https://www.youtube.com/embed/-d_AA9H4z9U" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=-d_AA9H4z9U -->
            </div>
            <div class="technique-item" data-tags="progressive-muscle-relaxation, relaxation, guided, stress-relief, medium">
                <h3>Progressive Muscle Relaxation</h3>
                <iframe src="https://www.youtube.com/embed/_1h-zizAGsc" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=_1h-zizAGsc -->
            </div>
            <div class="technique-item" data-tags="mindfulness-stress-reduction, mindfulness, relaxation, stress-relief, guided, medium">
                <h3>Mindfulness Stress Reduction</h3>
                <iframe src="https://www.youtube.com/embed/507zwibbfRs" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=507zwibbfRs -->
            </div>
            <div class="technique-item" data-tags="visualisation, mindfulness, relaxation, stress-relief, guided, medium">
                <h3>Visualisation Meditation</h3>
                <iframe src="https://www.youtube.com/embed/NVPrxcR_RZI" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=NVPrxcR_RZI -->
            </div>
            <div class="technique-item" data-tags="mindfulness, Meditation, relaxation, stress-relief, guided, body-awareness, medium">
                <h3>Mindfulness Meditation</h3>
                <iframe src="https://www.youtube.com/embed/ZToicYcHIOU" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=ZToicYcHIOU -->
            </div>
            <div class="technique-item" data-tags="breathing, meditation, relaxation, stress-relief, mindfulness, guided, short">
                <h3>Breathing Meditation</h3>
                <iframe src="https://www.youtube.com/embed/YFSc7Ck0Ao0" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=YFSc7Ck0Ao0 -->
            </div>
            <div class="technique-item" data-tags="om-mantra, meditation, relaxation, mindfulness, guided, medium">
                <h3>OM Mantra Meditation</h3>
                <iframe src="https://www.youtube.com/embed/vH11undyI2o" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=vH11undyI2o -->
            </div>
            <div class="technique-item" data-tags="guided, meditation, relaxation, mindfulness, stress-relief, visualisation, medium">
                <h3>Guided Meditation</h3>
                <iframe src="https://www.youtube.com/embed/uTN29kj7e-w" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=uTN29kj7e-w -->
            </div>
            <div class="technique-item" data-tags="body-scan, mindfulness, relaxation, meditation, stress-relief, medium">
                <h3>Body Scan Meditation</h3>
                <iframe src="https://www.youtube.com/embed/uqtIqCKjkuc" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=uqtIqCKjkuc -->
            </div>
            <div class="technique-item" data-tags="walking, mindfulness, meditation, stress-relief, relaxation, long">
                <h3>Walking Meditation</h3>
                <iframe src="https://www.youtube.com/embed/maCdzhtGgGU" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=maCdzhtGgGU -->
            </div>
            <div class="technique-item" data-tags="zen, mindfulness, meditation, relaxation, stress-relief, medium">
                <h3>ZEN Meditation</h3>
                <iframe src="https://www.youtube.com/embed/aTIV9djESbY" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=aTIV9djESbY -->
            </div>
            <div class="technique-item" data-tags="vipassana, mindfulness, meditation, relaxation, stress-relief, medium">
                <h3>Vipassana Meditation</h3>
                <iframe src="https://www.youtube.com/embed/PvAEG5muUnU" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=PvAEG5muUnU -->
            </div>
            <div class="technique-item" data-tags="medium, depression">
                <h3>Meditation For Depression</h3>
                <iframe src="https://www.youtube.com/embed/xRxT9cOKiM8" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=xRxT9cOKiM8 -->
            </div>
            <div class="technique-item" data-tags="long, guided, depression, mindfulness">
                <h3>Meditation For Depression</h3>
                <iframe src="https://www.youtube.com/embed/O3Ku-cpdSJM" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=O3Ku-cpdSJM -->
            </div>
            <div class="technique-item" data-tags="anxiety, depression, medium">
                <h3>Meditation For Anxiety and Depression</h3>
                <iframe src="https://www.youtube.com/embed/6wl4j4gd2WI" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=6wl4j4gd2WI -->
            </div>
            <div class="technique-item" data-tags="depression, medium, guided">
                <h3>Meditation For Depression</h3>
                <iframe src="https://www.youtube.com/embed/d3xTelxky9A" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=d3xTelxky9A -->
            </div>
            <div class="technique-item" data-tags="stress-relief, anxiety, medium, guided">
                <h3>Meditation For Stress & Anxiety</h3>
                <iframe src="https://www.youtube.com/embed/tuPW7oOudVc" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=tuPW7oOudVc -->
            </div>
            <div class="technique-item" data-tags="fatigue, long">
                <h3>Meditation For Fatigue</h3>
                <iframe src="https://www.youtube.com/embed/JVdsxQhlAw0" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=JVdsxQhlAw0 -->
            </div>
            <div class="technique-item" data-tags="stress-relief, medium">
                <h3>Meditation For Stress</h3>
                <iframe src="https://www.youtube.com/embed/z6X5oEIg6Ak" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=z6X5oEIg6Ak -->
            </div>
            <div class="technique-item" data-tags="burnout, medium, guided">
                <h3>Meditation For Burnout</h3>
                <iframe src="https://www.youtube.com/embed/BALTOxc0xJY" frameborder="0" allowfullscreen></iframe> <!-- https://www.youtube.com/watch?v=BALTOxc0xJY -->
            </div>
        </div>
    </div>

    <script>
    document.querySelectorAll("#filters input").forEach(checkbox => {
        checkbox.addEventListener("change", function () {
            let selectedTags = Array.from(document.querySelectorAll("#filters input:checked"))
                                    .map(input => input.value);

            let meditationTechniques = document.querySelectorAll(".technique-item");
            meditationTechniques.forEach(meditationTechnique => {
                let meditationTechniqueTags = meditationTechnique.getAttribute("data-tags").split(", ").map(tag => tag.trim());

                let matches = selectedTags.every(tag => meditationTechniqueTags.includes(tag));

                if (matches) {
                    meditationTechnique.style.display = "block";
                } else {
                    meditationTechnique.style.display = "none";
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
