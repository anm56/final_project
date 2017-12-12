<?php
ini_set('display_errors','On');
error_reporting(E_ALL);
$servername = "sql1.njit.edu";
$username = "anm56";
$password = "anshul2311";

$fname = $_POST['fname']; 
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['tel'];
$bday = $_POST['bday'];
$gender = $_POST['gender'];
$password = $_POST['psw'];

try {
    $conn= new PDO("mysql:host=$servername;dbname=anm56", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    echo "<br>"; 
    $sql= $con->prepare("INSERT INTO 'accounts' (fname, lname, email, phone, bday, gender, password) 
                               VALUES ('$fname', '$lname', '$email', 
                                                 '$phone','$bday', '$gender', '$password')"); 
   $sql->execute();
   $results=$sql->fetchAll();

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
/*$query = "SELECT * FROM `accounts` WHERE `email` = '$email'";
$sqlsearch = mysql_query($query);
$resultcount = mysql_num_rows($sqlsearch);

if ($resultcount > 0) {
 
    mysql_query("UPDATE `accounts` SET 
                                `fname` = '$fname',
                                `lname`='$lname',
                                `email` = '$email',
                                `phone` = '$phone',
                                `bday` = '$bday',
                                `gender`='$gender',
                                `password` = '$password'        
                             WHERE `email` = '$email'") 
     or die(mysql_error());
    
} else {*/


  //  or die(mysql_error());  

//}
?>
