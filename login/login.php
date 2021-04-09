<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $zusername = $_POST['uid'];
    $zpassword = $_POST['pwd'];
}

include_once('dbclass.php');

try {


    //$conn = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname . ';charset=utf8', $username , $password);
    // set the PDO error mode to exception
    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $conn = new PDO('mysql:host=' . $hostname . ';dbname=' . $dbname . ';charset=utf8', $username , $password);

    if(!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM users WHERE email =:email";

    $password = '';
    $result=$conn->prepare($sql);
    $executerecord=$result->execute(array(":email"=>$zusername));
    if($executerecord){
        if($result->rowCount()>0){
            foreach($result as $row){
                $password=$row['password'];
                $uId=$row['id'];
            }
        }
    }

    if ($password === $zpassword){
        session_id($uId);
        session_start();
        $_SESSION["userid"] = $uId;

        header("location: http://localhost/2due?session=" . session_id());
        exit();
    }
    else {
        header("location: http://localhost/2due?error=wrongpassword&password=" . $password . "&zpassword=" . $zpassword);
        exit();
    }
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>