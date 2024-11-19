<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            scroll-behavior: smooth;
        }

        /* Fixed Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            background-color: #4CAF50;
            color: white;
            z-index: 1000;
        }

        /* Add padding to body to offset the fixed header */
        body {
            padding-top: 70px; /* Adjust based on header height */
        }

        /* Logo */
        .logo {
            font-family: Georgia, serif;
            font-size: 24px;
            font-weight: bold;
            color: gold;
        }

        /* Navbar for Desktop */
        .navbar {
            display: flex;
            gap: 15px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 4px;
        }

        .navbar a:hover {
            background-color: #45a049;
        }

        /* Responsive Navbar (Mobile) */
        .menu-icon {
            display: none;
            font-size: 28px;
            cursor: pointer;
        }

        .navbar-collapse {
            display: none;
            flex-direction: column;
            gap: 10px;
            background-color: #4CAF50;
            padding: 15px;
        }

        /* Search Bar */
        .search-container {
            display: flex;
            align-items: center;
            background-color: white;
            padding: 5px;
            border-radius: 4px;
        }

        .search-container input[type="text"] {
            border: none;
            padding: 5px;
            outline: none;
            flex: 1;
        }

        .search-container button {
            border: none;
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        /* Login Button */
        .login-button {
            padding: 8px 15px;
            background-color: #1500ff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .login-button:hover {
            background-color: #0056b3;
        }

        /* Main Content */
        .main-content {
            display: flex;
            flex-direction: column;
            flex: 1;
            align-items: center;
            justify-content: center;
            padding: 40px;
            text-align: center;
            background-color: #f4f4f4;
            min-height: 550px;
        }

        .main-content img {
            max-width: 200px;
            height: auto;
        }

        .main-content h1 {
            font-family: Georgia, serif;
            font-size: 40px;
            color: #333;
            margin-top: 20px;
        }

        /* Section Styles */
        section {
            padding: 60px 20px;
            text-align: center;
            height: 550px;
        }

        #about {
            background-color: #e0f7fa;
        }

        #services {
            background-color: #e8f5e9;
        }

        #contact {
            background-color: #fce4ec;
        }

        h2 {
            font-size: 32px;
            color: #333;
            margin-top: 80px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #555;
            max-width: 800px;
            margin: auto;
            line-height: 1.6;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 15px;
            background-color: #333;
            color: white;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            /* Header adjustments for mobile */
            header {
                padding: 10px 20px;
            }

            /* Smaller Logo */
            .logo {
                font-size: 20px;
            }

            /* Mobile Navbar */
            .menu-icon {
                display: block;
            }

            .navbar {
                display: none;
            }

            .navbar a {
                padding: 10px 0;
                font-size: 16px;
            }

            /* Show collapsed navbar when active */
            .navbar-collapse.active {
                display: flex;
            }

            /* Main content text adjustments */
            .main-content h1 {
                font-size: 32px;
            }

            h2 {
                font-size: 28px;
                margin-top: 200px;
            }

            p {
                font-size: 16px;
            }

            .main-content, section {
                padding: 30px 15px;
                min-height: 400px;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <!-- Logo -->
        <div class="logo">PETC.</div>

        <!-- Menu Icon for Mobile -->
        <div class="menu-icon" onclick="toggleMenu()">☰</div>

        <!-- Navigation Bar -->
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Courses</a>
            <a href="#contact">Contact</a>
        </nav>

        <!-- Collapsible Navbar for Mobile -->
        <nav class="navbar-collapse">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Courses</a>
            <a href="#contact">Contact</a>
        </nav>

        <!-- Search Bar -->
        <div class="search-container">
            <input type="text" placeholder="Search...">
            <button type="button">Search</button>
        </div>

        <!-- Login Button -->
        <a href="/loginButton" class="login-button">Login</a>
    </header>

    <!-- Main Content -->
    <div id="home" class="main-content">
        <img src="Images/petcLogo.png" alt="Logo Image">
        <h1>Professional English Training Center</h1>
    </div>

    <!-- About Section -->
    <section id="about">
        <h2>About Us</h2>
        <p>At PETC, we are committed to enhancing English language proficiency among professionals. Our expert trainers provide tailored courses to meet your individual learning needs.</p>
    </section>

    <!-- Services Section -->
    <section id="services">
        <h2>Courses</h2>
        <p>We offer a range of services including language workshops, one-on-one coaching, group training sessions, and online courses, designed to boost your professional communication skills.</p>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Us</h2>
        <p>For inquiries and more information, reach out to us at contact@petc.com or call us at (123) 456-7890. We look forward to helping you achieve your language goals.</p>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 PETC. Designed by ChathuminiKKG~</p>
    </footer>

    <script>
        // JavaScript to toggle mobile menu
        function toggleMenu() {
            document.querySelector('.navbar-collapse').classList.toggle('active');
        }
    </script>

</body>
</html>
