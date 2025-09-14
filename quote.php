<?php 
$page_title = "Get Quote - Escoltrix Lightning Protection Solutions";
$page_description = "Request a quote for lightning protection, surge protection and grounding systems from Escoltrix. Get expert consultation and customized solutions.";
include 'includes/header.php'; 
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content" data-aos="fade-up">
                <h1>Get Quote</h1>
                <p>Request a Customized Lightning Protection Solution</p>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span>/</span>
                    <span>Get Quote</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Quote Request Section -->
    <section class="quote-request-section">
        <div class="container">
            <div class="quote-request-header" data-aos="fade-up">
                <h2>Request Your Quote</h2>
                <p>Get a customized quote for your lightning protection needs. Our experts will analyze your requirements and provide the best solution.</p>
            </div>
            
            <div class="quote-benefits-row" data-aos="fade-up" data-aos-delay="100">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Quick Response</h4>
                        <p>Get your quote within 24-48 hours</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Expert Consultation</h4>
                        <p>Free consultation with our lightning protection specialists</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Accurate Pricing</h4>
                        <p>Detailed pricing based on your specific requirements</p>
                    </div>
                </div>
                
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="benefit-content">
                        <h4>Certified Solutions</h4>
                        <p>All products meet international safety standards</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Form Section -->
    <section class="quote-section">
        <div class="container">
            <!-- Quote Form -->
            <div class="quote-form-container" data-aos="fade-up">
                    <form class="quote-form" id="quoteForm" action="quote_handler.php" method="POST">
                        <div class="form-section">
                            <h3>Contact Information</h3>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="firstName">First Name *</label>
                                    <input type="text" id="firstName" name="firstName" required>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name *</label>
                                    <input type="text" id="lastName" name="lastName" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" id="phone" name="phone" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="company">Company Name</label>
                                    <input type="text" id="company" name="company">
                                </div>
                                <div class="form-group">
                                    <label for="position">Position/Title</label>
                                    <input type="text" id="position" name="position">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3>Project Information</h3>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="projectType">Project Type *</label>
                                    <select id="projectType" name="projectType" required>
                                        <option value="">Select project type</option>
                                        <option value="new-installation">New Installation</option>
                                        <option value="upgrade-existing">Upgrade Existing System</option>
                                        <option value="maintenance">Maintenance/Inspection</option>
                                        <option value="consultation">Consultation Only</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="industry">Industry *</label>
                                    <select id="industry" name="industry" required>
                                        <option value="">Select your industry</option>
                                        <option value="oil-gas">Oil & Gas / Petrochemical</option>
                                        <option value="telecommunications">Telecommunications</option>
                                        <option value="utilities">Utilities / Energy</option>
                                        <option value="manufacturing">Manufacturing</option>
                                        <option value="government">Government / Military</option>
                                        <option value="healthcare">Healthcare</option>
                                        <option value="education">Education</option>
                                        <option value="residential">Residential</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="facilitySize">Facility Size (sq ft)</label>
                                    <select id="facilitySize" name="facilitySize">
                                        <option value="">Select facility size</option>
                                        <option value="small">Less than 5,000 sq ft</option>
                                        <option value="medium">5,000 - 25,000 sq ft</option>
                                        <option value="large">25,000 - 100,000 sq ft</option>
                                        <option value="xlarge">Over 100,000 sq ft</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="budget">Estimated Budget</label>
                                    <select id="budget" name="budget">
                                        <option value="">Select budget range</option>
                                        <option value="under-10k">Under $10,000</option>
                                        <option value="10k-50k">$10,000 - $50,000</option>
                                        <option value="50k-100k">$50,000 - $100,000</option>
                                        <option value="100k-500k">$100,000 - $500,000</option>
                                        <option value="over-500k">Over $500,000</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="location">Project Location *</label>
                                <input type="text" id="location" name="location" placeholder="City, State/Province, Country" required>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3>Protection Requirements</h3>
                            <div class="checkbox-group">
                                <label class="checkbox-title">Select Protection Types Needed:</label>
                                <div class="checkbox-grid">
                                    <label class="checkbox-item">
                                        <input type="checkbox" name="protectionTypes[]" value="lightning-protection">
                                        <span class="checkmark"></span>
                                        Lightning Protection
                                    </label>
                                    <label class="checkbox-item">
                                        <input type="checkbox" name="protectionTypes[]" value="surge-protection">
                                        <span class="checkmark"></span>
                                        Surge Protection
                                    </label>
                                    <label class="checkbox-item">
                                        <input type="checkbox" name="protectionTypes[]" value="grounding-systems">
                                        <span class="checkmark"></span>
                                        Grounding Systems
                                    </label>
                                    <label class="checkbox-item">
                                        <input type="checkbox" name="protectionTypes[]" value="power-quality">
                                        <span class="checkmark"></span>
                                        Power Quality Management
                                    </label>
                                    <label class="checkbox-item">
                                        <input type="checkbox" name="protectionTypes[]" value="monitoring">
                                        <span class="checkmark"></span>
                                        System Monitoring
                                    </label>
                                    <label class="checkbox-item">
                                        <input type="checkbox" name="protectionTypes[]" value="maintenance">
                                        <span class="checkmark"></span>
                                        Maintenance Services
                                    </label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="timeline">Project Timeline</label>
                                <select id="timeline" name="timeline">
                                    <option value="">Select timeline</option>
                                    <option value="immediate">Immediate (Within 1 month)</option>
                                    <option value="short">Short term (1-3 months)</option>
                                    <option value="medium">Medium term (3-6 months)</option>
                                    <option value="long">Long term (6+ months)</option>
                                    <option value="planning">Planning phase</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3>Additional Information</h3>
                            <div class="form-group">
                                <label for="requirements">Detailed Requirements *</label>
                                <textarea id="requirements" name="requirements" rows="6" placeholder="Please describe your lightning protection requirements, facility details, any specific challenges, and any additional information that would help us provide an accurate quote." required></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="attachments">Upload Files (Optional)</label>
                                <input type="file" id="attachments" name="attachments[]" multiple accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,.dwg">
                                <small>Upload site plans, drawings, or photos (Max 10MB per file)</small>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <div class="form-group checkbox-group">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="newsletter" value="1">
                                    <span class="checkmark"></span>
                                    Subscribe to our newsletter for industry updates and product news
                                </label>
                            </div>
                            
                            <div class="form-group checkbox-group">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="privacy" required>
                                    <span class="checkmark"></span>
                                    I agree to the <a href="#" target="_blank">Privacy Policy</a> and <a href="#" target="_blank">Terms of Service</a> *
                                </label>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-large">
                                <i class="fas fa-paper-plane"></i>
                                Submit Quote Request
                            </button>
                            <button type="reset" class="btn btn-secondary btn-large">
                                <i class="fas fa-undo"></i>
                                Reset Form
                            </button>
                        </div>
                    </form>
                </div>
        </div>
    </section>

    <!-- Contact Assistance Section -->
    <section class="contact-assistance-section">
        <div class="container">
            <div class="contact-assistance-container" data-aos="fade-up">
                <div class="contact-info-header">
                    <h3>Need Immediate Assistance?</h3>
                    <p>Our experts are ready to help you with your lightning protection needs.</p>
                </div>
                
                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Call Us</h4>
                            <p>+91 98187 47608</p>
                            <span>Mon-Fri: 9AM-6PM</span>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email Us</h4>
                            <p>info@escoltrix.com</p>
                            <span>24/7 Support</span>
                        </div>
                    </div>
                    
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Live Chat</h4>
                            <p>Available Now</p>
                            <span>Instant Response</span>
                        </div>
                    </div>
                </div>
                
                <div class="contact-features">
                    <div class="feature-badge">
                        <i class="fas fa-shield-alt"></i>
                        <span>Certified Experts</span>
                    </div>
                    <div class="feature-badge">
                        <i class="fas fa-clock"></i>
                        <span>24/7 Support</span>
                    </div>
                    <div class="feature-badge">
                        <i class="fas fa-award"></i>
                        <span>15+ Years Experience</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us for Quotes -->
    <section class="quote-advantages">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Why Choose Escoltrix?</h2>
            
            <div class="advantages-grid">
                <div class="advantage-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="advantage-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>15+ Years Experience</h3>
                    <p>Extensive experience in lightning protection across various industries worldwide</p>
                </div>
                
                <div class="advantage-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="advantage-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>Certified Products</h3>
                    <p>All products meet international standards including IEC, UL, and CE certifications</p>
                </div>
                
                <div class="advantage-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="advantage-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Complete Solutions</h3>
                    <p>From design and installation to maintenance and monitoring services</p>
                </div>
                
                <div class="advantage-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="advantage-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock technical support and emergency response services</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Steps -->
    <section class="quote-process">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Our Quote Process</h2>
            
            <div class="process-steps">
                <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Submit Request</h3>
                        <p>Fill out the detailed quote form with your project requirements</p>
                    </div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Expert Review</h3>
                        <p>Our engineers analyze your requirements and site conditions</p>
                    </div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Custom Solution</h3>
                        <p>We design a tailored lightning protection solution for your facility</p>
                    </div>
                </div>
                
                <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Detailed Quote</h3>
                        <p>Receive a comprehensive quote with pricing and implementation timeline</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

    <!-- Quote Form JavaScript -->
    <script>
        // Form submission
        document.getElementById('quoteForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
            submitBtn.disabled = true;
            
            // Simulate form submission (replace with actual endpoint)
            setTimeout(() => {
                showNotification('Thank you! Your quote request has been submitted successfully. We will contact you within 24-48 hours.', 'success');
                this.reset();
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 2000);
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

        // File upload validation
        document.getElementById('attachments').addEventListener('change', function() {
            const files = this.files;
            const maxSize = 10 * 1024 * 1024; // 10MB
            
            for (let file of files) {
                if (file.size > maxSize) {
                    alert(`File "${file.name}" is too large. Maximum size is 10MB.`);
                    this.value = '';
                    return;
                }
            }
        });
    </script>

    <!-- Quote Page CSS -->
    <style>
        .page-header {
            padding: 120px 0 80px;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color: white;
            text-align: center;
        }
        
        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #ffd700;
        }
        
        .page-header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        
        .breadcrumb {
            margin-top: 1rem;
        }
        
        .breadcrumb a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }
        
        .breadcrumb span {
            margin: 0 0.5rem;
            opacity: 0.6;
        }
        
        /* Quote Request Section */
        .quote-request-section {
            padding: 4rem 0;
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
        }
        
        .quote-request-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .quote-request-header h2 {
            font-size: 2.5rem;
            color: #1a1a2e;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .quote-request-header p {
            font-size: 1.2rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .quote-benefits-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .quote-section {
            padding: 4rem 0;
        }
        
        .quote-form-container {
            max-width: 1000px;
            margin: 0 auto;
        }
        
        /* Quote Info */
        .quote-info {
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 215, 0, 0.1);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .quote-header h2 {
            font-size: 2.2rem;
            color: #1a1a2e;
            margin-bottom: 1rem;
            font-weight: 700;
        }
        
        .quote-header p {
            color: #666;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 2rem;
        }
        
        .quote-benefits {
            margin-bottom: 2rem;
            flex: 1;
        }
        
        .benefit-item {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            padding: 2rem;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            text-align: left;
        }
        
        .benefit-item:hover {
            background: linear-gradient(135deg, rgba(255, 107, 53, 0.05), rgba(255, 215, 0, 0.02));
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        .benefit-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ff6b35, #ffd700);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1a1a2e;
            font-size: 1.5rem;
            flex-shrink: 0;
        }
        
        .benefit-content h4 {
            color: #1a1a2e;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
            font-weight: 600;
        }
        
        .benefit-content p {
            color: #666;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.4;
        }
        
        .contact-info-quote {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            padding: 1.5rem;
            border-radius: 15px;
            color: white;
            margin-top: auto;
        }
        
        .contact-info-quote h3 {
            color: #ffd700;
            margin-bottom: 0.8rem;
            font-size: 1.1rem;
        }
        
        .contact-methods-quote {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            color: #e0e6ed;
        }
        
        .contact-item i {
            color: #ffd700;
            width: 20px;
        }
        
        /* Contact Info Card */
        .contact-info-card {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            padding: 3rem;
            border-radius: 20px;
            color: white;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .contact-info-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .contact-info-header h3 {
            color: #ffd700;
            font-size: 1.5rem;
            margin-bottom: 0.8rem;
            font-weight: 600;
        }
        
        .contact-info-header p {
            color: #e0e6ed;
            font-size: 1rem;
            line-height: 1.5;
        }
        
        .contact-methods {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .contact-method {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .contact-method:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #ff6b35, #ffd700);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1a1a2e;
            font-size: 1.2rem;
            flex-shrink: 0;
        }
        
        .contact-details h4 {
            color: #ffd700;
            font-size: 1rem;
            margin-bottom: 0.3rem;
            font-weight: 600;
        }
        
        .contact-details p {
            color: white;
            font-size: 1rem;
            margin-bottom: 0.2rem;
            font-weight: 500;
        }
        
        .contact-details span {
            color: #e0e6ed;
            font-size: 0.85rem;
        }
        
        .contact-features {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }
        
        .feature-badge {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 0.8rem 1rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            font-size: 0.9rem;
        }
        
        .feature-badge i {
            color: #ffd700;
            width: 16px;
        }
        
        .feature-badge span {
            color: #e0e6ed;
        }
        
        /* Contact Assistance Section */
        .contact-assistance-section {
            padding: 4rem 0;
            background: linear-gradient(135deg, #1a1a2e, #16213e);
        }
        
        .contact-assistance-container {
            max-width: 1000px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.05);
            padding: 3rem;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 215, 0, 0.2);
        }
        
        .contact-assistance-container .contact-info-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .contact-assistance-container .contact-info-header h3 {
            color: #ffd700;
            font-size: 1.8rem;
            margin-bottom: 0.8rem;
            font-weight: 600;
        }
        
        .contact-assistance-container .contact-info-header p {
            color: #e0e6ed;
            font-size: 1.1rem;
            line-height: 1.5;
        }
        
        .contact-assistance-container .contact-methods {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .contact-assistance-container .contact-method {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .contact-assistance-container .contact-method:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-3px);
        }
        
        .contact-assistance-container .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #ff6b35, #ffd700);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1a1a2e;
            font-size: 1.2rem;
            flex-shrink: 0;
        }
        
        .contact-assistance-container .contact-details h4 {
            color: #ffd700;
            font-size: 1rem;
            margin-bottom: 0.3rem;
            font-weight: 600;
        }
        
        .contact-assistance-container .contact-details p {
            color: white;
            font-size: 1rem;
            margin-bottom: 0.2rem;
            font-weight: 500;
        }
        
        .contact-assistance-container .contact-details span {
            color: #e0e6ed;
            font-size: 0.85rem;
        }
        
        .contact-assistance-container .contact-features {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .contact-assistance-container .feature-badge {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 0.8rem 1.2rem;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 25px;
            font-size: 0.9rem;
            transition: all 0.3s ease;
        }
        
        .contact-assistance-container .feature-badge:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
        }
        
        .contact-assistance-container .feature-badge i {
            color: #ffd700;
            width: 16px;
        }
        
        .contact-assistance-container .feature-badge span {
            color: #e0e6ed;
        }
        
        /* Quote Form */
        .quote-form-container {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 215, 0, 0.1);
        }
        
        .quote-form {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }
        
        .form-section {
            border-bottom: 1px solid #e9ecef;
            padding-bottom: 2rem;
        }
        
        .form-section:last-of-type {
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .form-section h3 {
            color: #1a1a2e;
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
            border-left: 4px solid #ff6b35;
            padding-left: 1rem;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
        }
        
        .form-group label {
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
            font-size: 0.95rem;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 1rem;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #ff6b35;
            background: white;
            box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.1);
        }
        
        .form-group textarea {
            resize: vertical;
            font-family: inherit;
        }
        
        .form-group small {
            color: #666;
            font-size: 0.8rem;
            margin-top: 0.3rem;
        }
        
        .checkbox-group {
            margin-bottom: 1.5rem;
        }
        
        .checkbox-title {
            font-weight: 600;
            color: #333;
            margin-bottom: 1rem;
            display: block;
        }
        
        .checkbox-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
        
        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            cursor: pointer;
            padding: 0.8rem;
            background: #f8f9fa;
            border-radius: 8px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .checkbox-item:hover {
            background: #e9ecef;
            border-color: #ff6b35;
        }
        
        .checkbox-item input[type="checkbox"] {
            display: none;
        }
        
        .checkmark {
            width: 20px;
            height: 20px;
            border: 2px solid #ddd;
            border-radius: 4px;
            position: relative;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }
        
        .checkbox-item input:checked + .checkmark {
            background: #ff6b35;
            border-color: #ff6b35;
        }
        
        .checkbox-item input:checked + .checkmark::after {
            content: '✓';
            position: absolute;
            top: -2px;
            left: 3px;
            color: white;
            font-size: 14px;
            font-weight: bold;
        }
        
        .form-actions {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            cursor: pointer;
            font-size: 1rem;
        }
        
        .btn-large {
            padding: 1.2rem 2.5rem;
            font-size: 1.1rem;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #ff6b35, #ffd700);
            color: #1a1a2e;
            flex: 1;
            font-weight: 700;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #ffd700, #ff6b35);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
        }
        
        .btn-secondary {
            background: #f8f9fa;
            color: #666;
            border: 2px solid #e9ecef;
        }
        
        .btn-secondary:hover {
            background: #e9ecef;
            color: #1a1a2e;
            transform: translateY(-2px);
            border-color: #ff6b35;
        }
        
        /* Quote Advantages */
        .quote-advantages {
            padding: 4rem 0;
            background: #f8f9fa;
        }
        
        .advantages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .advantage-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .advantage-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        .advantage-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #ff6b35, #ffd700);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.8rem;
            color: #1a1a2e;
        }
        
        .advantage-card h3 {
            color: #1a1a2e;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .advantage-card p {
            color: #666;
            line-height: 1.6;
        }
        
        /* Quote Process */
        .quote-process {
            padding: 4rem 0;
        }
        
        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .process-step {
            text-align: center;
            position: relative;
        }
        
        .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ff6b35, #ffd700);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.5rem;
            font-weight: 800;
            color: #1a1a2e;
        }
        
        .step-content h3 {
            color: #1a1a2e;
            margin-bottom: 0.8rem;
            font-size: 1.2rem;
        }
        
        .step-content p {
            color: #666;
            line-height: 1.6;
        }
        
        /* Notification */
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
            min-width: 350px;
            animation: slideInRight 0.3s ease;
        }
        
        .notification-success {
            border-left: 4px solid #28a745;
        }
        
        .notification-success i {
            color: #28a745;
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
        
        /* Responsive Design */
        @media (max-width: 1024px) {
            .quote-benefits-row {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1.5rem;
            }
            
            .contact-assistance-container .contact-methods {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1.5rem;
            }
            
            .contact-assistance-container .contact-features {
                flex-direction: column;
                align-items: center;
            }
        }
        
        @media (max-width: 768px) {
            .page-header {
                padding: 100px 0 60px;
            }
            
            .page-header h1 {
                font-size: 2.5rem;
            }
            
            .quote-request-header h2 {
                font-size: 2rem;
            }
            
            .quote-benefits-row {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .benefit-item {
                padding: 1.5rem;
                gap: 1rem;
            }
            
            .benefit-icon {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
            
            .quote-form-container,
            .contact-assistance-container {
                padding: 2rem;
            }
            
            .form-row {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .checkbox-grid {
                grid-template-columns: 1fr;
            }
            
            .form-actions {
                flex-direction: column;
            }
            
            .advantages-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 1.5rem;
            }
            
            .process-steps {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
        
        @media (max-width: 480px) {
            .quote-form-container,
            .contact-assistance-container {
                padding: 1.5rem;
            }
            
            .quote-request-header h2 {
                font-size: 1.8rem;
            }
            
            .page-header h1 {
                font-size: 2rem;
            }
            
            .benefit-item {
                padding: 1rem;
                flex-direction: column;
                text-align: center;
            }
            
            .benefit-icon {
                width: 45px;
                height: 45px;
                font-size: 1rem;
            }
            
            .notification {
                min-width: 300px;
                right: 10px;
            }
        }
    </style>
