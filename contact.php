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

    <!-- Additional CSS for Contact Page -->
    <style>
        .page-header {
            padding: 120px 0 80px;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color: white;
            text-align: center;
        }
        
        .page-header h1 {
            color: #ffd700;
        }
        
        .page-header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        /* ===== MODERN CONTACT SECTION ===== */
        .contact-main-modern {
            padding: 5rem 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            position: relative;
        }
        
        .contact-wrapper-modern {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 3rem;
            align-items: start;
            max-width: 1400px;
            margin: 0 auto;
        }
        
        /* Contact Info Card */
        .contact-info-modern {
            position: sticky;
            top: 100px;
        }
        
        .info-card-modern {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(99, 102, 241, 0.1);
            height: fit-content;
        }
        
        .info-header-modern {
            margin-bottom: 2.5rem;
        }
        
        .info-badge-modern {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: rgba(99, 102, 241, 0.1);
            border: 1px solid rgba(99, 102, 241, 0.2);
            border-radius: 50px;
            color: #6366f1;
            font-weight: 600;
            font-size: 0.85rem;
            margin-bottom: 1.5rem;
        }
        
        .info-badge-modern i {
            font-size: 0.9rem;
        }
        
        .info-header-modern h2 {
            font-size: 2rem;
            color: #1e293b;
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.2;
        }
        
        .info-header-modern p {
            color: #64748b;
            font-size: 1rem;
            line-height: 1.7;
            margin: 0;
        }
        
        .contact-method-modern {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            padding: 1.5rem;
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.05), rgba(6, 182, 212, 0.05));
            border-radius: 16px;
            border: 1px solid rgba(99, 102, 241, 0.1);
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }
        
        .contact-method-modern:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.15);
            border-color: rgba(99, 102, 241, 0.3);
        }
        
        .method-icon-modern {
            flex-shrink: 0;
        }
        
        .icon-wrapper-modern {
            width: 56px;
            height: 56px;
            background: linear-gradient(135deg, #6366f1, #06b6d4);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.3rem;
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
        }
        
        .method-content-modern h3 {
            color: #1e293b;
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .method-content-modern a {
            color: #6366f1;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .method-content-modern a:hover {
            color: #06b6d4;
        }
        
        .method-tag {
            display: inline-block;
            margin-top: 0.5rem;
            padding: 0.25rem 0.75rem;
            background: rgba(6, 182, 212, 0.1);
            color: #06b6d4;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .info-features-modern {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }
        
        .feature-pill-modern {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 1rem;
            background: rgba(99, 102, 241, 0.05);
            border-radius: 12px;
            border: 1px solid rgba(99, 102, 241, 0.1);
        }
        
        .feature-pill-modern i {
            color: #6366f1;
            font-size: 0.9rem;
            width: 20px;
        }
        
        .feature-pill-modern span {
            color: #475569;
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        /* Modern Form */
        .contact-form-modern {
            width: 100%;
        }
        
        .form-card-modern {
            background: white;
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            border: 1px solid rgba(99, 102, 241, 0.1);
        }
        
        .form-header-modern {
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid rgba(99, 102, 241, 0.1);
        }
        
        .form-header-modern h2 {
            font-size: 2rem;
            color: #1e293b;
            margin-bottom: 0.5rem;
            font-weight: 700;
        }
        
        .form-header-modern p {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
        }
        
        .modern-contact-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }
        
        .form-grid-modern {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }
        
        .form-field-modern {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .form-field-modern.full-width {
            grid-column: 1 / -1;
        }
        
        .modern-contact-form label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #334155;
            font-weight: 600;
            font-size: 0.9rem;
        }
        
        .modern-contact-form label i {
            color: #6366f1;
            font-size: 0.85rem;
        }
        
        .required {
            color: #ef4444;
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
            color: #1e293b;
            font-family: inherit;
        }
        
        .modern-contact-form input:focus,
        .modern-contact-form select:focus,
        .modern-contact-form textarea:focus {
            outline: none;
            border-color: #6366f1;
            background: white;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
            transform: translateY(-2px);
        }
        
        .modern-contact-form textarea {
            resize: vertical;
            min-height: 120px;
            font-family: inherit;
        }
        
        .modern-contact-form select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%236366f1' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            padding-right: 2.5rem;
        }
        
        .form-actions-modern {
            display: flex;
            gap: 1rem;
            margin-top: 0.5rem;
        }
        
        .btn-submit-modern {
            flex: 1;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #6366f1, #06b6d4);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .btn-content,
        .btn-loader {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
        }
        
        .btn-submit-modern:hover:not(:disabled) {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(99, 102, 241, 0.4);
        }
        
        .btn-submit-modern:disabled {
            opacity: 0.7;
            cursor: not-allowed;
        }
        
        .btn-reset-modern {
            padding: 1rem 1.5rem;
            background: transparent;
            color: #64748b;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .btn-reset-modern:hover {
            border-color: #6366f1;
            color: #6366f1;
            background: rgba(99, 102, 241, 0.05);
        }
        
        /* Responsive Design */
        @media (max-width: 1024px) {
            .contact-wrapper-modern {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .contact-info-modern {
                position: static;
            }
            
            .form-grid-modern {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 768px) {
            .contact-main-modern {
                padding: 3rem 0;
            }
            
            .info-card-modern,
            .form-card-modern {
                padding: 1.5rem;
            }
            
            .form-header-modern h2,
            .info-header-modern h2 {
                font-size: 1.75rem;
            }
            
            .form-actions-modern {
                flex-direction: column;
            }
            
            .btn-submit-modern,
            .btn-reset-modern {
                width: 100%;
            }
        }
        
        .captcha-container {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .captcha-container input {
            flex: 1;
            padding: 12px 15px;
        }
        
        .checkbox-group {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
        }
        
        .checkbox-label {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            cursor: pointer;
            font-size: 0.9rem;
            line-height: 1.4;
        }
        
        .checkbox-label input[type="checkbox"] {
            width: auto;
            margin: 0;
        }
        
        .checkmark {
            width: 20px;
            height: 20px;
            border: 2px solid #ddd;
            border-radius: 4px;
            position: relative;
            flex-shrink: 0;
            margin-top: 2px;
        }
        
        .checkbox-label input:checked + .checkmark {
            background: #007bff;
            border-color: #007bff;
        }
        
        .checkbox-label input:checked + .checkmark::after {
            content: '✓';
            position: absolute;
            top: -2px;
            left: 3px;
            color: white;
            font-size: 14px;
            font-weight: bold;
        }
        
        .btn-large {
            padding: 12px 22px;
            font-size: 1rem;
        }
        
        .map-section {
            padding: 6rem 0;
            background: #f8f9fa;
        }
        
        .locations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }
        
        .location-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        
        .location-card h3 {
            color: #007bff;
            margin-bottom: 1rem;
        }
        
        .location-info p {
            color: #666;
            margin: 0.5rem 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }
        
        .location-info i {
            color: #007bff;
            width: 16px;
        }
        
        .map-placeholder {
            height: 400px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .map-placeholder:hover {
            transform: scale(1.02);
        }
        
        .map-content {
            text-align: center;
        }
        
        .map-content i {
            font-size: 4rem;
            margin-bottom: 1rem;
        }
        
        .map-content p {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }
        
        .faq-section {
            padding: 6rem 0;
        }
        
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .faq-item {
            border: 1px solid #e9ecef;
            border-radius: 10px;
            margin-bottom: 1rem;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .faq-item:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .faq-question {
            padding: 1.5rem;
            background: #f8f9fa;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }
        
        .faq-question:hover {
            background: #e9ecef;
        }
        
        .faq-question h3 {
            color: #333;
            margin: 0;
            font-size: 1.1rem;
        }
        
        .faq-question i {
            color: #007bff;
            transition: transform 0.3s ease;
        }
        
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .faq-answer p {
            padding: 1.5rem;
            margin: 0;
            color: #666;
            line-height: 1.6;
        }
        
        .notification {
            position: fixed;
            top: 100px;
            right: 20px;
            background: white;
            padding: 1rem 1.5rem;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            z-index: 10000;
            display: flex;
            align-items: center;
            gap: 1rem;
            min-width: 300px;
            animation: slideInRight 0.3s ease;
        }
        
        .notification-success {
            border-left: 4px solid #28a745;
        }
        
        .notification-success i {
            color: #28a745;
        }
        
        .notification-error {
            border-left: 4px solid #dc3545;
        }
        
        .notification-error i {
            color: #dc3545;
        }
        
        .notification-close {
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            color: #999;
            margin-left: auto;
        }
        
        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 1.25rem;
            }
            .contact-methods {
                grid-template-columns: 1fr; /* stack on mobile */
            }
            
            .contact-form-container {
                padding: 1.25rem;
            }
            
            .form-actions {
                flex-direction: column;
            }
            
            .locations-grid {
                grid-template-columns: 1fr;
            }
            
            .captcha-container {
                flex-direction: column;
                align-items: stretch;
            }
        }
    </style>
</body>
</html>
