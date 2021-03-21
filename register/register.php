<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $zemail = $_POST['email'];
    $zusername = $_POST['username'];
    $zpassword = $_POST['password'];
}

include_once('dbclass.php');

try {
    $conn = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname . ';charset=utf8', $username , $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO users (username, email, password)
VALUES ('$zusername', '$zemail', '$zpassword')";
    $conn->exec($sql);
    echo "New record created successfully";
	$successmsg = "";
	header("Location: http://localhost/2due/");
	
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>