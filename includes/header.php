<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Escoltrix - Lightning Protection Solutions'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Escoltrix manufactures lightning protection, surge protection and grounding systems. Cutting Edge Solution for a Modern Facility.'; ?>">
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="nav-brand">
                    <img src="Images/logo.png" alt="Escoltrix Logo" class="logo">
                    <span class="brand-name-nav">Escoltrix</span>
                </div>
                
                <!-- Desktop Navigation Menu -->
                <div class="nav-menu" id="nav-menu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.php" class="nav-login">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-login">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="services.php" class="nav-login">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="products.php" class="nav-login">Products <i class="fas fa-chevron-down dropdown-icon"></i></a>
                            <div class="dropdown-menu">
                                <a href="products.php#grounding-systems" class="dropdown-link">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Ground Systems</span>
                                </a>
                                <a href="products.php#lightning-protection" class="dropdown-link">
                                    <i class="fas fa-bolt"></i>
                                    <span>Lightning Protection</span>
                                </a>
                                <a href="products.php#surge-protection" class="dropdown-link">
                                    <i class="fas fa-zap"></i>
                                    <span>Surge Protection</span>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-login">Contact Us</a>
                        </li>
                    </ul>
                </div>
                
                <!-- Navigation Actions -->
                <div class="nav-actions">
                    <a href="quote.php" class="nav-get-started">Get Quote <i class="fas fa-arrow-right"></i></a>
                    <div class="hamburger" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Navigation Progress Bar -->
        <div class="nav-progress" id="nav-progress"></div>
    </header>
