<?php 
require_once ("includes/header.php");
?>
    <link rel="stylesheet" href="academic.css">
    <nav id="nav">
        <ul id="navigation">
            <li id="list"><a href="index.php">Home</a></li>
            <li id="list"><a href="info.php">Information</a></li>
            <li id="list"><a href="portfolio.php">Portfolio</a></li>
            <li id="list"><a href="contact.php">Contact</a></li>
            <li id="dropdown"> 
                <select id="selection" class="text-center" name="info">
                    <option id="active" href="academic.php" value="academic"><a href="">Akademisk</a></option>
                    <option value="development"><a href="">Udvikling</a></option>
                    <option value="design"><a href="">Design</a></option>
                    <option value="gallery"><a href="">Galleri</a></option>
                </select>
            </li>
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
        <hr id="divider" class="hr-blurry" />
        <section id="information">
            <h3 id="certificate">Certificeringer</h3>
            <article id="officials">
                <p>SCD - Object Oriented Programming Certified Developer | 2022</p>
                <p id="python">SCD - Python Certified Developer | 2020</p>
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