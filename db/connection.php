<?php
//defining connection string to the mysql database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_student');
define('DB_PORT', '3306');

/* 
Attempt to connect to MySQL database using try catch
mysqli_connect(host, username, password, dbname, port)
 */
try{
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
}
catch(Exception $e){
    die("ERROR: " . mysqli_connect_error() . "<br>" . $e);
}
?>
