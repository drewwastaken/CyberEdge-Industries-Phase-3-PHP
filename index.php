<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberEdge Industries</title>
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
                <li><a href="#home">Projects ▼</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="nav-right">
                <div class="search-bar">
                    <input type="text" placeholder="Search for services...">
                    <span class="search-icon">🔍</span>
                </div>
                <button class="cart-icon" onclick="window.location.href='cart.php'">🛒</button>
                <button class="account-icon" onclick="window.location.href='accounts.php'">👤</button>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>FIND TECH PRODUCTS AND SERVICES</h1>
                    <p>Browse through our diverse range of high end products and services.</p>
                    <button class="shop-btn">Shop Now</button>
                </div>
                <div class="hero-image">
                    <img src="assets/hero-banner.jpg" alt="Technology Solutions">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services-section">
        <div class="container">
            <h2>SERVICES</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-image">
                        <img src="assets/services/service-software.jpg" alt="Software Development">
                    </div>
                    <h3>Software Development</h3>
                    <div class="rating">
                        <span class="stars">⭐⭐⭐⭐⭐</span>
                        <span class="rating-text">5.0/5</span>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="assets/services/service-infrastructure.jpg" alt="IT Infrastructure">
                    </div>
                    <h3>IT Infrastructure</h3>
                    <div class="rating">
                        <span class="stars">⭐⭐⭐⭐</span>
                        <span class="rating-text">4.0/5</span>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="assets/services/service-consulting.jpg" alt="Consulting">
                    </div>
                    <h3>Consulting</h3>
                    <div class="rating">
                        <span class="stars">⭐⭐⭐</span>
                        <span class="rating-text">3.0/5</span>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-image">
                        <img src="assets/services/service-support.jpg" alt="Technical Support">
                    </div>
                    <h3>Technical Support</h3>
                    <div class="rating">
                        <span class="stars">⭐⭐⭐⭐</span>
                        <span class="rating-text">4.5/5</span>
                    </div>
                </div>
            </div>
            <button class="view-all-btn" onclick="window.location.href='services.php'">View All</button>
        </div>
    </section>

    <section id="projects" class="projects-section">
        <div class="container">
            <h2>PROJECTS</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <div class="project-image">
                        <img src="assets/projects/project-casestudies.jpg" alt="Case Studies">
                    </div>
                    <h3>Case Studies</h3>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <img src="assets/projects/project-clients.jpg" alt="Client Projects">
                    </div>
                    <h3>Client Projects</h3>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <img src="assets/projects/project-tech.jpg" alt="Technology Stack">
                    </div>
                    <h3>Technology Stack</h3>
                </div>
                <div class="project-card">
                    <div class="project-image">
                        <img src="assets/projects/project-networking.jpg" alt="Networking">
                    </div>
                    <h3>Networking</h3>
                </div>
            </div>
            <button class="view-all-btn" onclick="window.location.href='projects.php'">View All</button>
        </div>
    </section>

    <section id="help" class="help-section">
        <div class="container">
            <div class="help-header">
                <h2>Help</h2>
                <div class="carousel-arrows">
                    <button class="arrow-btn" id="prev-review">←</button>
                    <button class="arrow-btn" id="next-review">→</button>
                </div>
            </div>
            <div class="reviews-wrapper" id="reviews-wrapper">
                <div class="reviews-container">
                    <div class="review-card" data-index="1">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <h4>Ricky A. <span class="verified">✓</span></h4>
                        <p>Goated Company</p>
                    </div>
                    <div class="review-card" data-index="2">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <h4>Arkin J. <span class="verified">✓</span></h4>
                        <p>Well Built PC. Thanks!</p>
                    </div>
                    <div class="review-card" data-index="3">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <h4>Cedrick DC. <span class="verified">✓</span></h4>
                        <p>Clean work. Cable management is our biggest problem. Thanks!</p>
                    </div>

                    <div class="review-card duplicate" data-index="1-dup">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <h4>Ricky A. <span class="verified">✓</span></h4>
                        <p>Goated Company</p>
                    </div>
                    <div class="review-card duplicate" data-index="2-dup">
                        <div class="stars">⭐⭐⭐⭐⭐</div>
                        <h4>Arkin J. <span class="verified">✓</span></h4>
                        <p>Well Built PC. Thanks!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-box">
                <div class="newsletter-text">
                    <h2>Make sure to follow and CONTACT US!</h2>
                </div>
                <div class="newsletter-form">
                    <input type="email" placeholder="Enter your email address">
                    <button>Subscribe to CyberEdge</button>
                </div>
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
                        <li><a href="contact.php">Email</a></li>
                        <li><a href="contact.php">Contact Number</a></li>
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