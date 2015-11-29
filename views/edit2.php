<?
include "checksession.php";
$email_edit=$_POST[email_edit];
$sex_edit=$_POST[sex_edit];
$tel_edit=$_POST[tel_edit];
$address_edit=$_POST[address_edit];

include "connect.php";
$sql="update tb_member set email='$email_edit', sex='$sex_edit', tel='$tel_edit', address='$address_edit' where username='$sess_username' ";

$result=mysql_db_query($dbname, $sql);

if($result){
	print("<h3>Compleate</h3>");
	print("[ <a href=main.php>Main Page</a> ]");
}else{
	print("<h3>Can't Edit Info</h3>");
}
mysql_close();
?>