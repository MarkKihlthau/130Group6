<?php

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "practice";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 $statement = "CREATE TABLE ";
 $statement .= "username VARCHAR(255), ";
 $statement .= "password VARCHAR(255), :

?>