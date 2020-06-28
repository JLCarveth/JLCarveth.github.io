<?php
/**
 * header.php
 * 
 *  Manages the site's header content
 *  Includes menu.php
 */
?>
<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#">CST8238 - Web Programming</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
        aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <?php
        include 'menu.php';
    ?>
</nav>