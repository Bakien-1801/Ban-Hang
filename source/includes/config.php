<?php
// define('DB_SERVER','your_server');
// define('DB_USER','your_user');
// define('DB_PASS' ,'your_password');
// define('DB_NAME', 'your_database_name');
// $con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// // Check connection


// if (mysqli_connect_errno())
// {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
// }


// if (!$con){
//     die('error connecting to database');
// }else{
//     mysqli_select_db(, $con);
// }
// echo 'you have created case';

$con = mysqli_connect('localhost','root','','');
if(!$con){
    die('Could not connect: '.mysqli_connect_error());

}
echo "Connect successfully";
mysqli_close($con);
// $servername = "localhost";
// $database = "banhang";
// $username = "root";
// $password = "";

// $con = mysqli_connect($servername, $username, $password , $database);
//  if(!$con){
//      die("Connection failed: ".mysqli_connect_error());

//  }
//  echo "Connection successfully";
//  mysqli_close($con);
//  ?>