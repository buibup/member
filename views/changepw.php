<?
include "checksession.php";

$username=$sess_username;


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<h1>:: Change Password ::</h1>
	
	<form method="post" action="changepw2.php">
		<table>
			<tr>
				<td>Username:</td>
				<td><?=$username?></td>
			</tr>
			<tr>
				<td>Old Password :</td>
				<td><input type="password" name="oldpass"></td>
			</tr>
			<tr>
				<td>New Password :</td>
				<td><input type="password" name="newpass"></td>
			</tr>
			<tr>
				<td>New Password Again :</td>
				<td><input type="password" name="newpass2"></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" value="submit">
					<input type="reset" name="reset" value="reset">
				</td>	
			</tr>
			<tr>
				<a href="main.php">Go to home page</a>
			</tr>
		</table>
	</form>
	
</body>
</html>