<!-- Content -->
<h3>Create an Account</h3>

<form action="index.php" method="POST">
    <div class="form-group">
        <label for="fName">First Name: </label>
        <input class="form-control" type="text" id="fName" name="fName" placeholder="John"><br>
    </div>
    <div class="form-group">
        <label for="lName">Last Name: </label>
        <input class="form-control" type="text" id="lName" name="lName" placeholder="Doe"><br>
    </div>
    <div class="form-group">
        <label for="email">Email Address: </label>
        <input class="form-control" type="email" id="email" name="email" placeholder="jDoe@gmail.com"><br>
    </div>
    <div class="form-group">
        <label for="telephone">Phone Number: </label>
        <input class="form-control" type="text" id="telephone" name="telephone" placeholder="+1-416-999-9999"><br>
    </div>
    <div class="form-group">
        <label for="sin">Social Insurance Number</label>
        <input class="form-control" type="text" id="sin" name="sin" placeholder="123 456 789"><br>
    </div>
    <div class="form-group">
        <label for="password">Password: </label>
        <input class="form-control" type="password" name="password" id="password">
    </div>
    <div class="form-group">
        <input class="btn btn-primary form-control" type="submit" name="submitCreate" value="Submit">
    </div>
</form>