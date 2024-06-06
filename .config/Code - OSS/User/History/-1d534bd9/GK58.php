<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Roblox</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Additional styles for animations */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes popIn {
            from { transform: scale(0.5); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        @keyframes popOut {
            from { transform: scale(1); opacity: 1; }
            to { transform: scale(0.5); opacity: 0; }
        }
    </style>
</head>
<body>
    <?php include 'nav.php'; ?>
    <header>
        <div class="container">
            <h1 class="heading">Modern Roblox</h1>
            <nav>
                <ul>
                    <li><a href="#" class="nav-link">Home</a></li>
                    <li><a href="#" class="nav-link">Games</a></li>
                    <li><a href="#" class="nav-link">About</a></li>
                    <li><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h2 class="hero-heading">Welcome to Modern Roblox</h2>
            <p class="hero-text">Experience the latest in Roblox gaming.</p>
            <a href="#" class="btn btn-pop">Play Now</a>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <h2 class="features-heading">Features</h2>
            <div class="feature">
                <img src="feature1.png" alt="Feature 1" class="feature-img">
                <h3 class="feature-heading">Custom Avatars</h3>
                <p class="feature-text">Express yourself with customizable avatars.</p>
            </div>
            <div class="feature">
                <img src="feature2.png" alt="Feature 2" class="feature-img">
                <h3 class="feature-heading">Interactive Games</h3>
                <p class="feature-text">Explore a variety of interactive games.</p>
            </div>
            <!-- More features -->
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
            const heroText = document.querySelector('.hero-text');
            const playBtn = document.querySelector('.btn');

            // Hero section animation
            heroHeading.style.animation = 'fadeIn 1s ease-out';
            heroText.style.animation = 'fadeIn 1s ease-out';
            playBtn.style.animation = 'popIn 1s ease-out';

            // Button animation on hover
            playBtn.addEventListener('mouseover', function() {
                this.style.animation = 'popOut 0.5s ease-in-out';
            });
            playBtn.addEventListener('mouseout', function() {
                this.style.animation = 'popIn 0.5s ease-in-out';
            });
        });
    </script>
</body>
</html>
