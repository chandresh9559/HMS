<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'password');
define('DB_NAME', 'hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

    // $serverName = "localhost";
    // $userName = "root";
    // $password = "password";
    // $dbName = "hms";

    // $con = mysqli_connect($serverName,$userName,$password,$dbName);

    // if (!$con) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
?>