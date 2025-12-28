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

    <style>
        /* Internal Header CSS */
        :root {
            --primary-color: #2c5aa0;
            --secondary-color: #1e3d72;
            --accent-color: #3b82f6;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --white: #ffffff;
            --glass-bg: rgba(255, 255, 255, 0.85);
            --glass-border: rgba(255, 255, 255, 0.2);
            --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        /* Header Base */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border);
            overflow: visible !important;
        }

        .header.scrolled {
            background: rgba(255, 255, 255, 0.95);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 0;
        }

        .navbar {
            padding: 1rem 0;
            transition: padding 0.4s ease;
            overflow: visible !important;
        }

        .header.scrolled .navbar {
            padding: 0.75rem 0;
        }

        .navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            overflow: visible !important;
        }

        /* Brand */
        .nav-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            z-index: 1002;
        }

        .nav-brand .logo {
            height: 32px;
            width: auto;
            transition: transform 0.3s ease;
        }

        .header.scrolled .nav-brand .logo {
            height: 28px;
        }

        .brand-name-nav {
            font-family: 'Inter', sans-serif;
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--secondary-color);
            letter-spacing: -0.02em;
        }

        /* Navigation Menu */
        .nav-menu {
            margin-left: auto;
            margin-right: 2rem;
        }

        .nav-list {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 0.5rem;
            margin: 0;
            padding: 0;
        }

        .nav-item {
            position: relative;
        }

        .nav-link, .nav-login {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            font-size: 0.935rem;
            font-weight: 500;
            color: var(--text-dark);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.2s ease;
            position: relative;
        }

        .nav-link:hover, .nav-login:hover,
        .nav-link.active, .nav-login.active {
            color: var(--primary-color);
            background: rgba(59, 130, 246, 0.08);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: all 0.3s ease;
            transform: translateX(-50%);
            opacity: 0;
        }

        .nav-link.active::after {
            width: 20px;
            opacity: 1;
        }

        /* Dropdown */
        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%) translateY(10px);
            min-width: 280px;
            background: var(--white);
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            padding: 0.5rem;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0,0,0,0.05);
            z-index: 9999;
            overflow: visible;
        }

        .dropdown:hover .dropdown-menu,
        .dropdown-menu:hover {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .dropdown-link {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            color: var(--text-dark);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.2s ease;
            gap: 1rem;
        }

        .dropdown-link:hover {
            background: rgba(59, 130, 246, 0.05);
            color: var(--primary-color);
            transform: translateX(4px);
        }

        .dropdown-link i {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(59, 130, 246, 0.1);
            border-radius: 6px;
            color: var(--primary-color);
            font-size: 0.8rem;
            transition: all 0.2s ease;
        }

        .dropdown-link:hover i {
            background: var(--primary-color);
            color: var(--white);
        }

        .dropdown-link span {
            font-size: 0.9rem;
            font-weight: 500;
        }

        .dropdown-icon {
            font-size: 0.75rem;
            margin-left: 4px;
            transition: transform 0.3s ease;
        }

        .dropdown:hover .dropdown-icon {
            transform: rotate(180deg);
        }

        /* Header Actions */
        .nav-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        /* Download Button */
        .nav-download-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.6rem 1.25rem;
            background: var(--white);
            color: var(--primary-color);
            border: 1px solid rgba(44, 90, 160, 0.2);
            border-radius: 8px;
            font-size: 0.875rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }

        .nav-download-btn:hover {
            border-color: var(--primary-color);
            background: #f8fafc;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(44, 90, 160, 0.1);
        }

        .nav-download-btn i {
            transition: transform 0.3s ease;
        }

        .nav-download-btn:hover i.fa-download {
            transform: translateY(2px);
        }

        /* Quote Button */
        .nav-get-started {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.6rem 1.25rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: var(--white);
            border-radius: 8px;
            font-size: 0.875rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(44, 90, 160, 0.25);
        }

        .nav-get-started:hover {
            box-shadow: 0 8px 20px rgba(44, 90, 160, 0.35);
            transform: translateY(-2px);
        }

        /* Hamburger */
        .hamburger {
            display: none;
            cursor: pointer;
            padding: 0.5rem;
            z-index: 1002;
            background: transparent;
            border: none;
        }

        .hamburger span {
            display: block;
            width: 24px;
            height: 2px;
            background: var(--text-dark);
            margin: 5px 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-radius: 2px;
        }

        /* Mobile Responsive */
        @media (max-width: 991px) {

            .nav-menu {
                position: fixed;
                top: 0;
                left: -100%;
                right: auto; /* Reset right property to avoid conflict */
                width: 100%;
                height: 100vh;
                background: rgba(255, 255, 255, 0.98);
                backdrop-filter: blur(20px);
                padding: 6rem 1.5rem 2rem;
                display: flex;
                flex-direction: column;
                transition: left 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                box-shadow: 10px 0 30px rgba(0,0,0,0.1);
                overflow-y: auto;
            }

            .nav-menu.active {
                left: 0;
                right: auto;
            }

            .nav-list {
                flex-direction: column;
                align-items: stretch;
                gap: 0.5rem;
            }

            .nav-link {
                padding: 1rem;
                font-size: 1.1rem;
                border-radius: 8px;
            }

            .dropdown-menu {
                position: static;
                transform: none;
                opacity: 1;
                visibility: visible;
                box-shadow: none;
                border: 1px solid rgba(0,0,0,0.05);
                margin: 0.5rem 0;
                display: none;
                width: 100%;
                padding: 0.5rem;
            }


            .dropdown-menu.active,
            .dropdown.active .dropdown-menu,
            .dropdown:hover .dropdown-menu { /* Fallback */
                display: block;
            }

            .hamburger {
                display: block;
                margin-left: 1rem;
            }

            .hamburger.active span:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }
            .hamburger.active span:nth-child(2) {
                opacity: 0;
            }
            .hamburger.active span:nth-child(3) {
                transform: rotate(-45deg) translate(5px, -5px);
            }

            .nav-actions {
                /* Hide desktop actions on mobile if they are inside nav-menu */
                /* But here they are outside. We might want to hide the desktop buttons and show them in menu or keep icons */
            }

            /* Mobile Actions in Menu */
            .nav-download-mobile,
            .nav-get-started-mobile {
                margin-top: 1rem;
                width: 100%;
            }

            .nav-download-mobile-btn {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 100%;
                padding: 1rem;
                background: #f3f4f6;
                border-radius: 8px;
                color: var(--text-dark);
                font-weight: 600;
                gap: 0.5rem;
                text-decoration: none;
            }

            .nav-actions .nav-download-btn,
            .nav-actions .nav-get-started {
                display: none;
            }
        }
    </style>
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
                                <a href="products.php?category=grounding-systems#grounding-systems" class="dropdown-link">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>Ground Systems</span>
                                </a>
                                <a href="products.php?category=lightning-protection#lightning-protection" class="dropdown-link">
                                    <i class="fas fa-bolt"></i>
                                    <span>Lightning Protection</span>
                                </a>
                                <a href="products.php?category=surge-protection#surge-protection" class="dropdown-link">
                                    <i class="fas fa-plug"></i>
                                    <span>Surge Protection</span>
                                </a>
                                <a href="products.php?category=exothermic-welding" class="dropdown-link">
                                    <i class="fas fa-burn"></i>
                                    <span>Exothermic Welding</span>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-login">Contact Us</a>
                        </li>
                      
                        <!-- Mobile Specific Buttons (Hidden on Desktop via CSS) -->
                        <li class="nav-item nav-download-mobile" style="display: none;">
                            <a href="pdf/Escoltrix Profile & Product.pdf" class="nav-download-mobile-btn" download>
                                <i class="fas fa-file-pdf"></i>
                                <span>Download Brochure</span>
                            </a>
                        </li>
                        <li class="nav-item nav-get-started-mobile" style="display: none;">
                            <a href="quote.php" class="nav-download-mobile-btn" style="background: var(--primary-color); color: white;">
                                <i class="fas fa-paper-plane"></i>
                                <span>Get Quote</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <!-- Navigation Actions (Desktop) -->
                <div class="nav-actions">
                    <a href="pdf/Escoltrix Profile & Product.pdf" class="nav-download-btn" download>
                        <i class="fas fa-file-pdf"></i>
                        <span>Brochure</span>
                        <i class="fas fa-download" style="font-size: 0.8em; opacity: 0.7;"></i>
                    </a>
                    <a href="quote.php" class="nav-get-started">Get Quote</a>
                    <div class="hamburger" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </nav>
        
        <!-- Navigation Progress Bar -->
        <div class="nav-progress" id="nav-progress" style="height: 2px; background: var(--primary-color); width: 0%;"></div>
    </header>

    <!-- Header Toggle Script (Simple, distinct from main.js if needed, but main.js handles it) -->
    <script>
    (function() {
        const header = document.querySelector('.header');
        
        function handleScroll() {
            if (window.scrollY > 20) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        }
        
        window.addEventListener('scroll', handleScroll);
        // Check on load
        handleScroll();

        // Reveal mobile buttons in menu
        const isMobile = window.innerWidth <= 991;
        const mobileBtns = document.querySelectorAll('.nav-download-mobile, .nav-get-started-mobile');
        if(isMobile) {
            mobileBtns.forEach(btn => btn.style.display = 'block');
        }
        window.addEventListener('resize', () => {
             const mobile = window.innerWidth <= 991;
             mobileBtns.forEach(btn => btn.style.display = mobile ? 'block' : 'none');
        });
    })();
    </script>