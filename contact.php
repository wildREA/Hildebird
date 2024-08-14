<?php
require_once ("includes/header.php");
?>
    <link rel="stylesheet" href="contact.css">
    <nav id="nav">
        <ul id="navigation">
            <li id="list"><a href="index.php">Home</a></li>
            <li id="list"><a href="info.php">Information</a></li>
            <li id="list"><a href="portfolio.php">Portfolio</a></li>
            <li id="list"><a id="active" href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <main id="main">
        <?php
        if ($show_alert):
            if ($status_value == "success"): 
        ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Submission sent successfully!
        </div>
        <?php
            elseif ($status_value == "error"): 
        ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error!</strong> There was an issue sending.
        </div>
        <?php
            endif;
        endif;
        ?>
        <section id="information">
            <p id="spacing"></p>
            <form action="form.php" method="POST" id="contact-form">
                <div id="form-group">
                    <label id="forced" for="name">Navn:</label>
                    <input type="text" id="name" name="name" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label id="offset" for="email">Email:</label>
                    <input type="email" id="email" name="email" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label id="offset" for="message">Besked:</label>
                    <textarea id="message" name="message" rows="4" required autocomplete="off"></textarea>
                </div>
                <div id="form-group">
                    <button type="submit">Send</button>
                </div>
            </form>
        </section>
    </main>
    <footer id="footer">
        <p id="hosting">
            <a target="_blank" href="https://www.freewebhostingarea.com" title="Free Web Hosting with PHP5 or PHP7">
                <img id="host" alt="Free Web Hosting" src="https://www.freewebhostingarea.com/images/poweredby.png">
            </a>
        </p>
    </footer>
    <script src=""></script>
    <script src="pageScroll.js"></script>
</body>
</html>
