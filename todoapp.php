<?php
$servername = "localhost";
$username = "root";
$password = "";
//                 // Open a Connection to MySQL
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=todoapp", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully"; 
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
    // }

                    // Create Database 
    // $conn = new PDO("mysql:host=$servername;dbname=todoapp;", $username, $password);
    // // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully"; 
    // $sql = "CREATEDATABASE todoapp";
    // use exec() because no results are returned
//     $conn->exec($sql);
// //     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
$sql = "CREATE TABLE ToDoApp (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";



?>
 