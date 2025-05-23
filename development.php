<?php
require_once ("includes/header.php");
?>
    <link rel="stylesheet" href="development.css">
    <nav id="nav">
        <ul id="navigation">
            <li id="list"><a href="index.php">Home</a></li>
            <li id="list"><a href="info.php">Information</a></li>
            <li id="list"><a href="portfolio.php">Portfolio</a></li>
            <li id="list"><a href="contact.php">Contact</a></li>
            <li id="dropdown"> 
                <select id="selection" class="text-center" name="info">
                    <option value="" disabled selected>Projects</option>
                    <option><a value="academic" href="academic.php">Akademisk</a></option>
                    <option><a id="active" value="development" href="development.php">Udvikling</a></option>
                    <option><a value="design" href="">Design</a></option>
                    <option><a value="gallery" href="">Galleri</a></option>
                </select>
           </li>
        </ul>
    </nav>
    <main id="main">
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
    <script src="page_scroll.js"></script>
</body>
</html>