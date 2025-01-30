<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise Plans</title>
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

    <main>
        <h1 class="exercise-title">Exercise Plans</h1>
        
        <section id="easy-plans">
            <h2>Easy Plans</h2>
            <div class="plan">
                <h3>Plan 1: Walking & Stretching</h3> <!-- https://www.lowa.co.uk/blogs/news/key-stretching-exercises-walkers?srsltid=AfmBOoqg5YJB4nuYukvjywdlf2aWa8QPsYog69Cw9mE1532F2a4egfMP -->
                <ul>
                    <li>Walk for 30 minutes</li>
                    <li>Ankle circles (6-8 times)</li>
                    <li>Calf stretch (hold for 10-15 seconds on each calf)</li>
                    <li>Hamstring stretch (hold for 10-15 seconds on each leg)</li>
                    <li>Thigh stretch (hold for 10-15 seconds on each leg)</li>
                    <li>Inner-thigh stretch (hold for 10-15 seconds)</li>
                    <li>Arm circles (12 circles in total)</li>
                    <li>Repeat daily</li>
                </ul>
            </div>
            <div class="plan">
                <h3>Plan 2: Gentle Yoga (12 minutes)</h3> <!-- https://www.bupa.co.uk/newsroom/ourviews/rise-and-shine-its-yoga-time -->
                <ul>
                    <li>Prayer pose</li>
                    <li>Forward behind</li>
                    <li>Flat back</li>
                    <li>Plank</li>
                    <li>Cobra</li>
                    <li>Upward facing dog</li>
                    <li>Downward facing dog</li>
                    <li>Warrior poses</li>
                    <li>Child pose</li>
                    <li>Cat cow</li>
                    <li>Spinal rotation</li>
                    <li>Happy baby</li>
                    <li>Savasana</li>
                </ul>
            </div>
            <div class="plan">
                <h3>Plan 3: Basic Bodyweight Exercises (3 Circuits)</h3> <!-- https://www.nerdfitness.com/blog/beginner-body-weight-workout-burn-fat-build-muscle/ -->
                <ul>
                    <li>20 bodyweight squats</li>
                    <li>10 push-ups</li>
                    <li>10 walking lunges (each leg)</li>
                    <li>10 dumbell rows (can use a pint of milk)</li>
                    <li>15 second plank</li>
                    <li>30 jumping jacks</li>
                    <li>Do this routine 2-4 times a week with a 48 hour rest in between</li>
                </ul>
            </div>
        </section>

        <section id="medium-plans">
            <h2>Medium Plans</h2>
            <div class="plan">
                <h3>Plan 1: Advanced Bodyweight Exercises (3 circuits)</h3> <!-- https://www.nerdfitness.com/blog/circuit-training-build-some-muscles-burn-some-fat/ -->
                <ul>
                    <li>10 one legged squats (10 each side)</li>
                    <li>20 bodyweight squats</li>
                    <li>20 walking lunges (10 each leg)</li>
                    <li>20 jump step-ups (10 each leg)</li>
                    <li>10 pull-ups</li>
                    <li>10 chair dips</li>
                    <li>10 chin-ups</li>
                    <li>10 push-ups</li>
                    <li>30 second plank</li>
                </ul>
            </div>
            <div class="plan">
                <h3>Plan 2: Cardio (1-3 Cicuits)</h3> <!-- https://www.onepeloton.com/blog/cardio-at-home/ -->
                <ul>
                    <li>Jumping jacks (60 seconds)</li>
                    <li>Skip (60 seconds)</li>
                    <li>Ice skaters (60 seconds)</li>
                    <li>Jump squats (60 seconds)</li>
                    <li>Burpees (60 seconds)</li>
                    <li>Mountain climbers (60 seconds)</li>
                    <li>Single leg hop (10-20 each leg)</li>
                    <li>Side to side hops (60 seconds)</li>
                    <li>High knees (60 seconds)</li>
                </ul>
            </div>
            <div class="plan">
                <h3>Plan 3: Strength (3-4 Circuits)</h3> <!-- https://www.menshealth.com/uk/building-muscle/a756325/10-best-bodyweight-exercises-for-men/ -->
                <ul>
                    <li>20 push-ups (3 sets)</li>
                    <li>5-8 pistol squats per leg (3 sets)</li>
                    <li>10 step-ups with knee raises per leg (3 sets)</li>
                    <li>8-12 dips (3 sets)</li>
                    <li>12-15 groiners (3 sets)</li>
                    <li>8-10 standing long jumps (3 sets)</li>
                    <li>8-10 burpees (3 sets)</li>
                    <li>12-15 superman (3 sets)</li>
                    <li>5-8 handstand wall walk (3 sets)</li>
                    <li>12-15 glute kickbacks (3 sets)</li>
                </ul>
            </div>
            <div class="plan">
                <h3>Plan 4: Core & Abs (15 minutes)</h3> <!-- https://www.myprotein.com/thezone/training/best-ab-exercises-you-can-do-without-equipment/ -->
                <ul>
                    <li>10-20 crunches (3 sets)</li>
                    <li>30 heel taps (3 sets)</li>
                    <li>30 second plank (3 sets)</li>
                    <li>20 mountain climbers (4 sets each leg)</li>
                    <li>15 leg raises (2-4 sets)</li>
                    <li>30 bicycle crunches (3 sets)</li>
                    <li>10 pike crunches (4 sets)</li>
                    <li>15 reverse crunches (3 sets)</li>
                    <li>20 second hollow hold (3 sets)</li>
                </ul>
            </div>
        </section>

        <section id="hard-plans">
            <h2>Hard Plans</h2>
            <div class="plan">
                <h3>Plan 1: Full Body Workout (15 minutes)</h3> <!-- https://www.youtube.com/watch?v=gnTzk1yUHB4 -->
                <ul>
                    <li>15 seconds rest between exercises</li>
                    <li>45 seconds burpees</li>
                    <li>45 seconds pike push-ups</li>
                    <li>45 seconds 90 degree toe taps</li>
                    <li>45 seconds tricep extensions</li>
                    <li>22 seconds single leg push-ups (each side)</li>
                    <li>45 seconds bench dips</li>
                    <li>45 seconds body rows (can use 2 chairs)</li>
                    <li>45 seconds tucked reverse leg extensions</li>
                    <li>22 seconds lunges (each side)</li>
                    <li>22 seconds explosive lunges (each side)</li>
                    <li>45 seconds squats</li>
                    <li>22 seconds high plank to low plank (each side)</li>
                    <li>45 seconds in and outs</li>
                    <li>45 seconds plank hold</li>
                    <li>45 seconds russian twists</li>
                </ul>
            </div>
            <div class="plan">
                <h3>Plan 2: Strength & Endurance</h3>
                <ul>
                    <li>20 push-ups</li>
                    <li>15 jump squats</li>
                    <li>20 walking lunges per leg</li>
                    <li>30-second plank hold</li>
                    <li>Repeat 4 times</li>
                </ul>
            </div>
            <div class="plan">
                <h3>Plan 3: Full Body HIIT</h3>
                <ul>
                    <li>30 seconds burpees</li>
                    <li>30 seconds squat jumps</li>
                    <li>30 seconds push-ups</li>
                    <li>30 seconds plank</li>
                    <li>Rest for 1 minute, repeat 4 times</li>
                </ul>
            </div>
        </section>
    </main>
</body>
</html>
