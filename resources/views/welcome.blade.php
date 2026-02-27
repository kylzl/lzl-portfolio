<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liezl Kaye Roa Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Rajdhani:wght@400;500;700&display=swap" rel="stylesheet">
    @vite('resources/css/style.css')
</head>
<body>

    <nav>
        <div class="logo">LK</div>
        <ul>
            <li><a href="/"> Meee</a></li>
            <li>|</li>
            <li><a href="/#projects"> Projects</a></li>
            <li>|</li>
            <li><a href="/#skills"> Skills</a></li>
            <li>|</li>
            <li><a href="/#contact"> Contact</a></li>
            <li>|</li>
            <li><a href="/tutorial"> Tutorial</a></li>
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
                <div class="project-image"><img src="https://www.marcelino-resort-hotel.online/img/banner-1.webp" alt="Marcelino Resort & Hotel" style="width: 100%; height: 100%; object-fit: cover;"></div>
                <div class="project-content">
                    <h3>Marcelino Resort & Hotel</h3>
                    <p>Helped develop an online reservation web application featuring seamless booking integration, real-time availability updates, and responsive design for optimal guest experience across all devices.</p>
                    <a href="https://www.marcelino-resort-hotel.online/" target="_blank" style="color: var(--accent); text-decoration: none; font-size: 0.9rem; margin-top: 1rem; display: inline-block;">VISIT SITE →</a>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image"><img src="https://i.pinimg.com/1200x/6c/03/07/6c030758c789efe762cbcdf3eddc7d1e.jpg" alt=""></div>
                <div class="project-content">
                    <h3>Graphic Design | OJT</h3>
                    <p>On-the-Job Training experience in graphic design at Mandaue. Developed visual assets, branding materials, and design solutions while mastering industry-standard tools and design principles.</p>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image"><img src="https://i.pinimg.com/736x/a0/c3/10/a0c310c3dce06b7b3629440ef8649696.jpg" alt=""></div>
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