<?
//recive data
$username=$_POST[username];
$password=$_POST[password];
$name=$_POST[name];
$sex=$_POST[sex];
$tel=$_POST[tel];
$email=$_POST[email];
$address=$_POST[address];
$reg_date=date("Y-m-d");

if($username != ""){
	print("No!");
}

print($username);

?>