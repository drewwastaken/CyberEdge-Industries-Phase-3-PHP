<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberEdge Industries - Account</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="index.php" class="back-home">← Back to Home</a>

    <div class="account-page">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="user-profile">
                <div class="user-avatar">
                    <img src="assets/team/team-default.jpg" alt="User Avatar" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
                </div>
                <div class="user-name">Username</div>
            </div>

            <ul class="sidebar-menu">
                <li>
                    <a href="javascript:void(0)" onclick="showSection('personal')" data-section="personal" class="active">
                        <span class="icon">👤</span>
                        Personal Data
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="showSection('payment')" data-section="payment">
                        <span class="icon">💲</span>
                        Payment & Instalments
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="showSection('orders')" data-section="orders">
                        <span class="icon">🛍️</span>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="showSection('wishlist')" data-section="wishlist">
                        <span class="icon">♡</span>
                        Wish List
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="showSection('discounts')" data-section="discounts">
                        <span class="icon">🎫</span>
                        Discounts
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="showSection('security')" data-section="security">
                        <span class="icon">🛡️</span>
                        Security & access
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="showSection('notification')" data-section="notification">
                        <span class="icon">🔔</span>
                        Notification
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" onclick="showSection('contact')" data-section="contact">
                        <span class="icon">📧</span>
                        Contact us
                    </a>
                </li>
            </ul>

            <button class="logout-btn">
                <span class="icon">🚪</span>
                Log out
            </button>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <!-- Personal Data Section -->
            <section id="personal-section" class="content-section active">
                <div class="content-header">
                    <h1>Personal Data</h1>
                    <p>Manage your personal information</p>
                </div>

                <div class="info-card">
                    <h2>
                        Basic Information
                        <button class="edit-btn">Edit</button>
                    </h2>
                    <div class="info-grid">
                        <div class="info-item">
                            <span class="info-label">Full Name</span>
                            <span class="info-value">Username</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Email Address</span>
                            <span class="info-value">username@email.com</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Phone Number</span>
                            <span class="info-value">+63 999 999 9999</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Date of Birth</span>
                            <span class="info-value">January 1, 2000</span>
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <h2>
                        Address Information
                        <button class="edit-btn">Edit</button>
                    </h2>
                    <div class="info-grid">
                        <div class="info-item">
                            <span class="info-label">Street Address</span>
                            <span class="info-value">123 Kalayaan Street</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">City</span>
                            <span class="info-value">Quezon City</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">State/Province</span>
                            <span class="info-value">Metro Manila</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Postal Code</span>
                            <span class="info-value">1100</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Country</span>
                            <span class="info-value">Philippines</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Payment Section -->
            <section id="payment-section" class="content-section">
                <div class="content-header">
                    <h1>Payment & Instalments</h1>
                    <p>Manage your payment methods and view instalments</p>
                </div>

                <div class="section-title">
                    Payment Methods
                    <button class="add-btn">+ Add Card</button>
                </div>

                <div class="payment-cards">
                    <div class="payment-card">
                        <button class="remove-card">Remove</button>
                        <div class="card-type">Visa</div>
                        <div class="card-number">•••• •••• •••• 4532</div>
                        <div class="card-info">
                            <div class="card-holder">
                                <span class="card-label">Card Holder</span>
                                <span>Username</span>
                            </div>
                            <div class="card-expiry">
                                <span class="card-label">Expires</span>
                                <span>12/27</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <h2>Active Instalments</h2>
                    <div class="empty-state">
                        <p>You have no active instalments</p>
                    </div>
                </div>
            </section>

            <!-- Orders Section -->
            <section id="orders-section" class="content-section">
                <div class="content-header">
                    <h1>Order History</h1>
                    <p>Track, return or purchase items</p>
                </div>

                <div class="order-tabs">
                    <button class="order-tab active">
                        Current <span class="badge">0</span>
                    </button>
                    <button class="order-tab">
                        Delivered <span class="badge">0</span>
                    </button>
                    <button class="order-tab">
                        Canceled <span class="badge">0</span>
                    </button>
                    <button class="order-tab">
                        Returned <span class="badge">0</span>
                    </button>
                </div>

                <div class="empty-state">
                    <p>You have not placed any orders yet</p>
                </div>
            </section>

            <!-- Wishlist Section -->
            <section id="wishlist-section" class="content-section">
                <div class="content-header">
                    <h1>Wish List</h1>
                    <p>Items you want to purchase later</p>
                </div>

                <div class="wishlist-grid">
                    <div class="wishlist-item">
                        <div class="item-image">
                            <img src="assets/products/product-gaming-pc.jpg" alt="Gaming PC">
                        </div>
                        <div class="item-name">Custom Gaming PC Build</div>
                        <div class="item-price">₱85,000</div>
                        <div class="item-actions">
                            <button class="add-to-cart-btn">Add to Cart</button>
                            <button class="remove-btn">✕</button>
                        </div>
                    </div>

                    <div class="wishlist-item">
                        <div class="item-image">
                            <img src="assets/products/product-network-switch.jpg" alt="Network Infrastructure">
                        </div>
                        <div class="item-name">Network Infrastructure Setup</div>
                        <div class="item-price">₱125,000</div>
                        <div class="item-actions">
                            <button class="add-to-cart-btn">Add to Cart</button>
                            <button class="remove-btn">✕</button>
                        </div>
                    </div>

                    <div class="wishlist-item">
                        <div class="item-image">
                            <img src="assets/products/product-support-package.jpg" alt="Software Development">
                        </div>
                        <div class="item-name">Software Development Package</div>
                        <div class="item-price">₱200,000</div>
                        <div class="item-actions">
                            <button class="add-to-cart-btn">Add to Cart</button>
                            <button class="remove-btn">✕</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Discounts Section -->
            <section id="discounts-section" class="content-section">
                <div class="content-header">
                    <h1>Discounts & Coupons</h1>
                    <p>Save money on your next purchase</p>
                </div>

                <div class="discount-tabs">
                    <button class="discount-tab active">Available</button>
                    <button class="discount-tab">Used</button>
                    <button class="discount-tab">Expired</button>
                </div>

                <div class="coupons-grid">
                    <div class="coupon-card">
                        <div class="coupon-header">
                            <div class="coupon-discount">20% OFF</div>
                            <div class="coupon-type">NEW USER</div>
                        </div>
                        <div class="coupon-title">Welcome Discount</div>
                        <div class="coupon-desc">Get 20% off on your first service purchase</div>
                        <div class="coupon-code">WELCOME20</div>
                        <div class="coupon-expiry">Expires: Dec 31, 2025</div>
                        <button class="apply-btn">Apply Coupon</button>
                    </div>

                    <div class="coupon-card">
                        <div class="coupon-header">
                            <div class="coupon-discount">₱5,000 OFF</div>
                            <div class="coupon-type">BUNDLE</div>
                        </div>
                        <div class="coupon-title">Service Bundle Discount</div>
                        <div class="coupon-desc">Save ₱5,000 when you purchase 2 or more services</div>
                        <div class="coupon-code">BUNDLE5K</div>
                        <div class="coupon-expiry">Expires: Jan 15, 2026</div>
                        <button class="apply-btn">Apply Coupon</button>
                    </div>

                    <div class="coupon-card">
                        <div class="coupon-header">
                            <div class="coupon-discount">15% OFF</div>
                            <div class="coupon-type">SEASONAL</div>
                        </div>
                        <div class="coupon-title">Holiday Special</div>
                        <div class="coupon-desc">Limited time holiday discount on all services</div>
                        <div class="coupon-code">HOLIDAY15</div>
                        <div class="coupon-expiry">Expires: Dec 25, 2025</div>
                        <button class="apply-btn">Apply Coupon</button>
                    </div>
                </div>
            </section>

            <!-- Security Section -->
            <section id="security-section" class="content-section">
                <div class="content-header">
                    <h1>Security & Access</h1>
                    <p>Manage your account security settings</p>
                </div>

                <div class="info-card">
                    <h2>Login & Password</h2>
                    <div class="security-item">
                        <div class="security-info">
                            <div class="security-title">Password</div>
                            <div class="security-desc">Last changed 3 months ago</div>
                        </div>
                        <div class="security-status">
                            <button class="change-btn">Change Password</button>
                        </div>
                    </div>
                    <div class="security-item">
                        <div class="security-info">
                            <div class="security-title">Two-Factor Authentication</div>
                            <div class="security-desc">Add an extra layer of security to your account</div>
                        </div>
                        <div class="security-status">
                            <span class="status-badge disabled">Disabled</span>
                            <button class="change-btn">Enable</button>
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <h2>Privacy Settings</h2>
                    <div class="security-item">
                        <div class="security-info">
                            <div class="security-title">Profile Visibility</div>
                            <div class="security-desc">Control who can see your profile information</div>
                        </div>
                        <div class="security-status">
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>
                    <div class="security-item">
                        <div class="security-info">
                            <div class="security-title">Activity Status</div>
                            <div class="security-desc">Show when you're active on the platform</div>
                        </div>
                        <div class="security-status">
                            <label class="toggle-switch">
                                <input type="checkbox" checked>
                                <span class="toggle-slider"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="info-card">
                    <h2>Active Sessions</h2>
                    <div class="sessions-list">
                        <div class="session-item">
                            <div class="session-info">
                                <div class="session-device">🖥️ Windows PC - Chrome</div>
                                <div class="session-details">Quezon City, Philippines • Current session</div>
                            </div>
                        </div>
                        <div class="session-item">
                            <div class="session-info">
                                <div class="session-device">📱 iPhone 13 - Safari</div>
                                <div class="session-details">Manila, Philippines • Last active 2 hours ago</div>
                            </div>
                            <button class="revoke-btn">Revoke</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Notification Section -->
            <section id="notification-section" class="content-section">
                <div class="content-header-flex">
                    <div>
                        <h1>Notifications</h1>
                        <p>Stay updated with your account activity</p>
                    </div>
                    <button class="mark-all-btn">Mark All as Read</button>
                </div>

                <div class="notification-filters">
                    <button class="filter-btn active">All</button>
                    <button class="filter-btn">Orders</button>
                    <button class="filter-btn">Promotions</button>
                    <button class="filter-btn">Account</button>
                </div>

                <div class="notifications-list">
                    <div class="notification-item unread">
                        <span class="unread-badge"></span>
                        <div class="notification-icon">🎉</div>
                        <div class="notification-content">
                            <div class="notification-title">Welcome to CyberEdge!</div>
                            <div class="notification-message">Thank you for joining us. Explore our services and get 20% off on your first purchase.</div>
                            <div class="notification-time">2 hours ago</div>
                        </div>
                        <div class="notification-actions">
                            <button class="notification-btn" title="Delete">🗑️</button>
                        </div>
                    </div>

                    <div class="notification-item">
                        <div class="notification-icon">📦</div>
                        <div class="notification-content">
                            <div class="notification-title">Order Confirmation</div>
                            <div class="notification-message">Your order #CE2024001 has been confirmed and is being processed.</div>
                            <div class="notification-time">1 day ago</div>
                        </div>
                        <div class="notification-actions">
                            <button class="notification-btn" title="Delete">🗑️</button>
                        </div>
                    </div>

                    <div class="notification-item">
                        <div class="notification-icon">💳</div>
                        <div class="notification-content">
                            <div class="notification-title">Payment Successful</div>
                            <div class="notification-message">Payment of ₱85,000 has been successfully processed for your order.</div>
                            <div class="notification-time">2 days ago</div>
                        </div>
                        <div class="notification-actions">
                            <button class="notification-btn" title="Delete">🗑️</button>
                        </div>
                    </div>

                    <div class="notification-item">
                        <div class="notification-icon">🎫</div>
                        <div class="notification-content">
                            <div class="notification-title">New Discount Available</div>
                            <div class="notification-message">Limited time offer! Get 15% off on all services with code HOLIDAY15.</div>
                            <div class="notification-time">3 days ago</div>
                        </div>
                        <div class="notification-actions">
                            <button class="notification-btn" title="Delete">🗑️</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Section -->
            <section id="contact-section" class="content-section">
                <div class="content-header">
                    <h1>Contact Us</h1>
                    <p>Get in touch with our support team</p>
                </div>

                <div class="contact-grid">
                    <div class="contact-card">
                        <div class="contact-icon">📧</div>
                        <h3>Email Support</h3>
                        <p>We'll respond within 24 hours</p>
                        <a href="mailto:cyberedgeindustries@business.com" class="contact-link">
                            cyberedgeindustries@business.com
                        </a>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">📞</div>
                        <h3>Phone Support</h3>
                        <p>Mon-Fri, 9AM-6PM PHT</p>
                        <a href="tel:+639123456789" class="contact-link">
                            +63 999 999 9999
                        </a>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">💬</div>
                        <h3>Live Chat</h3>
                        <p>Chat with our team</p>
                        <a href="#" class="contact-link">
                            Start Chat
                        </a>
                    </div>

                    <div class="contact-card">
                        <div class="contact-icon">📍</div>
                        <h3>Office Location</h3>
                        <p>Visit our headquarters</p>
                        <a href="#" class="contact-link">
                            Quezon City, Metro Manila
                        </a>
                    </div>
                </div>

                <div class="info-card">
                    <h2>Send us a Message</h2>
                    <form id="contactForm">
                        <div class="form-group">
                            <label class="form-label">Subject</label>
                            <select class="form-select" required>
                                <option value="">Select a topic</option>
                                <option value="order">Order Inquiry</option>
                                <option value="technical">Technical Support</option>
                                <option value="billing">Billing Question</option>
                                <option value="service">Service Information</option>
                                <option value="other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Order Number (Optional)</label>
                            <input type="text" class="form-input" placeholder="CE2024001">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Message</label>
                            <textarea class="form-textarea" required placeholder="Please describe your inquiry in detail..."></textarea>
                        </div>

                        <button type="submit" class="submit-btn">Send Message</button>
                    </form>
                </div>
            </section>
        </main>
    </div>

    <script src="script.js"></script>
</body>
</html>