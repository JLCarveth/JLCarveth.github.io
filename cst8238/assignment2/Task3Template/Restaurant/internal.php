<?php include 'header.php';?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require_once('WebsiteUser.php');
    session_start();
    session_regenerate_id(false);
    // If no session exists, redirect
    if (isset($_SESSION['websiteUser'])) {
        if (!$_SESSION['websiteUser']->isAuthenticated()) {
            header("Location: login.php");
        }
    } else header("Location: login.php");
?>
<div id="content" class="clearfix">
    <p>&nbsp;</p>
    <h1>Internal Page</h1>
    <p>
    <?php
        echo "This is a restricted area. Welcome, " . $_SESSION['websiteUser']->getUsername() . ".";
    ?>
    <br>
    <a href="logout.php">Logout</a>
    </p>
</div><!-- End Content -->
<?php include 'footer.php';?>
