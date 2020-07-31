<?php
session_start();
ini_set('display_errors', 1);
error_reporting(-1);
include_once("db.php");
include_once("model/Employee.php");

$database = Database::getInstance();
if ($database == NULL) echo ("<script>console.log('error connecting to DB')</script>");
$employee = new Employee($database->getConnection());

// Logic for inserting an employee record
include('./services/create_account.php');
// Login logic
include('./services/login.php');

?>
<html>
<?php include("partials/Head.php"); ?>
<body>
    <!-- Header -->
    <?php include("partials/Header.php"); ?>
    <?php include("partials/Menu.php"); ?>
    <!-- Content -->
    <div class="container">
        <h1>Employee Management System</h1>
        <!-- Use the URI to determine which page to include -->
        <?php
            // Check for login
            if (isset($_SESSION['email'])) {
                echo("Welcome, " . $_SESSION['email']);
            }
            // Check for errors in URI
            if (isset($_GET['error'])) {
                $errorMsg = "";
                // If login error (invalid creds)
                if ($_GET['error'] == "login") {
                    $errorMsg = "Invalid login credentials.";
                    include('./partials/Error.php');
                }
            }

            if (isset($_GET['logout'])) include('./services/logout.php');
            
            // Obtain the request URI from server superglobal
            $request = $_SERVER['REQUEST_URI'];
            // Parse the URI for the action param
            $query = parse_url($request, PHP_URL_QUERY);
            $params = array();
            parse_str($query, $params);
            
            $action = $params['action'] ?? NULL;
            switch ($action) {
                case NULL : 
                    if (!isset($_SESSION['email'])) include("Login.php");
                break;
                case "create" :
                    include("CreateAccount.php");
                    break;
                case "login" : 
                    include("Login.php");
                    break;
                case "view" :
                    include("ViewAllEmployees.php");
                    break;
                case "employee" :
                    include("Employee.php");
                    break;
                default:
                    include("404.php");
                    break;
            }
        ?>
    </div>
    <!-- Footer -->
    <?php include("partials/Footer.php"); ?>
</body>

</html>