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
        <div id="gallery">
            // indention for overview (read lowest indention with comment)
            <h1 id="title">GALLERI</h1>
            <hr>
            <h2>PORTFOLIO</h2>
            <p>Billeder med beskrivelse af min fortidige arbejd.</p>
            <div id="row">
                <div id="column">
                    <div id="content">
                        <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>IT & Data</h3>
                        <p>(whatever description with random image)</p>
                    </div>
                </div>
                <div id="column">
                    <div id="content">
                        <img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
                        <h3>Automobility</h3>
                        <p>(whatever description with random image)</p>
                    </div>
                </div>
                <div id="column">
                    <div id="content">
                        <img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
                        <h3>Syddansk Erhversskole</h3>
                        <p>(whatever description with random image)</p>
                    </div>
                </div>
                <div id="column">
                    <div id="content">
                        <img src="/w3images/mountains.jpg" alt="Mountains" style="width:100%">
                        <h3>Some other work</h3>
                        <p>(whatever description with random image)</p>
                    </div>
                </div>
            </div>
            <div id="content">
                <img src="/w3images/p3.jpg" alt="Bear" style="width:100%">
                <h3>Some Other random important Work or smth</h3>
                <p>(whatever description with random image)</p>
                <p>(whatever description with random image)</p>
            </div>
        </div>
        // remove indention after it works
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