<?php
$servername = "sql1.njit.edu";
$username = "anm56";
$password = "anshul2311";
//class dbConn{
    //variable to hold connection object.
    //protected static $db;
    //private construct - class cannot be instantiated externally.
     //private function __construct() {
try {
    $conn= new PDO("mysql:host=$servername;dbname=anm56", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"<br><br>; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    //}
    //}
/*public static function getConnection() {
        //Guarantees single instance, if no connection object exists then create one.
        if (!self::$db) {
            //new connection object.
            new dbConn();
        }
        //return connection.
        return self::$db;
    }*/

?>
