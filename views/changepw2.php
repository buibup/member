<?
include "checksession.php";
$oldpass=$_POST[oldpass];
$newpass=$_POST[newpass];
$newpass2=$_POST[newpass2];

if($oldpass=="" || $newpass=="" || $newpass2=="" || $newpass <> $newpass2){
	print("<h3>ERROR : Please try again </h3>"); exit();
}

include "connect.php";
$sql="select * from tb_member where username='$sess_username' and password='$oldpass' ";
$result=mysql_db_query($dbname, $sql);
$num=mysql_num_rows($result);

if($num<=0){
	print("<h3>ERROR : Old password not current </h3>"); exit();
}

$sql="update tb_member set password='$newpass' where username='$sess_username' ";
$result=mysql_db_query($dbname, $sql);

if($result){
	print("<h3>Compleate</h3>");
	print("[ <a href=main.php>Main Page</a> ]");
}else{
	print("<h3>Can't Change Info</h3>");
}

mysql_close();
?>