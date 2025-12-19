# CyberEdge Industries Website

## Project Overview
This website was developed by BSIT 3rd year students from Technological University of the Philippines (TUP) as part of their Web Development course (CC311L-M | CC312-M). It showcases the services, mission, and company profile of CyberEdge Industries, a premier technology solutions company based in Manila, Philippines, specializing in IT products, cybersecurity, and digital transformation services for businesses of all sizes.

## Purpose
CyberEdge Industries is dedicated to empowering businesses through innovative IT products and services. The website serves as a high-performance digital gateway providing:
- A 24/7 digital platform for browsing and purchasing technical services
- Comprehensive catalog of IT and cybersecurity solutions
- Secure user account management for tracking orders and services
- Professional showcase of completed projects and case studies
- Multiple support channels for client assistance
- Streamlined digital procurement for IT infrastructure and custom software

## Team Members & Roles

### Alcantara, Nicholas Andrew L.
**Project Manager / Systems Architect, Developer**
- Strategizes the project lifecycle and technical roadmap
- Coordinates cross-functional tasks and manages high-level deadlines
- Ensures seamless integration of all digital components
- Oversees workflow and ensures timelines are met
- Handles backend development using PHP and MySQL

### Jaromamay, Arkin Phoenix D.G.
**UI/UX Designer, Content Writer, Developer**
- Engineers the visual identity and user interface with modern, high-tech aesthetics
- Designs interactive elements like the dynamic review carousel and secure dashboards
- Creates wireframes and color schemes using Figma and Canva
- Ensures typography and color scheme reflect innovation and trust
- Develops frontend using HTML, CSS, and JavaScript

### Montoya, Ricky Andrew A.
**Researcher, Developer**
- Conducts deep-dive analysis into the Southeast Asian IT landscape
- Identifies target audience pain points to inform design decisions
- Researches IT trends and competitor benchmarks
- Crafts professional copy optimized for search engines
- Contributes to development and testing

## Tools & Technologies Used

### Development Tools
- **Design & Prototyping**: Figma, Canva
- **Frontend**: HTML5, CSS, JavaScript 
- **Development Environment**: Visual Studio Code
- **Version Control**: Git & GitHub
- **Deployment**: GitHub Pages

## Site Structure
```
cyberedge-industries/
├── index.html
├── about.html
├── services.html
├── projects.html
├── contact.html
├── accounts.html
├── cart.html
├── styles.css
├── script.js
├── assets/
│   ├── logo.png
│   ├── hero-banner.jpg
│   ├── about-story.jpg
│   ├── products/
│   │   ├── product-gaming-pc.jpg
│   │   ├── product-network-switch.jpg
│   │   └── product-support-package.jpg
│   ├── projects/
│   │   ├── project-casestudies.jpg
│   │   ├── project-clients.jpg
│   │   ├── project-networking.jpg
│   │   └── project-tech.jpg
│   ├── services/
│   │   ├── service-consulting.jpg
│   │   ├── service-detail-cloud.jpg
│   │   ├── service-detail-consulting.jpg
│   │   ├── service-detail-cybersecurity.jpg
│   │   ├── service-detail-database.jpg
│   │   ├── service-detail-infrastructure.jpg
│   │   ├── service-detail-network-security.jpg
│   │   ├── service-detail-software.jpg
│   │   ├── service-detail-support.jpg
│   │   ├── service-infrastructure.jpg
│   │   ├── service-software.jpg
│   │   └── service-support.jpg
│   └── team/
│       ├── team-arkin.jpg
│       ├── team-nicholas.jpg
│       └── team-ricky.jpg
└── README.md
```

## Design Concept

### Color Palette
- **Black (#000000)**: Primary backgrounds, headers, and strong accents representing authority and sophistication
- **White (#FFFFFF)**: Text and main content areas for maximum contrast and minimalist aesthetic
- **Gray (#808080)**: Borders, disabled states, and secondary text for subtle depth

**Design Philosophy**: The monochromatic black and white theme was chosen to communicate the serious nature of the cybersecurity industry while maintaining superior readability and professionalism.

### Typography
- **Headings**: Montserrat (Bold) - Strong geometric structure for authoritative headers
- **Body Text**: Open Sans - Clean, neutral, and friendly readability for technical descriptions

### Design Principles
- **Consistency**: Unified corporate identity across all pages with same navigation, footer, and button styles
- **White Space**: Generous spacing to prevent information overload
- **High Contrast**: Maximum contrast ratio for superior accessibility
- **Responsiveness**: Flexible grid system optimized for desktop, tablet, and mobile
- **Accessibility**: Alt text for all images, clear labeling, intuitive navigation

## Key Features

### Homepage (index.html)
- Hero section with call-to-action buttons ("Shop Now")
- Services preview grid with star ratings
- Projects showcase section
- Dynamic review carousel with smooth horizontal scrolling
- Newsletter subscription form

### Services Page (services.html)
- 8+ comprehensive service offerings
- Category filtering system (Development, Infrastructure, Security, Support)
- Real-time search functionality
- Individual service cards with pricing and "Get Quote" buttons
- Service ratings and detailed descriptions

### Projects Page (projects.html)
- Portfolio of 9+ completed projects
- Category filtering (Case Studies, Client Projects, Technology Stack, Networking)
- Project metadata (duration, industry, tech stack)
- Search functionality for projects

### About Page (about.html)
- Company story and background
- Mission and vision statements
- Core values (Innovation, Trust, Excellence, Security, Collaboration, Growth)
- Company objectives aligned with business goals
- Team member profiles with photos
- Statistics showcase (150+ projects, 98% satisfaction, 50+ clients)

### Contact Page (contact.html)
- Multiple contact methods (Email, Phone, Live Chat, Office Visit)
- Comprehensive contact form with subject selection
- Map integration placeholder for Quezon City headquarters
- FAQ section with common questions
- Business hours display

### Account Dashboard (accounts.html)
- **Personal Data Management**: Edit profile and address information
- **Payment & Installments**: Manage payment methods and view installments
- **Order History**: Track orders with tabs (Current, Delivered, Canceled, Returned)
- **Wishlist**: Save items for later purchase
- **Discounts & Coupons**: View and apply promotional codes
- **Security & Access**: Enable 2FA, monitor active sessions, manage privacy settings
- **Notifications**: Real-time alerts for orders, payments, and promotions
- **Contact Support**: Direct inquiry form for technical assistance

### Shopping Cart (cart.html)
- Cart items management with product images
- Order summary with subtotal calculations
- Promo code application field
- "Move to Wishlist" functionality
- "Remove" and quantity management
- Secure checkout button

## Technical Implementation

### Frontend Development (HTML5, CSS3, JavaScript)
- **Semantic HTML5**: Distinct files for each user journey with proper structure
- **Modular CSS3**: Centralized styles.css with CSS variables (`--header-clearance: 130px`)
- **Flexbox & Grid**: Layout systems for responsive design
- **Scroll Management**: `scroll-padding-top` to prevent anchor links from hiding behind navbar
- **JavaScript ES6+**: 
  - Custom carousel logic with scroll calculations
  - Dashboard interactivity (notifications, filters, tabs)
  - Cart actions (add, remove, wishlist)
  - Form validation and AJAX submissions

### Backend Development (PHP)
- **Database Connection**: Dedicated `db_connect.php` for MySQL connectivity
- **Security Implementation**:
  - SQL Injection Prevention using Prepared Statements
  - XSS Protection with `htmlspecialchars()`
  - Password Hashing using `password_hash()`
- **Session Management**: PHP sessions for user authentication and tracking

### Database Design (cyberedge_db)

**Tables:**
1. **users**: Manages dashboard access and user authentication
2. **inquiries**: Stores contact form submissions
3. **projects**: Dynamically lists case studies on homepage

### Integration Details
- **Form Processing**: JavaScript validation → AJAX submission → PHP backend → User feedback
- **Session Management**: Tracks logged-in users for personalized dashboard access
- **Real-time Updates**: Cart and wishlist data synced across devices via database

## Deployment

### GitHub Repository
**Update with your actual GitHub URL:**
```
https://github.com/drewwastaken/cyberedge-industries
```

### Live Site (GitHub Pages)
**Update with your actual GitHub Pages URL:**
```
https://drewwastaken.github.io/cyberedge-industries
```

## Target Audience

### Primary Audience
- **SMEs (Small to Medium Enterprises)**: Lack in-house IT departments, need comprehensive IT partner
- **Local Financial & Fintech Startups**: Require advanced security for sensitive financial data
- **E-commerce & Retail Platforms**: Need 24/7 uptime and secure payment gateways
- **IT Directors and CTOs**: Seeking specialized custom software or outsourced cybersecurity

### Secondary Audience
- **Government Agencies**: Public sector digitalization and national cybersecurity projects
- **Regional Enterprises in Southeast Asia**: Mid-to-large corporations seeking cost-effective IT solutions
- **Tech Talent**: Potential employees attracted by innovation and excellence
- **Business Consultants**: Intermediaries recommending CyberEdge for technical implementation

## Project Timeline

| Phase | Tasks | Duration | Dates |
|-------|-------|----------|-------|
| **Planning** | Project scope, timeline, target audience identification | Weeks 1-4 | Aug 20 - Aug 31, 2025 |
| **Strategy** | Wireframes, sitemap, color palette, design finalization | Weeks 5-8 | Sep 1 - Sep 30, 2025 |
| **Development** | Frontend (HTML/CSS/JS) & Backend (PHP/MySQL) | Weeks 9-16 | Oct 1 - Nov 30, 2025 |
| **Execution** | Content population, testing, bug fixes | Weeks 17-19 | Dec 1 - Dec 12, 2025 |
| **Submission** | Deployment, documentation, final submission | Week 20 | Dec 15 - Dec 19, 2025 |

## Responsive Design

Fully optimized for:
- **Desktop**: 1920px and above
- **Laptop**: 1024px - 1919px
- **Tablet**: 768px - 1023px
- **Mobile**: 320px - 767px

## Browser Compatibility
- ✅ Google Chrome (Latest)
- ✅ Mozilla Firefox (Latest)
- ✅ Safari (Latest)
- ✅ Microsoft Edge (Latest)

### Technical Skills
- Evolved from basic prototypes to sophisticated integrated digital ecosystem
- Mastered database-driven persistence for cart and user data synchronization
- Implemented comprehensive security features (2FA, session monitoring, encrypted data)
- Created unified commerce engine for both services and physical products
- Built real-time operational intelligence tools for order tracking and billing

### Team Collaboration
- Effective task distribution across specialized roles
- Regular communication and progress updates
- Collaborative problem-solving and debugging
- Code review and quality assurance processes

## Challenges & Solutions

### 1. Unified Service & Product Persistence
**Challenge**: Early iterations used browser storage, causing cart data to vanish across devices.
**Solution**: Migrated to database-driven model ensuring real-time synchronization across all devices.

### 2. High-Stakes Security & Access Control
**Challenge**: Platform needed "gold standard" security matching our cybersecurity services.
**Solution**: Implemented comprehensive Security & Access dashboard with session monitoring, 2FA, and suspicious access revocation.

### 3. Client Transparency in Complex Fulfillment
**Challenge**: Long fulfillment cycles for IT services created client anxiety.
**Solution**: Developed Order History with categorized tabs providing real-time status tracking.

### 4. Scalable Administrative Management
**Challenge**: Managing inquiries, discount codes, and support tickets through email created bottlenecks.
**Solution**: Built integrated backend for managing discounts database and inquiry system.

### 5. Navigational Logic for Multi-Faceted Site
**Challenge**: Balancing product shop, service catalog, and deep user account area.
**Solution**: Implemented sidebar menu for accounts and clean sticky navbar for main site.

## Future Enhancements
- Advanced payment gateway integration
- Live chat functionality with real-time support
- Automated email notification system
- Admin dashboard for service management
- Blog/news section for tech articles and company updates
- Enhanced analytics and reporting tools

## Code Quality Standards
- ✅ Semantic HTML5 elements throughout
- ✅ CSS organized with variables and comments
- ✅ JavaScript modular and well-documented
- ✅ Prepared statements for SQL security
- ✅ Password hashing and XSS protection
- ✅ No console errors or warnings
- ✅ Validated HTML and CSS

## References
- freeCodeCamp.org. (2022, Novembeer 2). HFull Stack Web Development for Beginners (Full Course on HTML, CSS, JavaScript, Node.js, MongoDB). YouTube. https://www.youtube.com/watch?v=nu_pCVPKzTk
- Web Dev Simplified. (2021, August 24). How To Create Skeleton Loading Animation With CSS. YouTube. https://www.youtube.com/watch?v=ZVug65gW-fc

## Credits & Acknowledgments
- **Institution**: Technological University of the Philippines (TUP)
- **Course**: Web Development (CC311L-M | CC312-M)
- **Instructor**: Dr. Mary Joy Viñas
- **Academic Year**: 2024-2025
- **Submission Date**: December 16, 2025

## License
This project is developed for educational purposes as part of the TUP Web Development course.

---

© 2024-2025 CyberEdge Industries Website Project | Group 3 - BSIT 3A | Technological University of the Philippines
