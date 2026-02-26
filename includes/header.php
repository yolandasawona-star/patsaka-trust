<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Patsaka Trust - Advocating for meaningful participation of marginalized people in sustainable development">
    <meta name="keywords" content="advocacy, sustainable development, marginalized communities, inclusive education, youth development, women emancipation, climate change, media communication">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Patsaka Trust'; ?></title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Patsaka Trust'; ?>">
    <meta property="og:description" content="Patsaka Trust - Advocating for meaningful participation of marginalized people in sustainable development">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
</head>
<body>
    <!-- Header Navigation -->
    <header class="header">
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-brand">
                    <a href="index.php" class="brand-link">
                        <img src="assets/images/logo.png" alt="Patsaka Trust Logo" class="brand-logo">
                        <span class="brand-name">Patsaka Trust</span>
                    </a>
                </div>
                
                <!-- Mobile Menu Toggle -->
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle navigation menu">
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                    <span class="hamburger-line"></span>
                </button>
                
                <!-- Navigation Menu -->
                <ul class="nav-menu" id="navMenu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="impact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'impact.php' ? 'active' : ''; ?>">
                            Our Impact
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#thematic-areas" class="nav-link">
                            Thematic Areas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="main-content">
