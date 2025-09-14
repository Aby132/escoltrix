<?php 
$page_title = "Products - Escoltrix Lightning Protection Solutions";
$page_description = "Explore Escoltrix's comprehensive range of lightning protection, surge protection and grounding systems products.";
include 'includes/header.php'; 

// Product data - in a real application, this would come from a database
$products = [
    [
        'id' => 1,
        'name' => 'ARDO CB Copper Bonded Rod',
        'category' => 'Grounding Systems',
        'description' => 'High-quality copper bonded grounding rods providing excellent conductivity and corrosion resistance for reliable electrical grounding systems.',
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

// Get selected category from URL
$selected_category = isset($_GET['category']) ? $_GET['category'] : 'all';

// Filter products by category
$filtered_products = $selected_category === 'all' ? $products : array_filter($products, function($product) use ($selected_category) {
    return strtolower(str_replace(' ', '-', $product['category'])) === $selected_category;
});

// Get unique categories
$categories = array_unique(array_column($products, 'category'));
?>
    <section class="page-header">
        <div class="container">
            <div class="page-header-content" data-aos="fade-up">
                <h1>Our Products</h1>
                <p>Comprehensive Lightning Protection Solutions</p>
                <nav class="breadcrumb">
                    <a href="index.php">Home</a>
                    <span>/</span>
                    <span>Products</span>
                </nav>
            </div>
        </div>
    </section>

    <!-- Product Categories Filter -->
    <section class="product-filters" id="product-categories">
        <div class="container">
            <div class="filter-tabs" data-aos="fade-up">
                <a href="products.php?category=all" class="filter-tab <?php echo $selected_category === 'all' ? 'active' : ''; ?>">
                    All Products
                </a>
                <?php foreach ($categories as $category): ?>
                    <?php 
                    $category_slug = strtolower(str_replace(' ', '-', $category));
                    $section_id = '';
                    if ($category === 'Grounding Systems') $section_id = 'grounding-systems';
                    elseif ($category === 'Lightning Protection') $section_id = 'lightning-protection';
                    elseif ($category === 'Surge Protection') $section_id = 'surge-protection';
                    ?>
                    <a href="products.php?category=<?php echo $category_slug; ?><?php echo $section_id ? '#' . $section_id : ''; ?>" 
                       class="filter-tab <?php echo $selected_category === $category_slug ? 'active' : ''; ?>"
                       <?php echo $section_id ? 'id="' . $section_id . '"' : ''; ?>>
                        <?php echo $category; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="products-showcase">
        <div class="container">
            <div class="products-grid">
                <?php foreach ($filtered_products as $index => $product): ?>
                    <div class="product-card-detailed" data-aos="fade-up" data-aos-delay="<?php echo ($index % 3) * 100; ?>">
                        <div class="product-image-container">
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="product-image">
                            <div class="product-overlay">
                                <a href="product-detail.php?slug=<?php echo $product['slug']; ?>" class="btn btn-primary">
                                    View Details
                                </a>
                            </div>
                        </div>
                        
                        <div class="product-info">
                            <div class="product-category"><?php echo $product['category']; ?></div>
                            <h3 class="product-title"><?php echo $product['name']; ?></h3>
                            <p class="product-description"><?php echo $product['description']; ?></p>
                            
                            <div class="product-features">
                                <h4>Key Features:</h4>
                                <ul>
                                    <?php foreach (array_slice($product['features'], 0, 3) as $feature): ?>
                                        <li><?php echo $feature; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            
                            <div class="product-actions">
                                <a href="product-detail.php?slug=<?php echo $product['slug']; ?>" class="btn btn-primary">
                                    Learn More
                                </a>
                                <a href="contact.php?product=<?php echo urlencode($product['name']); ?>" class="btn btn-secondary">
                                    Get Quote
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Product Modal -->
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeProductModal()">&times;</span>
            <div id="modalContent">
                <!-- Content will be loaded dynamically -->
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Need a Custom Solution?</h2>
                <p>Our experts can design a tailored lightning protection system for your specific requirements.</p>
                <div class="cta-actions">
                    <a href="quote.php" class="btn btn-primary">Get Quote</a>
                    <a href="contact.php" class="btn btn-secondary">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

    <!-- Product Modal JavaScript -->
    <script>
        const products = <?php echo json_encode($products); ?>;

        function openProductModal(productId) {
            const product = products.find(p => p.id === productId);
            if (!product) return;

            const modalContent = document.getElementById('modalContent');
            modalContent.innerHTML = `
                <div class="modal-product">
                    <div class="modal-product-image">
                        <div class="product-placeholder ${product.image}">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="modal-product-info">
                        <div class="product-category">${product.category}</div>
                        <h2>${product.name}</h2>
                        <p class="product-description">${product.description}</p>
                        
                        <div class="product-details">
                            <div class="detail-section">
                                <h3>Key Features</h3>
                                <ul>
                                    ${product.features.map(feature => `<li>${feature}</li>`).join('')}
                                </ul>
                            </div>
                            
                            <div class="detail-section">
                                <h3>Applications</h3>
                                <ul>
                                    ${product.applications.map(app => `<li>${app}</li>`).join('')}
                                </ul>
                            </div>
                        </div>
                        
                        <div class="modal-actions">
                            <a href="contact.php?product=${encodeURIComponent(product.name)}" class="btn btn-primary">
                                Request Quote
                            </a>
                            <button class="btn btn-secondary" onclick="downloadBrochure('${product.name}')">
                                Download Brochure
                            </button>
                        </div>
                    </div>
                </div>
            `;

            document.getElementById('productModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeProductModal() {
            document.getElementById('productModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function downloadBrochure(productName) {
            // In a real implementation, this would trigger a file download
            alert(`Brochure for ${productName} will be downloaded. (This is a demo)`);
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('productModal');
            if (event.target === modal) {
                closeProductModal();
            }
        }

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeProductModal();
            }
        });
    </script>

    <!-- Additional CSS for Products Page -->
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
        
        .product-filters {
            padding: 2rem 0;
            background: #f8f9fa;
        }
        
        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .filter-tab {
            padding: 0.8rem 1.5rem;
            background: white;
            color: #666;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .filter-tab:hover,
        .filter-tab.active {
            background: #007bff;
            color: white;
            border-color: #007bff;
        }
        
        .products-showcase {
            padding: 4rem 0;
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }
        
        .product-card-detailed {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .product-card-detailed:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }
        
        .product-image-container {
            position: relative;
            height: 250px;
            overflow: hidden;
        }
        
        .product-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .product-card-detailed:hover .product-overlay {
            opacity: 1;
        }
        
        .product-info {
            padding: 2rem;
        }
        
        .product-category {
            color: #007bff;
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }
        
        .product-title {
            font-size: 1.3rem;
            color: #333;
            margin-bottom: 1rem;
            font-weight: 600;
        }
        
        .product-description {
            color: #666;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }
        
        .product-features h4 {
            color: #333;
            font-size: 1rem;
            margin-bottom: 0.5rem;
        }
        
        .product-features ul {
            list-style: none;
            margin-bottom: 1.5rem;
        }
        
        .product-features li {
            padding: 0.25rem 0;
            color: #666;
            position: relative;
            padding-left: 1.5rem;
        }
        
        .product-features li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #28a745;
            font-weight: bold;
        }
        
        .product-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .product-actions .btn {
            flex: 1;
            min-width: 120px;
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 10000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            overflow-y: auto;
        }
        
        .modal-content {
            background-color: white;
            margin: 2% auto;
            padding: 0;
            border-radius: 15px;
            width: 90%;
            max-width: 900px;
            position: relative;
            animation: modalFadeIn 0.3s ease;
        }
        
        @keyframes modalFadeIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }
        
        .modal-close {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 2rem;
            font-weight: bold;
            color: #666;
            cursor: pointer;
            z-index: 1001;
            background: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .modal-close:hover {
            color: #333;
            transform: scale(1.1);
        }
        
        .modal-product {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 500px;
        }
        
        .modal-product-image {
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        
        .product-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            background: #f8f9fa;
            padding: 1rem;
        }
        
        .modal-product-image .product-image {
            width: 200px;
            height: 200px;
        }
        
        .modal-product-info {
            padding: 2rem;
        }
        
        .modal-product-info .product-category {
            font-size: 0.9rem;
            color: #007bff;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
        }
        
        .modal-product-info h2 {
            font-size: 1.8rem;
            color: #333;
            margin-bottom: 1rem;
        }
        
        .product-details {
            margin: 2rem 0;
        }
        
        .detail-section {
            margin-bottom: 1.5rem;
        }
        
        .detail-section h3 {
            color: #333;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
            border-bottom: 2px solid #007bff;
            padding-bottom: 0.25rem;
            display: inline-block;
        }
        
        .detail-section ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .detail-section li {
            padding: 0.25rem 0;
            color: #666;
            position: relative;
            padding-left: 1.5rem;
        }
        
        .detail-section li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: #007bff;
            font-weight: bold;
        }
        
        .modal-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }
        
        .cta-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color: white;
            text-align: center;
        }
        
        .cta-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        
        .cta-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }
        
        .cta-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        @media (max-width: 768px) {
            .filter-tabs {
                flex-direction: column;
                align-items: center;
            }
            
            .products-grid {
                grid-template-columns: 1fr;
            }
            
            .modal-product {
                grid-template-columns: 1fr;
            }
            
            .modal-product-image {
                order: 2;
            }
            
            .modal-content {
                width: 95%;
                margin: 5% auto;
            }
            
            .product-actions {
                flex-direction: column;
            }
            
            .cta-actions {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
