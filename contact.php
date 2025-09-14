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

    <!-- Contact Section -->
    <section class="contact-main">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info" data-aos="fade-right">
                    <h2>Get in Touch</h2>
                    <p>Ready to protect your facility with cutting-edge lightning protection solutions? Our team of experts is here to help you find the perfect solution for your needs.</p>
                    
                    <div class="contact-methods">
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="method-info">
                                <h3>Email Us</h3>
                                <p>info@escoltrix.com</p>
                                
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="method-info">
                                <h3>Call Us</h3>
                                <p>+91 98187 47608</p>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="method-info">
                                <h3>Visit Us</h3>
                                <p>123 Lightning Protection Ave</p>
                                <p>Safety City, SC 12345</p>
                            </div>
                        </div>
                        
                        <div class="contact-method">
                            <div class="method-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="method-info">
                                <h3>Business Hours</h3>
                                <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
                                <p>Saturday: 9:00 AM - 4:00 PM</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="social-contact">
                        <h3>Follow Us</h3>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Form -->
                <div class="contact-form-container" data-aos="fade-left">
                    <div class="form-header">
                        <h2>Send us a Message</h2>
                        <p>Fill out the form below and we'll get back to you within 24 hours.</p>
                    </div>
                    
                    <form class="enhanced-contact-form" id="contactForm" action="contact_handler.php" method="POST">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name *</label>
                                <input type="text" id="name" name="name" required>
                                <span class="form-icon"><i class="fas fa-user"></i></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" id="company" name="company">
                                <span class="form-icon"><i class="fas fa-building"></i></span>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" required>
                                <span class="form-icon"><i class="fas fa-envelope"></i></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="mobile">Phone Number *</label>
                                <input type="tel" id="mobile" name="mobile" required>
                                <span class="form-icon"><i class="fas fa-phone"></i></span>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select id="subject" name="subject">
                                    <option value="">Select a subject</option>
                                    <option value="general-inquiry">General Inquiry</option>
                                    <option value="product-quote">Product Quote</option>
                                    <option value="technical-support">Technical Support</option>
                                    <option value="installation-service">Installation Service</option>
                                    <option value="partnership">Partnership</option>
                                    <option value="other">Other</option>
                                </select>
                                <span class="form-icon"><i class="fas fa-tag"></i></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="industry">Industry</label>
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
                                <span class="form-icon"><i class="fas fa-industry"></i></span>
                            </div>
                        </div>
                        
                        <?php if (isset($_GET['product'])): ?>
                            <div class="form-group">
                                <label for="product">Product of Interest</label>
                                <input type="text" id="product" name="product" value="<?php echo htmlspecialchars($_GET['product']); ?>" readonly>
                                <span class="form-icon"><i class="fas fa-box"></i></span>
                            </div>
                        <?php endif; ?>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" rows="6" required placeholder="Please provide details about your requirements..."></textarea>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group captcha-group">
                                <label for="captcha">Security Code *</label>
                                <div class="captcha-container">
                                    <input type="text" id="captcha" name="captcha" required placeholder="Enter code">
                                    <div class="captcha-display" id="captchaDisplay">14A8K</div>
                                    <button type="button" class="captcha-refresh" id="refreshCaptcha" title="Refresh Code">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="newsletter" value="1">
                                <span class="checkmark"></span>
                                Subscribe to our newsletter for updates and industry insights
                            </label>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" name="privacy" required>
                                <span class="checkmark"></span>
                                I agree to the <a href="#" target="_blank">Privacy Policy</a> and <a href="#" target="_blank">Terms of Service</a> *
                            </label>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-large">
                                <i class="fas fa-paper-plane"></i>
                                Send Message
                            </button>
                            <button type="reset" class="btn btn-secondary btn-large">
                                <i class="fas fa-undo"></i>
                                Reset Form
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    
    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Frequently Asked Questions</h2>
            
            <div class="faq-container">
                <div class="faq-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="faq-question">
                        <h3>How long does it take to get a quote?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We typically provide quotes within 24-48 hours after receiving your requirements. For complex projects, we may need additional time to conduct a thorough site assessment.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-question">
                        <h3>Do you provide installation services?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, we offer complete installation services through our network of certified technicians. We also provide training and ongoing maintenance support.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="faq-question">
                        <h3>What industries do you serve?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We serve a wide range of industries including oil & gas, telecommunications, utilities, manufacturing, healthcare, education, and government facilities.</p>
                    </div>
                </div>
                
                <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="faq-question">
                        <h3>Are your products certified?</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes, all our products meet international standards including IEC 62305, UL, CE marking, and other relevant certifications for lightning protection systems.</p>
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

        // Enhanced form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;
            
            // Send form data
            fetch('contact_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    showNotification('Thank you! Your message has been sent successfully.', 'success');
                    this.reset();
                    generateCaptcha();
                } else {
                    showNotification(data.message || 'An error occurred. Please try again.', 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showNotification('An error occurred. Please try again.', 'error');
            })
            .finally(() => {
                submitBtn.innerHTML = originalText;
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
        
        .contact-main {
            padding: 6rem 0;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }
        
        .contact-info h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .contact-info > p {
            color: #666;
            font-size: 1.1rem;
            margin-bottom: 2rem;
            line-height: 1.7;
        }
        
        .contact-methods {
            margin-bottom: 3rem;
        }
        
        .contact-method {
            display: flex;
            align-items: flex-start;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: #f8f9fa;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .contact-method:hover {
            background: #e9ecef;
            transform: translateY(-2px);
        }
        
        .method-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            margin-right: 1rem;
            flex-shrink: 0;
        }
        
        .method-info h3 {
            color: #333;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        .method-info p {
            color: #666;
            margin: 0.25rem 0;
        }
        
        .social-contact h3 {
            color: #333;
            margin-bottom: 1rem;
        }
        
        .social-contact .social-links a {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }
        
        .contact-form-container {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .form-header h2 {
            color: #333;
            margin-bottom: 0.5rem;
        }
        
        .form-header p {
            color: #666;
        }
        
        .enhanced-contact-form .form-group {
            position: relative;
            margin-bottom: 1.5rem;
        }
        
        .enhanced-contact-form label {
            display: block;
            color: #333;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        
        .enhanced-contact-form input,
        .enhanced-contact-form select,
        .enhanced-contact-form textarea {
            width: 100%;
            padding: 12px 40px 12px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }
        
        .enhanced-contact-form input:focus,
        .enhanced-contact-form select:focus,
        .enhanced-contact-form textarea:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
        }
        
        .form-icon {
            position: absolute;
            right: 15px;
            top: 38px;
            color: #999;
            pointer-events: none;
        }
        
        .captcha-container {
            display: flex;
            align-items: center;
            gap: 1rem;
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
            padding: 15px 30px;
            font-size: 1.1rem;
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
                gap: 2rem;
            }
            
            .contact-form-container {
                padding: 2rem;
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
