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
                                    <label for="fullName">Full Name *</label>
                                    <input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address *</label>
                                    <input type="email" id="email" name="email" placeholder="your.email@example.com" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="phone">Phone Number *</label>
                                    <input type="tel" id="phone" name="phone" placeholder="+91 XXXXX XXXXX" required>
                                </div>
                                <div class="form-group">
                                    <label for="location">Project Location *</label>
                                    <input type="text" id="location" name="location" placeholder="City, State, Country" required>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="company">Company Name (Optional)</label>
                                    <input type="text" id="company" name="company" placeholder="Your company name">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-section">
                            <h3>Additional Information</h3>
                            <div class="form-group">
                                <label for="requirements">Detailed Requirements (Optional)</label>
                                <textarea id="requirements" name="requirements" rows="4" placeholder="Describe your requirements (optional)"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary btn-large">
                                <i class="fas fa-paper-plane"></i>
                                Request Quote
                            </button>
                        </div>
                    </form>
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
        // Inline validation helpers
        function setQErr(input, message) {
            clearQErr(input);
            const small = document.createElement('small');
            small.className = 'field-error';
            small.style.color = '#dc3545';
            small.textContent = message;
            input.parentElement.appendChild(small);
            input.style.borderColor = '#dc3545';
        }
        function clearQErr(input) {
            input.style.borderColor = '';
            const s = input.parentElement.querySelector('.field-error');
            if (s) s.remove();
        }
        function validateQuoteField(el) {
            const name = el.name; const v = (el.value || '').trim();
            if (name === 'fullName') { if (v.length < 2) { setQErr(el,'Enter at least 2 characters'); return false; } }
            if (name === 'email') { const re=/^[^\s@]+@[^\s@]+\.[^\s@]+$/; if (!re.test(v)) { setQErr(el,'Enter a valid email'); return false; } }
            if (name === 'phone') { const re=/^[+]?\d{7,16}$/; if (!re.test(v.replace(/\s/g,''))) { setQErr(el,'Enter a valid phone'); return false; } }
            if (name === 'location') { if (!v) { setQErr(el,'Location is required'); return false; } }
            // Company and Requirements are optional, no validation check needed except max length if desired
            clearQErr(el); return true;
        }

        const qForm = document.getElementById('quoteForm');
        // Only get required inputs for live validation events
        const qInputs = qForm.querySelectorAll('[name="fullName"],[name="email"],[name="phone"],[name="location"]');
        qInputs.forEach(el => { el.addEventListener('input',()=>validateQuoteField(el)); el.addEventListener('blur',()=>validateQuoteField(el)); });

        // Form submission
        document.getElementById('quoteForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            
            // Show loading state
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
            submitBtn.disabled = true;
            // Validate all required fields before submit
            let ok = true; qInputs.forEach(el => { if (!validateQuoteField(el)) ok = false; });
            if (!ok) { submitBtn.innerHTML = originalText; submitBtn.disabled = false; return; }

            // Send to backend
            fetch('quote_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(res => {
                if (!res.ok) {
                    throw new Error('Network response was not ok');
                }
                return res.json();
            })
            .then(res => {
                if (res.success) {
                    showNotification('Thank you! Your quote request has been submitted successfully. We will contact you within 24-48 hours.', 'success');
                    this.reset();
                } else {
                    showNotification(res.message || 'Failed to submit quote. Please try again later.', 'error');
                }
            })
            .catch((error) => {
                console.error('Quote submission error:', error);
                showNotification('Failed to submit quote. Please try again later or contact us directly at info@escoltrix.com.', 'error');
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
            
            .quote-form-container {
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
            .quote-form-container {
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
