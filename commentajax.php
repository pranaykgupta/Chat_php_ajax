<?php
// $host="localhost";
// $username="root";
// $password="";
// $databasename="mychat";

// $connect=mysql_connect($host,$username,$password);
// $db=mysql_select_db($databasename);
include("config.php");

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  $comment=$_POST['user_comm'];
  $name=$_POST['user_name'];
  $insert=mysqli_query($con,"INSERT INTO comments (`name`,`comment`,`post_time`) values('$name','$comment',NOW())");
}

?>