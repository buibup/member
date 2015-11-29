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
$name=$record[name];
$sex=$record[sex];
$email=$record[email];
$tel=$record[tel];
$address=$record[address];
$reg_date=$record[reg_date];

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
				<td>Name : </td>
				<td><?=$name ?></td>
			</tr>
			<tr>
				<td>Sex : </td>
				<td><input type="text" name="sex_edit" value="<?=$sex?>"></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="email" name="email_edit" value="<?=$email?>"></td>
			</tr>
			<tr>
				<td>Tel : </td>
				<td><input type="text" name="tel_edit" value="<?=$tel?>"></td>
			</tr>
			<tr>
				<td>Address : </td>
				<td><input type="text" name="address_edit" value="<?=$address?>"></td>
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