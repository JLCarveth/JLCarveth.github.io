<!-- Content -->
<h3>Login</h3>
<?php if (!isset($_SESSION['email'])) { 
?>
<form action="/cst8238/lab9/index.php" method="POST">
    <div clas="form-group">
        <label for="email">Email: </label>
        <input class="form-control" type="email" id="email" name="email" placeholder="jDoe@gmail.com"><br>
    </div>
    <div class="form-group">
        <label for="password">Password: </label>
        <input class="form-control" type="password" name="password" id="password"><br>
    </div>
    <div class="form-group">
        <input class="btn btn-primary form-control" type="submit" name="submitLogin" value="Submit">
    </div>
</form>
<?php } else {
    echo("You are already logged in.<br>");
    echo("Click <a href=\"index.php?logout=1\">here</a> to logout.");
} ?>
