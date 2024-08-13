<?php
require_once ("includes/header.php");
?>
<main>
    <?php
    if ($show_alert == true):
    ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> Email sent successfully!
    </div>
    <div class="alert alert-error">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Warning!</strong> This alert box could indicate a warning that might need attention.
    </div>
    <?php
    endif;
    ?>
    <section>
        <p class="spacing"></p>
        <form action="form.php" method="POST" class="contact-form">
            <div class="form-group">
                <label class="forced" for="name">Navn:</label>
                <input type="text" id="name" name="name" required autocomplete="off">
            </div>
            <div class="form-group">
                <label class="offset" for="email">Email:</label>
                <input type="email" id="email" name="email" required autocomplete="off">
            </div>
            <div class="form-group">
                <label class="offset" for="message">Besked:</label>
                <textarea id="message" name="message" rows="4" required autocomplete="off"></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Send</button>
            </div>
        </form>
    </section>
</main>
<footer>
    <p class="hosting">
        <a target="_blank" href="https://www.freewebhostingarea.com" title="Free Web Hosting with PHP5 or PHP7">
            <img alt="Free Web Hosting" src="https://www.freewebhostingarea.com/images/poweredby.png">
        </a>
    </p>
</footer>
<script src=""></script>
<script src="pageScroll.js"></script>
</body>
</html>
