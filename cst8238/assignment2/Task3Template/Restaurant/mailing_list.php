<?php include("header.php");?>
<?php include("db_config.php");?>
<?php
    $sql = "SELECT firstName, lastName, emailAddress, phoneNumber FROM mailingList;";
    $results = $conn->query($sql);
?>
<h1>Mailing List</h1>
<table>
    <thead>
        <tr>
            <td>Full Name</td>
            <td>Email Address</td>
            <td>Phone Number</td>
        </tr>
    </thead>
    <tbody>
        <?php
            while ($row = $results->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['firstName'] . " " . $row['lastName'] . "</td>";
                echo "<td>" . $row['emailAddress'] . "</td>";
                echo "<td>" . $row['phoneNumber'] . "</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
</table>
<?php include("footer.php");?>