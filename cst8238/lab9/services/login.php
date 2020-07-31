<?php
/**
 * Logic that handles employee login
 */
if (isset($_POST['submitLogin'])) {
    echo('hi');
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $result = $database->getConnection()->query(
        "SELECT * FROM `employees` WHERE email='". $email ."' AND password='". $pass ."';"
    );

    // Redirect home w login error flag if no records found
    if ($result->num_rows == 0) header("Location: /index.php?error=login");
    $row = $result->fetch_assoc();
    $_SESSION['email'] = $row['email'];
    header("Location: /index.php");
}
?>