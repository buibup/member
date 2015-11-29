<?
$username=$_POST[username];
$password=$_POST[password];

if($username=="" || $password==""){
	print("<h3>ERROR : Please input data</h3>");exit();
}
include "connect.php";
$sql="select * from tb_member where username='$username' and password='$password' ";
$result=mysql_db_query($dbname, $sql);
$num=mysql_num_rows($result);
mysql_close();

if($num <= 0){
	print("<h3>ERROR : Username or Password incorrect!</h3>");
}else{
	session_start();
	$_SESSION[sess_userid]=session_id();
	$_SESSION[sess_username]=$username;
	header("Location: main.php");
}
?>