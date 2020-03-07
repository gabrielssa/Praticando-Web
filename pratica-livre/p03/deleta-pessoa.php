<?php
$servername = "127.0.0.1";
$username = "pmauser";
$password = "ax1v09p2";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$id = $_POST['id'];

$sql = "DELETE FROM tb_pessoa WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
echo '<br><a href="index.html">Voltar</a>';
$conn->close();
?> 