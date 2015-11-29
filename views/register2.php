<?
//recive data
$username=$_POST[username];
$password=$_POST[password];
$email=$_POST[email];
$reg_date=date("Y-m-d");

if($username=="" || $password==""){
	echo("<h3>ERROR : Please input data</h3>");exit();
}

include "connect.php";

$sql="select * from tb_member where username='$username' ";
$result=mysql_db_query($dbname, $sql);
$num = mysql_num_rows($result);

if($num > 0){
	echo "<h3> ERROR : Username duplicate </h3>";exit();
}

$sql="insert into tb_member values('', '$username', '$password', '$email', '$reg_date')";
$result=mysql_db_query($dbname, $sql);
/*
print($result);print($username);print($password);print($name);
print($sex);print($tel);print($email);print($address);print($reg_date);
*/
if($result){
	echo "<h3>Save Complete</h3>";
	echo "<a href='main.php'>Member Login</a><br><br>";
}else{
	echo "<h3>Can't Register Member</h3>";
}
mysql_close();
?>