<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegan Dishes</title>
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
        <h1 class="meal-title">Vegan Dishes</h1>

        <!-- https://www.thespruceeats.com/vegetarian-breakfast-4162336 -->
        <section class="meal-category">
            <h2>Breakfast</h2>
            <div class="meal-container">
                <div class="meal-section">
                    <img src="images/carrot_bacon.webp" alt="Breakfast Dish 1">
                    <p>Carrot Bacon</p>
                    <a href="pdfs/carrot_bacon.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/carrot-bacon-recipe-5179614 -->
                </div>
                <div class="meal-section">
                    <img src="images/vegan_quiche.webp" alt="Breakfast Dish 2">
                    <p>Broccoli Quiche</p>
                    <a href="pdfs/vegan_quiche.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/vegan-broccoli-quiche-recipe-3376598 -->
                </div>
                <div class="meal-section">
                    <img src="images/vegan_toast.webp" alt="Breakfast Dish 3">
                    <p>Avocado Toast</p>
                    <a href="pdfs/vegan_toast.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/avocado-toast-4174244 -->
                </div>
                <div class="meal-section">
                    <img src="images/vegan_tofu_scramble.webp" alt="Breakfast Dish 4">
                    <p>Tofu Scramble</p>
                    <a href="pdfs/vegan_tofu_scramble.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/easy-tofu-scramble-3378129 -->
                </div>
                <div class="meal-section">
                    <img src="images/quinoa_chocolate_peanut_butter.webp" alt="Breakfast Dish 5">
                    <p>Quinoa with Chocolate & Peanut Butter</p>
                    <a href="pdfs/quinoa_chocolate_peanut_butter.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/peanut-butter-and-chocolate-breakfast-quinoa-3376531 -->
                </div>
                <div class="meal-section">
                    <img src="images/apple_pancakes.webp" alt="Breakfast Dish 6">
                    <p>Apple Pancakes</p>
                    <a href="pdfs/apple_pancakes.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/vegan-apple-pancakes-recipe-3376503 -->
                </div>
                <div class="meal-section">
                    <img src="images/vegan_yogurt.webp" alt="Breakfast Dish 7">
                    <p>Raw Vegan Yogurt</p>
                    <a href="pdfs/vegan_yogurt.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/homemade-raw-vegan-yogurt-recipe-3377513 -->
                </div>
                <div class="meal-section">
                    <img src="images/vegan_oatmeal.webp" alt="Breakfast Dish 8">
                    <p>Oatmeal with Cinnamon and Apples</p>
                    <a href="pdfs/vegan_oatmeal.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/raw-vegan-oatmeal-cinnamon-and-apples-3377454 -->
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
                    <a href="pdfs/avocado_toast.pdf" download class="download-btn">Download Recipe</a> <!--  -->
                </div>
                <div class="meal-section">
                    <img src="images/pasta_soup.webp" alt="Lunch Dish 2">
                    <p>Toasted Pasta Soup</p>
                    <a href="pdfs/pasta_soup.pdf" download class="download-btn">Download Recipe</a> <!--  -->
                </div>
                <div class="meal-section">
                    <img src="images/black_bean_hummus_wrap.webp" alt="Lunch Dish 3">
                    <p>Black Bean & Hummus Wrap</p>
                    <a href="pdfs/black_bean_hummus_wrap.pdf" download class="download-btn">Download Recipe</a> <!--  -->
                </div>
                <div class="meal-section">
                    <img src="images/falafel_sandwich.webp" alt="Lunch Dish 4">
                    <p>Falafel Sandwich</p>
                    <a href="pdfs/falafel_sandwich.pdf" download class="download-btn">Download Recipe</a> <!--  -->
                </div>
                <div class="meal-section">
                    <img src="images/vegetarian_chili.webp" alt="Lunch Dish 5">
                    <p>Vegetarian Chilli</p>
                    <a href="pdfs/vegetarian_chili.pdf" download class="download-btn">Download Recipe</a> <!--  -->
                </div>
                <div class="meal-section">
                    <img src="images/quinoa_salad.webp" alt="Lunch Dish 6">
                    <p>Quinoa Salad</p>
                    <a href="pdfs/quinoa_salad.pdf" download class="download-btn">Download Recipe</a> <!--  -->
                </div>
                <div class="meal-section">
                    <img src="images/pasta_salad_rotini.webp" alt="Lunch Dish 7">
                    <p>Pasta Salad with Rotini</p>
                    <a href="pdfs/pasta_salad_rotini.pdf" download class="download-btn">Download Recipe</a> <!--  -->
                </div>
                <div class="meal-section">
                    <img src="images/rice_bean_burrito.webp" alt="Lunch Dish 8">
                    <p>Rice and Bean Burrito</p>
                    <a href="pdfs/rice_bean_burrito.pdf" download class="download-btn">Download Recipe</a> <!--  -->
                </div>
            </div>
        </section>

        <!-- https://www.thespruceeats.com/vegetarian-mains-4162803 -->
        <section class="meal-category">
            <h2>Dinner</h2>
            <div class="meal-container">
                <div class="meal-section">
                    <img src="images/vegan_meatballs.webp" alt="Dinner Dish 1">
                    <p>Vegan Meatballs</p>
                    <a href="pdfs/vegan_meatballs.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/vegan-swedish-meatballs-4800406 -->
                </div>
                <div class="meal-section">
                    <img src="images/seitan_strips.webp" alt="Dinner Dish 2">
                    <p>Seitan Strips</p>
                    <a href="pdfs/seitan_strips.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/easy-seitan-strips-4689457 -->
                </div>
                <div class="meal-section">
                    <img src="images/pumpkin_risotto.webp" alt="Dinner Dish 3">
                    <p>Pumpkin Risotto</p>
                    <a href="pdfs/pumpkin_risotto.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/vegan-pumpkin-risotto-recipe-3377136 -->
                </div>
                <div class="meal-section">
                    <img src="images/tofu_chili.webp" alt="Dinner Dish 4">
                    <p>Tofu Chilli</p>
                    <a href="pdfs/tofu_chili.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/vegetarian-tofu-chili-recipe-3378151 -->
                </div>
                <div class="meal-section">
                    <img src="images/vegan_pot_pie.webp" alt="Dinner Dish 5">
                    <p>Vegan Pot Pie</p>
                    <a href="pdfs/vegan_pot_pie.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/vegan-chicken-pot-pie-with-gardein-3377133 -->
                </div>
                <div class="meal-section">
                    <img src="images/vegetable_soup.webp" alt="Dinner Dish 6">
                    <p>Vegetable Soup</p>
                    <a href="pdfs/vegetable_soup.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/easy-homemade-vegetable-soup-3377947 -->
                </div>
                <div class="meal-section">
                    <img src="images/pumpkin_dumplings.webp" alt="Dinner Dish 7">
                    <p>Pumpkin Dumplings</p>
                    <a href="pdfs/pumpkin_dumplings.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/easy-vegetarian-pumpkin-dumplings-3377134 -->
                </div>
                <div class="meal-section">
                    <img src="images/vegan_ratatouille.webp" alt="Dinner Dish 8">
                    <p>Vegan Ratatouille</p>
                    <a href="pdfs/vegan_ratatouille.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/easy-vegan-ratatouille-recipe-3377144 -->
                </div>
            </div>
        </section>
    </main>
</body>
</html>