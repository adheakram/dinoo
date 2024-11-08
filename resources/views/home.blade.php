<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adhe Akram Azhari - Personal Website</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">Dinoo</div>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Portofolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="hero" data-aos="fade-up">
            <div class="hero-content">
                <img src="images/Profile2.jpeg" alt="Profile Image" class="hero-image">
                <h2>I’m Adhe Akram Azhari</h2>
                <p>Hello, I'm a UI/UX Designer and Informatics graduate from Telkom University.</p>
                <a href="cv/CV.pdf" class="cta-button" download="CV_Adhe_Akram_Azhari.pdf">Download CV</a>
            </div>
        </section>
        <section id="about" data-aos="fade-up">
            <div class="container about-section">
                <h2>About Me</h2>
                <div class="profile-summary">
                    <p>Graduate of Telkom University in Informatics with a strong background in web development and UI/UX design. Experienced in various programming languages and design tools.</p>
                </div>
                <div class="about-separator"></div>
                <div class="experience-section">
                    <h3>Work Experience</h3>
                    <div class="experience-item">
                        <h4>Data Management - PT. Antam Tbk</h4>
                        <span>April 2024 - July 2024</span>
                        <p>Analyze data related to vehicle turnover containing mining production. Analyzed the scale of vehicles containing mining production (Gross,Tare and Netto).</p>
                    </div>
                    <div class="experience-item">
                        <h4>Web Analyst - Office Telkom University</h4>
                        <span>October 2022 - November 2022</span>
                        <p>Responsible for carrying out research and community service activities. Develop research centers and collaborative projects with external parties. Analyze a PPM website regarding what the website lacks in terms of content, appearance and others.</p>
                    </div>
                    <div class="experience-item">
                        <h4>Data Management - PT. Telkom Indonesia</h4>
                        <span>May 2018 - December 2019</span>
                        <p>Taking care of indihome customer data such as entering data on customers who have just registered or are currently running. Collaborating with people in the field to open the port in ODP so that the port can connect to the internet.</p>
                    </div>
                </div>
                <div class="about-separator"></div>
                <div class="skills-section">
                    <h3>My Skills</h3>
                    <div class="skills-grid">
                        <div class="skill-item">
                            <i class="fas fa-code"></i>
                            <h4>Web Development</h4>
                            <p>HTML, CSS, JavaScript, PHP</p>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-laptop-code"></i>
                            <h4>Programming</h4>
                            <p>Python, C++, Golang, Flutter</p>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-drafting-compass"></i>
                            <h4>UI/UX Design</h4>
                            <p>Figma, Adobe Photoshop</p>
                        </div>
                        <div class="skill-item">
                            <i class="fas fa-database"></i>
                            <h4>Data Analysis</h4>
                            <p>MySQL, MongoDB</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects" data-aos="fade-up">
            <div class="container">
                <h2>Portofolio</h2>
                <div id="project-list" class="project-list">
                    <!-- Projects will be dynamically loaded via JS -->
                </div>
            </div>
        </section>
        <section id="contact" data-aos="fade-up">
            <div class="container contact-container">
                <form id="contact-form">
                    <h2>Contact</h2>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                    
                    <button type="submit">Send</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>&copy; 2024 Dinobrontosaurus</p>
            <div class="social-media">
                <a href="https://www.instagram.com/adheakram_?igsh=NGk2cWRxY25jY3Jm&utm_source=qr" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/adhe-akram-azhari-868205147/" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                <a href="https://github.com/username" target="_blank" aria-label="GitHub"><i class="fab fa-github"></i></a>
            </div>
        </div>
    </footer>
    <a href="#" class="scroll-to-top"><i class="fas fa-chevron-up"></i></a>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
