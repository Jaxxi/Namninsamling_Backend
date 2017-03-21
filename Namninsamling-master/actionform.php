
Tackar så mycket  <?php echo $_POST["name"]; ?> för att du stödjer oss.<br>
Email adressen du skrev in är <?php echo $_POST["email"]; ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "folkom";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO folk (name, email) VALUES ('$_POST[name]', '$_POST[email]') ";

if ($conn->query($sql) === TRUE) {
    echo "<br> New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
