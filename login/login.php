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
    $sqlBoard = "SELECT * FROM board WHERE userid =:userid";

    $password = '';
    $result=$conn->prepare($sql);
    $executerecord=$result->execute(array(":email"=>$zusername));
    if($executerecord){
        if($result->rowCount()>0){
            foreach($result as $row){
                $password=$row['password'];
                $uId=$row['id'];
                $username=$row['username'];
            }
        }
    }

    $result2=$conn->prepare($sqlBoard);
    $executerecord=$result2->execute(array(":userid"=>$uId));
    if($executerecord){
        if($result2->rowCount()>0){
            foreach($result2 as $row){
                $data1=$row['data1'];
                $data2=$row['data2'];
                $data3=$row['data3'];
                $data4=$row['data4'];
                $data5=$row['data5'];
                $data6=$row['data6'];
            }
        }
    }

    if ($password === $zpassword){
        session_id($uId);
        session_start();
        $_SESSION["userid"] = $uId;
        $_SESSION["username"] = $username;
        $_SESSION["data1"] = $data1;
        $_SESSION["data2"] = $data2;
        $_SESSION["data3"] = $data3;
        $_SESSION["data4"] = $data4;
        $_SESSION["data5"] = $data5;
        $_SESSION["data6"] = $data6;

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