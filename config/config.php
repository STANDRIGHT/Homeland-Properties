<?php 

try{
    //host

    define("HOSTNAME", "localhost");

    //DBNAME
    define("DBNAME", "homeland");

    //user
    define("USER", "root");

    //pass
    define ("PASS", "");

    $conn = new PDO("mysql:host=".HOSTNAME."; dbname".DBNAME.";", USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // if($conn == true){
    //     echo "database connected";
    // }else{
    //     echo "connection error";
    // }
}catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}



?>