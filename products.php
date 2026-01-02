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
        'brochure' => 'pdf/Nexo FSD ESE Early Stremer Emission Terminal  Advanced Lightning Protection System .pdf',
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
        'brochure' => 'pdf/Ardo Fill ST STX Grounding Backfill New.pdf',
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
    ],
    [
        'id' => 8,
        'name' => 'Ardo Exothermic Weld',
        'category' => 'Exothermic Welding',
        'description' => 'Permanent molecular bonding solution for grounding connections, ensuring low resistance and exceptional mechanical strength.',
        'features' => ['Permanent molecular bond', 'Corrosion resistant', 'High current capacity', 'Portable system', 'No external power required', 'IEEE 837 compliant'],
        'applications' => ['Grounding grids', 'Power substations', 'Telecommunications', 'Railway systems', 'Cathodic protection', 'Industrial facilities'],
        'image' => 'Images/ardo_exothermic_weld.jpg',
        'slug' => 'ardo-exothermic-weld',
        'brochure' => 'pdf/Ardo Exothermic Weld lite.pdf',
        'specifications' => [
            'Material' => 'Graphite Mold / Copper Powder',
            'Connection Type' => 'Cable to Cable, Cable to Rod, etc.',
            'Reaction Temp' => '> 2500°C',
            'Standards' => 'IEEE 837, UL 467, IEC 62561',
            'Shelf Life' => 'Unlimited (Powder)'
        ],
        'benefits' => [
            'Permanent connection that never loosens',
            'Superior electrical conductivity',
            'Withstands repeated high current surges',
            'Does not corrode or degrade over time',
            'Simple and safe to use on site'
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
                    elseif ($category === 'Exothermic Welding') $section_id = 'exothermic-welding';
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
                                <?php if (isset($product['brochure'])): ?>
                                    <a href="<?php echo $product['brochure']; ?>" target="_blank" class="btn btn-secondary">
                                        <i class="fas fa-file-pdf"></i> Brochure
                                    </a>
                                <?php endif; ?>
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
                            ${product.brochure ? `
                                <a href="${product.brochure}" target="_blank" class="btn btn-secondary">
                                    <i class="fas fa-file-pdf"></i> Download Brochure
                                </a>
                            ` : `
                                <button class="btn btn-secondary" onclick="downloadBrochure('${product.name}')">
                                    Download Brochure
                                </button>
                            `}
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

    /* ===== REDUX PREMIUM PRODUCTS DESIGN ===== */
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
        
        /* Product Filters */
        .product-filters {
            padding: 3rem 0;
            background: #fff;
            border-bottom: 1px solid var(--border-color);
            position: sticky;
            top: 80px; /* Adjust based on header height */
            z-index: 90;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02);
        }
        
        .filter-tabs {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }
        
        .filter-tab {
            padding: 0.75rem 1.5rem;
            background: var(--bg-light);
            color: var(--text-light);
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid var(--border-color);
            font-weight: 500;
            font-size: 0.95rem;
        }
        
        .filter-tab:hover {
            border-color: var(--primary-blue);
            color: var(--primary-blue);
            transform: translateY(-1px);
        }
        
        .filter-tab.active {
            background: var(--primary-blue);
            color: white;
            border-color: var(--primary-blue);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }
        
        /* Products Grid */
        .products-showcase {
            padding: 5rem 0;
            background-color: var(--bg-light);
            background-image: 
                radial-gradient(at 0% 0%, rgba(37, 99, 235, 0.03) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(255, 107, 53, 0.03) 0px, transparent 50%);
        }
        
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 2.5rem;
        }
        
        .product-card-detailed {
            background: white;
            border-radius: var(--card-radius);
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 10px 15px -3px rgba(0, 0, 0, 0.05);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .product-card-detailed:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.01);
            border-color: #cbd5e1;
        }
        
        .product-image-container {
            position: relative;
            height: 260px;
            overflow: hidden;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        
        .product-image {
            max-width: 80%;
            max-height: 80%;
            object-fit: contain;
            transition: transform 0.5s ease;
            filter: drop-shadow(0 10px 15px rgba(0,0,0,0.1));
        }
        
        .product-card-detailed:hover .product-image {
            transform: scale(1.05);
        }
        
        .product-overlay {
            position: absolute;
            inset: 0;
            background: rgba(30, 41, 59, 0.4);
            backdrop-filter: blur(2px);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .product-card-detailed:hover .product-overlay {
            opacity: 1;
        }
        
        .product-overlay .btn-primary {
            transform: translateY(20px);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .product-card-detailed:hover .product-overlay .btn-primary {
            transform: translateY(0);
        }
        
        .product-info {
            padding: 2rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }
        
        .product-category {
            color: var(--secondary-orange);
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 0.75rem;
            letter-spacing: 0.5px;
        }
        
        .product-title {
            font-size: 1.5rem;
            color: var(--primary-dark);
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.25;
            letter-spacing: -0.01em;
        }
        
        .product-description {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            line-height: 1.6;
            font-size: 0.95rem;
            flex-grow: 1;
        }
        
        .product-features {
            background: #f8fafc;
            border-radius: 12px;
            padding: 1.25rem;
            margin-bottom: 1.5rem;
            border: 1px solid var(--border-color);
        }
        
        .product-features h4 {
            color: var(--primary-dark);
            font-size: 0.9rem;
            margin-bottom: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
        }
        
        .product-features ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .product-features li {
            padding: 0.35rem 0;
            color: var(--text-main);
            position: relative;
            padding-left: 1.5rem;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }
        
        .product-features li::before {
            content: '\f00c';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--primary-blue);
            font-size: 0.8rem;
        }
        
        .product-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        
        .btn {
            padding: 0.8rem 1.5rem;
            border-radius: 10px;
            font-weight: 600;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 0.95rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            cursor: pointer;
            border: none;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-blue), #1e40af);
            color: white;
            box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.4);
            background: linear-gradient(135deg, #1e40af, var(--primary-blue));
            color: white;
        }
        
        .btn-secondary {
            background: white;
            color: var(--text-main);
            border: 1px solid var(--border-color);
        }
        
        .btn-secondary:hover {
            background: #f8fafc;
            border-color: var(--primary-blue);
            color: var(--primary-blue);
            transform: translateY(-2px);
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 10000;
            inset: 0;
            background-color: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(5px);
            overflow-y: auto;
            padding: 2rem 1rem;
        }
        
        .modal-content {
            background-color: white;
            margin: 0 auto;
            border-radius: 24px;
            width: 100%;
            max-width: 1000px;
            position: relative;
            animation: modalSlideUp 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }
        
        @keyframes modalSlideUp {
            from { opacity: 0; transform: translateY(40px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }
        
        .modal-close {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 1.2rem;
            color: var(--text-light);
            cursor: pointer;
            z-index: 1001;
            background: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .modal-close:hover {
            color: var(--primary-dark);
            transform: rotate(90deg);
            background: #f1f5f9;
        }
        
        .modal-product {
            display: grid;
            grid-template-columns: 40% 60%;
            min-height: 600px;
        }
        
        .modal-product-image {
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem;
            border-right: 1px solid var(--border-color);
        }
        
        .modal-product-image .product-image {
            max-width: 100%;
            max-height: 400px;
            filter: drop-shadow(0 20px 25px rgba(0,0,0,0.15));
        }
        
        .modal-product-info {
            padding: 3rem;
        }
        
        .modal-product-info .product-category {
            font-size: 0.9rem;
            color: var(--primary-blue);
            margin-bottom: 0.5rem;
        }
        
        .modal-product-info h2 {
            font-size: 2.25rem;
            color: var(--primary-dark);
            margin-bottom: 1.25rem;
            font-weight: 800;
            line-height: 1.1;
        }
        
        .product-details {
            margin: 2rem 0;
            display: grid;
            gap: 2rem;
        }
        
        .detail-section h3 {
            color: var(--primary-dark);
            font-size: 1.1rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #e2e8f0;
            font-weight: 700;
        }
        
        .detail-section ul {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 0.75rem;
        }
        
        .detail-section li {
            padding-left: 1.5rem;
            position: relative;
            color: var(--text-main);
            font-size: 0.95rem;
        }
        
        .detail-section li::before {
            content: '\f058';
            font-family: 'Font Awesome 5 Free';
            font-weight: 400;
            position: absolute;
            left: 0;
            color: var(--primary-blue);
        }
        
        .modal-actions {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
        }
        
        /* CTA Section */
        .cta-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            color: white;
            text-align: center;
            position: relative;
        }
        
        .cta-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image: 
                radial-gradient(at 100% 0%, rgba(37, 99, 235, 0.2) 0px, transparent 50%),
                radial-gradient(at 0% 100%, rgba(255, 107, 53, 0.2) 0px, transparent 50%);
            pointer-events: none;
        }
        
        .cta-content {
            position: relative;
            z-index: 1;
        }
        
        .cta-content h2 {
            font-size: 2.75rem;
            margin-bottom: 1.25rem;
            font-weight: 800;
        }
        
        .cta-content p {
            font-size: 1.25rem;
            margin-bottom: 2.5rem;
            opacity: 0.9;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .cta-actions {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
        }
        
        /* Responsive */
        @media (max-width: 1024px) {
            .modal-product {
                grid-template-columns: 1fr;
            }
            .modal-product-image {
                border-right: none;
                border-bottom: 1px solid var(--border-color);
                padding: 2rem;
            }
            .modal-product-info {
                padding: 2rem;
            }
        }
        
        @media (max-width: 768px) {
            .page-header h1 {
                font-size: 2.5rem;
            }
            .filter-tabs {
                flex-wrap: nowrap;
                overflow-x: auto;
                justify-content: flex-start;
                padding-bottom: 0.5rem;
                -webkit-overflow-scrolling: touch;
            }
            .filter-tab {
                white-space: nowrap;
                flex-shrink: 0;
            }
            .products-grid {
                grid-template-columns: 1fr;
            }
            .product-actions {
                grid-template-columns: 1fr;
            }
            .modal-actions {
                flex-direction: column;
            }
            .cta-actions {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
