<?
function displaydate($x) {
	$thai_m = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	$date_array=explode("-",$x);
	$y=$date_array[0];
	$m=$date_array[1]-1;
	$d=$date_array[2];
	
	$m=$thai_m[$m];
	$y=$y+543;
	
	$displaydate="$d $m $y";
	return $displaydate;
}

function checkemail($checkemail){
	if(ereg("^[^@]+@([a-zA-Z0-9\-]+\.)+([a-zA-Z0-9]\-)")){
		
	}
}
?>

