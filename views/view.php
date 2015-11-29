<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>View Member</h1>
	
	<table border="1">
		<tr bgcolor="#D3D3D3">
			<td>No.</td>
			<td>Username</td>
			<td>Email Address</td>
			<td>Register Date</td>
			
			<td>action</td>
		</tr>
		<?
			$count=0;
			include "connect.php";
			$sql="select * from tb_member order by username";
			$result=mysql_db_query($dbname, $sql);
			while($record=mysql_fetch_array($result)){
				$count++;
				echo "
					<tr>
						<td>$count</td>
						<td>$record[username]</td>
						<td>$record[email]</td>
						<td>$record[reg_date]</td>
						
						<td><a href=\"delete.php?id_del=$record[id]\" onclick=\"return confirm('Need to delete $record[name] from system?')\">Del</a></td>
					</tr>
				";
			}
			mysql_close();
		?>
	</table>
</body>
</html>

