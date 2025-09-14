<?php 
// Get product slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

// Product data - in a real application, this would come from a database
$products = [
    [
        'id' => 1,
        'name' => 'ARDO CB Copper Bonded Rod',
        'category' => 'Grounding Systems',
        'description' => 'High-quality copper bonded grounding rods providing excellent conductivity and corrosion resistance for reliable electrical grounding systems.',
        'detailed_description' => 'The ARDO CB Copper Bonded Rod is engineered for superior performance in electrical grounding applications. Our advanced manufacturing process ensures a uniform copper layer that provides exceptional conductivity while the steel core offers mechanical strength. This combination makes it ideal for various grounding applications across different industries.',
        'features' => ['Copper bonded steel core', 'Superior conductivity', 'Corrosion resistant', 'Easy installation', 'Long-lasting performance', 'IEC 62561 compliant'],
        'applications' => ['Electrical grounding', 'Lightning protection', 'Power systems', 'Telecommunications', 'Industrial facilities', 'Residential buildings'],
        'image' => 'Images/ARDO CB Copper Bonded Rod.png',
        'slug' => 'ardo-cb-copper-bonded-rod',
        'specifications' => [
            'Material' => 'Copper bonded steel',
            'Diameter' => '16mm, 20mm, 25mm',
            'Length' => '1.5m, 2.0m, 2.5m, 3.0m',
            'Copper Thickness' => '0.25mm minimum',
            'Standards' => 'IEC 62561-2, UL 467'
        ],
        'benefits' => [
            'Superior electrical conductivity',
            'Excellent corrosion resistance',
            'Easy installation and maintenance',
            'Cost-effective solution',
            'Long service life'
        ]
    ],
    [
        'id' => 2,
        'name' => 'NEXO EPB',
        'category' => 'Lightning Protection',
        'description' => 'Advanced Early Streamer Emission (ESE) lightning protection system featuring cutting-edge technology for comprehensive facility protection.',
        'detailed_description' => 'The NEXO EPB represents the pinnacle of lightning protection technology. Utilizing advanced Early Streamer Emission principles, this system provides extended protection radius compared to conventional lightning rods. Its sophisticated design incorporates weather-resistant materials and self-monitoring capabilities for reliable operation.',
        'features' => ['ESE technology', 'Extended protection radius', 'Weather resistant', 'Certified performance', 'Self-testing capability', 'Remote monitoring'],
        'applications' => ['Industrial facilities', 'Commercial buildings', 'Power plants', 'Airports', 'Data centers', 'Hospitals'],
        'image' => 'Images/NEXO EPB.png',
        'slug' => 'nexo-epb',
        'specifications' => [
            'Technology' => 'Early Streamer Emission',
            'Protection Radius' => 'Up to 120m',
            'Material' => 'Stainless steel 316L',
            'Height' => '2.5m, 3.0m, 4.0m',
            'Standards' => 'NF C 17-102, UNE 21186'
        ],
        'benefits' => [
            'Extended protection radius',
            'Advanced ionization technology',
            'Weather-resistant design',
            'Low maintenance requirements',
            'Certified performance'
        ]
    ],
    [
        'id' => 3,
        'name' => 'RIPO SHIELD DIN Rail SPD Series',
        'category' => 'Surge Protection',
        'description' => 'DIN rail mounted surge protection devices designed for electrical panel protection against transient overvoltages and power surges.',
        'detailed_description' => 'The RIPO SHIELD DIN Rail SPD Series offers comprehensive surge protection for electrical installations. These modular devices are designed for easy installation on standard DIN rails and provide visual indication of operational status. The series includes various protection levels to meet different application requirements.',
        'features' => ['DIN rail mounting', 'Visual indication', 'Thermal disconnect', 'Modular design', 'Remote signaling', 'High energy handling'],
        'applications' => ['Distribution panels', 'Control systems', 'Industrial equipment', 'Building automation', 'Telecommunications', 'Data centers'],
        'image' => 'Images/RIPO SHIELD din rail spd serie....png',
        'slug' => 'ripo-shield-din-rail-spd',
        'specifications' => [
            'Mounting' => 'DIN rail 35mm',
            'Voltage Rating' => '230V, 400V, 690V',
            'Current Rating' => '20A, 32A, 63A',
            'Protection Level' => 'Type 1, Type 2, Type 3',
            'Standards' => 'IEC 61643-11, UL 1449'
        ],
        'benefits' => [
            'Easy DIN rail installation',
            'Visual status indication',
            'Thermal protection',
            'Modular expandable design',
            'High surge current handling'
        ]
    ],
    [
        'id' => 4,
        'name' => 'Nexo FR',
        'category' => 'Lightning Protection',
        'description' => 'Franklin Rod lightning protection system providing traditional air terminal protection with proven reliability and cost-effectiveness.',
        'detailed_description' => 'The Nexo FR Franklin Rod system represents time-tested lightning protection technology. Built with premium materials and precision manufacturing, it provides reliable protection for various structures. The system is designed for easy installation and minimal maintenance while delivering consistent performance.',
        'features' => ['Proven technology', 'Cost effective', 'Easy maintenance', 'Reliable performance', 'Simple installation', 'Durable construction'],
        'applications' => ['Residential buildings', 'Small commercial', 'Warehouses', 'Agricultural facilities', 'Schools', 'Churches'],
        'image' => 'Images/Nexo FR.png',
        'slug' => 'nexo-fr',
        'specifications' => [
            'Material' => 'Stainless steel 316L',
            'Height' => '0.5m, 1.0m, 1.5m, 2.0m',
            'Base Diameter' => '25mm, 32mm',
            'Tip Material' => 'Copper or stainless steel',
            'Standards' => 'IEC 62305, NFPA 780'
        ],
        'benefits' => [
            'Proven traditional technology',
            'Cost-effective solution',
            'Simple installation',
            'Low maintenance',
            'Reliable performance'
        ]
    ],
    [
        'id' => 5,
        'name' => 'NEXO FSD ESE Terminal',
        'category' => 'Lightning Protection',
        'description' => 'Early Streamer Emission terminal with advanced ionization technology for superior lightning attraction and protection.',
        'detailed_description' => 'The NEXO FSD ESE Terminal incorporates the latest advancements in lightning protection technology. Its advanced ionization system and smart monitoring capabilities make it ideal for critical facilities requiring maximum protection. The system features self-testing capabilities and can integrate with building management systems.',
        'features' => ['Advanced ESE technology', 'Large protection radius', 'Self-testing capability', 'Weather monitoring', 'Remote diagnostics', 'Smart connectivity'],
        'applications' => ['Critical facilities', 'Data centers', 'Hospitals', 'Manufacturing plants', 'Airports', 'Military installations'],
        'image' => 'Images/NEXO FSD ESE Terminal.png',
        'slug' => 'nexo-fsd-ese-terminal',
        'specifications' => [
            'Technology' => 'Advanced ESE with ionization',
            'Protection Radius' => 'Up to 150m',
            'Material' => 'Stainless steel 316L',
            'Height' => '3.0m, 4.0m, 5.0m',
            'Standards' => 'NF C 17-102, UNE 21186'
        ],
        'benefits' => [
            'Advanced ionization technology',
            'Maximum protection radius',
            'Self-testing capabilities',
            'Weather monitoring',
            'Smart connectivity features'
        ]
    ],
    [
        'id' => 6,
        'name' => 'RS WMT SPDs',
        'category' => 'Surge Protection',
        'description' => 'Wireless monitoring surge protection devices with remote status monitoring capabilities for smart building applications.',
        'detailed_description' => 'The RS WMT SPDs represent the future of surge protection with integrated IoT capabilities. These intelligent devices provide real-time monitoring, predictive maintenance alerts, and seamless integration with smart building systems. The wireless connectivity enables remote diagnostics and status monitoring.',
        'features' => ['Wireless monitoring', 'Real-time status', 'Remote diagnostics', 'Smart alerts', 'IoT connectivity', 'Predictive maintenance'],
        'applications' => ['Smart buildings', 'IoT systems', 'Remote facilities', 'Critical infrastructure', 'Data centers', 'Industrial automation'],
        'image' => 'Images/RS WMT SPDs.png',
        'slug' => 'rs-wmt-spds',
        'specifications' => [
            'Connectivity' => 'WiFi, LoRaWAN, 4G',
            'Voltage Rating' => '230V, 400V, 690V',
            'Current Rating' => '20A, 32A, 63A',
            'Monitoring' => 'Real-time status',
            'Standards' => 'IEC 61643-11, UL 1449'
        ],
        'benefits' => [
            'Wireless monitoring capability',
            'Real-time status updates',
            'Remote diagnostics',
            'Predictive maintenance',
            'IoT integration'
        ]
    ],
    [
        'id' => 7,
        'name' => 'ARDO FILL Grounding Backfill',
        'category' => 'Grounding Systems',
        'description' => 'Conductive backfill material for enhanced grounding system performance in various soil conditions and environments.',
        'detailed_description' => 'ARDO FILL Grounding Backfill is a specially formulated conductive material designed to enhance grounding system performance in challenging soil conditions. Its unique composition maintains low resistivity while providing corrosion protection for grounding electrodes. The material is environmentally safe and easy to apply.',
        'features' => ['Low resistivity', 'Corrosion protection', 'Long lasting', 'Easy application', 'Environmentally safe', 'Moisture retention'],
        'applications' => ['Grounding enhancement', 'Soil treatment', 'Electrode protection', 'System optimization', 'High resistivity areas', 'Corrosive environments'],
        'image' => 'Images/ARDO FILL Grounding Backfill.png',
        'slug' => 'ardo-fill-grounding-backfill',
        'specifications' => [
            'Resistivity' => '< 0.1 ohm-meter',
            'pH Level' => '7.0 - 8.5',
            'Particle Size' => '0.1mm - 2.0mm',
            'Moisture Content' => '15% - 25%',
            'Standards' => 'IEEE 80, IEC 62561'
        ],
        'benefits' => [
            'Significantly reduces soil resistivity',
            'Protects electrodes from corrosion',
            'Maintains moisture content',
            'Environmentally safe',
            'Easy to apply and maintain'
        ]
    ]
];

// Find the product by slug
$product = null;
foreach ($products as $p) {
    if ($p['slug'] === $slug) {
        $product = $p;
        break;
    }
}

// If product not found, redirect to products page
if (!$product) {
    header('Location: products.php');
    exit();
}

$page_title = $product['name'] . " - Escoltrix Lightning Protection Solutions";
$page_description = $product['description'];
include 'includes/header.php'; 
?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content" data-aos="fade-up">
                <h1><?php echo $product['name']; ?></h1>
                <p><?php echo $product['category']; ?></p>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span>/</span>
                    <a href="products.php">Products</a>
                    <span>/</span>
                    <span><?php echo $product['name']; ?></span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Product Detail -->
    <section class="product-detail">
        <div class="container">
            <div class="product-detail-grid">
                <!-- Product Image -->
                <div class="product-image-section" data-aos="fade-right">
                    <div class="product-main-image">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="main-product-image">
                    </div>
                    <div class="product-category-badge">
                        <i class="fas fa-tag"></i>
                        <?php echo $product['category']; ?>
                    </div>
                </div>
                
                <!-- Product Information -->
                <div class="product-info-section" data-aos="fade-left">
                    <div class="product-header">
                        <h2><?php echo $product['name']; ?></h2>
                        <p class="product-short-description"><?php echo $product['description']; ?></p>
                    </div>
                    
                    <div class="product-description">
                        <h3>Product Overview</h3>
                        <p><?php echo $product['detailed_description']; ?></p>
                    </div>
                    
                    <div class="product-actions">
                        <a href="contact.php?product=<?php echo urlencode($product['name']); ?>" class="btn btn-primary btn-large">
                            <i class="fas fa-envelope"></i>
                            Request Quote
                        </a>
                        <a href="products.php" class="btn btn-secondary btn-large">
                            <i class="fas fa-arrow-left"></i>
                            Back to Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Details Tabs -->
    <section class="product-details-tabs">
        <div class="container">
            <div class="tabs-container">
                <div class="tab-buttons">
                    <button class="tab-button active" data-tab="features">Features</button>
                    <button class="tab-button" data-tab="specifications">Specifications</button>
                    <button class="tab-button" data-tab="applications">Applications</button>
                    <button class="tab-button" data-tab="benefits">Benefits</button>
                </div>
                
                <div class="tab-content">
                    <!-- Features Tab -->
                    <div class="tab-panel active" id="features">
                        <h3>Key Features</h3>
                        <div class="features-grid">
                            <?php foreach ($product['features'] as $feature): ?>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle"></i>
                                    <span><?php echo $feature; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <!-- Specifications Tab -->
                    <div class="tab-panel" id="specifications">
                        <h3>Technical Specifications</h3>
                        <div class="specifications-table">
                            <?php foreach ($product['specifications'] as $key => $value): ?>
                                <div class="spec-row">
                                    <div class="spec-label"><?php echo $key; ?></div>
                                    <div class="spec-value"><?php echo $value; ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <!-- Applications Tab -->
                    <div class="tab-panel" id="applications">
                        <h3>Applications</h3>
                        <div class="applications-grid">
                            <?php foreach ($product['applications'] as $application): ?>
                                <div class="application-item">
                                    <i class="fas fa-arrow-right"></i>
                                    <span><?php echo $application; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    
                    <!-- Benefits Tab -->
                    <div class="tab-panel" id="benefits">
                        <h3>Key Benefits</h3>
                        <div class="benefits-list">
                            <?php foreach ($product['benefits'] as $benefit): ?>
                                <div class="benefit-item">
                                    <i class="fas fa-star"></i>
                                    <span><?php echo $benefit; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Products -->
    <section class="related-products">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Related Products</h2>
            <div class="related-products-grid">
                <?php 
                $related_products = array_filter($products, function($p) use ($product) {
                    return $p['category'] === $product['category'] && $p['id'] !== $product['id'];
                });
                $related_products = array_slice($related_products, 0, 3);
                
                foreach ($related_products as $related): ?>
                    <div class="related-product-card" data-aos="fade-up">
                        <div class="related-product-image">
                            <img src="<?php echo $related['image']; ?>" alt="<?php echo $related['name']; ?>">
                        </div>
                        <div class="related-product-info">
                            <h4><?php echo $related['name']; ?></h4>
                            <p><?php echo substr($related['description'], 0, 100) . '...'; ?></p>
                            <a href="product-detail.php?slug=<?php echo $related['slug']; ?>" class="btn btn-outline">View Details</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

    <!-- Product Detail JavaScript -->
    <script>
        // Tab functionality
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                
                // Remove active class from all buttons and panels
                document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
                document.querySelectorAll('.tab-panel').forEach(panel => panel.classList.remove('active'));
                
                // Add active class to clicked button and corresponding panel
                this.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });
    </script>

    <!-- Product Detail CSS -->
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
        
        .product-detail {
            padding: 4rem 0;
        }
        
        .product-detail-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }
        
        .product-image-section {
            position: relative;
        }
        
        .product-main-image {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .main-product-image {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: contain;
        }
        
        .product-category-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .product-info-section {
            padding: 2rem 0;
        }
        
        .product-header h2 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .product-short-description {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 2rem;
            line-height: 1.6;
        }
        
        .product-description {
            margin-bottom: 2rem;
        }
        
        .product-description h3 {
            color: #007bff;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }
        
        .product-description p {
            color: #666;
            line-height: 1.7;
            font-size: 1rem;
        }
        
        .product-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .btn-large {
            padding: 1rem 2rem;
            font-size: 1.1rem;
        }
        
        .product-details-tabs {
            padding: 4rem 0;
            background: #f8f9fa;
        }
        
        .tabs-container {
            max-width: 1000px;
            margin: 0 auto;
        }
        
        .tab-buttons {
            display: flex;
            background: white;
            border-radius: 10px;
            padding: 0.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        
        .tab-button {
            flex: 1;
            padding: 1rem 2rem;
            border: none;
            background: transparent;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            color: #666;
        }
        
        .tab-button.active {
            background: #007bff;
            color: white;
        }
        
        .tab-button:hover {
            background: #e9ecef;
        }
        
        .tab-button.active:hover {
            background: #0056b3;
        }
        
        .tab-content {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
        
        .tab-panel {
            display: none;
        }
        
        .tab-panel.active {
            display: block;
        }
        
        .tab-panel h3 {
            color: #333;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
        }
        
        .feature-item i {
            color: #28a745;
            font-size: 1.2rem;
        }
        
        .feature-item span {
            color: #000;
            font-weight: 500;
        }
        
        .specifications-table {
            display: grid;
            gap: 1rem;
        }
        
        .spec-row {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 2rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
        }
        
        .spec-label {
            font-weight: 600;
            color: #333;
        }
        
        .spec-value {
            color: #666;
        }
        
        .applications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
        
        .application-item {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            padding: 1rem;
            background: #f8f9fa;
            border-radius: 8px;
        }
        
        .application-item i {
            color: #007bff;
            font-size: 1rem;
        }
        
        .benefits-list {
            display: grid;
            gap: 1rem;
        }
        
        .benefit-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1.5rem;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 10px;
            border-left: 4px solid #007bff;
        }
        
        .benefit-item i {
            color: #ffd700;
            font-size: 1.3rem;
        }
        
        .related-products {
            padding: 4rem 0;
        }
        
        .related-products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .related-product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        
        .related-product-card:hover {
            transform: translateY(-5px);
        }
        
        .related-product-image {
            height: 200px;
            background: #f8f9fa;
            padding: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .related-product-image img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        
        .related-product-info {
            padding: 1.5rem;
        }
        
        .related-product-info h4 {
            color: #333;
            margin-bottom: 0.5rem;
            font-size: 1.1rem;
        }
        
        .related-product-info p {
            color: #666;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        .btn-outline {
            border: 2px solid #007bff;
            color: #007bff;
            background: transparent;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
        }
        
        .btn-outline:hover {
            background: #007bff;
            color: white;
        }
        
        @media (max-width: 768px) {
            .product-detail-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .product-header h2 {
                font-size: 2rem;
            }
            
            .tab-buttons {
                flex-direction: column;
            }
            
            .tab-button {
                text-align: center;
            }
            
            .spec-row {
                grid-template-columns: 1fr;
                gap: 0.5rem;
            }
            
            .product-actions {
                flex-direction: column;
            }
            
            .related-products-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
