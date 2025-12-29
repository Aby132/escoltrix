<?php 
$page_title = "Escoltrix - Lightning Protection Solutions";
$page_description = "Escoltrix manufactures lightning protection, surge protection and grounding systems. Cutting Edge Solution for a Modern Facility.";
include 'includes/header.php'; 
?>

    <!-- Welcome Hero Section -->
    <section id="home" class="welcome-hero">
        <!-- Video Background with Fallback -->
        <div class="hero-video-container">
            <video autoplay muted loop playsinline preload="auto"  class="hero-video">
                <source src="https://www.pexels.com/download/video/3643825/" type="video/mp4">
            </video>
            <div class="video-overlay"></div>
        </div>
        
        <!-- Animated Background Elements -->
        <div class="hero-bg-elements">
            <div class="glow-orb orb-1"></div>
            <div class="glow-orb orb-2"></div>
        </div>
        
        <div class="container">
            <div class="hero-content-centered">
                <!-- Hero Badge -->
                <div class="hero-badge-modern" data-aos="fade-down" data-aos-delay="100">
                    <div class="badge-pulse" style="display: none;"></div>
                    <i class="fas fa-bolt" style="color: #ffd700; font-size: 1.1rem; position: relative; z-index: 2; opacity: 1; display: inline-block;"></i>
                    <span style="color: #e0e6ed; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 2px; position: relative; z-index: 2; display: inline-block;">Lightning Protection Experts</span>
                </div>
                
                <!-- Main Title -->
                <h1 class="hero-title-modern" data-aos="fade-up" data-aos-delay="200">
                    <span class="title-line-1">Welcome to</span>
                    <span class="title-line-2">Escoltrix</span>
                    <span class="title-line-3">Cutting-Edge Solutions for Modern Facilities</span>
                </h1>
                
                <!-- Description -->
                <p class="hero-desc-modern" data-aos="fade-up" data-aos-delay="300">
                    Protect your infrastructure with industry-leading lightning protection, surge protection, and earthing systems. We deliver comprehensive safety solutions that safeguard your facilities, equipment, and personnel from electrical hazards and power quality issues.
                </p>
                
                <!-- CTA Buttons -->
                <div class="hero-cta-modern" data-aos="fade-up" data-aos-delay="500">
                    <a href="products.php" class="cta-btn cta-secondary">
                        <span class="cta-icon"><i class="fas fa-cube"></i></span>
                        <span class="cta-text">Explore Products</span>
                        <span class="cta-arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                    <a href="contact.php" class="cta-btn cta-secondary">
                        <span class="cta-icon"><i class="fas fa-phone-alt"></i></span>
                        <span class="cta-text">Get Free Quote</span>
                        <span class="cta-arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                    <a href="pdf/Escoltrix Profile & Product.pdf" class="cta-btn cta-secondary" download>
                        <span class="cta-icon"><i class="fas fa-file-pdf"></i></span>
                        <span class="cta-text">Download Brochure</span>
                        <span class="cta-arrow"><i class="fas fa-download"></i></span>
                    </a>
                </div>
                
                <!-- Stats Row -->
                <div class="hero-stats-modern" data-aos="fade-up" data-aos-delay="600">
                    <div class="stat-card">
                        <div class="stat-number-modern" data-count="15">0</div>
                        <div class="stat-label-modern">Years Experience</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-card">
                        <div class="stat-number-modern" data-count="10000">0</div>
                        <div class="stat-label-modern">Projects Done</div>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-card">
                        <div class="stat-number-modern" data-count="50">0</div>
                        <div class="stat-label-modern">Countries</div>
                    </div>
                </div>
            </div>
            
            <!-- Features Section -->
            <div class="hero-features-modern" data-aos="fade-up" data-aos-delay="700">
                <div class="feature-card-modern">
                    <div class="feature-icon-modern">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="feature-content-modern">
                        <h3>Comprehensive Protection</h3>
                        <p>Complete facility protection with integrated systems</p>
                    </div>
                </div>
                
                <div class="feature-card-modern">
                    <div class="feature-icon-modern">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <div class="feature-content-modern">
                        <h3>Advanced Technology</h3>
                        <p>Cutting-edge Armour Rings® protection</p>
                    </div>
                </div>
                
                <div class="feature-card-modern">
                    <div class="feature-icon-modern">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <div class="feature-content-modern">
                        <h3>Expert Installation</h3>
                        <p>Professional installation & maintenance</p>
                    </div>
                </div>
                
                <div class="feature-card-modern">
                    <div class="feature-icon-modern">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <div class="feature-content-modern">
                        <h3>Global Presence</h3>
                        <p>International reach with local support</p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <!-- Armour Rings Protection - Redesigned Asymmetric Responsive -->
    <section id="armour-rings-redux">
        <style>
            /* SCOPED CRITICAL CSS */
            #armour-rings-redux {
                position: relative;
                padding: 6rem 0;
                background-color: #0f172a; /* Fallback */
                background: linear-gradient(180deg, #0f172a 0%, #1e293b 100%);
                color: #f8fafc;
                overflow: hidden;
                font-family: 'Inter', sans-serif;
            }

            /* Animated Background Elements */
            #armour-rings-redux .ar-bg-glow {
                position: absolute;
                width: 600px;
                height: 600px;
                background: radial-gradient(circle, rgba(59, 130, 246, 0.15) 0%, transparent 70%);
                top: -10%;
                right: -10%;
                border-radius: 50%;
                z-index: 1;
                pointer-events: none;
            }

            #armour-rings-redux .ar-bg-line {
                position: absolute;
                top: 0;
                left: 10%;
                width: 1px;
                height: 100%;
                background: linear-gradient(to bottom, transparent, rgba(255, 255, 255, 0.05), transparent);
                z-index: 1;
            }

            #armour-rings-redux .ar-container-redux {
                max-width: 1280px;
                margin: 0 auto;
                padding: 0 1.5rem;
                position: relative;
                z-index: 10;
            }

            /* Header */
            #armour-rings-redux .ar-header {
                text-align: center;
                max-width: 800px;
                margin: 0 auto 5rem;
            }

            #armour-rings-redux .ar-chip-redux {
                display: inline-block;
                padding: 0.5rem 1.25rem;
                background: rgba(255, 107, 53, 0.1);
                border: 1px solid rgba(255, 107, 53, 0.2);
                border-radius: 100px;
                font-size: 0.875rem;
                font-weight: 600;
                color: #ff8c5a;
                margin-bottom: 1.5rem;
                text-transform: uppercase;
                letter-spacing: 1px;
                backdrop-filter: blur(5px);
            }

            #armour-rings-redux .ar-title {
                font-size: 3.5rem;
                font-weight: 800;
                line-height: 1.1;
                margin-bottom: 1.5rem;
                background: linear-gradient(135deg, #ffffff 30%, #94a3b8 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                letter-spacing: -1px;
            }

            #armour-rings-redux .ar-subtitle {
                font-size: 1.125rem;
                color: #cbd5e1;
                line-height: 1.7;
                font-weight: 300;
            }

            /* Main Grid */
            #armour-rings-redux .ar-main-grid {
                display: grid;
                grid-template-columns: 1.2fr 1fr;
                gap: 4rem;
                align-items: start;
                margin-bottom: 5rem;
            }

            /* Steps Container */
            #armour-rings-redux .ar-steps-wrapper {
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
                position: relative;
            }

            /* Connecting Line */
            #armour-rings-redux .ar-steps-line {
                position: absolute;
                top: 2rem;
                left: 2.25rem;
                width: 2px;
                height: calc(100% - 4rem);
                background: linear-gradient(to bottom, #ff6b35, #ffd700, transparent);
                z-index: 0;
            }

            /* Individual Step Card */
            #armour-rings-redux .ar-step-card {
                position: relative;
                display: flex;
                gap: 1.5rem;
                background: rgba(30, 41, 59, 0.4);
                border: 1px solid rgba(255, 255, 255, 0.08);
                padding: 2rem;
                border-radius: 16px;
                backdrop-filter: blur(12px);
                transition: transform 0.3s ease, background 0.3s ease;
                z-index: 1;
            }

            #armour-rings-redux .ar-step-card:hover {
                background: rgba(30, 41, 59, 0.7);
                transform: translateX(10px);
                border-color: rgba(255, 255, 255, 0.15);
            }

            /* Step Number/Icon Box */
            #armour-rings-redux .ar-step-icon-box {
                flex-shrink: 0;
                width: 64px;
                height: 64px;
                background: linear-gradient(135deg, #1e293b, #0f172a);
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.5rem;
                color: #ffd700;
                position: relative;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            }

            #armour-rings-redux .ar-step-icon-box::after {
                content: attr(data-step);
                position: absolute;
                top: -8px;
                right: -8px;
                background: #ff6b35;
                color: white;
                font-size: 0.75rem;
                font-weight: 700;
                width: 24px;
                height: 24px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                border: 2px solid #0f172a;
            }

            /* Step Content */
            #armour-rings-redux .ar-step-content {
                flex: 1;
            }

            #armour-rings-redux .ar-step-badge {
                font-size: 0.75rem;
                text-transform: uppercase;
                letter-spacing: 0.05em;
                color: #94a3b8;
                font-weight: 600;
                margin-bottom: 0.5rem;
                display: block;
            }

            #armour-rings-redux .ar-step-title {
                font-size: 1.25rem;
                font-weight: 700;
                color: white;
                margin-bottom: 0.75rem;
            }

            #armour-rings-redux .ar-step-list {
                list-style: none;
                margin: 0;
                padding: 0;
                display: flex;
                flex-wrap: wrap;
                gap: 0.75rem;
            }

            #armour-rings-redux .ar-step-list li {
                font-size: 0.875rem;
                color: #cbd5e1;
                display: flex;
                align-items: center;
                gap: 0.5rem;
                background: rgba(255, 255, 255, 0.05);
                padding: 0.25rem 0.75rem;
                border-radius: 6px;
            }

            #armour-rings-redux .ar-step-list li i {
                color: #4ade80;
                font-size: 0.75rem;
            }

            /* Media Side */
            #armour-rings-redux .ar-media-wrapper {
                position: sticky;
                top: 2rem;
                display: flex;
                flex-direction: column;
                gap: 1.5rem;
            }

            #armour-rings-redux .ar-video-card {
                position: relative;
                border-radius: 24px;
                overflow: hidden;
                border: 1px solid rgba(255, 255, 255, 0.1);
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
                aspect-ratio: 16/9;
            }

            #armour-rings-redux .ar-video-player {
                width: 100%;
                height: 100%;
                object-fit: cover;
                display: block;
            }

            #armour-rings-redux .ar-image-card {
                background: linear-gradient(135deg, #1e293b, #0f172a);
                border: 1px solid rgba(255, 255, 255, 0.05);
                border-radius: 16px;
                overflow: hidden;
                padding: 0;
                display: flex;
                flex-direction: column;
            }

            #armour-rings-redux .ar-card-image-wrapper {
                width: 100%;
                height: 200px;
                overflow: hidden;
                position: relative;
            }

            #armour-rings-redux .ar-feature-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.5s ease;
            }

            #armour-rings-redux .ar-image-card:hover .ar-feature-img {
                transform: scale(1.05);
            }

            #armour-rings-redux .ar-card-content {
                padding: 1.5rem;
                position: relative;
            }

            #armour-rings-redux .ar-card-content::before {
                content: '';
                position: absolute;
                top: 1.5rem;
                left: 0;
                width: 4px;
                height: calc(100% - 3rem);
                background: #ff6b35;
            }

            #armour-rings-redux .ar-image-tag {
                display: inline-block;
                background: #ff6b35;
                color: white;
                font-size: 0.7rem;
                font-weight: 700;
                padding: 0.2rem 0.6rem;
                border-radius: 4px;
                text-transform: uppercase;
                margin-bottom: 1rem;
            }

            /* Stats Strip */
            #armour-rings-redux .ar-stats-strip {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1.5rem;
                background: rgba(255, 255, 255, 0.03);
                border: 1px solid rgba(255, 255, 255, 0.05);
                padding: 2rem;
                border-radius: 20px;
                backdrop-filter: blur(10px);
            }

            #armour-rings-redux .ar-stat-item {
                display: flex;
                align-items: center;
                gap: 1rem;
            }

            #armour-rings-redux .ar-stat-icon {
                width: 48px;
                height: 48px;
                border-radius: 50%;
                background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
                display: flex;
                align-items: center;
                justify-content: center;
                color: #ff6b35;
                font-size: 1.25rem;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }

            #armour-rings-redux .ar-stat-info h5 {
                font-size: 1.1rem;
                font-weight: 700;
                color: white;
                margin: 0;
            }

            #armour-rings-redux .ar-stat-info p {
                font-size: 0.8rem;
                color: #94a3b8;
                margin: 0;
                text-transform: uppercase;
                letter-spacing: 0.5px;
            }

            /* Responsive */
            @media (max-width: 991px) {
                #armour-rings-redux .ar-main-grid {
                    grid-template-columns: 1fr;
                    gap: 3rem;
                }
                
                #armour-rings-redux .ar-title {
                    font-size: 2.5rem;
                }

                #armour-rings-redux .ar-media-wrapper {
                    position: relative;
                    top: 0;
                    order: -1;
                }
                
                #armour-rings-redux .ar-steps-line {
                    display: none;
                }
            }

            @media (max-width: 600px) {
                #armour-rings-redux .ar-step-card {
                    flex-direction: column;
                    gap: 1rem;
                    text-align: center;
                }
                
                #armour-rings-redux .ar-step-icon-box {
                    margin: 0 auto;
                }
                
                #armour-rings-redux .ar-step-list {
                    justify-content: center;
                }
                
                #armour-rings-redux .ar-stat-item {
                    flex-direction: column;
                    text-align: center;
                }
            }
        </style>

        <div class="ar-bg-glow"></div>
        <div class="ar-bg-line"></div>

        <div class="ar-container-redux">
            <!-- Header -->
            <div class="ar-header" data-aos="fade-up">
                <span class="ar-chip-redux">Engineered Defence System</span>
                <h2 class="ar-title">Armour Rings<sup>®™</sup></h2>
                <p class="ar-subtitle">A unified process that intercepts strikes, suppresses surges, and safely dissipates energy to ground—built for modern facilities and mission-critical uptime.</p>
            </div>

            <!-- Content Grid -->
            <div class="ar-main-grid">
                
                <!-- Steps Column -->
                <div class="ar-steps-wrapper">
                    <div class="ar-steps-line"></div>

                    <!-- Step 01 -->
                    <div class="ar-step-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="ar-step-icon-box" data-step="1">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div class="ar-step-content">
                            <span class="ar-step-badge">Phase One</span>
                            <h3 class="ar-step-title">Precision Interception</h3>
                            <ul class="ar-step-list">
                                <li><i class="fas fa-check"></i> Advanced ESE Terminals</li>
                                <li><i class="fas fa-check"></i> Franklin Rod Arrays</li>
                                <li><i class="fas fa-check"></i> Conductive Roof Mesh</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step 02 -->
                    <div class="ar-step-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="ar-step-icon-box" data-step="2">
                            <i class="fas fa-shield-virus"></i>
                        </div>
                        <div class="ar-step-content">
                            <span class="ar-step-badge">Phase Two</span>
                            <h3 class="ar-step-title">Active Surge Suppression</h3>
                            <ul class="ar-step-list">
                                <li><i class="fas fa-check"></i> Coordinated T1/T2/T3 SPDs</li>
                                <li><i class="fas fa-check"></i> Signal Line Defense</li>
                                <li><i class="fas fa-check"></i> Clean Power Delivery</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step 03 -->
                    <div class="ar-step-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="ar-step-icon-box" data-step="3">
                            <i class="fas fa-project-diagram"></i>
                        </div>
                        <div class="ar-step-content">
                            <span class="ar-step-badge">Phase Three</span>
                            <h3 class="ar-step-title">Safe Dissipation</h3>
                            <ul class="ar-step-list">
                                <li><i class="fas fa-check"></i> Copper Bonded Grids</li>
                                <li><i class="fas fa-check"></i> Ground Enhancement</li>
                                <li><i class="fas fa-check"></i> Equipotential Bonding</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Media Column -->
                <div class="ar-media-wrapper">
                    <!-- Video -->
                    <div class="ar-video-card" data-aos="zoom-in" data-aos-delay="400">
                        <video autoplay muted loop playsinline class="ar-video-player" id="armourVideo">
                            <source src="Images/Lightning_Protection_System_Video_Generation.mp4" type="video/mp4">
                        </video>
                    </div>

                    <!-- Extra Info Card with Image -->
                    <div class="ar-image-card" data-aos="fade-left" data-aos-delay="500">
                        <div class="ar-card-image-wrapper">
                            <img src="Images/armour-ring.jpg" alt="Armour Ring Protection" class="ar-feature-img">
                        </div>
                        <div class="ar-card-content">
                            <span class="ar-image-tag">Live Deployment</span>
                            <h4 style="color: white; margin: 0 0 0.5rem 0;">Field Verified Engineering</h4>
                            <p style="color: #94a3b8; font-size: 0.9rem; margin: 0;">Our layouts are modelled using advanced simulation software and verified on-site for guaranteed resistivity compliance.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Stats Banner -->
            <div class="ar-stats-strip" data-aos="fade-up" data-aos-delay="600">
                <div class="ar-stat-item">
                    <div class="ar-stat-icon"><i class="fas fa-certificate"></i></div>
                    <div class="ar-stat-info">
                        <h5>IEC 62305</h5>
                        <p>Global Standard</p>
                    </div>
                </div>
                <div class="ar-stat-item">
                    <div class="ar-stat-icon"><i class="fas fa-award"></i></div>
                    <div class="ar-stat-info">
                        <h5>NFC 17-102</h5>
                        <p>ESE Certified</p>
                    </div>
                </div>
                <div class="ar-stat-item">
                    <div class="ar-stat-icon"><i class="fas fa-shield-alt"></i></div>
                    <div class="ar-stat-info">
                        <h5>99.9%</h5>
                        <p>Reliability</p>
                    </div>
                </div>
                <div class="ar-stat-item">
                    <div class="ar-stat-icon"><i class="fas fa-clock"></i></div>
                    <div class="ar-stat-info">
                        <h5>25 Years</h5>
                        <p>Warranty</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <script>
    (function(){
        var form = document.getElementById('contactForm');
        if (!form) { return; }

        function setErr(el, msg){
            clearErr(el);
            var small = document.createElement('small');
            small.className = 'field-error';
            small.style.color = '#dc3545';
            small.appendChild(document.createTextNode(msg));
            el.parentNode.appendChild(small);
            el.style.borderColor = '#dc3545';
        }
        function clearErr(el){
            el.style.borderColor = '';
            var s = el.parentNode.querySelector('.field-error');
            if (s) { s.parentNode.removeChild(s); }
        }
        function validate(el){
            var name = el.name; var v = (el.value||'').replace(/^\s+|\s+$/g,'');
            if (name==='name'){ if (v.length<2){ setErr(el,'Enter at least 2 characters'); return false; } }
            if (name==='email'){ var re=/^[^\s@]+@[^\s@]+\.[^\s@]+$/; if (!re.test(v)){ setErr(el,'Enter a valid email'); return false; } }
            if (name==='mobile'){ var re2=/^[+]?\d{7,16}$/; if (!re2.test(v.replace(/\s/g,''))){ setErr(el,'Enter a valid phone'); return false; } }
            if (name==='subject'){ if (!v){ setErr(el,'Please select a subject'); return false; } }
            if (name==='message'){ if (v.length<10){ setErr(el,'Enter at least 10 characters'); return false; } }
            clearErr(el); return true;
        }
        var inputs = form.querySelectorAll('input[required], textarea[required], select[required]');
        for (var i=0;i<inputs.length;i++){
            (function(el){
                el.addEventListener('input', function(){ validate(el); });
                el.addEventListener('blur', function(){ validate(el); });
            })(inputs[i]);
        }

        function notify(msg, type){
            var n = document.createElement('div');
            n.className = 'notification notification-' + (type||'info');
            n.style.cssText = 'position:fixed;top:100px;right:20px;background:#fff;padding:12px 16px;border-radius:8px;box-shadow:0 4px 20px rgba(0,0,0,.15);z-index:10000;display:flex;gap:8px;align-items:center;min-width:280px;border-left:4px solid ' + (type==='success'?'#28a745':'#dc3545');
            var strong = document.createElement('span');
            strong.style.fontWeight = '600';
            strong.style.color = (type==='success'?'#28a745':'#dc3545');
            strong.appendChild(document.createTextNode(type==='success'?'Success:':'Error:'));
            var span = document.createElement('span');
            span.appendChild(document.createTextNode(msg));
            n.appendChild(strong); n.appendChild(span);
            document.body.appendChild(n);
            setTimeout(function(){ if (n && n.parentNode) n.parentNode.removeChild(n); }, 5000);
        }

        function encodeFormData(form){
            var pairs = [];
            for (var i=0;i<form.elements.length;i++){
                var f = form.elements[i]; if (!f.name) continue;
                if ((f.type === 'checkbox' || f.type === 'radio') && !f.checked) continue;
                pairs.push(encodeURIComponent(f.name)+'='+encodeURIComponent(f.value));
            }
            return pairs.join('&');
        }

        form.addEventListener('submit', function(e){
            e.preventDefault();
            var ok = true; for (var i=0;i<inputs.length;i++){ if(!validate(inputs[i])) ok=false; }
            if (!ok) return;

            var btn = form.querySelector('button[type="submit"]');
            var original = btn.innerHTML; btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...'; btn.disabled = true;

            // Prefer fetch if available, fallback to XHR for older Edge
            if (window.fetch && window.FormData){
                var fd = new FormData(form);
                fetch('contact_handler.php', { method:'POST', body: fd })
                    .then(function(r){ return r.json(); })
                    .then(function(data){
                        if (data && data.success){
                            notify('Thank you! Your message has been sent successfully.', 'success');
                            form.reset();
                        } else {
                            notify((data && data.message) || 'Failed to send message. Please try again later.', 'error');
                        }
                    })
                    .catch(function(){ notify('Failed to send message. Please try again later.', 'error'); })
                    .finally ?
                        (function(){ btn.innerHTML = original; btn.disabled = false; })() :
                        (btn.innerHTML = original, btn.disabled = false);
            } else {
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'contact_handler.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function(){
                    if (xhr.readyState === 4){
                        try {
                            var data = JSON.parse(xhr.responseText);
                            if (xhr.status === 200 && data && data.success){
                                notify('Thank you! Your message has been sent successfully.', 'success');
                                form.reset();
                            } else {
                                notify((data && data.message) || 'Failed to send message. Please try again later.', 'error');
                            }
                        } catch(e){
                            notify('Failed to send message. Please try again later.', 'error');
                        }
                        btn.innerHTML = original; btn.disabled = false;
                    }
                };
                xhr.send(encodeFormData(form));
            }
        });
    })();
    </script>

    <!-- Modern Interactive JavaScript -->
    <script>
    (function() {
        'use strict';
        
        // Force video autoplay
        var armourVideo = document.getElementById('armourVideo');
        if (armourVideo) {
            armourVideo.play().catch(function(error) {
                console.log('Video autoplay prevented:', error);
            });
            
            // Ensure video plays when visible
            if ('IntersectionObserver' in window) {
                var videoObserver = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            armourVideo.play();
                        }
                    });
                }, { threshold: 0.3 });
                videoObserver.observe(armourVideo);
            }
        }
        
        // Intersection Observer for fade-in animations
        if ('IntersectionObserver' in window) {
            var observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            var animatedElements = document.querySelectorAll('.feature-card-modern, .product-card, .industry-card, .news-item');
            animatedElements.forEach(function(el) {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        }
        
        // Add ripple effect to buttons
        var buttons = document.querySelectorAll('.btn, .cta-btn');
        buttons.forEach(function(btn) {
            btn.addEventListener('click', function(e) {
                var ripple = document.createElement('span');
                var rect = this.getBoundingClientRect();
                var size = Math.max(rect.width, rect.height);
                var x = e.clientX - rect.left - size / 2;
                var y = e.clientY - rect.top - size / 2;
                
                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.style.position = 'absolute';
                ripple.style.borderRadius = '50%';
                ripple.style.background = 'rgba(255, 255, 255, 0.4)';
                ripple.style.transform = 'scale(0)';
                ripple.style.animation = 'ripple 0.6s ease-out';
                ripple.style.pointerEvents = 'none';
                
                this.style.position = 'relative';
                this.style.overflow = 'hidden';
                this.appendChild(ripple);
                
                setTimeout(function() {
                    ripple.remove();
                }, 600);
            });
        });
        
        // Add CSS for ripple animation
        var style = document.createElement('style');
        style.textContent = '@keyframes ripple { to { transform: scale(4); opacity: 0; } }';
        document.head.appendChild(style);
        
        // Smooth scroll for anchor links
        var anchorLinks = document.querySelectorAll('a[href^="#"]');
        anchorLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                var href = this.getAttribute('href');
                if (href !== '#' && href.length > 1) {
                    var target = document.querySelector(href);
                    if (target) {
                        e.preventDefault();
                        var headerOffset = 80;
                        var elementPosition = target.getBoundingClientRect().top;
                        var offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                        
                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
        
        // Add counter animation to stats
        function animateCounter(element, target) {
            var current = 0;
            var increment = target / 50;
            var timer = setInterval(function() {
                current += increment;
                if (current >= target) {
                    element.textContent = target;
                    clearInterval(timer);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 30);
        }
        
        // Observe stats for counter animation (supports both old and new stat classes)
        if ('IntersectionObserver' in window) {
            var statsObserver = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var statNumber = entry.target.querySelector('.stat-number-modern, .stat-number');
                        if (statNumber && !statNumber.dataset.animated) {
                            var dataCount = statNumber.getAttribute('data-count');
                            var number = dataCount ? parseInt(dataCount) : parseInt(statNumber.textContent.replace(/\D/g, ''));
                            if (number) {
                                statNumber.dataset.animated = 'true';
                                statNumber.textContent = '0';
                                animateCounter(statNumber, number);
                            }
                        }
                    }
                });
            }, { threshold: 0.5 });
            
            var statItems = document.querySelectorAll('.stat-card, .stat-item');
            statItems.forEach(function(item) {
                statsObserver.observe(item);
            });
        }
        
        // Parallax effect for hero orbs on mouse move
        var hero = document.querySelector('.welcome-hero');
        if (hero) {
            hero.addEventListener('mousemove', function(e) {
                var rect = hero.getBoundingClientRect();
                var x = (e.clientX - rect.left) / rect.width - 0.5;
                var y = (e.clientY - rect.top) / rect.height - 0.5;
                
                var orbs = hero.querySelectorAll('.glow-orb');
                orbs.forEach(function(orb, index) {
                    var multiplier = (index + 1) * 20;
                    orb.style.transform = 'translate(' + (x * multiplier) + 'px, ' + (y * multiplier) + 'px)';
                });
            });
        }
        
        // Add tilt effect to feature cards
        var cards = document.querySelectorAll('.feature-card-modern, .product-card, .industry-card');
        cards.forEach(function(card) {
            card.addEventListener('mousemove', function(e) {
                var rect = card.getBoundingClientRect();
                var x = e.clientX - rect.left;
                var y = e.clientY - rect.top;
                var centerX = rect.width / 2;
                var centerY = rect.height / 2;
                var rotateX = (y - centerY) / 15;
                var rotateY = (centerX - x) / 15;
                
                card.style.transform = 'perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
            });
        });
        
    })();
    </script>

    <!-- News & Updates Section with Image Gallery -->
    <section class="news-gallery-section">
        <div class="container">
            <div class="news-gallery-grid">
                <!-- Left Side - News & Updates -->
                <div class="news-updates-full" data-aos="fade-right">
                    <h2>News & Updates</h2>
                    <p class="news-intro">Stay updated with our latest announcements and industry news.</p>
                    
                    <div class="news-scroll-container">
                        <div class="news-list-modern news-scroll-content">
                            <div class="news-item-modern">
                                <div class="news-date-modern">
                                    <span class="date-day">15</span>
                                    <span class="date-month">JAN</span>
                                </div>
                                <div class="news-content-modern">
                                    <h4>New Lightning Protection Standards Released</h4>
                                    <p>This is a trial news item to test the news section functionality and display.</p>
                                    <a href="#" class="news-link">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            
                            <div class="news-item-modern">
                                <div class="news-date-modern">
                                    <span class="date-day">10</span>
                                    <span class="date-month">JAN</span>
                                </div>
                                <div class="news-content-modern">
                                    <h4>Armour Rings Technology Certification</h4>
                                    <p>Sample content for testing purposes - this will be replaced with actual news updates.</p>
                                    <a href="#" class="news-link">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            
                            <div class="news-item-modern">
                                <div class="news-date-modern">
                                    <span class="date-day">05</span>
                                    <span class="date-month">JAN</span>
                                </div>
                                <div class="news-content-modern">
                                    <h4>Global Expansion Announcement</h4>
                                    <p>Trial announcement: Testing the news ticker scroll functionality and layout design.</p>
                                    <a href="#" class="news-link">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            
                            <div class="news-item-modern">
                                <div class="news-date-modern">
                                    <span class="date-day">28</span>
                                    <span class="date-month">DEC</span>
                                </div>
                                <div class="news-content-modern">
                                    <h4>Industry Safety Achievement Award</h4>
                                    <p>Placeholder content for demonstration purposes - actual news will be added later.</p>
                                    <a href="#" class="news-link">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            
                            <!-- Duplicate items for seamless loop -->
                            <div class="news-item-modern">
                                <div class="news-date-modern">
                                    <span class="date-day">15</span>
                                    <span class="date-month">JAN</span>
                                </div>
                                <div class="news-content-modern">
                                    <h4>New Lightning Protection Standards Released</h4>
                                    <p>This is a trial news item to test the news section functionality and display.</p>
                                    <a href="#" class="news-link">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            
                            <div class="news-item-modern">
                                <div class="news-date-modern">
                                    <span class="date-day">10</span>
                                    <span class="date-month">JAN</span>
                                </div>
                                <div class="news-content-modern">
                                    <h4>Armour Rings Technology Certification</h4>
                                    <p>Sample content for testing purposes - this will be replaced with actual news updates.</p>
                                    <a href="#" class="news-link">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                
                </div>
                
                <!-- Right Side - Overlapping Image Gallery -->
                <div class="lightning-gallery" data-aos="fade-left">
                    <div class="gallery-overlay-layout">
                        <div class="gallery-img img-1">
                            <img src="Images/im11.jpg" alt="Lightning Strike">
                        </div>
                        <div class="gallery-img img-2">
                            <img src="https://images.pexels.com/photos/258173/pexels-photo-258173.jpeg" alt="Protection System">
                        </div>
                        <div class="gallery-img img-3">
                            <img src="https://images.pexels.com/photos/2635595/pexels-photo-2635595.jpeg" alt="Industrial Facility">
                        </div>
                        <div class="gallery-img img-4">
                            <img src="https://images.pexels.com/photos/2693284/pexels-photo-2693284.jpeg" alt="Grounding System">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section Redesigned -->
    <section id="products-redux" class="section-redux">
        <style>
            /* Global Redux Section Styles */
            .section-redux {
                position: relative;
                padding: 6rem 0;
                background-color: #ffffff;
                font-family: 'Inter', sans-serif;
                overflow: hidden;
            }

            .container-redux {
                max-width: 1280px;
                margin: 0 auto;
                padding: 0 1.5rem;
                position: relative;
                z-index: 2;
            }

            .section-header-redux {
                text-align: center;
                max-width: 700px;
                margin: 0 auto 4rem;
            }

            .section-title-redux {
                font-size: 2.5rem;
                font-weight: 800;
                color: #0f172a;
                margin-bottom: 1rem;
                letter-spacing: -1px;
            }

            .section-subtitle-redux {
                font-size: 1.1rem;
                color: #64748b;
                line-height: 1.6;
            }

            .divider-redux {
                width: 60px;
                height: 4px;
                background: linear-gradient(90deg, #ff6b35, #ffd700);
                margin: 1.5rem auto 0;
                border-radius: 2px;
            }

            /* Products Grid */
            .products-grid-redux {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 2rem;
            }

            .product-card-redux {
                background: white;
                border-radius: 16px;
                overflow: hidden;
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
                border: 1px solid #e2e8f0;
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                display: flex;
                flex-direction: column;
                position: relative;
                group: 'product';
            }

            .product-card-redux:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
                border-color: #cbd5e1;
            }

            .product-img-wrapper {
                height: 220px;
                overflow: hidden;
                background: #f1f5f9;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 1.5rem;
            }

            .product-img-redux {
                max-width: 100%;
                max-height: 100%;
                object-fit: contain;
                transition: transform 0.6s ease;
                /* Mix blend mode can help with transparent pngs on white/light bg */
                mix-blend-mode: multiply;
            }

            .product-card-redux:hover .product-img-redux {
                transform: scale(1.1);
            }

            .product-content-redux {
                padding: 1.5rem;
                flex: 1;
                display: flex;
                flex-direction: column;
            }

            .product-title-redux {
                font-size: 1.1rem;
                font-weight: 700;
                color: #1e293b;
                margin-bottom: 0.75rem;
                line-height: 1.4;
            }

            .product-link-redux {
                margin-top: auto;
                color: #2563eb;
                font-weight: 600;
                font-size: 0.9rem;
                text-decoration: none;
                display: inline-flex;
                align-items: center;
                gap: 0.5rem;
                transition: color 0.3s ease;
            }

            .product-link-redux:hover {
                color: #1d4ed8;
            }

            .product-link-redux i {
                transition: transform 0.3s ease;
            }

            .product-card-redux:hover .product-link-redux i {
                transform: translateX(4px);
            }
        </style>

        <div class="container-redux">
            <div class="section-header-redux" data-aos="fade-up">
                <h2 class="section-title-redux">Product Categories</h2>
                <p class="section-subtitle-redux">Explore our comprehensive range of certified protection systems designed for maximum safety and durability.</p>
                <div class="divider-redux"></div>
            </div>
            
            <div class="products-grid-redux">
                <!-- Product 1 -->
                <div class="product-card-redux" data-aos="fade-up" data-aos-delay="100">
                    <div class="product-img-wrapper">
                        <img src="Images\ARDO CB Copper Bonded Rod.png" alt="ARDO CB Copper Bonded Rod" class="product-img-redux">
                    </div>
                    <div class="product-content-redux">
                        <h3 class="product-title-redux">ARDO CB Copper Bonded Rod</h3>
                        <a href="product-detail.php?slug=ardo-cb-copper-bonded-rod" class="product-link-redux">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Product 2 -->
                <div class="product-card-redux" data-aos="fade-up" data-aos-delay="150">
                    <div class="product-img-wrapper">
                        <img src="Images\NEXO EPB.png" alt="NEXO EPB" class="product-img-redux">
                    </div>
                    <div class="product-content-redux">
                        <h3 class="product-title-redux">NEXO EPB</h3>
                        <a href="product-detail.php?slug=nexo-epb" class="product-link-redux">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Product 3 -->
                <div class="product-card-redux" data-aos="fade-up" data-aos-delay="200">
                    <div class="product-img-wrapper">
                        <img src="Images\RIPO SHIELD din rail spd serie....png" alt="RIPO SHIELD DIN Rail SPD Series" class="product-img-redux">
                    </div>
                    <div class="product-content-redux">
                        <h3 class="product-title-redux">RIPO SHIELD DIN Rail SPD</h3>
                        <a href="product-detail.php?slug=ripo-shield-din-rail-spd" class="product-link-redux">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Product 4 -->
                <div class="product-card-redux" data-aos="fade-up" data-aos-delay="250">
                    <div class="product-img-wrapper">
                        <img src="Images\Nexo FR.png" alt="Nexo FR Franklin Rod" class="product-img-redux">
                    </div>
                    <div class="product-content-redux">
                        <h3 class="product-title-redux">Nexo FR Franklin Rod</h3>
                        <a href="product-detail.php?slug=nexo-fr" class="product-link-redux">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Product 5 -->
                <div class="product-card-redux" data-aos="fade-up" data-aos-delay="300">
                    <div class="product-img-wrapper">
                        <img src="Images\NEXO FSD ESE Terminal.png" alt="NEXO FSD ESE Terminal" class="product-img-redux">
                    </div>
                    <div class="product-content-redux">
                        <h3 class="product-title-redux">NEXO FSD ESE Terminal</h3>
                        <a href="product-detail.php?slug=nexo-fsd-ese-terminal" class="product-link-redux">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Product 6 -->
                <div class="product-card-redux" data-aos="fade-up" data-aos-delay="350">
                    <div class="product-img-wrapper">
                        <img src="Images\RS WMT SPDs.png" alt="RS WMT SPDs" class="product-img-redux">
                    </div>
                    <div class="product-content-redux">
                        <h3 class="product-title-redux">RS WMT SPDs</h3>
                        <a href="product-detail.php?slug=rs-wmt-spds" class="product-link-redux">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Product 7 -->
                <div class="product-card-redux" data-aos="fade-up" data-aos-delay="400">
                    <div class="product-img-wrapper">
                        <img src="Images\ARDO FILL Grounding Backfill.png" alt="ARDO FILL Grounding Backfill" class="product-img-redux">
                    </div>
                    <div class="product-content-redux">
                        <h3 class="product-title-redux">ARDO FILL Grounding Backfill</h3>
                        <a href="product-detail.php?slug=ardo-fill-grounding-backfill" class="product-link-redux">
                            View Details <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card-redux" data-aos="fade-up" data-aos-delay="450">
                    <div class="product-img-wrapper">
                        <img src="Images/ardo_exothermic_weld.jpg" alt="Ardo Exothermic Weld" class="product-img-redux">
                    </div>
                    <div class="product-content-redux">
                        <h3 class="product-title-redux">Ardo Exothermic Weld</h3>
                        <a href="pdf/Ardo Exothermic Weld lite.pdf" target="_blank" class="product-link-redux">
                            Download Brochure <i class="fas fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries Section Redesigned -->
    <section id="industries-redux" class="section-redux" style="background-color: #f8fafc;">
        <style>
            .industries-grid-redux {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
                gap: 1.5rem;
            }

            .industry-card-redux {
                background: white;
                padding: 2rem;
                border-radius: 12px;
                border: 1px solid #e2e8f0;
                transition: all 0.3s ease;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                gap: 1rem;
            }

            .industry-card-redux:hover {
                transform: translateY(-5px);
                border-color: #3b82f6;
                box-shadow: 0 10px 30px rgba(59, 130, 246, 0.1);
            }

            .industry-icon-redux {
                width: 64px;
                height: 64px;
                background: rgba(59, 130, 246, 0.1);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.75rem;
                color: #2563eb;
                transition: all 0.3s ease;
                margin-bottom: 0.5rem;
            }

            .industry-card-redux:hover .industry-icon-redux {
                background: #2563eb;
                color: white;
                transform: rotateY(180deg);
            }

            .industry-title-redux {
                font-size: 1.1rem;
                font-weight: 600;
                color: #334155;
                margin: 0;
            }
        </style>
        <div class="container-redux">
            <div class="section-header-redux" data-aos="fade-up">
                <h2 class="section-title-redux">Industries Serviced</h2>
                <div class="divider-redux"></div>
            </div>

            <div class="industries-grid-redux">
                <div class="industry-card-redux" data-aos="fade-up" data-aos-delay="100">
                    <div class="industry-icon-redux"><i class="fas fa-oil-can"></i></div> <!-- Adjusted Icon -->
                    <h3 class="industry-title-redux">Oil & Gas / Petrochemical</h3>
                </div>
                
                <div class="industry-card-redux" data-aos="fade-up" data-aos-delay="200">
                    <div class="industry-icon-redux"><i class="fas fa-satellite-dish"></i></div>
                    <h3 class="industry-title-redux">Telecom & ICT</h3>
                </div>
                
                <div class="industry-card-redux" data-aos="fade-up" data-aos-delay="300">
                    <div class="industry-icon-redux"><i class="fas fa-bolt"></i></div>
                    <h3 class="industry-title-redux">Utilities / Energy</h3>
                </div>
                
                <div class="industry-card-redux" data-aos="fade-up" data-aos-delay="400">
                    <div class="industry-icon-redux"><i class="fas fa-server"></i></div>
                    <h3 class="industry-title-redux">Data Centers</h3>
                </div>
                
                <div class="industry-card-redux" data-aos="fade-up" data-aos-delay="500">
                    <div class="industry-icon-redux"><i class="fas fa-building"></i></div>
                    <h3 class="industry-title-redux">Commercial Facilities</h3>
                </div>
                
                <div class="industry-card-redux" data-aos="fade-up" data-aos-delay="600">
                    <div class="industry-icon-redux"><i class="fas fa-industry"></i></div>
                    <h3 class="industry-title-redux">Process Manufacturing</h3>
                </div>
                
                <div class="industry-card-redux" data-aos="fade-up" data-aos-delay="700">
                    <div class="industry-icon-redux"><i class="fas fa-shield-alt"></i></div>
                    <h3 class="industry-title-redux">Defense & Military</h3>
                </div>
                
                <div class="industry-card-redux" data-aos="fade-up" data-aos-delay="800">
                    <div class="industry-icon-redux"><i class="fas fa-wrench"></i></div>
                    <h3 class="industry-title-redux">Heavy Industrial</h3>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Certificates Infinite Scroll -->
    <section class="certificates-scroller-redux">
        <style>
            .certificates-scroller-redux {
                background: white;
                padding: 2rem 0;
                overflow: hidden;
                border-top: 1px solid #e2e8f0;
                border-bottom: 1px solid #e2e8f0;
            }
            .cert-track-redux {
                display: flex;
                width: max-content;
                animation: scrollCertRedux 40s linear infinite;
                gap: 4rem;
            }
            .cert-track-redux img {
                height: 60px;
                object-fit: contain;
                opacity: 0.7;
                filter: grayscale(100%);
                transition: all 0.3s;
            }
            .cert-track-redux img:hover {
                opacity: 1;
                filter: grayscale(0%);
            }
            @keyframes scrollCertRedux {
                0% { transform: translateX(0); }
                100% { transform: translateX(-50%); }
            }
        </style>
        <div class="cert-track-redux">
            <img src="Images/certificates_banner.png" alt="Certificates">
            <img src="Images/certificates_banner.png" alt="Certificates">
            <img src="Images/certificates_banner.png" alt="Certificates">
            <img src="Images/certificates_banner.png" alt="Certificates">
            <img src="Images/certificates_banner.png" alt="Certificates">
            <img src="Images/certificates_banner.png" alt="Certificates">
            <img src="Images/certificates_banner.png" alt="Certificates">
            <img src="Images/certificates_banner.png" alt="Certificates">
        </div>
    </section>

    <!-- Contact Section Redesigned -->
    <section id="contact-redux" class="section-redux">
        <style>
            /* Contact Specific Scooped CSS */
            #contact-redux {
                background: linear-gradient(135deg, #ffffff 0%, #f1f5f9 100%);
            }

            .contact-wrapper-redux {
                display: grid;
                grid-template-columns: 1fr 1.5fr;
                gap: 4rem;
                align-items: start;
                background: white;
                border-radius: 24px;
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
                padding: 3rem;
                border: 1px solid #e2e8f0;
            }

            .contact-info-panel h3 {
                font-size: 2rem;
                font-weight: 800;
                color: #1e293b;
                margin-bottom: 1rem;
            }

            .contact-info-panel p {
                color: #64748b;
                line-height: 1.6;
                margin-bottom: 2rem;
                font-size: 1.05rem;
            }

            .info-item-redux {
                display: flex;
                align-items: flex-start;
                gap: 1rem;
                margin-bottom: 1.5rem;
            }

            .info-icon-circle {
                width: 48px;
                height: 48px;
                background: rgba(37, 99, 235, 0.1);
                color: #2563eb;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 1.25rem;
                flex-shrink: 0;
            }

            .info-text-redux h4 {
                font-weight: 700;
                color: #1e293b;
                margin: 0 0 0.25rem 0;
                font-size: 1rem;
            }

            .info-text-redux span {
                color: #64748b;
                font-size: 0.95rem;
            }

            /* Form Styles */
            .form-grid-redux {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 1.5rem;
            }

            .form-group-redux {
                margin-bottom: 1.5rem;
            }

            .form-group-redux.full-width {
                grid-column: span 2;
                margin-bottom: 0;
            }

            .input-redux, .textarea-redux, .select-redux {
                width: 100%;
                padding: 1rem 1.25rem;
                border: 1px solid #e2e8f0;
                border-radius: 10px;
                background: #f8fafc;
                font-family: inherit;
                font-size: 1rem;
                color: #1e293b;
                transition: all 0.3s ease;
            }

            .input-redux:focus, .textarea-redux:focus, .select-redux:focus {
                outline: none;
                background: white;
                border-color: #2563eb;
                box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            }

            .submit-btn-redux {
                background: linear-gradient(135deg, #2563eb, #1e40af);
                color: white;
                border: none;
                padding: 1rem 2.5rem;
                font-size: 1rem;
                font-weight: 600;
                border-radius: 50px;
                cursor: pointer;
                transition: all 0.3s ease;
                display: inline-flex;
                align-items: center;
                gap: 0.75rem;
                box-shadow: 0 10px 20px -5px rgba(37, 99, 235, 0.3);
            }

            .submit-btn-redux:hover {
                transform: translateY(-2px);
                box-shadow: 0 15px 30px -5px rgba(37, 99, 235, 0.4);
                background: linear-gradient(135deg, #1e40af, #2563eb);
            }

            @media (max-width: 991px) {
                .contact-wrapper-redux {
                    grid-template-columns: 1fr;
                    padding: 2rem;
                }
                .form-grid-redux {
                    grid-template-columns: 1fr;
                }
                .form-group-redux.full-width {
                    grid-column: span 1;
                }
            }
        </style>
        
        <div class="container-redux">
            <div class="section-header-redux" data-aos="fade-up">
                <h2 class="section-title-redux">Start Your Project</h2>
                <div class="divider-redux"></div>
            </div>

            <div class="contact-wrapper-redux" data-aos="fade-up" data-aos-delay="100">
                <!-- Info Side -->
                <div class="contact-info-panel">
                    <h3>Get in Touch</h3>
                    <p>Have a project in mind? Our engineering team is ready to assist with layouts, risk assessments, and technical specifications.</p>
                    
                    <div class="info-item-redux">
                        <div class="info-icon-circle"><i class="fas fa-envelope"></i></div>
                        <div class="info-text-redux">
                            <h4>Email Us</h4>
                            <span>info@escoltrix.com</span>
                        </div>
                    </div>
                </div>

                <!-- Form Side -->
                <div class="contact-form-panel">
                    <form class="contact-form-redux" id="contactForm" action="contact_handler.php" method="POST">
                        <div class="form-grid-redux">
                            <div class="form-group-redux">
                                <input type="text" id="name" name="name" class="input-redux" placeholder="Your Name *" required>
                            </div>
                            <div class="form-group-redux">
                                <input type="text" id="company" name="company" class="input-redux" placeholder="Company Name">
                            </div>
                            <div class="form-group-redux">
                                <input type="email" id="email" name="email" class="input-redux" placeholder="Your Email *" required>
                            </div>
                            <div class="form-group-redux">
                                <input type="tel" id="mobile" name="mobile" class="input-redux" placeholder="Phone Number *" required>
                            </div>
                            <div class="form-group-redux full-width">
                                <select id="subject" name="subject" class="select-redux" required>
                                    <option value="">Select Subject *</option>
                                    <option value="lightning-protection">Lightning Protection</option>
                                    <option value="surge-protection">Surge Protection</option>
                                    <option value="grounding-system">Grounding System</option>
                                    <option value="general">General Inquiry</option>
                                </select>
                            </div>
                            <div class="form-group-redux full-width">
                                <textarea id="message" name="message" class="textarea-redux" rows="4" placeholder="How can we help you? *" required></textarea>
                            </div>
                        </div>
                        <div style="margin-top: 2rem; text-align: right;">
                            <button type="submit" class="submit-btn-redux">
                                Send Message <i class="fas fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

