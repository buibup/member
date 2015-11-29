<?
include "checksession.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1> :: Logined In System ::</h1>
	<p>Welcome! <b> <?=$sess_username?> </b> you still in member system</p>
	<p>
		[ <a href="edit.php">Edit </a> ]
		[ <a href="changepw.php">Change Password  </a> ]
		[ <a href="view.php">View Member</a>]
		[ <a href="logout.php">Logout</a> ]
	</p>
</body>
</html>