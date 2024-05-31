```markdown
<!doctype html>
<html lang="en_US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A developer's personal website showcasing projects and contributions.">
    <meta name="keywords" content="developer, projects, contributions, portfolio">
    <meta name="robots" content="index, follow">
    <meta name="generator" content="Custom Theme"/>
    <title>Developer Portfolio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'DM Sans', sans-serif;
            background: rgb(252, 250, 244);
            color: #333;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #fff;
            border: 1px solid #333;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2rem;
            margin-bottom: 1rem;
            border-radius: 0 0 0.5rem 0.5rem;
        }

        .brand-logo {
            font-weight: bold;
            text-decoration: none;
            color: #000;
        }

        .nav-links {
            display: flex;
        }

        .nav-link {
            margin-left: 1rem;
            text-decoration: none;
            color: #000;
            font-weight: bold;
        }

        .main-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        .card {
            background-color: #fff;
            border: 1px solid #333;
            border-radius: 0.5rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .card-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .avatar-container {
            margin-bottom: 1rem;
        }

        .avatar {
            border-radius: 50%;
            border: 1px solid #333;
            width: 100px;
            height: 100px;
        }

        .description {
            text-align: center;
        }

        .projects {
            display: flex;
            flex-wrap: wrap;
        }

        .project {
            background-color: #fff;
            border: 1px solid #333;
            border-radius: 0.5rem;
            padding: 1rem;
            margin: 0.5rem;
            flex: 1 1 calc(25% - 1rem);
            box-sizing: border-box;
        }

        .project-title {
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .project-category {
            font-size: 0.875rem;
            font-style: italic;
            margin-bottom: 0.5rem;
        }

        .opensource {
            display: flex;
        }

        .opensource-contribution {
            flex: 1;
            padding: 1rem;
            text-align: center;
        }

        .footer {
            text-align: center;
            padding: 2rem 0;
            font-size: 0.875rem;
        }

        .footer p {
            margin: 0.5rem 0;
        }
    </style>
</head>
<body class="antialiased text-gray-800">
    <header class="header">
        <a href="/" class="brand-logo">
            MYPORTFOLIO.COM
        </a>
        <div class="nav-links">
            <a class="nav-link" href="/projects/">Projects</a> 
            <a class="nav-link" href="/donate/">Donate</a>
            <a class="nav-link" href="/about/">About</a>
            <a class="nav-link" href="/ru">RU</a>
        </div>
    </header>
    
    <main role="main" class="main-container">
        <section>
            <div class="card">
                <h3 class="card-title">
                    Hi there, I'm Your Name
                    <a href="/about/" class="about-link">[ABOUT]</a>
                </h3>
                <div class="card-content">
                    <div class="avatar-container">
                        <img src="your-avatar-url" alt="" class="avatar">
                    </div>
                    <div class="description">
                        I'm a Digital Nomad with an insatiable curiosity for learning and researching the latest technologies and architectural solutions. I thrive on creating and utilizing specialized tools to optimize development processes and maximize efficiency. I have experience with big projects and big development teams.
                    </div>
                </div>
            </div>
            <div class="card">
                <h3 class="card-title">
                    PROJECTS
                    <a href="/projects/" class="view-all-link">[VIEW ALL]</a>
                </h3>
                <div class="projects">
                    <div class="project">
                        <h3 class="project-title">
                            <a href="/project1/">Project 1</a>
                        </h3>
                        <div class="project-category">php</div>
                        <div class="project-description">Description of project 1.</div>
                    </div>
                    <div class="project">
                        <h3 class="project-title">
                            <a href="/project2/">Project 2</a>
                        </h3>
                        <div class="project-category">php</div>
                        <div class="project-description">Description of project 2.</div>
                    </div>
                    <div class="project">
                        <h3 class="project-title">
                            <a href="/project3/">Project 3</a>
                        </h3>
                        <div class="project-category">javascript, typescript</div>
                        <div class="project-description">Description of project 3.</div>
                    </div>
                    <div class="project">
                        <h3 class="project-title">
                            <a target="_blank" href="https://github.com/your-github">Project 4</a>
                        </h3>
                        <div class="project-category">other</div>
                        <div class="project-description">Description of project 4.</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3 class="card-title">
                    OPENSOURCE CONTRIBUTIONS
                    <a rel="nofollow" target="_blank" href="https://github.com/your-github" class="github-link">[GITHUB]</a>
                </h3>
                <div class="opensource">
                    <div class="opensource-contribution">
                        <img src="http://ghchart.rshah.org/333333/your-github" alt="Your Github chart" />
                    </div>
                    <div class="opensource-contribution">
                        <img src="https://github-contribution-stats.vercel.app/api/?username=your-github" alt="">
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <p>
                POWERED BY <a href="/yourcms/">Your CMS</a> | 
                <a href="/sitemap.xml">SITEMAP</a> | 
                <a target="_blank" href="https://github.com/your-github/dev">SOURCE CODE</a> | 
                TOTAL PAGES: 744
            </p>
            <p>Copyright © <a href="/about/">Your Name</a></p>
        </footer>
    </main>
</body>
</html>
