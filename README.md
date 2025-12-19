# CyberEdge Industries Website

![CyberEdge Industries]

## 📌 Project Overview

This website was developed by BSIT 3rd year students from Technological University of the Philippines (TUP) as part of their Web Development course (CC311L-M | CC312-M). It showcases the services, mission, and company profile of CyberEdge Industries, a premier technology solutions company based in Manila, Philippines, specializing in IT products, cybersecurity, and digital transformation services for businesses of all sizes.

---

## 👥 Team Members & Roles

### Alcantara, Nicholas Andrew L.
**Project Manager / Systems Architect, Backend Developer**
- Strategizes the project lifecycle and technical roadmap
- Coordinates cross-functional tasks and manages high-level deadlines
- Handles backend development using PHP and MySQL
- Implements security features and database architecture

### Jaromamay, Arkin Phoenix D.G.
**UI/UX Designer, Content Writer, Frontend Developer**
- Engineers the visual identity and user interface with modern, high-tech aesthetics
- Designs interactive elements and user dashboards
- Creates wireframes and color schemes using Figma and Canva
- Develops frontend using HTML, CSS, and JavaScript

### Montoya, Ricky Andrew A.
**Researcher, Developer**
- Conducts deep-dive analysis into the Southeast Asian IT landscape
- Identifies target audience pain points to inform design decisions
- Researches IT trends and competitor benchmarks
- Contributes to development, testing, and documentation

---

## 🛠️ Technology Stack

### Frontend
- **HTML5** - Semantic markup and structure
- **CSS3** - Custom styling with responsive design
- **JavaScript (ES6+)** - Interactive features and form validation

### Backend (Phase 3)
- **PHP 8.x** - Server-side processing
- **MySQL** - Database management
- **phpMyAdmin** - Database administration

### Development Tools
- **Design & Prototyping**: Figma, Canva
- **Development Environment**: Visual Studio Code
- **Server Environment**: XAMPP (Apache + MySQL + PHP)
- **Version Control**: Git & GitHub

---

## 🌟 Key Features

### Public Website
- ✅ **Homepage** - Hero section with services and projects showcase
- ✅ **About Page** - Company story, mission, vision, team profiles
- ✅ **Services Page** - 8+ comprehensive IT service offerings with filtering
- ✅ **Projects Page** - Portfolio of completed projects with categories
- ✅ **Contact Page** - Multi-channel contact methods with inquiry form
- ✅ **Dynamic Review Carousel** - Customer testimonials with smooth scrolling

### E-Commerce Features
- 🛒 **Shopping Cart** - Manage products and services
- ❤️ **Wishlist** - Save items for later purchase
- 💳 **Checkout System** - Order summary with promo codes

### User Account Dashboard
- 👤 **Personal Data Management** - Edit profile and address
- 💰 **Payment & Installments** - Manage payment methods
- 📦 **Order History** - Track orders with status tabs
- 🎫 **Discounts & Coupons** - View and apply promotional codes
- 🔐 **Security & Access** - 2FA, session monitoring, privacy settings
- 🔔 **Notifications** - Real-time alerts for orders and promotions

### Backend Features (Phase 3)
- 📧 **Contact Form Processing** - Stores inquiries in database
- 🗄️ **Database Integration** - MySQL with 4 tables
- 👨‍💼 **Admin Dashboard** - View and manage contact submissions
- 🔒 **Security** - SQL injection prevention, XSS protection, password hashing

---

## 📂 Project Structure

```
cyberedge-industries/
├── index.php                    # Homepage
├── about.php                    # About Us page
├── services.php                 # Services catalog
├── projects.php                 # Projects portfolio
├── contact.php                  # Contact form (PHP-enabled)
├── accounts.php                 # User account dashboard
├── cart.php                     # Shopping cart
├── admin.php                    # Admin dashboard (NEW - Phase 3)
├── db_connect.php              # Database connection (NEW - Phase 3)
├── process_contact.php         # Form processor (NEW - Phase 3)
├── styles.css                   # Global styles
├── script.js                    # JavaScript functionality
├── assets/
│   ├── logo.png
│   ├── hero-banner.jpg
│   ├── about-story.jpg
│   ├── products/               # Product images
│   ├── projects/               # Project images
│   ├── services/               # Service images
│   └── team/                   # Team member photos
└── README.md
```

---

## 💾 Database Schema

### Database Name: `cyberedge_db`

#### Table 1: contacts
```sql
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    company VARCHAR(100),
    subject VARCHAR(200),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

#### Table 2: users
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    address TEXT,
    city VARCHAR(100),
    state VARCHAR(100),
    postal_code VARCHAR(20),
    country VARCHAR(100) DEFAULT 'Philippines',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

#### Table 3: cart_items
```sql
CREATE TABLE cart_items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    item_name VARCHAR(200) NOT NULL,
    item_category VARCHAR(50),
    item_price DECIMAL(10,2) NOT NULL,
    quantity INT DEFAULT 1,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
```

#### Table 4: wishlist
```sql
CREATE TABLE wishlist (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    item_name VARCHAR(200) NOT NULL,
    item_price DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
```

---

## 🎨 Design Concept

### Color Palette
- **Black (#000000)** - Primary backgrounds, headers, authority
- **White (#FFFFFF)** - Text, content areas, clean aesthetic
- **Gray (#808080)** - Borders, secondary elements, subtle depth

**Philosophy**: Monochromatic black/white theme communicates professionalism and the serious nature of cybersecurity while maintaining superior readability.

### Typography
- **Headings**: Montserrat (Bold) - Strong geometric structure
- **Body Text**: Open Sans - Clean, neutral readability

### Design Principles
- ✅ Consistency - Unified corporate identity across all pages
- ✅ White Space - Generous spacing prevents information overload
- ✅ High Contrast - Maximum accessibility with 21:1 contrast ratio
- ✅ Responsiveness - Optimized for desktop, tablet, and mobile
- ✅ Accessibility - Alt text, semantic HTML, clear navigation

---

## 📱 Responsive Design

Fully optimized for:
- **Desktop**: 1920px and above
- **Laptop**: 1024px - 1919px
- **Tablet**: 768px - 1023px
- **Mobile**: 320px - 767px

---

## 🔒 Security Features

- ✅ **SQL Injection Prevention** - Prepared statements with parameterized queries
- ✅ **XSS Protection** - Input sanitization with `htmlspecialchars()`
- ✅ **Password Hashing** - `password_hash()` for secure credential storage
- ✅ **Email Validation** - Server-side email format verification
- ✅ **Session Management** - Secure PHP session handling
- ✅ **CSRF Protection** - Form validation and token implementation (future enhancement)

---

## 🎯 Target Audience

### Primary Audience
- **SMEs (Small to Medium Enterprises)** - Businesses lacking in-house IT departments
- **Financial & Fintech Startups** - Companies requiring advanced security
- **E-commerce & Retail Platforms** - Businesses needing 24/7 uptime
- **IT Directors and CTOs** - Technical leaders seeking specialized solutions

### Secondary Audience
- **Government Agencies** - Public sector digitalization projects
- **Regional Enterprises in SEA** - Mid-to-large corporations across Southeast Asia
- **Tech Talent** - Potential employees attracted by innovation
- **Business Consultants** - Intermediaries recommending technical solutions

---

## 📊 Project Timeline

| Phase | Duration | Period | Tasks |
|-------|----------|--------|-------|
| **Planning** | 4 weeks | Aug 20 - Aug 31, 2025 | Scope, timeline, audience identification |
| **Strategy** | 4 weeks | Sep 1 - Sep 30, 2025 | Wireframes, sitemap, color palette |
| **Development** | 8 weeks | Oct 1 - Nov 30, 2025 | Frontend & Backend implementation |
| **Execution** | 3 weeks | Dec 1 - Dec 12, 2025 | Content, testing, bug fixes |
| **Phase 3** | 1 week | Dec 15 - Dec 19, 2025 | PHP/MySQL integration, deployment |

---

## 🔮 Future Enhancements

- [ ] User authentication and login system
- [ ] Real payment gateway integration
- [ ] Live chat functionality with WebSocket
- [ ] Automated email notifications
- [ ] Enhanced admin panel with analytics
- [ ] API for mobile app integration
- [ ] Multi-language support (English, Filipino)
- [ ] Blog/news section for tech articles
- [ ] Advanced search with filters
- [ ] Integration with CRM systems

---

## 📚 Learning Outcomes

### Technical Skills Developed
- ✅ Full-stack web development (HTML, CSS, JavaScript, PHP, MySQL)
- ✅ Database design and SQL queries
- ✅ Form handling and validation (client & server-side)
- ✅ Security best practices (SQL injection, XSS prevention)
- ✅ Responsive web design and mobile-first approach
- ✅ Version control with Git/GitHub
- ✅ Server environment setup (XAMPP)

### Teamwork & Collaboration
- Effective task distribution across specialized roles
- Regular communication and progress updates
- Collaborative problem-solving and debugging
- Code review and quality assurance processes


---


## 📄 License

This project is developed for educational purposes as part of the TUP Web Development course.

---

## 🙏 Acknowledgments

- **Institution**: Technological University of the Philippines (TUP)
- **Course**: Web Development (CC311L-M | CC312-M)
- **Instructor**: Dr. Mary Joy Viñas
- **Academic Year**: 2024-2025
- **Submission Date**: December 19, 2025

---

## 📞 Contact

For questions or support regarding this project:

- **Email**: nicholasandrewalcantara0@gmail.com
- **GitHub**: https://github.com/drewwastaken/CyberEdge-Industries-Phase-3-PHP

---


Group 3 - BSIT 3A | Technological University of the Philippines

*Empowering businesses through innovative IT solutions*
