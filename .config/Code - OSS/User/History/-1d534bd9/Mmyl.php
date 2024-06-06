<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Roblox</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Additional styles for animations */
        @keyframes slideIn {
            from { transform: translateY(-100%); }
            to { transform: translateY(0); }
        }
        @keyframes popOut {
            from { transform: scale(1); opacity: 1; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3); }
            to { transform: scale(1.1); opacity: 0; box-shadow: 0px 0px 20px rgba(0, 0, 0, 0); }
        }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>
    <section class="game-templates">
        <div class="container">
            <h2 class="section-heading">Popular Game Templates</h2>
            <div class="game-template">
                <img src="game-template1.jpg" alt="Game Template 1" class="game-template-img">
                <h3 class="game-template-heading">Obby Adventure</h3>
                <p class="game-template-description">Jump, run, and dodge obstacles in this thrilling adventure!</p>
                <a href="#" class="btn btn-pop">Play Now</a>
            </div>
            <div class="game-template">
                <img src="game-template2.jpg" alt="Game Template 2" class="game-template-img">
                <h3 class="game-template-heading">Tycoon Builder</h3>
                <p class="game-template-description">Build your empire from the ground up in this tycoon game.</p>
                <a href="#" class="btn btn-pop">Play Now</a>
            </div>
            <!-- More game templates -->
        </div>
    </section>
    <!-- More sections -->
    <footer>
        <div class="container">
            <p class="footer-text">&copy; 2024 Modern Roblox. All rights reserved.</p>
        </div>
    </footer>
    <script>
        // JavaScript for animations
        document.addEventListener('DOMContentLoaded', function() {
            const heroHeading = document.querySelector('.hero-heading');
            const gameTemplates = document.querySelectorAll('.game-template');

            // Hero section animation
            heroHeading.style.animation = 'slideIn 1s ease-out';

            // Game template animation
            gameTemplates.forEach((template, index) => {
                template.style.animation = `slideIn 1s ease-out ${index * 0.3}s`;
            });
        });
    </script>
</body>
</html>
