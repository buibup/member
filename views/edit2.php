<?
include "checksession.php";
$email_edit=$_POST[email_edit];

include "connect.php";
$sql="update tb_member set email='$email_edit' where username='$sess_username' ";

$result=mysql_db_query($dbname, $sql);

if($result){
	print("<h3>Compleate</h3>");
	print("[ <a href=main.php>Main Page</a> ]");
}else{
	print("<h3>Can't Edit Info</h3>");
}
mysql_close();
?>