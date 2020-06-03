<?php
//coonect ke database
$DBHOST = "localhost";
$DB_DATABASE = "db_starbhak";
$DB_USERNAME = "root";
$DB_PASSWORD = "";
$DB_PORT = "3306";

//create connection 
$db1 = new mysqli($DBHOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE, $DB_PORT);

//check connection
if($db1->connect_error){
    die('Connection failed:' .$conn->connect_error);
}
?>