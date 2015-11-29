<?

$host="localhost";
$user="root";
$pw="1234";
$dbname="db_member";
$c = mysql_connect($host,$user,$pw);

if(!$c){
	echo "<h3>ERROR : Can't connect database </h3>";
	exit();
}

?>