<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apex Academy | Shaping Tomorrow's Leaders</title>
    <style>
        :root {
            --primary: #1e3a8a;
            --secondary: #0284c7;
            --accent: #f59e0b;
            --dark: #0f172a;
            --light: #f8fafc;
            --gray: #64748b;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        /* Utility Classes */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: var(--accent);
            color: var(--dark);
        }

        .btn-primary:hover {
            background-color: #d97706;
        }

        .btn-secondary {
            background-color: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background-color: white;
            color: var(--primary);
        }

        /* Top Bar */
        .top-bar {
            background-color: var(--dark);
            color: var(--light);
            padding: 8px 0;
            font-size: 0.875rem;
        }

        .top-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar a {
            color: #cbd5e1;
            text-decoration: none;
            margin-left: 15px;
        }

        /* Navbar */
        .navbar {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 80px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 25px;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-links a:hover {
            color: var(--secondary);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(30, 58, 138, 0.85), rgba(15, 23, 42, 0.85)),
                        url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=1350&q=80') center/cover;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.25rem;
            margin-bottom: 30px;
            color: #e2e8f0;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        /* Quick Stats / Highlights */
        .features {
            padding: 60px 0;
            background-color: white;
        }

        .grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .card {
            padding: 30px;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-icon {
            font-size: 2.5rem;
            color: var(--secondary);
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 10px;
            color: var(--primary);
        }

        /* News & Announcements */
        .news {
            padding: 80px 0;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header h2 {
            font-size: 2.25rem;
            color: var(--primary);
        }

        .news-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1);
        }

        .news-content {
            padding: 20px;
        }

        .news-date {
            font-size: 0.85rem;
            color: var(--gray);
            margin-bottom: 8px;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: #94a3b8;
            padding: 60px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-col h4 {
            color: white;
            margin-bottom: 20px;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            color: #94a3b8;
            text-decoration: none;
        }

        .footer-col ul li a:hover {
            color: white;
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #334155;
            font-size: 0.875rem;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .hero h1 {
                font-size: 2rem;
            }
            .hero-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <!-- Top Info Bar -->
    <div class="top-bar">
        <div class="container">
            <div>📞 +1 (555) 019-2834 | ✉️ info@apexacademy.edu</div>
            <div>
                <a href="#">Parent Portal</a>
                <a href="#">Student Portal</a>
                <a href="#">Staff Login</a>
            </div>
        </div>
    </div>

    <!-- Navigation Header -->
    <nav class="navbar">
        <div class="container">
            <a href="#" class="logo">🎓 Apex Academy</a>
            <ul class="nav-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Academics</a></li>
                <li><a href="#">Admissions</a></li>
                <li><a href="#">Student Life</a></li>
                <li><a href="#">News & Events</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero">
        <div class="container hero-content">
            <h1>Empowering Minds, Inspiring Futures</h1>
            <p>Providing exceptional education, critical thinking, and character development for tomorrow's leaders from K-12.</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary">Apply for 2026–2027</a>
                <a href="#" class="btn btn-secondary">Schedule a Tour</a>
            </div>
        </div>
    </header>

    <!-- Core Pillars / Features -->
    <section class="features">
        <div class="container grid-3">
            <div class="card">
                <div class="card-icon">📚</div>
                <h3>Academic Excellence</h3>
                <p>Rigorous AP and IB programs designed to challenge students and prepare them for top universities worldwide.</p>
            </div>
            <div class="card">
                <div class="card-icon">🎨</div>
                <h3>Arts & Culture</h3>
                <p>Comprehensive music, theater, and visual arts programs fostering creativity and self-expression.</p>
            </div>
            <div class="card">
                <div class="card-icon">🏆</div>
                <h3>Athletics</h3>
                <p>Over 15 competitive sports teams promoting teamwork, leadership, and physical fitness.</p>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section class="news">
        <div class="container">
            <div class="section-header">
                <h2>Latest School News</h2>
                <p style="color: var(--gray);">Stay up to date with events and accomplishments across campus.</p>
            </div>
            <div class="grid-3">
                <div class="news-card">
                    <div class="news-content">
                        <div class="news-date">October 15, 2026</div>
                        <h4>Annual Robotics Team Wins Regional Championship</h4>
                        <p>Our STEM team took first place with their autonomous navigation project...</p>
                    </div>
                </div>

                <div class="news-card">
                    <div class="news-content">
                        <div class="news-date">September 20, 2026</div>
                        <h4>Admissions Open House Registration</h4>
                        <p>Prospective families are invited to explore our campus and meet our dedicated faculty...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h4>Apex Academy</h4>
                    <p>123 Education Lane<br>Academic City, AC 54321</p>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Academic Calendar</a></li>
                        <li><a href="#">Tuition & Aid</a></li>
                        <li><a href="#">Athletics Schedule</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Library</a></li>
                        <li><a href="#">Dining Menu</a></li>
                        <li><a href="#">Transportation</a></li>
                        <li><a href="#">Health Services</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                &copy; 2026 Apex Academy. All rights reserved.
            </div>
        </div>
    </footer>

</body>
</html>
