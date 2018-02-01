<?php

include("db_con.php"); 

$query_login = "SELECT * FROM users WHERE username='".$_POST["username"]."' AND password ='".$_POST["password"]."'";
//echo $query_login;
$res = $con_server->query($query_login); 

if(mysqli_num_rows($res)>0){   

	$row = mysqli_fetch_assoc($res); 
	$_SESSION["logged"] = true;  
	header("Location:prova.php"); 

}else{

	echo "Napaka"; 

}
?>