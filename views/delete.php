<?
$id_del=intval($_GET[id_del]);

include "connect.php";
$sql="delete from tb_member where id='$id_del' " ;
$result=mysql_db_query($dbname, $sql);
if($result){
	print("<h3>Delete Complete</h3>");
	print("[ <a href=view.php>View</a> ]");
}else{
	print("<h3>Can't Delete</h3>");
}
mysql_close();
?>