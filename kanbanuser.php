<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $zdatapoint1 = $_POST['coulddo1'];
    $zdatapoint2 = $_POST['coulddo2'];
    $zdatapoint3 = $_POST['coulddo3'];
    $zdatapoint4 = $_POST['coulddo4'];
    $zdatapoint5 = $_POST['coulddo5'];
    $zdatapoint6 = $_POST['coulddo6'];
    session_start();
    $zuserid = session_id();

    $_SESSION["data1"] = $_POST['coulddo1'];
    $_SESSION["data2"] = $_POST['coulddo2'];
    $_SESSION["data3"] = $_POST['coulddo3'];
    $_SESSION["data4"] = $_POST['coulddo4'];
    $_SESSION["data5"] = $_POST['coulddo5'];
    $_SESSION["data6"] = $_POST['coulddo6'];
}

include_once('kanbanclass.php');

try {
    $conn = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname . ';charset=utf8', $username , $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO board (userid, data1, data2, data3, data4, data5, data6)
VALUES ('$zuserid', '$zdatapoint1', '$zdatapoint2', '$zdatapoint3', '$zdatapoint4', '$zdatapoint5', '$zdatapoint6')";
    $conn->exec($sql);
    echo "New record created successfully";
	$successmsg = "";
	header("Location: http://localhost/2due/?session=" . session_id());
	
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>