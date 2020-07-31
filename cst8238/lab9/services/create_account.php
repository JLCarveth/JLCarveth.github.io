<?php
if (isset($_POST['submitCreate'])) {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $phone = $_POST['telephone'];
    $sin   = $_POST['sin'];
    $pass  = $_POST['password'];

    $result = $database->getConnection()->query("INSERT INTO `employees` 
        (first_name, last_name, email, telephone, sin, password)
        VALUES ('" . $fName . "','" . $lName . "','" . $email . "','" . $phone . "','" . $sin . "','" . $pass . "');");
    if ($database->getConnection()->error == 0) header("Location: /index.php?action=view");
    else echo ($database->getConnection()->error);
}
?>