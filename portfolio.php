<?php 
require_once ("includes/header.php");
?>
    <link rel="stylesheet" href="portfolio.css">
    <nav id="nav">
        <ul id="navigation">
            <li id="list"><a href="index.php">Home</a></li>
            <li id="list"><a href="info.php">Information</a></li>
            <li id="list"><a id="active" href="portfolio.php">Portfolio</a></li>
            <li id="list"><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main id="main">
        <section id="information">
            <h3 id="headline">Udvalgte projekter</h3> <!-- does not want to work with css file-->
            <h4 id="development">Udvikling</h4>
            <article id="descriptions">
                <p id="misfit"><a href="https://itd.sde.dk/" target="_blank">IT & Data</a> (lanceret december 2021) UX/UI design</p>
                <p id="misfit">Formålet med denne hjemmeside er, at SDE’s datatekniker-elever altid har en opdateret oversigt over uddannelsens indhold. Siden skal afpejle uddannelsens, såvel som skolens, image.</p>
                <p>Sidens centrale blok håndterer scroll-bart indhold. Det har jeg opnået med CSS variables, så de sektioner, der fylder hele skærmen har præcis samme højde og bredde som den inderste ramme.</p>
                <p id="spacing">En anden udfordring med dette site var at sikre nem opdatering, samt at udvikle den automatiske integration med pdf, uden at gå på kompromis med performance.</p>
                
                <img id="host" alt="Free Web Hosting" src="https://www.freewebhostingarea.com/images/poweredby.png">
                
                <p id="misfit"><a href="http://automobility.sde.dk/" target="_blank">Automobility</a> (lanceret august 2018) UX/UI design</p>
                <p id="misfit">Formålet med denne hjemmeside er, at SDE’s datatekniker-elever altid har en opdateret oversigt over uddannelsens indhold. Siden skal afpejle uddannelsens, såvel som skolens, image.</p>
                <p>Sidens centrale blok håndterer scroll-bart indhold. Det har jeg opnået med CSS variables, så de sektioner, der fylder hele skærmen har præcis samme højde og bredde som den inderste ramme.</p>
                <p id="spacing">En anden udfordring med dette site var at sikre nem opdatering, samt at udvikle den automatiske integration med pdf, uden at gå på kompromis med performance.</p>
            </article>
            <hr id="divider" class="hr-blurry" />
            <h4 id="development">Design</h4>
            <article id="descriptions">
                <p id="misfit"><a href="https://www.sde.dk/" target="_blank">Syddansk Erhvervsskole</a> (gik i luften i december 2022) UX/UI design</p>
                <p id="misfit">Syddansk Erhvervsskoles vigtigste opgave som er at uddanne fremtidens kvalificerede medarbejdere, og skolen er derfor i konstant udvikling, så uddannelserne er tidssvarende. Skolen er også et vigtigt bindeled mellem grundskolerne og virksomhederne, og arbejder aktivt på at udfordre og inspirere de unges valg af ungdomsuddannelse.</p> <br>
                <p id="spacing_last">Skolen ønskede et design, der afspejler denne rolle, og som virker inspirerende på målgrupperne.Jeg har opnået dette med et design, jeg udviklede i Adobe XD, og som er baseret på logo-konceptet, som er legende, men også rent.</p>
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