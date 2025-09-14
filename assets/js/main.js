// ===== MAIN JAVASCRIPT FILE =====

// DOM Content Loaded
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all components
    initNavigation();
    initScrollEffects();
    initAnimations();
    initContactForm();
    initCaptcha();
    initSmoothScrolling();
    initParallax();
    initImageCarousel();
    initNavigationProgress();
    initSearchFunctionality();
});

// ===== DROPDOWN FUNCTIONALITY =====
function initDropdown() {
    const dropdowns = document.querySelectorAll('.dropdown');
    
    dropdowns.forEach(dropdown => {
        const dropdownMenu = dropdown.querySelector('.dropdown-menu');
        const dropdownToggle = dropdown.querySelector('.nav-login');
        
        // Desktop hover functionality
        dropdown.addEventListener('mouseenter', function() {
            if (window.innerWidth > 768) {
                dropdownMenu.style.opacity = '1';
                dropdownMenu.style.visibility = 'visible';
                dropdownMenu.style.transform = 'translateY(0)';
            }
        });
        
        dropdown.addEventListener('mouseleave', function() {
            if (window.innerWidth > 768) {
                dropdownMenu.style.opacity = '0';
                dropdownMenu.style.visibility = 'hidden';
                dropdownMenu.style.transform = 'translateY(-10px)';
            }
        });
        
        // Mobile click functionality
        if (window.innerWidth <= 768) {
            dropdownToggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                // Close other dropdowns
                dropdowns.forEach(otherDropdown => {
                    if (otherDropdown !== dropdown) {
                        const otherMenu = otherDropdown.querySelector('.dropdown-menu');
                        otherMenu.classList.remove('active');
                    }
                });
                
                // Toggle current dropdown
                dropdownMenu.classList.toggle('active');
            });
        }
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                dropdownMenu.classList.remove('active');
            }
        });
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        dropdowns.forEach(dropdown => {
            const dropdownMenu = dropdown.querySelector('.dropdown-menu');
            dropdownMenu.classList.remove('active');
        });
    });
}

// ===== NAVIGATION =====
function initNavigation() {
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    const navLinks = document.querySelectorAll('.nav-link');
    const header = document.querySelector('.header');

    // Mobile menu toggle
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
            document.body.style.overflow = navMenu.classList.contains('active') ? 'hidden' : '';
        });
    }

    // Close mobile menu when clicking on a link
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
            document.body.style.overflow = '';
        });
    });

    // Dropdown functionality
    initDropdown();

    // Header remains consistent - no scroll effects

    // Active nav link based on scroll position
    const sections = document.querySelectorAll('section[id]');
    window.addEventListener('scroll', function() {
        const scrollPos = window.scrollY + 100;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            const navLink = document.querySelector(`a[href="#${sectionId}"]`);
            
            if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                navLinks.forEach(link => link.classList.remove('active'));
                if (navLink) navLink.classList.add('active');
            }
        });
    });
}

// ===== SCROLL EFFECTS =====
function initScrollEffects() {
    // Parallax scrolling for hero section
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const heroBackground = document.querySelector('.hero-background');
        const protectionRings = document.querySelector('.protection-rings');
        
        if (heroBackground) {
            heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
        
        if (protectionRings) {
            protectionRings.style.transform = `translateY(${scrolled * 0.3}px) scale(${1 + scrolled * 0.0001})`;
        }
    });

    // Fade in elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements for fade-in effect
    const fadeElements = document.querySelectorAll('.product-card, .industry-card, .news-updates, .armour-rings');
    fadeElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(element);
    });
}

// ===== ANIMATIONS =====
function initAnimations() {
    // Initialize AOS (Animate On Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    }

    // Counter animation for statistics (if any)
    const counters = document.querySelectorAll('[data-counter]');
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute('data-counter'));
                animateCounter(counter, target);
                counterObserver.unobserve(counter);
            }
        });
    });

    counters.forEach(counter => counterObserver.observe(counter));

    // Typing effect for hero text
    const heroTitle = document.querySelector('.title-highlight');
    if (heroTitle) {
        const originalText = heroTitle.textContent;
        heroTitle.textContent = '';
        let i = 0;
        
        function typeWriter() {
            if (i < originalText.length) {
                heroTitle.textContent += originalText.charAt(i);
                i++;
                setTimeout(typeWriter, 100);
            }
        }
        
        setTimeout(typeWriter, 1000);
    }
}

// ===== CONTACT FORM =====
function initContactForm() {
    const contactForm = document.getElementById('contactForm');
    if (!contactForm) return;

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData);
        
        // Validate form
        if (!validateForm(data)) {
            return;
        }
        
        // Show loading state
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'SENDING...';
        submitBtn.disabled = true;
        
        // Simulate form submission (replace with actual PHP handler)
        setTimeout(function() {
            // Show success message
            showMessage('Thank you! Your message has been sent successfully.', 'success');
            contactForm.reset();
            generateCaptcha();
            
            // Reset button
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });

    // Real-time validation
    const inputs = contactForm.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(input);
        });
        
        input.addEventListener('input', function() {
            clearFieldError(input);
        });
    });
}

// ===== FORM VALIDATION =====
function validateForm(data) {
    let isValid = true;
    
    // Name validation
    if (!data.name || data.name.trim().length < 2) {
        showFieldError('name', 'Name must be at least 2 characters long');
        isValid = false;
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!data.email || !emailRegex.test(data.email)) {
        showFieldError('email', 'Please enter a valid email address');
        isValid = false;
    }
    
    // Mobile validation
    const mobileRegex = /^[\+]?[1-9][\d]{0,15}$/;
    if (!data.mobile || !mobileRegex.test(data.mobile.replace(/\s/g, ''))) {
        showFieldError('mobile', 'Please enter a valid mobile number');
        isValid = false;
    }
    
    // Message validation
    if (!data.message || data.message.trim().length < 10) {
        showFieldError('message', 'Message must be at least 10 characters long');
        isValid = false;
    }
    
    // Captcha validation
    const captchaDisplay = document.getElementById('captchaDisplay');
    if (!data.captcha || data.captcha !== captchaDisplay.textContent) {
        showFieldError('captcha', 'Captcha code is incorrect');
        isValid = false;
    }
    
    return isValid;
}

function validateField(field) {
    const value = field.value.trim();
    const name = field.name;
    
    clearFieldError(field);
    
    switch(name) {
        case 'name':
            if (value.length < 2) {
                showFieldError(name, 'Name must be at least 2 characters long');
                return false;
            }
            break;
        case 'email':
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                showFieldError(name, 'Please enter a valid email address');
                return false;
            }
            break;
        case 'mobile':
            const mobileRegex = /^[\+]?[1-9][\d]{0,15}$/;
            if (!mobileRegex.test(value.replace(/\s/g, ''))) {
                showFieldError(name, 'Please enter a valid mobile number');
                return false;
            }
            break;
    }
    
    return true;
}

function showFieldError(fieldName, message) {
    const field = document.querySelector(`[name="${fieldName}"]`);
    if (!field) return;
    
    clearFieldError(field);
    
    field.style.borderColor = '#dc3545';
    field.style.background = 'rgba(220, 53, 69, 0.1)';
    
    const errorDiv = document.createElement('div');
    errorDiv.className = 'field-error';
    errorDiv.textContent = message;
    errorDiv.style.color = '#dc3545';
    errorDiv.style.fontSize = '0.8rem';
    errorDiv.style.marginTop = '0.25rem';
    
    field.parentNode.appendChild(errorDiv);
}

function clearFieldError(field) {
    field.style.borderColor = '';
    field.style.background = '';
    
    const errorDiv = field.parentNode.querySelector('.field-error');
    if (errorDiv) {
        errorDiv.remove();
    }
}

function showMessage(message, type = 'info') {
    const messageDiv = document.createElement('div');
    messageDiv.className = `message message-${type}`;
    messageDiv.textContent = message;
    messageDiv.style.cssText = `
        position: fixed;
        top: 100px;
        right: 20px;
        background: ${type === 'success' ? '#28a745' : type === 'error' ? '#dc3545' : '#007bff'};
        color: white;
        padding: 1rem 1.5rem;
        border-radius: 5px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        z-index: 10000;
        animation: slideInRight 0.3s ease;
    `;
    
    document.body.appendChild(messageDiv);
    
    setTimeout(() => {
        messageDiv.style.animation = 'slideOutRight 0.3s ease forwards';
        setTimeout(() => messageDiv.remove(), 300);
    }, 5000);
}

// ===== CAPTCHA =====
function initCaptcha() {
    generateCaptcha();
    
    const refreshBtn = document.getElementById('refreshCaptcha');
    if (refreshBtn) {
        refreshBtn.addEventListener('click', generateCaptcha);
    }
}

function generateCaptcha() {
    const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let captcha = '';
    
    for (let i = 0; i < 5; i++) {
        captcha += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    
    const captchaDisplay = document.getElementById('captchaDisplay');
    if (captchaDisplay) {
        captchaDisplay.textContent = captcha;
    }
}

// ===== SMOOTH SCROLLING =====
function initSmoothScrolling() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#') return;
            
            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                
                const headerHeight = document.querySelector('.header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// ===== PARALLAX EFFECTS =====
function initParallax() {
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    
    if (parallaxElements.length === 0) return;
    
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        
        parallaxElements.forEach(element => {
            const speed = element.getAttribute('data-parallax') || 0.5;
            const yPos = -(scrolled * speed);
            element.style.transform = `translateY(${yPos}px)`;
        });
    });
}

// ===== UTILITY FUNCTIONS =====
function animateCounter(element, target, duration = 2000) {
    const start = 0;
    const increment = target / (duration / 16);
    let current = start;
    
    const timer = setInterval(() => {
        current += increment;
        element.textContent = Math.floor(current);
        
        if (current >= target) {
            element.textContent = target;
            clearInterval(timer);
        }
    }, 16);
}

function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    }
}

// ===== PERFORMANCE OPTIMIZATIONS =====
// Optimize scroll events
const optimizedScroll = throttle(function() {
    // Scroll-based animations go here
}, 16);

window.addEventListener('scroll', optimizedScroll);

// Preload images
function preloadImages() {
    const images = [
        // Add any critical images here
    ];
    
    images.forEach(src => {
        const img = new Image();
        img.src = src;
    });
}

// ===== ACCESSIBILITY ENHANCEMENTS =====
// Keyboard navigation
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        // Close mobile menu
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');
        
        if (navMenu && navMenu.classList.contains('active')) {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
            document.body.style.overflow = '';
        }
    }
});

// Focus management
function manageFocus() {
    const focusableElements = document.querySelectorAll(
        'a[href], button:not([disabled]), textarea:not([disabled]), input:not([disabled]), select:not([disabled])'
    );
    
    focusableElements.forEach(element => {
        element.addEventListener('focus', function() {
            this.style.outline = '2px solid #007bff';
            this.style.outlineOffset = '2px';
        });
        
        element.addEventListener('blur', function() {
            this.style.outline = '';
            this.style.outlineOffset = '';
        });
    });
}

// Initialize accessibility features
manageFocus();

// ===== IMAGE CAROUSEL =====
function initImageCarousel() {
    const carousel = document.querySelector('.image-carousel');
    if (!carousel) return;

    const slides = carousel.querySelectorAll('.carousel-slide');
    const indicators = carousel.querySelectorAll('.indicator');
    let currentSlide = 0;
    let carouselInterval;

    function showSlide(index) {
        // Remove active class from all slides and indicators
        slides.forEach(slide => slide.classList.remove('active'));
        indicators.forEach(indicator => indicator.classList.remove('active'));

        // Add active class to current slide and indicator
        slides[index].classList.add('active');
        indicators[index].classList.add('active');

        currentSlide = index;
    }

    function nextSlide() {
        const nextIndex = (currentSlide + 1) % slides.length;
        showSlide(nextIndex);
    }

    function startCarousel() {
        carouselInterval = setInterval(nextSlide, 4000); // Change slide every 4 seconds
    }

    function stopCarousel() {
        clearInterval(carouselInterval);
    }

    // Initialize carousel
    showSlide(0);
    startCarousel();

    // Handle indicator clicks
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', function() {
            showSlide(index);
            stopCarousel();
            startCarousel(); // Restart auto-play
        });
    });

    // Pause carousel on hover
    carousel.addEventListener('mouseenter', stopCarousel);
    carousel.addEventListener('mouseleave', startCarousel);

    // Touch/swipe support for mobile
    let startX = 0;
    let endX = 0;

    carousel.addEventListener('touchstart', function(e) {
        startX = e.touches[0].clientX;
        stopCarousel();
    });

    carousel.addEventListener('touchend', function(e) {
        endX = e.changedTouches[0].clientX;
        const diff = startX - endX;

        if (Math.abs(diff) > 50) { // Minimum swipe distance
            if (diff > 0) {
                // Swipe left - next slide
                nextSlide();
            } else {
                // Swipe right - previous slide
                const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(prevIndex);
            }
        }

        startCarousel(); // Restart auto-play
    });

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            const prevIndex = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prevIndex);
            stopCarousel();
            startCarousel();
        } else if (e.key === 'ArrowRight') {
            nextSlide();
            stopCarousel();
            startCarousel();
        }
    });
}

// ===== NAVIGATION PROGRESS BAR =====
function initNavigationProgress() {
    const progressBar = document.getElementById('nav-progress');
    if (!progressBar) return;

    function updateProgress() {
        const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (window.scrollY / windowHeight) * 100;
        progressBar.style.width = scrolled + '%';
    }

    window.addEventListener('scroll', updateProgress);
    updateProgress(); // Initial call
}

// ===== SEARCH FUNCTIONALITY =====
function initSearchFunctionality() {
    const searchInput = document.querySelector('.search-input');
    if (!searchInput) return;

    let searchTimeout;

    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        const query = this.value.trim();

        if (query.length < 2) return;

        searchTimeout = setTimeout(() => {
            performSearch(query);
        }, 300);
    });

    searchInput.addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            const query = this.value.trim();
            if (query.length >= 2) {
                performSearch(query);
            }
        }
    });
}

function performSearch(query) {
    // Simple search functionality - can be enhanced with actual search API
    const searchableContent = [
        { title: 'Lightning Protection', url: 'products.php', type: 'product' },
        { title: 'Surge Protection', url: 'products.php', type: 'product' },
        { title: 'Grounding Systems', url: 'products.php', type: 'product' },
        { title: 'About Us', url: 'about.php', type: 'page' },
        { title: 'Services', url: 'services.php', type: 'page' },
        { title: 'Contact', url: 'contact.php', type: 'page' },
        { title: 'Corporate', url: 'about.php', type: 'page' },
        { title: 'Products', url: 'products.php', type: 'page' }
    ];

    const results = searchableContent.filter(item =>
        item.title.toLowerCase().includes(query.toLowerCase())
    );

    if (results.length > 0) {
        // For demo purposes, redirect to first result
        window.location.href = results[0].url;
    } else {
        showNotification('No results found for "' + query + '"', 'info');
    }
}

// ===== ENHANCED NAVIGATION EFFECTS =====
function enhanceNavigation() {
    const header = document.querySelector('.header');
    const navLinks = document.querySelectorAll('.nav-link');

    // Header remains consistent - no scroll effects needed

    // Add ripple effect to nav links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple');

            this.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
}

// Initialize enhanced navigation
document.addEventListener('DOMContentLoaded', enhanceNavigation);

// ===== ERROR HANDLING =====
window.addEventListener('error', function(e) {
    console.error('JavaScript Error:', e.error);
    // You can add error reporting here
});

// ===== CSS ANIMATIONS =====
const style = document.createElement('style');
style.textContent = `
    @keyframes slideInRight {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }
    
    @keyframes slideOutRight {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
    }
    
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }
    
    .pulse {
        animation: pulse 2s ease-in-out infinite;
    }
    
    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.9); }
        to { opacity: 1; transform: scale(1); }
    }
    
    .carousel-slide {
        animation: fadeIn 0.8s ease-in-out;
    }
    
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.3);
        transform: scale(0);
        animation: rippleEffect 0.6s ease-out;
        pointer-events: none;
    }
    
    @keyframes rippleEffect {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }
    
    .nav-link {
        position: relative;
        overflow: hidden;
    }
`;
document.head.appendChild(style);
