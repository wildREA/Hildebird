<?php 
require_once ("includes/header.php");
?>
    <link rel="stylesheet" href="test.css">
    <nav id="nav">
        <ul id="navigation">
            <li id="list"><a href="index.php">Home</a></li>
            <li id="list"><a href="info.php">Information</a></li>
            <li id="list"><a href="portfolio.php">Portfolio</a></li>
            <li id="list"><a href="contact.php">Contact</a></li>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown button
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </ul>
    </nav>
    <main id="main">
        <section id="information">
            <h3 id="degree">Uddannelse</h3>
            <article id="education">
                <p>Datatekniker med speciale i programmering</p>
                <p id="college">| Syddansk Erhvervsskole</p>
                <p id="date">Juni 2024</p>
            </article>
        </section>
        <br>
        <section id="information">
            <h3 id="certificate">Certificeringer</h3>
            <article id="officials">
                <p>SCD - Object Oriented Programming Certified Developer | 2022</p>
                <p id="python">SCD - Python Certified Developer | 2020</p>
            </article>
        </section>
        <br>
        <section id="information">
            <h3 id="qualifications">Kvalifikationer</h3>
            <article id="paragraphs">
                <h4 id="development">Udvikling</h4>
                <div id="descriptions">
                    <p id="misfit">Jeg arbejder mest med udvikling af themes og plugins til WordPress. De WordPress hjemmesider, jeg laver til mine kunder, er fuldt skræddersyede. Du kan se mine open-source bidrag på GitHub. PHP er mit primære serverside-sprog, som jeg ofte anvender sammen med  MySQL. Jeg har også arbejdet i Node med MongoDB. Laravel har jeg hovedsagligt benyttet til enkeltstående API-projekter.</p>
                    <p>Jeg bygger apps med React Native til Android og iOS. Du kan finde mine apps XX og YY på app store. Jeg bruger HTML og CSS dagligt. Jeg arbejder seriøst med tilgængelighed. Jeg holdre mig opdateret om det nyeste, men sørger for at min kode er bagud-kompatibel.</p>
                    <p>JavaScript bruger jeg også hver dag, ofte med React. Jeg har udviklet Node.js-baseret workflow automatisering via Webpack, som jeg bruger til mine web-projekter. Jeg bruger Git til alle mine programmeringsopgaver. Tag et kig på min GitHub , hvor du kan finde forskellige projekter og mine bidrag til forskellige open source projekter.</p>
                    <p id="spacing">Jeg står selv for mine servere, så jeg har godt styr på kommandoprompten. Jeg håndterer ofte DNS. Jeg koder helst i Microsoft  VS Code eller i Apache NetBeans.</p>
                </div>
                <h4 id="development">Design</h4>
                <div id="descriptions">
                    <p id="misfit">Min designproces begynder med wireframing og fortsætter med råskitser, som jeg udvikler til en prototype.  Efter flere iterationer og i samarbejde med kunden, udvikler jeg det endelige design.</p> <br>
                    <p id="spacing_last">Jeg har professionel erfaring med Adobe Creative Cloud, især XD, Illustrator og Photoshop.</p>
                </div>
            </article>
        </section>
    </main>
    <footer id="footer">
        <p id="hosting">
            <a target="_blank" href="https://www.freewebhostingarea.com" title="Free Web Hosting with PHP5 or PHP7">
                <img id="host" alt="Free Web Hosting" src="https://www.freewebhostingarea.com/images/poweredby.png">
            </a>
        </p>
    </footer>
    <script src="script.js"></script>
    <script src="pageScroll.js"></script>
</body>
</html>