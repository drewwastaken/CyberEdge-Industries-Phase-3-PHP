<?php
$message = '';
$messageType = '';

if (isset($_GET['success'])) {
    $message = 'Thank you for your message! We will get back to you within 24 hours.';
    $messageType = 'success';
} elseif (isset($_GET['error'])) {
    $message = 'There was an error. Please try again.';
    $messageType = 'error';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberEdge Industries - Contact Us</title>
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
            <ul class="nav-menu">
                <li><a href="index.php#projects">Projects ▼</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
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

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <h1>Get In Touch</h1>
            <p>We'd love to hear from you. Let us know how we can help.</p>
        </div>
    </section>

<?php if ($message): ?>
<div class="container" style="margin-top: 20px;">
    <div style="padding: 20px; border-radius: 10px; text-align: center; background-color: <?php echo $messageType === 'success' ? '#d4edda' : '#f8d7da'; ?>; color: <?php echo $messageType === 'success' ? '#155724' : '#721c24'; ?>;">
        <?php echo htmlspecialchars($message); ?>
    </div>
</div>
<?php endif; ?>


    <!-- Contact Methods Section -->
    <section class="contact-methods-section">
        <div class="container">
            <div class="contact-methods-grid">
                <div class="contact-method-card">
                    <div class="method-icon">📧</div>
                    <h3>Email Us</h3>
                    <p>Send us an email anytime</p>
                    <a href="mailto:cyberedgeindustries@business.com" class="method-link">cyberedgeindustries@business.com</a>
                    <span class="response-time">We'll respond within 24 hours</span>
                </div>

                <div class="contact-method-card">
                    <div class="method-icon">📞</div>
                    <h3>Call Us</h3>
                    <p>Mon-Fri from 8am to 6pm</p>
                    <a href="tel:+639999999999" class="method-link">+63 999 999 9999</a>
                    <span class="response-time">Available during business hours</span>
                </div>

                <div class="contact-method-card">
                    <div class="method-icon">💬</div>
                    <h3>Live Chat</h3>
                    <p>Chat with our support team</p>
                    <a href="#" class="method-link">Start Chat Now</a>
                    <span class="response-time">Average response: 2 minutes</span>
                </div>

                <div class="contact-method-card">
                    <div class="method-icon">📍</div>
                    <h3>Visit Us</h3>
                    <p>Come visit our office</p>
                    <a href="#" class="method-link">Ayala Boulevard, Ermita<br>Manila, 1000, Philippines</a>
                    <span class="response-time">Mon-Fri, 9am - 5pm</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="contact-form-wrapper">
                <div class="form-header">
                    <h2>Send Us a Message</h2>
                    <p>Fill out the form below and we'll get back to you as soon as possible</p>
                </div>

                <form class="main-contact-form" method="POST" action="process_contact.php">
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
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="company">Company Name</label>
                        <input type="text" id="company" name="company">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select a subject</option>
                            <option value="general">General Inquiry</option>
                            <option value="services">Services Information</option>
                            <option value="quote">Request a Quote</option>
                            <option value="support">Technical Support</option>
                            <option value="partnership">Partnership Opportunities</option>
                            <option value="careers">Career Inquiries</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="6" required placeholder="Tell us more about your inquiry..."></textarea>
                    </div>

                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="newsletter">
                            <span>I'd like to receive updates and promotional emails from CyberEdge</span>
                        </label>
                    </div>

                    <button type="submit" class="submit-contact-btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2>Our Location</h2>
            <div class="map-placeholder">
                <div class="map-content">
                    <p>📍 Map Placeholder</p>
                    <p class="map-address">
                        <strong>CyberEdge Industries</strong><br>
                        Ayala Boulevard, Ermita<br>
                        Manila, 1000<br>
                        Philippines
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="contact-faq-section">
        <div class="container">
            <h2>Frequently Asked Questions</h2>
            <p class="section-subtitle">Quick answers to common questions</p>
            
            <div class="faq-grid">
                <div class="faq-card">
                    <h3>What are your business hours?</h3>
                    <p>We're open Monday to Friday, 8:00 AM to 6:00 PM PHT. Our 24/7 support is available for existing clients with active support contracts.</p>
                </div>
                <div class="faq-card">
                    <h3>How quickly will you respond?</h3>
                    <p>We aim to respond to all inquiries within 24 hours during business days. Urgent matters receive priority attention.</p>
                </div>
                <div class="faq-card">
                    <h3>Do you offer free consultations?</h3>
                    <p>Yes! We offer free initial consultations to discuss your needs and how we can help your business.</p>
                </div>
                <div class="faq-card">
                    <h3>Can I schedule a meeting?</h3>
                    <p>Absolutely. Mention your preferred date and time in the message form, and we'll confirm availability.</p>
                </div>
                <div class="faq-card">
                    <h3>Do you work with international clients?</h3>
                    <p>Yes, we serve clients globally and can accommodate different time zones for communication.</p>
                </div>
                <div class="faq-card">
                    <h3>What information should I prepare?</h3>
                    <p>Basic information about your business, current challenges, and project goals helps us understand your needs better.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Hours Section -->
    <section class="business-hours-section">
        <div class="container">
            <div class="hours-box">
                <h2>Business Hours</h2>
                <div class="hours-grid">
                    <div class="hours-item">
                        <span class="day">Monday - Friday</span>
                        <span class="time">8:00 AM - 6:00 PM</span>
                    </div>
                    <div class="hours-item">
                        <span class="day">Saturday</span>
                        <span class="time">9:00 AM - 3:00 PM</span>
                    </div>
                    <div class="hours-item">
                        <span class="day">Sunday</span>
                        <span class="time">Closed</span>
                    </div>
                    <div class="hours-item emergency">
                        <span class="day">Emergency Support</span>
                        <span class="time">24/7 for Premium Clients</span>
                    </div>
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