<?php 
$page_title = "Contact Us - Escoltrix Lightning Protection Solutions";
$page_description = "Get in touch with Escoltrix for lightning protection solutions. Contact our experts for consultation and quotes.";
include 'includes/header.php'; 
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content" data-aos="fade-up">
                <h1>Contact Us</h1>
                <p>Get in Touch with Our Lightning Protection Experts</p>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span>/</span>
                    <span>Contact</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Contact Section - Modern Redesign -->
    <section class="contact-main-modern">
        <div class="container">
            <div class="contact-wrapper-modern">
                <!-- Left Side - Contact Info Card -->
                <div class="contact-info-modern" data-aos="fade-right">
                    <div class="info-card-modern">
                        <div class="info-header-modern">
                            <div class="info-badge-modern">
                                <i class="fas fa-comments"></i>
                                <span>Get in Touch</span>
                            </div>
                            <h2>Let's Start a Conversation</h2>
                            <p>Ready to protect your facility with cutting-edge lightning protection solutions? Our team of experts is here to help you find the perfect solution for your needs.</p>
                        </div>
                        
                        <div class="contact-method-modern">
                            <div class="method-icon-modern">
                                <div class="icon-wrapper-modern">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                            <div class="method-content-modern">
                                <h3>Email Us</h3>
                                <a href="mailto:info@escoltrix.com">info@escoltrix.com</a>
                                <span class="method-tag">24/7 Support</span>
                            </div>
                        </div>
                        
                        <div class="info-features-modern">
                            <div class="feature-pill-modern">
                                <i class="fas fa-clock"></i>
                                <span>24h Response Time</span>
                            </div>
                            <div class="feature-pill-modern">
                                <i class="fas fa-shield-alt"></i>
                                <span>Expert Consultation</span>
                            </div>
                            <div class="feature-pill-modern">
                                <i class="fas fa-headset"></i>
                                <span>Free Support</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side - Modern Form -->
                <div class="contact-form-modern" data-aos="fade-left">
                    <div class="form-card-modern">
                        <div class="form-header-modern">
                            <h2>Send us a Message</h2>
                            <p>Fill out the form below and we'll get back to you within 24 hours.</p>
                        </div>
                        
                        <form class="modern-contact-form" id="contactForm" action="contact_handler.php" method="POST">
                            <div class="form-grid-modern">
                                <div class="form-field-modern">
                                    <label for="name">
                                        <i class="fas fa-user"></i>
                                        Full Name <span class="required">*</span>
                                    </label>
                                    <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                                </div>
                                
                                <div class="form-field-modern">
                                    <label for="company">
                                        <i class="fas fa-building"></i>
                                        Company
                                    </label>
                                    <input type="text" id="company" name="company" placeholder="Your company name">
                                </div>
                                
                                <div class="form-field-modern">
                                    <label for="email">
                                        <i class="fas fa-envelope"></i>
                                        Email Address <span class="required">*</span>
                                    </label>
                                    <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
                                </div>
                                
                                <div class="form-field-modern">
                                    <label for="mobile">
                                        <i class="fas fa-phone"></i>
                                        Phone Number <span class="required">*</span>
                                    </label>
                                    <input type="tel" id="mobile" name="mobile" placeholder="+1 (555) 123-4567" required>
                                </div>
                                
                                <div class="form-field-modern">
                                    <label for="subject">
                                        <i class="fas fa-tag"></i>
                                        Subject
                                    </label>
                                    <select id="subject" name="subject">
                                        <option value="">Select a subject</option>
                                        <option value="general-inquiry">General Inquiry</option>
                                        <option value="product-quote">Product Quote</option>
                                        <option value="technical-support">Technical Support</option>
                                        <option value="installation-service">Installation Service</option>
                                        <option value="partnership">Partnership</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                
                                <div class="form-field-modern">
                                    <label for="industry">
                                        <i class="fas fa-industry"></i>
                                        Industry
                                    </label>
                                    <select id="industry" name="industry">
                                        <option value="">Select your industry</option>
                                        <option value="oil-gas">Oil & Gas</option>
                                        <option value="telecommunications">Telecommunications</option>
                                        <option value="utilities">Utilities & Energy</option>
                                        <option value="manufacturing">Manufacturing</option>
                                        <option value="government">Government & Military</option>
                                        <option value="healthcare">Healthcare</option>
                                        <option value="education">Education</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <?php if (isset($_GET['product'])): ?>
                                <div class="form-field-modern">
                                    <label for="product">
                                        <i class="fas fa-box"></i>
                                        Product of Interest
                                    </label>
                                    <input type="text" id="product" name="product" value="<?php echo htmlspecialchars($_GET['product']); ?>" readonly>
                                </div>
                            <?php endif; ?>
                            
                            <div class="form-field-modern full-width">
                                <label for="message">
                                    <i class="fas fa-comment-alt"></i>
                                    Message <span class="required">*</span>
                                </label>
                                <textarea id="message" name="message" rows="5" placeholder="Please provide details about your requirements..." required></textarea>
                            </div>
                            
                            <div class="form-actions-modern">
                                <button type="submit" class="btn-submit-modern">
                                    <span class="btn-content">
                                        <i class="fas fa-paper-plane"></i>
                                        <span>Send Message</span>
                                    </span>
                                    <span class="btn-loader" style="display: none;">
                                        <i class="fas fa-spinner fa-spin"></i>
                                        <span>Sending...</span>
                                    </span>
                                </button>
                                <button type="reset" class="btn-reset-modern">
                                    <i class="fas fa-redo"></i>
                                    <span>Reset</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

<?php include 'includes/footer.php'; ?>

    <!-- Enhanced Contact Form JavaScript -->
    <script>
        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', function() {
                const faqItem = this.parentElement;
                const answer = faqItem.querySelector('.faq-answer');
                const icon = this.querySelector('i');
                
                // Close all other FAQ items
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem) {
                        item.classList.remove('active');
                        item.querySelector('.faq-answer').style.maxHeight = '0';
                        item.querySelector('.faq-question i').style.transform = 'rotate(0deg)';
                    }
                });
                
                // Toggle current FAQ item
                faqItem.classList.toggle('active');
                
                if (faqItem.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    answer.style.maxHeight = '0';
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });

        // Inline validation helpers
        function setError(input, message) {
            clearError(input);
            const error = document.createElement('small');
            error.className = 'field-error';
            error.style.color = '#dc3545';
            error.textContent = message;
            input.parentElement.appendChild(error);
            input.style.borderColor = '#dc3545';
        }
        function clearError(input) {
            input.style.borderColor = '';
            const err = input.parentElement.querySelector('.field-error');
            if (err) err.remove();
        }
        function validateContactField(input) {
            const name = input.name;
            const value = input.value.trim();
            if (name === 'name') {
                if (value.length < 2) { setError(input, 'Enter at least 2 characters'); return false; }
            }
            if (name === 'email') {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!re.test(value)) { setError(input, 'Enter a valid email'); return false; }
            }
            if (name === 'mobile') {
                const re = /^[+]?\d{7,16}$/;
                if (!re.test(value.replace(/\s/g, ''))) { setError(input, 'Enter a valid phone'); return false; }
            }
            if (name === 'message') {
                if (value.length < 10) { setError(input, 'Enter at least 10 characters'); return false; }
            }
            clearError(input); return true;
        }

        const contactFormEl = document.getElementById('contactForm');
        const contactInputs = contactFormEl.querySelectorAll('input[required], textarea[required], select[required]');
        contactInputs.forEach(el => {
            el.addEventListener('input', () => validateContactField(el));
            el.addEventListener('blur', () => validateContactField(el));
        });

        // Enhanced form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            
            // Validate all fields before submit
            let allValid = true;
            contactInputs.forEach(el => { if (!validateContactField(el)) allValid = false; });
            if (!allValid) { return; }
            
            // Show loading state
            const btnContent = submitBtn.querySelector('.btn-content');
            const btnLoader = submitBtn.querySelector('.btn-loader');
            if (btnContent && btnLoader) {
                btnContent.style.display = 'none';
                btnLoader.style.display = 'flex';
            } else {
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            }
            submitBtn.disabled = true;
            
            // Send form data
            fetch('contact_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    showNotification('Thank you! Your message has been sent successfully.', 'success');
                    this.reset();
                } else {
                    showNotification(data.message || 'An error occurred. Please try again.', 'error');
                }
            })
            .catch(error => {
                console.error('Contact form error:', error);
                showNotification('An error occurred. Please try again later or contact us directly at info@escoltrix.com.', 'error');
            })
            .finally(() => {
                const btnContent = submitBtn.querySelector('.btn-content');
                const btnLoader = submitBtn.querySelector('.btn-loader');
                if (btnContent && btnLoader) {
                    btnContent.style.display = 'flex';
                    btnLoader.style.display = 'none';
                } else {
                    submitBtn.innerHTML = '<span class="btn-content"><i class="fas fa-paper-plane"></i><span>Send Message</span></span>';
                }
                submitBtn.disabled = false;
            });
        });

        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `notification notification-${type}`;
            notification.innerHTML = `
                <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-triangle'}"></i>
                <span>${message}</span>
                <button class="notification-close">&times;</button>
            `;
            
            document.body.appendChild(notification);
            
            // Auto remove after 5 seconds
            setTimeout(() => {
                notification.remove();
            }, 5000);
            
            // Manual close
            notification.querySelector('.notification-close').addEventListener('click', () => {
                notification.remove();
            });
        }
    </script>

  
    <style>
        /* Global & Reset */
        :root {
            --primary-blue: #2563eb;
            --primary-dark: #1e293b;
            --secondary-orange: #ff6b35;
            --text-main: #334155;
            --text-light: #64748b;
            --bg-light: #f8fafc;
            --border-color: #e2e8f0;
            --card-radius: 24px;
        }

        /* Improved Page Header */
        .page-header {
            padding: 140px 0 100px;
            background: radial-gradient(circle at 10% 20%, #1e293b 0%, #0f172a 90%);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1) 0%, rgba(255, 107, 53, 0.1) 100%);
            pointer-events: none;
        }
        
        .page-header h1 {
            font-size: 3.5rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1rem;
            background: linear-gradient(to right, #ffffff, #cbd5e1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            position: relative;
            z-index: 1;
        }
        
        .page-header p {
            font-size: 1.25rem;
            color: #94a3b8;
            max-width: 600px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
            font-weight: 300;
        }

        .breadcrumb {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 0.75rem;
            margin-top: 2rem;
            padding: 0.5rem 1.5rem;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 50px;
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1;
        }

        .breadcrumb a {
            color: #cbd5e1;
            text-decoration: none;
            transition: color 0.3s ease;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .breadcrumb a:hover {
            color: #ffffff;
        }

        .breadcrumb span {
            color: #64748b;
        }
        
        /* ===== MODERN CONTACT SECTION ===== */
        .contact-main-modern {
            padding: 6rem 0;
            background-color: var(--bg-light);
            background-image: 
                radial-gradient(at 0% 0%, rgba(37, 99, 235, 0.03) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(255, 107, 53, 0.03) 0px, transparent 50%);
            position: relative;
        }
        
        .contact-wrapper-modern {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 4rem;
            align-items: start;
            max-width: 1280px;
            margin: 0 auto;
        }
        
        /* Contact Info Card */
        .contact-info-modern {
            position: sticky;
            top: 120px;
        }
        
        .info-card-modern {
            background: white;
            border-radius: var(--card-radius);
            padding: 3rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 20px 25px -5px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
        }

        .info-card-modern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--primary-blue), var(--secondary-orange));
        }
        
        .info-badge-modern {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: #eff6ff;
            color: var(--primary-blue);
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.85rem;
            margin-bottom: 2rem;
            border: 1px solid #dbeafe;
        }
        
        .info-header-modern h2 {
            font-size: 2.25rem;
            color: var(--primary-dark);
            margin-bottom: 1rem;
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -0.02em;
        }
        
        .info-header-modern p {
            color: var(--text-light);
            font-size: 1.05rem;
            line-height: 1.7;
            margin-bottom: 2.5rem;
        }
        
        .contact-method-modern {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 1.5rem;
            background: #f8fafc;
            border-radius: 16px;
            border: 1px solid var(--border-color);
            margin-bottom: 2rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .contact-method-modern:hover {
            transform: translateY(-5px);
            background: white;
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
            border-color: #dbeafe;
        }
        
        .icon-wrapper-modern {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary-blue), #1d4ed8);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 10px 20px -5px rgba(37, 99, 235, 0.4);
            transition: transform 0.3s ease;
        }

        .contact-method-modern:hover .icon-wrapper-modern {
            transform: scale(1.1) rotate(-5deg);
        }
        
        .method-content-modern h3 {
            color: var(--primary-dark);
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 0.25rem;
        }
        
        .method-content-modern a {
            color: var(--primary-blue);
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        
        .method-tag {
            display: inline-block;
            margin-top: 0.5rem;
            padding: 0.25rem 0.75rem;
            background: rgba(37, 99, 235, 0.1);
            color: var(--primary-blue);
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .info-features-modern {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
        
        .feature-pill-modern {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.75rem;
            padding: 1.25rem 0.5rem;
            background: white;
            border-radius: 12px;
            border: 1px solid var(--border-color);
            text-align: center;
            transition: all 0.3s ease;
        }

        .feature-pill-modern:hover {
            border-color: var(--primary-blue);
            transform: translateY(-2px);
        }
        
        .feature-pill-modern i {
            color: var(--secondary-orange);
            font-size: 1.25rem;
            background: rgba(255, 107, 53, 0.1);
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        
        .feature-pill-modern span {
            color: var(--text-main);
            font-size: 0.8rem;
            font-weight: 600;
            line-height: 1.3;
        }
        
        /* Modern Form */
        .form-card-modern {
            background: white;
            border-radius: var(--card-radius);
            padding: 3rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 20px 25px -5px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border-color);
        }
        
        .form-header-modern {
            margin-bottom: 2.5rem;
            text-align: left;
        }
        
        .form-header-modern h2 {
            font-size: 2rem;
            color: var(--primary-dark);
            margin-bottom: 0.75rem;
            font-weight: 800;
            letter-spacing: -0.02em;
        }
        
        .form-header-modern p {
            color: var(--text-light);
            font-size: 1.05rem;
            margin: 0;
        }
        
        .modern-contact-form {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        
        .form-grid-modern {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }
        
        .form-field-modern {
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
            position: relative;
        }
        
        .form-field-modern.full-width {
            grid-column: 1 / -1;
        }
        
        .modern-contact-form label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--text-main);
            font-weight: 600;
            font-size: 0.9rem;
            margin-left: 0.25rem;
        }
        
        .modern-contact-form label i {
            color: var(--primary-blue);
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        .required {
            color: var(--secondary-orange);
            margin-left: 2px;
        }
        
        .modern-contact-form input,
        .modern-contact-form select,
        .modern-contact-form textarea {
            width: 100%;
            padding: 1rem 1.25rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: #f8fafc;
            color: var(--primary-dark);
            font-family: 'Inter', sans-serif;
            font-weight: 500;
        }
        
        .modern-contact-form input::placeholder,
        .modern-contact-form textarea::placeholder {
            color: #94a3b8;
            font-weight: 400;
        }
        
        .modern-contact-form input:focus,
        .modern-contact-form select:focus,
        .modern-contact-form textarea:focus {
            outline: none;
            border-color: var(--primary-blue);
            background: white;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }
        
        .modern-contact-form input:hover,
        .modern-contact-form select:hover,
        .modern-contact-form textarea:hover {
            border-color: #cbd5e1;
        }
        
        .modern-contact-form textarea {
            resize: vertical;
            min-height: 150px;
        }
        
        .form-actions-modern {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 1.5rem;
            margin-top: 1rem;
        }
        
        .btn-submit-modern {
            padding: 1.1rem 2rem;
            background: linear-gradient(135deg, var(--primary-blue), #1e40af);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.05rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            box-shadow: 0 10px 20px -5px rgba(37, 99, 235, 0.4);
            letter-spacing: 0.5px;
        }
        
        .btn-submit-modern:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(37, 99, 235, 0.5);
            background: linear-gradient(135deg, #1e40af, #2563eb);
        }
        
        .btn-reset-modern {
            padding: 1.1rem 1.5rem;
            background: white;
            color: var(--text-light);
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .btn-reset-modern:hover {
            border-color: var(--text-light);
            color: var(--primary-dark);
            background: #f8fafc;
        }
        
        /* Input Validation Styles */
        .field-error {
            font-size: 0.8rem;
            margin-top: 0.25rem;
            color: #ef4444;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .field-error::before {
            content: '\f06a';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
        }
        
        /* Notifications */
        .notification {
            position: fixed;
            top: 100px;
            right: 20px;
            padding: 1rem 1.5rem;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            z-index: 10000;
            display: flex;
            align-items: center;
            gap: 1rem;
            min-width: 320px;
            animation: slideInRight 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background: white;
            border: 1px solid #e2e8f0;
        }
        
        .notification-success {
            border-left: 5px solid #10b981;
        }
        
        .notification-success i {
            color: #10b981;
            font-size: 1.2rem;
        }
        
        .notification-error {
            border-left: 5px solid #ef4444;
        }
        
        .notification-error i {
            color: #ef4444;
            font-size: 1.2rem;
        }
        
        .notification-close {
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            color: #94a3b8;
            margin-left: auto;
            padding: 0;
            transition: color 0.2s;
        }
        
        .notification-close:hover {
            color: var(--primary-dark);
        }
        
        @keyframes slideInRight {
            from { transform: translateX(100%) scale(0.9); opacity: 0; }
            to { transform: translateX(0) scale(1); opacity: 1; }
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .contact-wrapper-modern {
                grid-template-columns: 1fr;
                gap: 3rem;
            }
            .contact-info-modern {
                position: static;
                order: 2;
            }
            .contact-form-modern {
                order: 1;
            }
            .info-features-modern {
                margin-top: 1rem;
            }
            .page-header {
                padding: 120px 0 80px;
            }
            .page-header h1 {
                font-size: 2.75rem;
            }
        }
        
        @media (max-width: 768px) {
            .contact-main-modern {
                padding: 4rem 0;
            }
            .info-card-modern, .form-card-modern {
                padding: 1.5rem;
                border-radius: 20px;
            }
            .form-grid-modern {
                grid-template-columns: 1fr;
            }
            .form-actions-modern {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            .page-header h1 {
                font-size: 2.25rem;
            }
            .info-features-modern {
                grid-template-columns: repeat(3, 1fr);
                gap: 0.5rem;
            }
            .feature-pill-modern {
                padding: 1rem 0.25rem;
            }
            .feature-pill-modern span {
                font-size: 0.7rem;
            }
        }
        
        @media (max-width: 480px) {
            .info-features-modern {
                grid-template-columns: 1fr;
            }
            .feature-pill-modern {
                flex-direction: row;
                padding: 1rem;
                justify-content: flex-start;
                text-align: left;
            }
        }
    </style>
           