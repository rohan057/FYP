<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meat Dishes</title>
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
        <h1 class="meal-title">Meat Dishes</h1>

        <!-- https://www.thespruceeats.com/breakfast-meats-4162824 -->
        <section class="meal-category">
            <h2>Breakfast</h2>
            <div class="meal-container">
                <div class="meal-section">
                    <img src="images/biscuits_gravy.webp" alt="Breakfast Dish 1">
                    <p>Biscuits and Gravy</p>
                    <a href="pdfs/biscuits_gravy.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/biscuits-and-gravy-recipe-7377382 -->
                </div>
                <div class="meal-section">
                    <img src="images/irish_breakfast.webp" alt="Breakfast Dish 2">
                    <p>Irish Breakfast</p>
                    <a href="pdfs/irish_breakfast.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/a-classic-irish-breakfast-5072861 -->
                </div>
                <div class="meal-section">
                    <img src="images/millionaire_bacon.webp" alt="Breakfast Dish 3">
                    <p>Millionaire Bacon</p>
                    <a href="pdfs/millionaire_bacon.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/millionaire-s-bacon-recipe-7488209 -->
                </div>
                <div class="meal-section">
                    <img src="images/scrapple.webp" alt="Breakfast Dish 4">
                    <p>Scrapple</p>
                    <a href="pdfs/scrapple.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/scrapple-recipe-5215345 -->
                </div>
                <div class="meal-section">
                    <img src="images/chorizo_shakshuka.webp" alt="Breakfast Dish 5">
                    <p>Chorizo Shakshuka</p>
                    <a href="pdfs/chorizo_shakshuka.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/chorizo-shakshuka-4129566 -->
                </div>
                <div class="meal-section">
                    <img src="images/ham_egg.webp" alt="Breakfast Dish 6">
                    <p>Ham & Egg Breakfast Cups</p>
                    <a href="pdfs/ham_egg.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/ham-and-and-egg-cups-recipe-4158734 -->
                </div>
                <div class="meal-section">
                    <img src="images/empanadas.webp" alt="Breakfast Dish 7">
                    <p>Empanadas</p>
                    <a href="pdfs/empanadas.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/breakfast-empanadas-with-bacon-and-eggs-3029525 -->
                </div>
                <div class="meal-section">
                    <img src="images/waffles.webp" alt="Breakfast Dish 8">
                    <p>Waffles</p>
                    <a href="pdfs/waffles.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/bacon-egg-and-cheese-waffles-3873493 -->
                </div>
            </div>
        </section>

        <!-- https://www.thespruceeats.com/lunch-4162818 -->
        <section class="meal-category">
            <h2>Lunch</h2>
            <div class="meal-container">
                <div class="meal-section">
                    <img src="images/steak.webp" alt="Lunch Dish 1">
                    <p>Chuck Steak</p>
                    <a href="pdfs/steak.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/budget-chuck-steak-dinner-in-foil-3061293 -->
                </div>
                <div class="meal-section">
                    <img src="images/tunacado.webp" alt="Lunch Dish 2">
                    <p>Tunacado Sandwich</p>
                    <a href="pdfs/tunacado.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/joe-and-the-juice-tunacado-sandwich-recipe-7099199 -->
                </div>
                <div class="meal-section">
                    <img src="images/chicken_salad.webp" alt="Lunch Dish 3">
                    <p>Chicken Salad</p>
                    <a href="pdfs/chicken_salad.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/chicken-salad-tiktok-recipe-6825231 -->
                </div>
                <div class="meal-section">
                    <img src="images/chicken_omelet.webp" alt="Lunch Dish 4">
                    <p>Chicken Omelet</p>
                    <a href="pdfs/chicken_omelet.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/chicken-omelets-4589770 -->
                </div>
                <div class="meal-section">
                    <img src="images/croissant.webp" alt="Lunch Dish 5">
                    <p>Ham & Cheese Croissant</p>
                    <a href="pdfs/croissant.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/ham-and-cheese-croissant-5186729 -->
                </div>
                <div class="meal-section">
                    <img src="images/quesadillas.webp" alt="Lunch Dish 6">
                    <p>Chicken Quesadillas</p>
                    <a href="pdfs/quesadillas.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/honey-chipotle-chicken-quesadillas-8582977 -->
                </div>
                <div class="meal-section">
                    <img src="images/pot_pulled_chicken.webp" alt="Lunch Dish 7">
                    <p>Pot Pulled Chicken</p>
                    <a href="pdfs/pot_pulled_chicken.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/instant-pot-pulled-chicken-5221830 -->
                </div>
                <div class="meal-section">
                    <img src="images/egg_salad.webp" alt="Lunch Dish 8">
                    <p>Egg Salad with Relish</p>
                    <a href="pdfs/egg_salad.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/egg-salad-with-relish-5204777 -->
                </div>
            </div>
        </section>

        <!-- https://www.thespruceeats.com/dinner-4162806 -->
        <section class="meal-category">
            <h2>Dinner</h2>
            <div class="meal-container">
                <div class="meal-section">
                    <img src="images/chicken_noodle.webp" alt="Dinner Dish 1">
                    <p>Pot Chicken Noodle Soup</p>
                    <a href="pdfs/chicken_noodle.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/instant-pot-chicken-noodle-soup-4771904 -->
                </div>
                <div class="meal-section">
                    <img src="images/chicken_fajitas.webp" alt="Dinner Dish 2">
                    <p>Chicken Fajitas</p>
                    <a href="pdfs/chicken_fajitas.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/easy-fajitas-recipe-3052908 -->
                </div>
                <div class="meal-section">
                    <img src="images/cast_iron_steak.webp" alt="Dinner Dish 3">
                    <p>Cast Iron Steak</p>
                    <a href="pdfs/cast_iron_steak.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/cast-iron-steak-recipe-5498568 -->
                </div>
                <div class="meal-section">
                    <img src="images/chicken_parmesan.webp" alt="Dinner Dish 4">
                    <p>Chicken Parmesan</p>
                    <a href="pdfs/chicken_parmesan.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/easy-chicken-parmesan-3052878 -->
                </div>
                <div class="meal-section">
                    <img src="images/shoyu_chicken.webp" alt="Dinner Dish 5">
                    <p>Shoyu Chicken</p>
                    <a href="pdfs/shoyu_chicken.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/shoyu-chicken-recipe-6827971 -->
                </div>
                <div class="meal-section">
                    <img src="images/chicken_alfredo_pot_pie.webp" alt="Dinner Dish 6">
                    <p>Chicken Alfredo Pot Pie</p>
                    <a href="pdfs/chicken_alfredo_pot_pie.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/chicken-alfredo-pot-pie-recipe-6825957 -->
                </div>
                <div class="meal-section">
                    <img src="images/breaded_pork_chops.webp" alt="Dinner Dish 7">
                    <p>Breaded Pork Chops</p>
                    <a href="pdfs/breaded_pork_chops.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/baked-breaded-pork-chops-recipe-5213501 -->
                </div>
                <div class="meal-section">
                    <img src="images/sour_cream_onion_chicken.webp" alt="Dinner Dish 8">
                    <p>Sour Cream & Onion Chicken</p>
                    <a href="pdfs/sour_cream_onion_chicken.pdf" download class="download-btn">Download Recipe</a> <!-- https://www.thespruceeats.com/sour-cream-and-onion-chicken-recipe-5204249 -->
                </div>
            </div>
        </section>
    </main>
</body>
</html>
