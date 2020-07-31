<?php
class Database {
    private static $instance;
    private $connection;
    private $host = "localhost";
    private $user = "carv0050_Lab9";
    private $pass = "SomeLonger!Password222";
    private $db = "carv0050_Lab9";

    /**
     * Returns the instance of the database connection, or creates a new one
     */
    public static function getInstance () {
        if (!self::$instance) self::$instance = new self();
        return self::$instance;
    }

    /**
     * Private constructor so this class manages instantiation of db connections
     */
    private function __construct() {
        echo('<script>console.log("host: ' . $this->host . ' db: ' . $this->db . ' pass: ' . $this->pass . '")</script>');
        $this->connection = new mysqli($this->host,$this->user,$this->pass, $this->db);
    }

    /**
     * Creates the databse if it doesn't already exist
     * Makes the database active
     */
    public function createDatabase () {
        $this->connection->query("CREATE DATABASE IF NOT EXISTS " . $this->db);
        if ($this->connection->connect_errno) {
            echo('<script>console.log("error creating db ' . $this->connection->connect_error. '")</script>');
        }
    }

    public function getConnection () {
        return $this->connection;
    }
}
?>