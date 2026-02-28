<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liezl Kaye Roa Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Rajdhani:wght@400;500;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-color: #050505;
            --bg-panel: #111111;
            --neon-cyan: #ff00aa;
            --neon-purple: #13feea;
            --text-main: #e0e0e0;
            --text-muted: #888888;
            --accent: var(--neon-cyan); /* Added missing variable used in HTML */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            font-family: 'Rajdhani', sans-serif;
            line-height: 1.6;
            /* Subtle Cyber Grid Background */
            background-image: 
                linear-gradient(rgba(0, 243, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 243, 255, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        h1, h2, h3, .logo {
            font-family: 'Orbitron', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 5%;
            background-color: rgba(5, 5, 5, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 0, 179, 0.2);
            position: sticky;
            top: 0;
            z-index: 100;
            flex-wrap: wrap; /* Helps with responsiveness */
        }

        nav .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #fff;
            text-shadow: 0 0 10px var(--neon-cyan);
            
            }

        nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        nav a {
            text-decoration: none;
            color: var(--text-main);
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        nav a:hover {
            color: var(--neon-cyan);
            text-shadow: 0 0 8px var(--neon-cyan);
        }

        .separator {
            color: var(--text-muted);
        }

        /* Hero Section */
        .hero {
            min-height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 4rem 5%;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            color: #fff;
            text-shadow: 0 0 10px var(--neon-cyan), 0 0 20px var(--neon-cyan);
            animation: pulse 2s infinite alternate;
            line-height: 1.2;
        }

        @keyframes pulse {
            0% { text-shadow: 0 0 10px var(--neon-cyan), 0 0 20px var(--neon-cyan); }
            100% { text-shadow: 0 0 15px var(--neon-cyan), 0 0 30px var(--neon-cyan), 0 0 40px var(--neon-cyan); }
        }

        .hero p {
            font-size: 1.5rem;
            color: var(--text-muted);
            max-width: 600px;
            margin-bottom: 2.5rem;
        }

        /* Neon Button */
        .btn {
            padding: 0.75rem 2rem;
            background-color: transparent;
            color: var(--neon-cyan);
            text-decoration: none;
            font-family: 'Orbitron', sans-serif;
            font-weight: bold;
            border: 2px solid var(--neon-cyan);
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease;
            box-shadow: inset 0 0 10px rgba(0, 243, 255, 0.2), 0 0 10px rgba(0, 243, 255, 0.2);
            display: inline-block;
        }

        .btn:hover {
            background-color: var(--neon-cyan);
            color: #000;
            box-shadow: 0 0 20px var(--neon-cyan);
        }

        /* Sections General */
        section {
            padding: 6rem 5%;
        }

        section h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: var(--text-main);
            text-shadow: 0 0 5px rgba(255,255,255,0.3);
        }

        /* Projects Section */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); /* Adjusted slightly for small phones */
            gap: 2.5rem;
        }

        .project-card {
            background: var(--bg-panel);
            border: 1px solid #333;
            border-radius: 8px;
            overflow: hidden;
            transition: all 0.4s ease;
            position: relative;
            display: flex;
            flex-direction: column;
        }

        .project-card:hover {
            transform: translateY(-5px);
            border-color: var(--neon-cyan);
            box-shadow: 0 0 20px rgba(188, 19, 254, 0.3);
        }

        .project-image {
            width: 100%;
            height: 200px;
            background-color: #1a1a1a;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            font-family: 'Orbitron', sans-serif;
            border-bottom: 1px solid #333;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-content {
            padding: 1.5rem;
            flex-grow: 1; /* Pushes links to bottom evenly */
        }

        .project-content h3 {
            color: var(--neon-cyan);
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }

        /* Skills Section */
        .skills {
            background-color: rgba(17, 17, 17, 0.8);
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .skills-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
        }

        .skill-tag {
            background-color: transparent;
            color: var(--neon-cyan);
            padding: 0.5rem 1.5rem;
            border: 1px solid var(--neon-cyan);
            border-radius: 4px;
            font-family: 'Orbitron', sans-serif;
            font-size: 0.9rem;
            letter-spacing: 1px;
            box-shadow: 0 0 10px rgba(0, 243, 255, 0.1);
            transition: all 0.3s ease;
        }

        .skill-tag:hover {
            background-color: var(--neon-cyan);
            color: #000;
            box-shadow: 0 0 15px var(--neon-cyan);
        }

        /* Contact Section */
        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            background: var(--bg-panel);
            padding: 3rem;
            border-radius: 8px;
            border: 1px solid #333;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 2rem;
            background-color: var(--bg-panel);
            color: var(--text-muted);
            border-top: 1px solid #333;
            font-family: 'Orbitron', sans-serif;
            font-size: 0.8rem;
        }

        /* === RESPONSIVE MEDIA QUERIES === */
        @media (max-width: 768px) {
            /* Fix navigation instead of hiding it */
            nav {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem 5%;
            }
            nav ul {
                gap: 1rem;
            }
            .separator {
                display: none; /* Hide the vertical lines on mobile for a cleaner look */
            }

            /* Adjust typography & spacing */
            .hero h1 {
                font-size: 2.5rem;
            }
            .hero p {
                font-size: 1.1rem;
            }
            section {
                padding: 4rem 5%;
            }
            section h2 {
                font-size: 2rem;
            }
            .contact-container {
                padding: 2rem 1.5rem; /* Give contact box breathing room */
            }
        }

        @media (max-width: 480px) {
            /* Force project cards to take full width on very small screens */
            .projects-grid {
                grid-template-columns: 1fr;
            }
            .hero h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">LK</div>
        <ul>
            <li><a href="/">Meee</a></li>
            <li class="separator">|</li>
            <li><a href="#projects">Projects</a></li>
            <li class="separator">|</li>
            <li><a href="#skills">Skills</a></li>
            <li class="separator">|</li>
            <li><a href="#contact">Contact</a></li>
            <li class="separator">|</li>
            <li><a href="/tutorial">Tutorial</a></li>
            <li class="separator">|</li>
            <li><a href="http://bryandacera.me">Chatgpt</a></li>
        </ul>
    </nav>

    <section class="hero" id="about">
        <h1>Liezl Kaye</h1>
        <p>Initializing protocol... Freelance Graphic Designer specializing in next-generation digital experiences.</p>
        <a href="#projects" class="btn">Initialize Projects</a>
    </section>

    <section id="projects">
        <h2>Data Archives</h2>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-image"><img src="https://www.marcelino-resort-hotel.online/img/banner-1.webp" alt="Marcelino Resort & Hotel"></div>
                <div class="project-content">
                    <h3>Marcelino Resort & Hotel</h3>
                    <p>Helped develop an online reservation web application featuring seamless booking integration, real-time availability updates, and responsive design for optimal guest experience across all devices.</p>
                    <a href="https://www.marcelino-resort-hotel.online/" target="_blank" style="color: var(--accent); text-decoration: none; font-size: 0.9rem; margin-top: 1rem; display: inline-block;">VISIT SITE →</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image"><img src="https://i.pinimg.com/1200x/6c/03/07/6c030758c789efe762cbcdf3eddc7d1e.jpg" alt="Graphic Design OJT"></div>
                <div class="project-content">
                    <h3>Graphic Design | OJT</h3>
                    <p>On-the-Job Training experience in graphic design at Mandaue. Developed visual assets, branding materials, and design solutions while mastering industry-standard tools and design principles.</p>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image"><img src="https://i.pinimg.com/736x/a0/c3/10/a0c310c3dce06b7b3629440ef8649696.jpg" alt="Meow Project"></div>
                <div class="project-content">
                    <h3>meow meow </h3>
                    <p>Meow meow meow meow. Meow meow meow, meow , meow, meow meow meow. Meow meow meow meow. Meow meow meow, meow , meow, meow meow meow. Meow meow meow meow. Meow meow meow, meow , meow, meow meow meow.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <h2>Core Modules</h2>
        <div class="skills-list">
            <span class="skill-tag">HTML5_</span>
            <span class="skill-tag">CSS3_</span>
            <span class="skill-tag">JavaScript_</span>
            <span class="skill-tag">React_</span>
            <span class="skill-tag">MYSQL_</span>
            <span class="skill-tag">Laravel_</span>
            <span class="skill-tag">UI/UX_</span>
        </div>
    </section>

    <section id="contact">
        <h2>Open Channel</h2>
        <div class="contact-container">
            <p style="margin-bottom: 2.5rem; color: var(--text-muted);">Ready to collaborate on full-stack web applications and UI/UX design projects. I bring expertise in Laravel, React, and modern frontend technologies to build scalable, responsive solutions. Open for freelance and full-time opportunities.</p>
            <a href="mailto:your.email@example.com" class="btn">Send Transmission</a>
            <div style="margin-top: 2rem; display: flex; gap: 1.5rem; justify-content: center; flex-wrap: wrap;">
                <a href="https://www.facebook.com/kaye.liezl" target="_blank" style="color: var(--accent); text-decoration: none; font-size: 0.95rem; padding: 0.5rem 1rem; border: 1px solid var(--accent); border-radius: 5px; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--accent)'; this.style.color='#000';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--accent)';">Facebook</a>
                <a href="#" target="_blank" style="color: var(--accent); text-decoration: none; font-size: 0.95rem; padding: 0.5rem 1rem; border: 1px solid var(--accent); border-radius: 5px; transition: all 0.3s ease;" onmouseover="this.style.backgroundColor='var(--accent)'; this.style.color='#000';" onmouseout="this.style.backgroundColor='transparent'; this.style.color='var(--accent)';">LinkedIn</a>
            </div>
        </div>
    </section>

    <footer>
        <div style="display: flex; justify-content: center; gap: 1.5rem; margin-bottom: 1rem;">
            <a href="https://www.facebook.com/kaye.liezl" target="_blank" style="color: var(--accent); text-decoration: none; font-size: 0.9rem;">Facebook</a>
            <span style="color: var(--text-muted);">|</span>
            <a href="#" target="_blank" style="color: var(--accent); text-decoration: none; font-size: 0.9rem;">LinkedIn</a>
        </div>
        <p>SYSTEM TIMESTAMP: 2026 | ALL RIGHTS RESERVED BY LIEZL KAYE ROA.</p>
    </footer>

</body>
</html>