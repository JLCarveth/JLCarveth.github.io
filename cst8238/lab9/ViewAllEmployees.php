<?php
/**
 * Displays all Employee Records
 */
$results = $database->getConnection()->query("SELECT * FROM `employees`;");
if (!$results) echo('Error running query');
?>
<h3>View All Employees</h3>
<hr>
<table>
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>SIN</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                echo('<tr>');
                echo('<td>' . $row['first_name'] . '</td>');
                echo('<td>' . $row['last_name'] . '</td>');
                echo('<td>' . $row['email'] . '</td>');
                echo('<td>' . $row['telephone'] . '</td>');
                echo('<td>' . $row['sin'] . '</td>');
                echo('</tr>');
            }
        }
        ?>
    </tbody>
</table>
