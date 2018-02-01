<?php

include("db_con.php"); 

?>
<p>
	<?php echo "Si se pravino prijavil v sistem.";?>
</p>

		<form name="form_login" method="post" action="prova.php">
			<p> User <input type="text" name="username" ></p>
			<button>Isci</button>
		</form>

<?php

$query = "SELECT * FROM users WHERE username = '".$_POST['username']."'";
print_r($query);
$result = $con_server->query($query);

$row = $result->fetch_array(MYSQLI_NUM);
print_r($row);

?>