<?php
require_once ("includes/header.php");
?>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="gallery.css">
    <nav id="nav">
        <ul id="navigation">
            <li id="list"><a href="index.php">Home</a></li>
            <li id="list"><a href="info.php">Information</a></li>
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
        <div id="gallery" class="container">
            <h1 id="title" class="text-center">GALLERI</h1>
            <hr>
            <h2>PORTFOLIO</h2>
            <p>Billeder med beskrivelse af min fortidige arbejd.</p>
            <div id="row">
                <div class="col-md-3 col-sm-6">
                    <div id="content">
                        <img src="gallery/itd.jpg" alt="Mountains" class="img-fluid">
                        <h3>IT & Data</h3>
                        <p>Hjemmesiden var lavet som en del af SDEs skolepraktik hjemmeside.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div id="content">
                        <img src="gallery/auto.jpg" alt="Lights" class="img-fluid">
                        <h3>Automobility</h3>
                        <p>Automobility er en hjemmeside om uddannelse i udlandet, specifikt i Estland, som har partnerskab med SDE i Danmark.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div id="content">
                        <img src="gallery/sde.jpg" alt="Nature" class="img-fluid">
                        <h3>Syddansk Erhversskole</h3>
                        <p>Denne hjemmeside er Syddansk Erhvervsskolens, som jeg var med til at udvikle.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div id="content">
                        <img src="gallery/misc/cheburek.jpg" alt="Mountains" class="img-fluid">
                        <h3>Cheburek</h3>
                        <p>Jeg kan meget godt lide at spise dette.</p>
                    </div>
                </div>
            </div>
            <div id="content-border">
            </div>
        </div>
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