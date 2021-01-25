<?php	
	// /*** Connect ***/
   // $serverName = "localhost";
   // $userName = "root";
   // $userPassword = "";
   // $dbName = "Customer";

   // $connect = mysqli_connect($serverName,$userName,$userPassword,$dbName);

   // if($connect->connect_error) {
   //    exit('Could not connect');
   //  }


//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=Customer", "root", "");

?>

