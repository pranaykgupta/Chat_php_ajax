<?php
// $db_host='localhost';
// $db_user='root';
// $db_pwd='';
// $database='mychat';

// if(!mysql_connect($db_host,$db_user,$db_pwd))
// die("can't Connect to Database");

// if(!mysql_select_db($database))
// die("can't Select Database");

$con = mysqli_connect('localhost','root','','mychat_ajax') or die("Connection was not established.");

?>