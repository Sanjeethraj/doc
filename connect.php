<?php
$db_host="localhost";
$db_user="root";
$db_password="tiger";
$db_name="student";

//echo $db_host."<br />";
//echo $db_user."<br />";
//echo $db_password."<br />";
//echo $db_name."<br />";

$dbh = mysqli_connect($db_host,$db_user,$db_password,$db_name);

echo "Successfully connected"."<br />";
?> 

