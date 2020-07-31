<?php
/**
 * Telephone should likely be stored as a number instead of a string, 
 * it's less error prone and more memory efficient.
 * 
 * SIN is a 9 digit number in Canada, not 11. 2 wasted digits in this schema.
 * 
 * Password should be hashed, and most hashes are at least 64 characters long, often 128...
 */
class Employee {
    function __construct($db) {
        $db->query("CREATE TABLE IF NOT EXISTS `employees` (
            employee_id INTEGER PRIMARY KEY AUTO_INCREMENT,
            first_name VARCHAR(50) NOT NULL,
            last_name VARCHAR(50) NOT NULL,
            email VARCHAR(255) NOT NULL,
            telephone VARCHAR(20) NOT NULL,
            sin VARCHAR(11) NOT NULL,
            password VARCHAR(50) NOT NULL);");
            echo("<script>console.log('Table created.')</script>");
        
        if ($db->connect_errno) echo ('Error!');
    }

    public static function create ($db, $fName, $lName, $email, $phone, $sin, $pass) {
        $db->query("INSERT INTO `employees` (first_name, last_name, email, telephone, sin)
        VALUES ('".$fName."','".$lName."','".$email."','".$phone."','".$sin."','" . $pass ."');");
    }
}