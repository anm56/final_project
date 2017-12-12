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
$pass = $_POST['psw'];

try {
    $conn= new PDO("mysql:host=$servername;dbname=anm56", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    echo "<br>"; 
    $sql= $conn->prepare("INSERT INTO accounts (fname, lname, email, phone, birthday, gender, password) VALUES ('$fname', '$lname', '$email', 
                                                 '$phone','$bday', '$gender', '$pass')"); 
   $sql->execute();
  // $results=$sql->fetchAll();

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
