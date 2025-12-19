<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberEdge Industries - Our Projects</title>
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
                <li><a href="index.php#projects" class="active">Projects ▼</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="index.php#profile">Profile</a></li>
                <li><a href="index.php#help">Help</a></li>
            </ul>
            <div class="nav-right">
                <div class="search-bar">
                    <input type="text" id="project-search" placeholder="Search for projects...">
                    <span class="search-icon">🔍</span>
                </div>
                <button class="cart-icon" onclick="window.location.href='cart.php'">🛒</button>
                <button class="account-icon" onclick="window.location.href='accounts.php'">👤</button>
            </div>
        </div>
    </nav>

    <!-- Projects Hero Section -->
    <section class="projects-hero">
        <div class="container">
            <h1>Our Projects</h1>
            <p>Showcasing our successful implementations and client solutions across various industries</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="projects-filter-section">
        <div class="container">
            <div class="filter-controls">
                <button class="filter-tag active" data-category="all">All Projects</button>
                <button class="filter-tag" data-category="case-studies">Case Studies</button>
                <button class="filter-tag" data-category="client">Client Projects</button>
                <button class="filter-tag" data-category="tech-stack">Technology Stack</button>
                <button class="filter-tag" data-category="networking">Networking</button>
            </div>
        </div>
    </section>

    <!-- Projects Grid Section -->
    <section class="projects-detail-section">
        <div class="container">
            <div class="projects-detail-grid">
                
                <!-- Case Study 1 -->
                <div class="project-detail-card" data-category="case-studies">
                    <div class="project-detail-image">
                        <div class="project-badge">Featured</div>
                        <div class="project-icon">🏦</div>
                    </div>
                    <div class="project-detail-content">
                        <span class="project-category">Case Study</span>
                        <h3>Banking Security Overhaul</h3>
                        <p class="project-description">Complete security infrastructure redesign for a major Philippine banking institution, including implementation of multi-factor authentication and real-time threat monitoring systems.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-label">Duration</span>
                                <span class="meta-value">6 months</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Industry</span>
                                <span class="meta-value">Finance</span>
                            </div>
                        </div>
                        <div class="project-tech-stack">
                            <span class="tech-badge">Firewall Systems</span>
                            <span class="tech-badge">SIEM</span>
                            <span class="tech-badge">Data Encryption</span>
                        </div>
                        <button class="project-cta-btn">View Details</button>
                    </div>
                </div>

                <!-- Case Study 2 -->
                <div class="project-detail-card" data-category="case-studies">
                    <div class="project-detail-image">
                        <div class="project-icon">🏥</div>
                    </div>
                    <div class="project-detail-content">
                        <span class="project-category">Case Study</span>
                        <h3>Healthcare Management System</h3>
                        <p class="project-description">Custom patient management platform with appointment scheduling, electronic health records, and integrated billing system for a network of medical clinics.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-label">Duration</span>
                                <span class="meta-value">8 months</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Industry</span>
                                <span class="meta-value">Healthcare</span>
                            </div>
                        </div>
                        <div class="project-tech-stack">
                            <span class="tech-badge">PHP</span>
                            <span class="tech-badge">MySQL</span>
                            <span class="tech-badge">React</span>
                        </div>
                        <button class="project-cta-btn">View Details</button>
                    </div>
                </div>

                <!-- Client Project 1 -->
                <div class="project-detail-card" data-category="client">
                    <div class="project-detail-image">
                        <div class="project-badge success">Completed</div>
                        <div class="project-icon">🛒</div>
                    </div>
                    <div class="project-detail-content">
                        <span class="project-category">Client Project</span>
                        <h3>E-Commerce Platform Launch</h3>
                        <p class="project-description">Full-scale e-commerce solution with inventory management, payment gateway integration, and advanced customer analytics for a retail company.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-label">Duration</span>
                                <span class="meta-value">5 months</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Industry</span>
                                <span class="meta-value">Retail</span>
                            </div>
                        </div>
                        <div class="project-tech-stack">
                            <span class="tech-badge">Laravel</span>
                            <span class="tech-badge">Vue.js</span>
                            <span class="tech-badge">PostgreSQL</span>
                        </div>
                        <button class="project-cta-btn">View Details</button>
                    </div>
                </div>

                <!-- Client Project 2 -->
                <div class="project-detail-card" data-category="client">
                    <div class="project-detail-image">
                        <div class="project-icon">🎓</div>
                    </div>
                    <div class="project-detail-content">
                        <span class="project-category">Client Project</span>
                        <h3>Educational Portal Development</h3>
                        <p class="project-description">Online learning management system featuring video streaming, interactive quizzes, progress tracking, and automated certification for a university.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-label">Duration</span>
                                <span class="meta-value">7 months</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Industry</span>
                                <span class="meta-value">Education</span>
                            </div>
                        </div>
                        <div class="project-tech-stack">
                            <span class="tech-badge">Node.js</span>
                            <span class="tech-badge">MongoDB</span>
                            <span class="tech-badge">Angular</span>
                        </div>
                        <button class="project-cta-btn">View Details</button>
                    </div>
                </div>

                <!-- Technology Stack 1 -->
                <div class="project-detail-card" data-category="tech-stack">
                    <div class="project-detail-image">
                        <div class="project-icon">☁️</div>
                    </div>
                    <div class="project-detail-content">
                        <span class="project-category">Technology Stack</span>
                        <h3>Cloud Migration Project</h3>
                        <p class="project-description">Complete migration of on-premise infrastructure to AWS cloud, ensuring zero downtime and improved scalability for a manufacturing company.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-label">Duration</span>
                                <span class="meta-value">5 months</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Industry</span>
                                <span class="meta-value">Manufacturing</span>
                            </div>
                        </div>
                        <div class="project-tech-stack">
                            <span class="tech-badge">AWS EC2</span>
                            <span class="tech-badge">S3</span>
                            <span class="tech-badge">RDS</span>
                            <span class="tech-badge">CloudFront</span>
                        </div>
                        <button class="project-cta-btn">View Details</button>
                    </div>
                </div>

                <!-- Technology Stack 2 -->
                <div class="project-detail-card" data-category="tech-stack">
                    <div class="project-detail-image">
                        <div class="project-badge">Innovative</div>
                        <div class="project-icon">📊</div>
                    </div>
                    <div class="project-detail-content">
                        <span class="project-category">Technology Stack</span>
                        <h3>Business Intelligence Dashboard</h3>
                        <p class="project-description">Custom analytics platform with real-time data visualization, reporting tools, and predictive analytics for sales forecasting and business insights.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-label">Duration</span>
                                <span class="meta-value">4 months</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Industry</span>
                                <span class="meta-value">Analytics</span>
                            </div>
                        </div>
                        <div class="project-tech-stack">
                            <span class="tech-badge">Python</span>
                            <span class="tech-badge">Power BI</span>
                            <span class="tech-badge">SQL Server</span>
                        </div>
                        <button class="project-cta-btn">View Details</button>
                    </div>
                </div>

                <!-- Networking 1 -->
                <div class="project-detail-card" data-category="networking">
                    <div class="project-detail-image">
                        <div class="project-icon">🏢</div>
                    </div>
                    <div class="project-detail-content">
                        <span class="project-category">Networking</span>
                        <h3>Corporate Network Infrastructure</h3>
                        <p class="project-description">Design and deployment of complete network infrastructure for 500+ employees including servers, switches, cloud integration, and comprehensive backup systems.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-label">Duration</span>
                                <span class="meta-value">4 months</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Industry</span>
                                <span class="meta-value">Corporate</span>
                            </div>
                        </div>
                        <div class="project-tech-stack">
                            <span class="tech-badge">Cisco</span>
                            <span class="tech-badge">AWS</span>
                            <span class="tech-badge">Active Directory</span>
                        </div>
                        <button class="project-cta-btn">View Details</button>
                    </div>
                </div>

                <!-- Networking 2 -->
                <div class="project-detail-card" data-category="networking">
                    <div class="project-detail-image">
                        <div class="project-icon">🔐</div>
                    </div>
                    <div class="project-detail-content">
                        <span class="project-category">Networking</span>
                        <h3>Security Audit & Penetration Testing</h3>
                        <p class="project-description">Comprehensive security assessment and penetration testing for a financial services company, identifying and resolving critical vulnerabilities.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-label">Duration</span>
                                <span class="meta-value">2 months</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Industry</span>
                                <span class="meta-value">Finance</span>
                            </div>
                        </div>
                        <div class="project-tech-stack">
                            <span class="tech-badge">Kali Linux</span>
                            <span class="tech-badge">Metasploit</span>
                            <span class="tech-badge">Burp Suite</span>
                        </div>
                        <button class="project-cta-btn">View Details</button>
                    </div>
                </div>

                <!-- Additional Projects -->
                <div class="project-detail-card" data-category="client">
                    <div class="project-detail-image">
                        <div class="project-icon">📱</div>
                    </div>
                    <div class="project-detail-content">
                        <span class="project-category">Client Project</span>
                        <h3>Mobile Banking Application</h3>
                        <p class="project-description">Secure mobile banking app with biometric authentication, transaction history, real-time notifications, and bill payment features for iOS and Android platforms.</p>
                        <div class="project-meta">
                            <div class="meta-item">
                                <span class="meta-label">Duration</span>
                                <span class="meta-value">6 months</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Industry</span>
                                <span class="meta-value">Banking</span>
                            </div>
                        </div>
                        <div class="project-tech-stack">
                            <span class="tech-badge">React Native</span>
                            <span class="tech-badge">Firebase</span>
                            <span class="tech-badge">API Integration</span>
                        </div>
                        <button class="project-cta-btn">View Details</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="projects-cta-section">
        <div class="container">
            <div class="cta-box">
                <h2>Want to Start Your Own Project?</h2>
                <p>Let's discuss how we can help bring your vision to life with our expertise and proven track record.</p>
                <button class="cta-contact-btn" onclick="window.location.href='index.php#help'">Start a Project</button>
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