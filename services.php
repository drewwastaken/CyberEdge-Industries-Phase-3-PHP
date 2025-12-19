<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberEdge Industries - Our Services</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="top-banner">
        <p>contact us: cyberedgeindustries@business.com</p>
        <button class="close-banner">&times;</button>
    </div>

    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <img src="assets/logo.png" alt="CyberEdge Industries Logo" class="logo-img">
            </div>
            <button class="mobile-menu-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul class="nav-menu">
                <li><a href="index.php#projects">Projects ▼</a></li>
                <li><a href="services.php" class="active">Services</a></li>
                <li><a href="index.php#profile">Profile</a></li>
                <li><a href="index.php#help">Help</a></li>
            </ul>
            <div class="nav-right">
                <div class="search-bar">
                    <input type="text" id="service-search" placeholder="Search for services...">
                    <span class="search-icon">🔍</span>
                </div>
                <button class="cart-icon" onclick="window.location.href='cart.php'">🛒</button>
                <button class="account-icon" onclick="window.location.href='accounts.php'">👤</button>
            </div>
        </div>
    </nav>

    <!-- Services Hero Section -->
    <section class="services-hero">
        <div class="container">
            <h1>Our Services</h1>
            <p>Comprehensive IT and cybersecurity solutions tailored to your business needs</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="services-filter-section">
        <div class="container">
            <div class="filter-controls">
                <button class="filter-tag active" data-category="all">All Services</button>
                <button class="filter-tag" data-category="development">Development</button>
                <button class="filter-tag" data-category="infrastructure">Infrastructure</button>
                <button class="filter-tag" data-category="security">Security</button>
                <button class="filter-tag" data-category="support">Support</button>
            </div>
        </div>
    </section>

    <!-- Services Grid Section -->
    <section class="services-detail-section">
        <div class="container">
            <div class="services-detail-grid">
                
                <!-- Software Development -->
                <div class="service-detail-card" data-category="development">
                    <div class="service-detail-image">
                        <img src="assets/services/service-detail-software.jpg" alt="Software Development">
                        <div class="service-badge">Most Popular</div>
                    </div>
                    <div class="service-detail-content">
                        <h3>Software Development</h3>
                        <div class="rating">
                            <span class="stars">⭐⭐⭐⭐⭐</span>
                            <span class="rating-text">5.0/5 (245 reviews)</span>
                        </div>
                        <p class="service-description">Custom software solutions tailored to your business needs. From web applications to mobile apps, we build scalable and efficient systems.</p>
                        <ul class="service-features-list">
                            <li>✓ Web Application Development</li>
                            <li>✓ Mobile App Development (iOS & Android)</li>
                            <li>✓ Enterprise Software Solutions</li>
                            <li>✓ API Development & Integration</li>
                        </ul>
                        <div class="service-price">Starting at ₱150,000</div>
                        <button class="service-cta-btn">Get Quote</button>
                    </div>
                </div>

                <!-- IT Infrastructure -->
                <div class="service-detail-card" data-category="infrastructure">
                    <div class="service-detail-image">
                        <img src="assets/services/service-detail-infrastructure.jpg" alt="IT Infrastructure">
                    </div>
                    <div class="service-detail-content">
                        <h3>IT Infrastructure Setup</h3>
                        <div class="rating">
                            <span class="stars">⭐⭐⭐⭐</span>
                            <span class="rating-text">4.0/5 (189 reviews)</span>
                        </div>
                        <p class="service-description">Build a robust and reliable IT foundation with our complete infrastructure solutions designed for scalability and performance.</p>
                        <ul class="service-features-list">
                            <li>✓ Network Design & Implementation</li>
                            <li>✓ Server Setup & Configuration</li>
                            <li>✓ Cloud Migration Services</li>
                            <li>✓ Storage & Backup Solutions</li>
                        </ul>
                        <div class="service-price">Starting at ₱200,000</div>
                        <button class="service-cta-btn">Get Quote</button>
                    </div>
                </div>

                <!-- Consulting -->
                <div class="service-detail-card" data-category="support">
                    <div class="service-detail-image">
                        <img src="assets/services/service-detail-consulting.jpg" alt="IT Consulting">
                    </div>
                    <div class="service-detail-content">
                        <h3>IT Consulting</h3>
                        <div class="rating">
                            <span class="stars">⭐⭐⭐</span>
                            <span class="rating-text">3.0/5 (98 reviews)</span>
                        </div>
                        <p class="service-description">Expert guidance on technology strategy, digital transformation, and IT optimization to help your business thrive.</p>
                        <ul class="service-features-list">
                            <li>✓ Technology Strategy Planning</li>
                            <li>✓ Digital Transformation Consulting</li>
                            <li>✓ IT Process Optimization</li>
                            <li>✓ System Architecture Design</li>
                        </ul>
                        <div class="service-price">Starting at ₱50,000</div>
                        <button class="service-cta-btn">Get Quote</button>
                    </div>
                </div>

                <!-- Technical Support -->
                <div class="service-detail-card" data-category="support">
                    <div class="service-detail-image">
                        <img src="assets/services/service-detail-support.jpg" alt="Technical Support">
                    </div>
                    <div class="service-detail-content">
                        <h3>24/7 Technical Support</h3>
                        <div class="rating">
                            <span class="stars">⭐⭐⭐⭐</span>
                            <span class="rating-text">4.5/5 (312 reviews)</span>
                        </div>
                        <p class="service-description">Round-the-clock technical assistance to ensure your systems run smoothly with minimal downtime and maximum efficiency.</p>
                        <ul class="service-features-list">
                            <li>✓ 24/7 Help Desk Support</li>
                            <li>✓ System Monitoring & Maintenance</li>
                            <li>✓ Remote Technical Assistance</li>
                            <li>✓ Issue Resolution & Troubleshooting</li>
                        </ul>
                        <div class="service-price">Starting at ₱30,000/month</div>
                        <button class="service-cta-btn">Get Quote</button>
                    </div>
                </div>

                <!-- Cybersecurity -->
                <div class="service-detail-card" data-category="security">
                    <div class="service-detail-image">
                        <img src="assets/services/service-detail-cybersecurity.jpg" alt="Cybersecurity Solutions">
                        <div class="service-badge recommended">Recommended</div>
                    </div>
                    <div class="service-detail-content">
                        <h3>Cybersecurity Solutions</h3>
                        <div class="rating">
                            <span class="stars">⭐⭐⭐⭐⭐</span>
                            <span class="rating-text">5.0/5 (201 reviews)</span>
                        </div>
                        <p class="service-description">Comprehensive security solutions to protect your business from evolving digital threats and vulnerabilities.</p>
                        <ul class="service-features-list">
                            <li>✓ Threat Detection & Prevention</li>
                            <li>✓ Vulnerability Assessment</li>
                            <li>✓ Firewall & Network Security</li>
                            <li>✓ Security Audits & Compliance</li>
                        </ul>
                        <div class="service-price">Starting at ₱120,000</div>
                        <button class="service-cta-btn">Get Quote</button>
                    </div>
                </div>

                <!-- Cloud Services -->
                <div class="service-detail-card" data-category="infrastructure">
                    <div class="service-detail-image">
                        <img src="assets/services/service-detail-cloud.jpg" alt="Cloud Services">
                    </div>
                    <div class="service-detail-content">
                        <h3>Cloud Services</h3>
                        <div class="rating">
                            <span class="stars">⭐⭐⭐⭐⭐</span>
                            <span class="rating-text">4.8/5 (167 reviews)</span>
                        </div>
                        <p class="service-description">Leverage the power of cloud computing with our migration, deployment, and management services for AWS, Azure, and GCP.</p>
                        <ul class="service-features-list">
                            <li>✓ Cloud Migration & Deployment</li>
                            <li>✓ Cloud Infrastructure Management</li>
                            <li>✓ Multi-Cloud Solutions</li>
                            <li>✓ Cost Optimization</li>
                        </ul>
                        <div class="service-price">Starting at ₱180,000</div>
                        <button class="service-cta-btn">Get Quote</button>
                    </div>
                </div>

                <!-- Database Management -->
                <div class="service-detail-card" data-category="infrastructure">
                    <div class="service-detail-image">
                        <img src="assets/services/service-detail-database.jpg" alt="Database Management">
                    </div>
                    <div class="service-detail-content">
                        <h3>Database Management</h3>
                        <div class="rating">
                            <span class="stars">⭐⭐⭐⭐</span>
                            <span class="rating-text">4.3/5 (134 reviews)</span>
                        </div>
                        <p class="service-description">Efficient database design, optimization, and maintenance to ensure your data is secure, accessible, and performing at its best.</p>
                        <ul class="service-features-list">
                            <li>✓ Database Design & Architecture</li>
                            <li>✓ Performance Optimization</li>
                            <li>✓ Backup & Recovery Solutions</li>
                            <li>✓ Data Migration Services</li>
                        </ul>
                        <div class="service-price">Starting at ₱90,000</div>
                        <button class="service-cta-btn">Get Quote</button>
                    </div>
                </div>

                <!-- Network Security -->
                <div class="service-detail-card" data-category="security">
                    <div class="service-detail-image">
                        <img src="assets/services/service-detail-network-security.jpg" alt="Network Security">
                    </div>
                    <div class="service-detail-content">
                        <h3>Network Security</h3>
                        <div class="rating">
                            <span class="stars">⭐⭐⭐⭐⭐</span>
                            <span class="rating-text">4.9/5 (178 reviews)</span>
                        </div>
                        <p class="service-description">Protect your network infrastructure from unauthorized access and cyber threats with our advanced security solutions.</p>
                        <ul class="service-features-list">
                            <li>✓ Firewall Configuration</li>
                            <li>✓ Intrusion Detection Systems</li>
                            <li>✓ VPN Setup & Management</li>
                            <li>✓ Network Monitoring</li>
                        </ul>
                        <div class="service-price">Starting at ₱100,000</div>
                        <button class="service-cta-btn">Get Quote</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="services-cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Can't Find What You're Looking For?</h2>
                <p>Let's discuss your custom requirements and find the perfect solution for your business.</p>
                <button class="cta-contact-btn" onclick="window.location.href='index.php#help'">Contact Us</button>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3>CYBEREDGE</h3>
                    <p>All the Tech Products and Services you need!</p>
                    <div class="social-icons">
                        <span class="social-icon">●</span>
                        <span class="social-icon">●</span>
                        <span class="social-icon">●</span>
                        <span class="social-icon">●</span>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>HELP</h3>
                    <ul>
                        <li><a href="#">Customer Support</a></li>
                        <li><a href="#">Delivery Details</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>FAQ</h3>
                    <ul>
                        <li><a href="#">Account</a></li>
                        <li><a href="#">Deliveries</a></li>
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Payments</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>CONTACT FORM</h3>
                    <ul>
                        <li><a href="#">Email</a></li>
                        <li><a href="#">Contact Number</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>