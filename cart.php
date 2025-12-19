<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberEdge Industries - Shopping Cart</title>
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
                <li><a href="index.php#services">Services</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="index.php#help">Help</a></li>
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

    <section class="cart-section">
        <div class="container cart-layout">
            <div class="cart-items">
                <h1>Shopping Cart</h1>
                <p class="cart-subhead">You have 3 items in your cart.</p>

                <div class="cart-item-card">
                    <div class="item-image cart-image-placeholder"></div>
                    <div class="item-details">
                        <h3 class="item-name">Custom Gaming PC Build Service</h3>
                        <p class="item-category">Service</p>
                        <div class="item-price">₱85,000.00</div>
                    </div>
                    <div class="item-controls">
                        <button class="remove-from-cart">Remove</button>
                        <button class="move-to-wishlist">Move to Wishlist</button>
                    </div>
                </div>

                <div class="cart-item-card">
                    <div class="item-image cart-image-placeholder"></div>
                    <div class="item-details">
                        <h3 class="item-name">High-Speed Network Switch (Model CE-900)</h3>
                        <p class="item-category">Product</p>
                        <div class="item-price">₱15,500.00</div>
                    </div>
                    <div class="item-controls">
                        <button class="remove-from-cart">Remove</button>
                        <button class="move-to-wishlist">Move to Wishlist</button>
                    </div>
                </div>

                <div class="cart-item-card">
                    <div class="item-image cart-image-placeholder"></div>
                    <div class="item-details">
                        <h3 class="item-name">Standard Technical Support Package</h3>
                        <p class="item-category">Service</p>
                        <div class="item-price">₱5,000.00</div>
                    </div>
                    <div class="item-controls">
                        <button class="remove-from-cart">Remove</button>
                        <button class="move-to-wishlist">Move to Wishlist</button>
                    </div>
                </div>
                
                <div class="continue-shopping">
                    <a href="index.php">← Continue Shopping</a>
                </div>
            </div>

            <div class="order-summary-card">
                <h2>Order Summary</h2>
                <div class="summary-line">
                    <span>Subtotal (3 items)</span>
                    <span>₱105,500.00</span>
                </div>
                <div class="summary-line">
                    <span>Shipping Estimate</span>
                    <span>Calculated at checkout</span>
                </div>
                <div class="summary-line summary-promo">
                    <input type="text" placeholder="Enter Promo Code">
                    <button class="apply-promo-btn">Apply</button>
                </div>
                <div class="summary-line summary-total">
                    <span>Order Total</span>
                    <span>₱105,500.00</span>
                </div>
                <button class="checkout-btn">Proceed to Checkout</button>
                <div class="checkout-note">
                    Secure checkout powered by CyberEdge.
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