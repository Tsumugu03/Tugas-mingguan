<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
        }

        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradientShift 15s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .particle {
            position: absolute;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        .navbar {
            background: rgba(255,255,255,0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 4px 30px rgba(0,0,0,0.1);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            background: linear-gradient(45deg, #e73c7e, #23a6d5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-decoration: none;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-link {
            color: #333;
            text-decoration: none;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .nav-link:hover, .nav-link.active {
            background: linear-gradient(45deg, #e73c7e, #23a6d5);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background: #333;
            margin: 3px 0;
            transition: 0.3s;
        }

        .main-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 100px 20px 20px;
        }

        .home-content {
            text-align: center;
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(15px);
            padding: 60px 40px;
            border-radius: 25px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            animation: slideUp 1s ease forwards;
            max-width: 800px;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .home-title {
            font-size: 3.5rem;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #e73c7e, #23a6d5, #23d5ab);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: bounce 2s ease infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        .home-subtitle {
            font-size: 1.3rem;
            color: #666;
            margin-bottom: 40px;
        }

        .cta-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 15px 30px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(45deg, #e73c7e, #23a6d5);
            color: white;
            box-shadow: 0 5px 20px rgba(231, 60, 126, 0.4);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(231, 60, 126, 0.6);
        }

        .btn-secondary {
            background: rgba(255,255,255,0.8);
            color: #333;
        }

        .btn-secondary:hover {
            transform: translateY(-3px);
            background: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 80px;
                flex-direction: column;
                background: rgba(255,255,255,0.95);
                width: 100%;
                text-align: center;
                transition: 0.3s;
                padding: 30px 0;
                gap: 10px;
            }

            .nav-menu.active {
                left: 0;
            }

            .home-title {
                font-size: 2.5rem;
            }

            .home-content {
                padding: 40px 20px;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <div class="animated-bg"></div>
    <div class="particles" id="particles"></div>

    <nav class="navbar">
        <div class="nav-container">
            <a href="/home" class="logo">farhat.id</a>
            <ul class="nav-menu">
                <li><a href="/home" class="nav-link active">Home</a></li>
                <li><a href="/berita " class="nav-link">Berita</a></li>
                <li><a href="/profile" class="nav-link">profile</a></li>
                <li><a href="/contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="hamburger" onclick="toggleMenu()">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <div class="main-container">
        <div class="home-content">
            <h1 class="home-title">Selamat Datang! 🚀</h1>
            <p class="home-subtitle">
                Website dinamis dengan animasi yang memukau dan navigasi yang smooth. 
                Rasakan pengalaman browsing yang berbeda!
            </p>
            <div class="cta-buttons">
                <a href="/berita" class="btn btn-primary">Lihat Berita Terbaru</a>
                <a href="/contact" class="btn btn-secondary">Hubungi Kami</a>
            </div>
        </div>
    </div>

    <script>
        function createParticles() {
            const particles = document.getElementById('particles');
            for (let i = 0; i < 50; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.width = Math.random() * 10 + 5 + 'px';
                particle.style.height = particle.style.width;
                particle.style.animationDelay = Math.random() * 6 + 's';
                particles.appendChild(particle);
            }
        }

        function toggleMenu() {
            document.querySelector('.nav-menu').classList.toggle('active');
        }

        document.addEventListener('DOMContentLoaded', createParticles);
    </script>
</body>
</html>