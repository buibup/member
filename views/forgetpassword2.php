<?
$user_forget=$_POST[user_foret];

if($user_forget==""){
	print("<h3>ERROR : please input data</h3>");exit();
}
include "connect.php";
$sql="select * from tb_member where username='$user_forget' ";
$result=mysql_db_query($dbname, $sql);
$num=mysql_num_rows($result);
$record=mysql_fetch_array($result);
$to=$record[email];
$password=$record[password];

if($num<=0){
	print("<h3>ERROR : Username not have in system.</h3>")
}else{
	$subject = "password member";
	$message = "Username : $user_forget is $password";
	$headers = "From: Meember ";
	if(mail($to, $subject, $message, $headers)){
		print("<h3> send password to email success.</h3>");
	}else{
		print("<h3>can not send password to email</h3>");
	}
	
}

?>