// ============================================
// SCRIPT.JS - CyberEdge Industries
// All JavaScript functionality for the website
// ============================================

document.addEventListener('DOMContentLoaded', function() {
    // Mobile Menu Toggle
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    if (mobileMenuToggle && navMenu) {
        mobileMenuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            navMenu.classList.toggle('active');
            this.classList.toggle('active');
        });
        
        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.nav-container')) {
                navMenu.classList.remove('active');
                if (mobileMenuToggle) {
                    mobileMenuToggle.classList.remove('active');
                }
            }
        });
        
        // Close menu when clicking a link
        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                mobileMenuToggle.classList.remove('active');
            });
        });
    }

// ============================================
// INDEX.php - Homepage Carousel Functionality
// ============================================

    // Review Carousel (only on homepage)
    const wrapper = document.getElementById('reviews-wrapper');
    const nextBtn = document.getElementById('next-review');
    const prevBtn = document.getElementById('prev-review');

    if (wrapper && nextBtn && prevBtn) {
        // These values must match the CSS and HTML structure
        const cardWidth = 350; 
        const gap = 30; 
        const scrollAmount = cardWidth + gap;

        // Next Button Functionality
        nextBtn.addEventListener('click', () => {
            wrapper.scrollLeft += scrollAmount;
            
            // Loop back to start when reaching the end
            if (wrapper.scrollLeft + wrapper.clientWidth >= wrapper.scrollWidth) {
                setTimeout(() => {
                    wrapper.scrollLeft = 0;
                }, 300); 
            }
        });

        // Previous Button Functionality
        prevBtn.addEventListener('click', () => {
            wrapper.scrollLeft -= scrollAmount;
            
            // Loop to end when going before the start
            if (wrapper.scrollLeft <= 0) {
                const maxScroll = wrapper.scrollWidth - wrapper.clientWidth;
                setTimeout(() => {
                    wrapper.scrollLeft = maxScroll;
                }, 300);
            }
        });
    }

    // Close top banner functionality (both index and cart pages)
    const closeBannerBtn = document.querySelector('.close-banner');
    if (closeBannerBtn) {
        closeBannerBtn.addEventListener('click', function() {
            const banner = document.querySelector('.top-banner');
            if (banner) {
                banner.style.display = 'none';
            }
        });
    }
});

// ============================================
// ACCOUNTS.php - Account Dashboard Functionality
// ============================================

// Section switching function
function showSection(sectionName) {
    // Hide all sections
    const sections = document.querySelectorAll('.content-section');
    sections.forEach(section => {
        section.classList.remove('active');
    });

    // Show selected section
    const targetSection = document.getElementById(sectionName + '-section');
    if (targetSection) {
        targetSection.classList.add('active');
    }

    // Update sidebar active state
    const menuLinks = document.querySelectorAll('.sidebar-menu a');
    menuLinks.forEach(link => {
        link.classList.remove('active');
    });
    
    const activeLink = document.querySelector(`[data-section="${sectionName}"]`);
    if (activeLink) {
        activeLink.classList.add('active');
    }
}

// Wait for DOM to load for accounts page functionality
document.addEventListener('DOMContentLoaded', function() {
    
    // Logout functionality
    const logoutBtn = document.querySelector('.logout-btn');
    if (logoutBtn) {
        logoutBtn.addEventListener('click', () => {
            if(confirm('Are you sure you want to log out?')) {
                window.location.href = 'index.php';
            }
        });
    }

    // Order tabs switching
    const orderTabs = document.querySelectorAll('.order-tab');
    orderTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            orderTabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
        });
    });

    // Discount tabs switching
    const discountTabs = document.querySelectorAll('.discount-tab');
    discountTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            discountTabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
        });
    });

    // Edit button functionality
    document.querySelectorAll('.edit-btn, .change-btn, .add-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            alert('Edit functionality will be implemented soon!');
        });
    });

    // Remove card functionality
    document.querySelectorAll('.remove-card').forEach(btn => {
        btn.addEventListener('click', () => {
            if(confirm('Are you sure you want to remove this card?')) {
                btn.closest('.payment-card').remove();
            }
        });
    });

    // Wishlist functionality - Add to cart
    document.querySelectorAll('.add-to-cart-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            alert('Item added to cart!');
        });
    });

    // Wishlist functionality - Remove item
    document.querySelectorAll('.remove-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            if(confirm('Remove this item from your wish list?')) {
                btn.closest('.wishlist-item').remove();
            }
        });
    });

    // Apply coupon functionality
    document.querySelectorAll('.apply-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const code = this.closest('.coupon-card').querySelector('.coupon-code').textContent;
            alert(`Coupon "${code}" has been applied!`);
        });
    });

    // Revoke session
    document.querySelectorAll('.revoke-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            if(confirm('Revoke this session?')) {
                this.closest('.session-item').remove();
            }
        });
    });

    // Mark all notifications as read
    const markAllBtn = document.querySelector('.mark-all-btn');
    if(markAllBtn) {
        markAllBtn.addEventListener('click', () => {
            document.querySelectorAll('.notification-item.unread').forEach(item => {
                item.classList.remove('unread');
                const badge = item.querySelector('.unread-badge');
                if(badge) badge.remove();
            });
        });
    }

    // Notification filters
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            this.classList.add('active');
        });
    });

    // Delete notification
    document.querySelectorAll('.notification-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            if(confirm('Delete this notification?')) {
                this.closest('.notification-item').remove();
            }
        });
    });

    // Contact form submission
    const contactForm = document.getElementById('contactForm');
    if(contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for your message! Our support team will get back to you within 24 hours.');
            e.target.reset();
        });
    }
});

// ============================================
// CART.php - Shopping Cart Functionality
// ============================================

document.addEventListener('DOMContentLoaded', function() {
    
    // Remove from cart
    document.querySelectorAll('.remove-from-cart').forEach(button => {
        button.addEventListener('click', function() {
            if(confirm('Are you sure you want to remove this item?')) {
                this.closest('.cart-item-card').remove();
            }
        });
    });

    // Move to wishlist
    document.querySelectorAll('.move-to-wishlist').forEach(button => {
        button.addEventListener('click', function() {
            alert('Item moved to Wish List!');
            this.closest('.cart-item-card').remove();
        });
    });
    
    // Checkout button
    const checkoutBtn = document.querySelector('.checkout-btn');
    if(checkoutBtn) {
        checkoutBtn.addEventListener('click', function() {
            alert('Proceeding to Checkout...');
        });
    }

    // Apply promo code
    const applyPromoBtn = document.querySelector('.apply-promo-btn');
    if(applyPromoBtn) {
        applyPromoBtn.addEventListener('click', function() {
            const promoInput = document.querySelector('.summary-promo input');
            if(promoInput && promoInput.value) {
                alert(`Applying promo code: ${promoInput.value}`);
            } else {
                alert('Please enter a promo code');
            }
        });
    }
});

// ============================================
// SERVICES.php - Services Page Functionality
// ============================================

document.addEventListener('DOMContentLoaded', function() {
    
    // Services Page Filter Functionality
    const filterTags = document.querySelectorAll('.filter-tag');
    const serviceCards = document.querySelectorAll('.service-detail-card');

    if (filterTags.length > 0) {
        filterTags.forEach(tag => {
            tag.addEventListener('click', function() {
                // Remove active class from all tags
                filterTags.forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked tag
                this.classList.add('active');
                
                // Get the category to filter
                const category = this.getAttribute('data-category');
                
                // Show/hide cards based on category
                serviceCards.forEach(card => {
                    if (category === 'all') {
                        card.style.display = 'block';
                        // Add fade-in animation
                        card.style.animation = 'fadeIn 0.5s ease-in';
                    } else {
                        const cardCategory = card.getAttribute('data-category');
                        if (cardCategory === category) {
                            card.style.display = 'block';
                            card.style.animation = 'fadeIn 0.5s ease-in';
                        } else {
                            card.style.display = 'none';
                        }
                    }
                });
            });
        });
    }

    // Service Search Functionality
    const serviceSearch = document.getElementById('service-search');
    
    if (serviceSearch) {
        serviceSearch.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            serviceCards.forEach(card => {
                const cardTitle = card.querySelector('h3').textContent.toLowerCase();
                const cardDescription = card.querySelector('.service-description').textContent.toLowerCase();
                
                if (cardTitle.includes(searchTerm) || cardDescription.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }

    // Get Quote Button Functionality
    const quoteButtons = document.querySelectorAll('.service-cta-btn');
    
    quoteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const serviceName = this.closest('.service-detail-card').querySelector('h3').textContent;
            alert(`Request a quote for: ${serviceName}\n\nThis will be connected to a quote form in Phase 3!`);
        });
    });
});

// ============================================
// PROJECTS.php - Projects Page Functionality
// ============================================

document.addEventListener('DOMContentLoaded', function() {
    
    // Projects Page Filter Functionality
    const projectFilterTags = document.querySelectorAll('.filter-tag');
    const projectCards = document.querySelectorAll('.project-detail-card');

    if (projectFilterTags.length > 0) {
        projectFilterTags.forEach(tag => {
            tag.addEventListener('click', function() {
                // Remove active class from all tags
                projectFilterTags.forEach(t => t.classList.remove('active'));
                
                // Add active class to clicked tag
                this.classList.add('active');
                
                // Get the category to filter
                const category = this.getAttribute('data-category');
                
                // Show/hide cards based on category
                projectCards.forEach(card => {
                    if (category === 'all') {
                        card.style.display = 'block';
                        // Add fade-in animation
                        card.style.animation = 'fadeIn 0.5s ease-in';
                    } else {
                        const cardCategory = card.getAttribute('data-category');
                        if (cardCategory === category) {
                            card.style.display = 'block';
                            card.style.animation = 'fadeIn 0.5s ease-in';
                        } else {
                            card.style.display = 'none';
                        }
                    }
                });
            });
        });
    }

    // Project Search Functionality
    const projectSearch = document.getElementById('project-search');
    
    if (projectSearch) {
        projectSearch.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            projectCards.forEach(card => {
                const cardTitle = card.querySelector('h3').textContent.toLowerCase();
                const cardDescription = card.querySelector('.project-description').textContent.toLowerCase();
                
                if (cardTitle.includes(searchTerm) || cardDescription.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }

    // View Details Button Functionality
    const detailButtons = document.querySelectorAll('.project-cta-btn');
    
    detailButtons.forEach(button => {
        button.addEventListener('click', function() {
            const projectName = this.closest('.project-detail-card').querySelector('h3').textContent;
            alert(`View details for: ${projectName}\n\nDetailed project page will be implemented in Phase 3!`);
        });
    });
});

// ============================================
// CONTACT.php - Contact Page Functionality
// ============================================

document.addEventListener('DOMContentLoaded', function() {
    
    // Main Contact Form Submission
    const mainContactForm = document.getElementById('mainContactForm');
    
    if(mainContactForm) {
        mainContactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const firstName = document.getElementById('firstName').value;
            const lastName = document.getElementById('lastName').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            
            alert(`Thank you ${firstName} ${lastName}!\n\nYour message has been sent successfully. We'll get back to you at ${email} within 24 hours.`);
            
            // Clear form
            e.target.reset();
        });
    }
});