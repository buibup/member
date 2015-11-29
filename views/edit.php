<?
include "checksession.php";
include "function.php";

include "connect.php";
//print($sess_username);
$sql="select * from tb_member where username='$sess_username' ";
$result=mysql_db_query($dbname,$sql);
$record=mysql_fetch_array($result);

//$userid=$record[id];
$username=$record[username];
$email=$record[email];


mysql_close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<form action="edit2.php" method="post">
		
		<center>
		<table>
			
			<tr>
				<td>Username : </td>
				<td><?=$username ?></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="email_edit" value="<?=$email?>"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="submit">
					<input type="reset" name="submit" value="reset">
				</td>
			</tr>
		</table>
		</center>	
	</form>
	
</body>
</html>