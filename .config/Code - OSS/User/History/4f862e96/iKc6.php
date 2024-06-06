<?php
// Include your database connection file
include 'db_connection.php';

// Fetch data from the database
// Assuming you have fetched data and stored it in $games variable

// Define your custom grid structure based on the data from the database
// For example, you could have different sections for different categories
$adventure_games = array();
$obby_games = array();

foreach ($games as $game) {
    if ($game['category'] === 'adventure') {
        $adventure_games[] = $game;
    } elseif ($game['category'] === 'obby') {
        $obby_games[] = $game;
    }
}

// Now, generate HTML for each category
function generateGameTemplates($games) {
    foreach ($games as $game) {
        echo '<div class="game-template">';
        echo '<img src="' . $game['image'] . '" alt="' . $game['name'] . '" class="game-template-img">';
        echo '<h3 class="game-template-heading">' . $game['name'] . '</h3>';
        echo '<p class="game-template-description">' . $game['description'] . '</p>';
        echo '<a href="#" class="btn btn-pop">Play Now</a>';
        echo '</div>';
    }
}

?>

<section class="game-templates">
    <div class="container">
        <h2 class="section-heading">Popular Games</h2>

        <!-- Adventure Games -->
        <h3 class="sub-section-heading">Adventure Games</h3>
        <div class="game-grid">
            <?php generateGameTemplates($adventure_games); ?>
        </div>

        <!-- Obby Games -->
        <h3 class="sub-section-heading">Obby Games</h3>
        <div class="game-grid">
            <?php generateGameTemplates($obby_games); ?>
        </div>
    </div>
</section>
