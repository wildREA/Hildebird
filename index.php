<?php
require_once ("includes/header.php");
?>
    <nav id="nav">
        <ul id="navigation">
            <li id="list"><a href="index.php">Home</a></li>
            <li id="list"><a href="portfolio.php">Portfolio</a></li>
            <li id="list"><a href="contact.php">Contact</a></li>
            <li id="dropdown"> 
                <select id="selection" class="text-center" name="info" onchange="selectNav(this)">
                    <option value="" disabled selected>Projects</option>
                    <option value="academic.php">Akademisk</option>
                    <option value="development.php">Udvikling</option>
                    <option value="design.php">Design</option>
                    <option id="active" value="gallery.php">Galleri</option>
                </select>
            </li>
        </ul>
    </nav>
    <main id="main">
        <section id="information">
            <h2 id="headline">Om Mig</h2>
            <p id="description">Bosiddende på Fyn.</p>
            <p id="paragraph">Flere års erfaring med front- og backend-udvikling, alene eller i partnerskab. Jeg har specialiseret mig i web-oplevelser med fokus på animeret, responsiv og interaktivt indhold. Jeg elsker minimalistisk og brutalistisk design, naturen og pizza.</p>
        </section>
    </main>
    <footer id="footer">
        <p id="hosting">
            <a target="_blank" href="https://www.freewebhostingarea.com" title="Free Web Hosting with PHP5 or PHP7">
                <img id="host" alt="Free Web Hosting" src="https://www.freewebhostingarea.com/images/poweredby.png">
            </a>
        </p>
    </footer>
    <script src="js/script.js"></script>
    <script src="js/page_scroll.js"></script>
</body>
</html>