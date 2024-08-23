<?php
require_once ("includes/header.php");
?>
    <link rel="stylesheet" href="design.css">
    <nav id="nav">
        <ul id="navigation">
            <li id="list"><a href="index.php">Home</a></li>
            <li id="list"><a href="portfolio.php">Portfolio</a></li>
            <li id="list"><a href="contact.php">Contact</a></li>
            <li id="dropdown"> 
                <select id="selection" class="text-center" name="info" onchange="selectNav(this)">
                    <option value="" disabled selected>Galleri</option>
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
            <h3 id="qualifications">Kvalifikationer</h3>
            <article id="paragraphs">
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
    <script src="js/script.js"></script>
    <script src="js/page_scroll.js"></script>
    <script src="js/select_nav.js"></script>
</body>
</html>