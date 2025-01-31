<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetarian Dishes</title>
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
        <h1 class="meal-title">Vegetarian Dishes</h1>

        <!-- https://www.thespruceeats.com/vegetarian-breakfast-4162336 -->
        <section class="meal-category">
            <h2>Breakfast</h2>
            <div class="meal-container">
                <div class="meal-section">
                    <img src="images/uttapam.webp" alt="Breakfast Dish 1">
                    <p>Uttapam</p>
                    <a href="pdfs/uttapam.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/uttapam-recipe-7559216 -->
                </div>
                <div class="meal-section">
                    <img src="images/quiche.webp" alt="Breakfast Dish 2">
                    <p>Quiche</p>
                    <a href="pdfs/quiche.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/endlessly-adaptable-quiche-7090847 -->
                </div>
                <div class="meal-section">
                    <img src="images/granola.webp" alt="Breakfast Dish 3">
                    <p>Mix & Match Granola</p>
                    <a href="pdfs/granola.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/granola-recipe-4796424 -->
                </div>
                <div class="meal-section">
                    <img src="images/frittata.webp" alt="Breakfast Dish 4">
                    <p>Frittata</p>
                    <a href="pdfs/frittata.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/egg-white-frittata-recipe-5212777 -->
                </div>
                <div class="meal-section">
                    <img src="images/sweet_potato_hash_brown.webp" alt="Breakfast Dish 5">
                    <p>Sweet Potato Hash Browns</p>
                    <a href="pdfs/sweet_potato_hash_brown.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/sweet-potato-hash-browns-5176426 -->
                </div>
                <div class="meal-section">
                    <img src="images/tofu_spinach.webp" alt="Breakfast Dish 6">
                    <p>Tofu Scramble with Spinach</p>
                    <a href="pdfs/tofu_spinach.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/vegan-tofu-scramble-with-spinach-3376586 -->
                </div>
                <div class="meal-section">
                    <img src="images/oats.webp" alt="Breakfast Dish 7">
                    <p>Overnight Oats</p>
                    <a href="pdfs/oats.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/overnight-chia-seed-oatmeal-4151799 -->
                </div>
                <div class="meal-section">
                    <img src="images/vegetarian_omelet.webp" alt="Breakfast Dish 8">
                    <p>Bell Pepper Omelet</p>
                    <a href="pdfs/vegetarian_omelet.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/vegetarian-omelette-with-bell-peppers-3376569 -->
                </div>
            </div>
        </section>

        <!-- https://www.thespruceeats.com/healthy-lunches-4162813 -->
        <section class="meal-category">
            <h2>Lunch</h2>
            <div class="meal-container">
                <div class="meal-section">
                    <img src="images/avocado_toast.webp" alt="Lunch Dish 1">
                    <p>Avocado Toast</p>
                    <a href="pdfs/avocado_toast.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/avocado-toast-4174244 -->
                </div>
                <div class="meal-section">
                    <img src="images/pasta_soup.webp" alt="Lunch Dish 2">
                    <p>Toasted Pasta Soup</p>
                    <a href="pdfs/pasta_soup.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/toasted-pasta-soup-recipe-6823245 -->
                </div>
                <div class="meal-section">
                    <img src="images/black_bean_hummus_wrap.webp" alt="Lunch Dish 3">
                    <p>Black Bean & Hummus Wrap</p>
                    <a href="pdfs/black_bean_hummus_wrap.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/engine-2-black-bean-hummus-wrap-3377635 -->
                </div>
                <div class="meal-section">
                    <img src="images/falafel_sandwich.webp" alt="Lunch Dish 4">
                    <p>Falafel Sandwich</p>
                    <a href="pdfs/falafel_sandwich.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/falafel-pita-sandwich-recipe-2355692 -->
                </div>
                <div class="meal-section">
                    <img src="images/vegetarian_chili.webp" alt="Lunch Dish 5">
                    <p>Vegetarian Chilli</p>
                    <a href="pdfs/vegetarian_chili.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/vegetarian-and-vegan-chili-recipe-3377016 -->
                </div>
                <div class="meal-section">
                    <img src="images/quinoa_salad.webp" alt="Lunch Dish 6">
                    <p>Quinoa Salad</p>
                    <a href="pdfs/quinoa_salad.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/vegetarian-quinoa-salad-recipe-3377920 -->
                </div>
                <div class="meal-section">
                    <img src="images/pasta_salad_rotini.webp" alt="Lunch Dish 7">
                    <p>Pasta Salad with Rotini</p>
                    <a href="pdfs/pasta_salad_rotini.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/garden-pasta-salad-with-rotini-3058883 -->
                </div>
                <div class="meal-section">
                    <img src="images/rice_bean_burrito.webp" alt="Lunch Dish 8">
                    <p>Rice and Bean Burrito</p>
                    <a href="pdfs/rice_bean_burrito.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/basic-rice-and-bean-vegetarian-burrito-3377050 -->
                </div>
            </div>
        </section>

        <!-- https://www.thespruceeats.com/vegetarian-mains-4162803 -->
        <section class="meal-category">
            <h2>Dinner</h2>
            <div class="meal-container">
                <div class="meal-section">
                    <img src="images/cheesy_stuffed_shells.webp" alt="Dinner Dish 1">
                    <p>Cheesy Stuffed Shells</p>
                    <a href="pdfs/cheesy_stuffed_shells.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/stuffed-shells-recipe-8600137 -->
                </div>
                <div class="meal-section">
                    <img src="images/acorn_squash_soup.webp" alt="Dinner Dish 2">
                    <p>Acorn Squash Soup</p>
                    <a href="pdfs/acorn_squash_soup.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/acorn-squash-soup-recipe-7969247 -->
                </div>
                <div class="meal-section">
                    <img src="images/no_fail_cacio.webp" alt="Dinner Dish 3">
                    <p>No Fail Cacio e Pepe</p>
                    <a href="pdfs/no_fail_cacio.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/no-fail-cacio-e-pepe-recipe-7814184 -->
                </div>
                <div class="meal-section">
                    <img src="images/chana_masala.webp" alt="Dinner Dish 4">
                    <p>Chana Masala</p>
                    <a href="pdfs/chana_masala.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/chana-masala-recipe-7153398 -->
                </div>
                <div class="meal-section">
                    <img src="images/teriyaki_tofu.webp" alt="Dinner Dish 5">
                    <p>Teriyaki Tofu</p>
                    <a href="pdfs/teriyaki_tofu.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/crispy-teriyaki-tofu-with-broccoli-recipe-8431066 -->
                </div>
                <div class="meal-section">
                    <img src="images/pasta_primavera.webp" alt="Dinner Dish 6">
                    <p>Pasta Primavera</p>
                    <a href="pdfs/pasta_primavera.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/pasta-primavera-recipe-7503609 -->
                </div>
                <div class="meal-section">
                    <img src="images/vegetarian_quesadillas.webp" alt="Dinner Dish 7">
                    <p>Vegetarian Quesadillas</p>
                    <a href="pdfs/vegetarian_quesadillas.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/grilled-zucchini-and-corn-quesadillas-recipe-7483566 -->
                </div>
                <div class="meal-section">
                    <img src="images/kelp_noodles.webp" alt="Dinner Dish 8">
                    <p>Spicy Tahini Kelp Noodles</p>
                    <a href="pdfs/kelp_noodles.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/kelp-noodles-recipe-5181416 -->
                </div>
            </div>
        </section>
    </main>
</body>
</html>