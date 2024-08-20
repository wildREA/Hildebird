<?php
require_once ("includes/header.php");
?>
    <link rel="stylesheet" href="design.css">
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
    <script src="page_scroll.js"></script>
</body>
</html>