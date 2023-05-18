<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "34.131.81.84";
$username = "root";
$password = getenv('DB_PASSWORD');
$database = "testdb";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Indian Freedom Fighters</title>
</head>
<body>
    <h1>Indian Freedom Fighters</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Birthdate</th>
        </tr>
        <?php
        // Perform a SELECT query
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        // Output data from the table
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["birthdate"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No users found</td></tr>";
        }
        ?>
    </table>

<?php
// Close the connection
$conn->close();
?>

</body>
</html>
