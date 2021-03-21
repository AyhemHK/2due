<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $zdata1 = $_POST['coulddo1'];
    $zdata2 = $_POST['coulddo2'];
    $zdata3  = $_POST['coulddo3'];
}

include_once('dbclassdata.php');

try {
    $conn = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname . ';charset=utf8', $username , $password);;
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO coulddo (data1, data2, data3)
VALUES ('$zdata1', '$zdata2', '$zdata3')";
    $conn->exec($sql);
    echo "New record created successfully";
    $successmsg = "";
    header("Location: https://imperfectandcompany.com/2due/register/");

} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>