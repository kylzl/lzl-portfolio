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

<!-- ================= NAV ================= -->
<nav>
    <div class="logo">LK</div>

    <div class="menu-toggle" onclick="toggleMenu()">☰</div>

    <ul id="navMenu">
        <li><a href="/">Meee</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="/tutorial">Tutorial</a></li>
    </ul>
</nav>

<!-- ================= HERO ================= -->
<section class="hero" id="about">
    <h1>Liezl Kaye</h1>
    <p>
        Initializing protocol... Freelance Graphic Designer specializing
        in next-generation digital experiences.
    </p>
    <a href="#projects" class="btn">Initialize Projects</a>
</section>

<!-- ================= PROJECTS ================= -->
<section id="projects">
    <h2>Data Archives</h2>

    <div class="projects-grid">

        <div class="project-card">
            <div class="project-image">
                <img src="https://www.marcelino-resort-hotel.online/img/banner-1.webp">
            </div>
            <div class="project-content">
                <h3>Marcelino Resort & Hotel</h3>
                <p>
                    Online reservation system with real-time booking
                    availability and responsive UX.
                </p>
                <a href="https://www.marcelino-resort-hotel.online/" target="_blank" class="visit-link">
                    VISIT SITE →
                </a>
            </div>
        </div>

        <div class="project-card">
            <div class="project-image">
                <img src="https://i.pinimg.com/1200x/6c/03/07/6c030758c789efe762cbcdf3eddc7d1e.jpg">
            </div>
            <div class="project-content">
                <h3>Graphic Design | OJT</h3>
                <p>
                    Developed branding materials and visual assets using
                    professional design workflows.
                </p>
            </div>
        </div>

        <div class="project-card">
            <div class="project-image">
                <img src="https://i.pinimg.com/736x/a0/c3/10/a0c310c3dce06b7b3629440ef8649696.jpg">
            </div>
            <div class="project-content">
                <h3>Meow Project</h3>
                <p>
                    Creative experimental design exploration and UI concepts.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- ================= SKILLS ================= -->
<section class="skills" id="skills">
    <h2>Core Modules</h2>

    <div class="skills-list">
        <span class="skill-tag">HTML5</span>
        <span class="skill-tag">CSS3</span>
        <span class="skill-tag">JavaScript</span>
        <span class="skill-tag">React</span>
        <span class="skill-tag">MySQL</span>
        <span class="skill-tag">Laravel</span>
        <span class="skill-tag">UI/UX</span>
    </div>
</section>

<!-- ================= CONTACT ================= -->
<section id="contact">
    <h2>Open Channel</h2>

    <div class="contact-container">
        <p>
            Open for freelance and full-time opportunities involving
            Laravel, React and modern frontend systems.
        </p>

        <a href="mailto:your.email@example.com" class="btn">
            Send Transmission
        </a>
    </div>
</section>

<!-- ================= FOOTER ================= -->
<footer>
    <p>SYSTEM TIMESTAMP: 2026 | ALL RIGHTS RESERVED.</p>
</footer>

<script>
function toggleMenu(){
    document.getElementById("navMenu")
        .classList.toggle("active");
}
</script>

</body>
</html>