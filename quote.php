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

    /* ===== REDUX PREMIUM QUOTE DESIGN ===== */
    <style>
        /* Global & Variables */
        :root {
            --primary-blue: #2563eb;
            --primary-dark: #1e293b;
            --secondary-orange: #ff6b35;
            --text-main: #334155;
            --text-light: #64748b;
            --bg-light: #f8fafc;
            --border-color: #e2e8f0;
            --card-radius: 20px;
        }

        body {
            background-color: var(--bg-light);
            font-family: 'Inter', sans-serif;
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
        
        /* Quote Request Section */
        .quote-request-section {
            padding: 5rem 0 3rem;
            background: var(--bg-light);
            background-image: 
                radial-gradient(at 0% 0%, rgba(37, 99, 235, 0.03) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(255, 107, 53, 0.03) 0px, transparent 50%);
        }
        
        .quote-request-header {
            text-align: center;
            margin-bottom: 4rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .quote-request-header h2 {
            font-size: 2.5rem;
            color: var(--primary-dark);
            margin-bottom: 1rem;
            font-weight: 800;
            letter-spacing: -0.02em;
        }
        
        .quote-request-header p {
            font-size: 1.15rem;
            color: var(--text-light);
            line-height: 1.6;
        }
        
        .quote-benefits-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .benefit-item {
            display: flex;
            align-items: flex-start;
            gap: 1.25rem;
            padding: 2rem;
            background: white;
            border-radius: var(--card-radius);
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 10px 15px -3px rgba(0, 0, 0, 0.05);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--border-color);
        }
        
        .benefit-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.01);
            border-color: #cbd5e1;
        }
        
        .benefit-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, var(--primary-blue), #1e40af);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.25rem;
            flex-shrink: 0;
            box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
        }
        
        .benefit-content h4 {
            color: var(--primary-dark);
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
            font-weight: 700;
        }
        
        .benefit-content p {
            color: var(--text-light);
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.5;
        }
        
        /* Quote Form Section */
        .quote-section {
            padding: 3rem 0 6rem;
            background: var(--bg-light);
        }
        
        .quote-form-container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            padding: 3.5rem;
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.08); /* Stronger shadow for main form */
            border: 1px solid var(--border-color);
            position: relative;
        }

        .quote-form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--primary-blue), var(--secondary-orange));
        }
        
        .quote-form {
            display: flex;
            flex-direction: column;
            gap: 2.5rem;
        }
        
        .form-section {
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 2.5rem;
        }
        
        .form-section:last-of-type {
            border-bottom: none;
            padding-bottom: 0;
        }
        
        .form-section h3 {
            color: var(--primary-dark);
            font-size: 1.25rem;
            margin-bottom: 2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .form-section h3::before {
            content: '';
            display: block;
            width: 4px;
            height: 24px;
            background: var(--secondary-orange);
            border-radius: 2px;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.6rem;
        }
        
        .form-group label {
            font-weight: 600;
            color: var(--text-main);
            font-size: 0.95rem;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 1rem 1.25rem;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
            color: var(--primary-dark);
            font-family: inherit;
        }
        
        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: #94a3b8;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-blue);
            background: white;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        /* Quote Advantages Section */
        .quote-advantages {
            padding: 6rem 0;
            background: white;
            border-top: 1px solid var(--border-color);
        }
        
        .section-title {
            text-align: center;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--primary-dark);
            margin-bottom: 3rem;
            letter-spacing: -0.02em;
        }
        
        .advantages-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            max-width: 1280px;
            margin: 0 auto;
        }
        
        .advantage-card {
            text-align: center;
            padding: 2rem;
            background: #f8fafc;
            border-radius: 20px;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }
        
        .advantage-card:hover {
            background: white;
            box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.1);
            border-color: var(--border-color);
            transform: translateY(-5px);
        }
        
        .advantage-icon {
            width: 70px;
            height: 70px;
            background: #eff6ff;
            color: var(--primary-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 1.75rem;
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .advantage-card:hover .advantage-icon {
            transform: scale(1.1) rotate(5deg);
        }
        
        .advantage-card h3 {
            font-size: 1.1rem;
            color: var(--primary-dark);
            margin-bottom: 0.75rem;
            font-weight: 700;
        }
        
        .advantage-card p {
            font-size: 0.9rem;
            color: var(--text-light);
            line-height: 1.6;
            margin: 0;
        }

        /* Process Steps */
        .quote-process {
            padding: 6rem 0;
            background: #f1f5f9;
        }
        
        .process-steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            max-width: 1280px;
            margin: 0 auto;
            position: relative;
        }
        
        /* Connecting line for process steps */
        .process-steps::after {
            content: '';
            position: absolute;
            top: 30px;
            left: 10%;
            right: 10%;
            height: 2px;
            background: #cbd5e1;
            z-index: 0;
        }
        
        .process-step {
            position: relative;
            z-index: 1;
            text-align: center;
        }
        
        .step-number {
            width: 60px;
            height: 60px;
            background: white;
            border: 2px solid var(--primary-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            font-size: 1.5rem;
            font-weight: 800;
            margin: 0 auto 1.5rem;
            transition: all 0.3s ease;
        }
        
        .process-step:hover .step-number {
            background: var(--primary-blue);
            color: white;
            transform: scale(1.1);
            box-shadow: 0 0 0 8px rgba(37, 99, 235, 0.1);
        }
        
        .step-content {
            background: white;
            padding: 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
            height: 100%;
        }
        
        .step-content h3 {
            font-size: 1.1rem;
            color: var(--primary-dark);
            margin-bottom: 0.75rem;
            font-weight: 700;
        }
        
        .step-content p {
            font-size: 0.9rem;
            color: var(--text-light);
            line-height: 1.6;
            margin: 0;
        }
        
        /* Buttons */
        .form-actions {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }
        
        .btn {
            padding: 1rem 2rem;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            font-size: 1rem;
            letter-spacing: 0.5px;
        }
        
        .btn-large {
            padding: 1.2rem 3rem;
            font-size: 1.1rem;
            width: 100%;
            justify-content: center;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-blue), #1e40af);
            color: white;
            box-shadow: 0 10px 20px -5px rgba(37, 99, 235, 0.4);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 25px -5px rgba(37, 99, 235, 0.5);
            background: linear-gradient(135deg, #1e40af, var(--primary-blue));
        }

        /* Notifications (Same as Contact Page) */
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
        
        .field-error {
            color: #ef4444 !important;
            font-size: 0.85rem !important;
            margin-top: 0.4rem !important;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }
        
        .field-error::before {
            content: '\f06a';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .advantages-grid, .process-steps {
                grid-template-columns: repeat(2, 1fr);
            }
            .process-steps::after {
                display: none;
            }
        }
        
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
            .quote-form-container {
                padding: 1.5rem;
            }
            .advantages-grid, .process-steps {
                grid-template-columns: 1fr;
            }
            .page-header h1 {
                font-size: 2.5rem;
            }
            .quote-request-header h2 {
                font-size: 2rem;
            }
        }
    </style>
