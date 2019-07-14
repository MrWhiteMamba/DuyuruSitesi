<?php 
	$username = $_POST['username'];
	$password = $_POST['password'];

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	mysql_connect("localhost", "root", "123456");
	mysql_select_db("webodev");


	$result = mysql_query("Select * from users where username = '$username' and password = '$password'")
				or die("Veritabanina erisim basarisiz".mysql_error());

	$row = mysql_fetch_array($result);

	if($row['username'] == $username && row['password'] == $password){
		echo "Giris basarili!!!!!".$row['username'];
	}
	else {
		echo "Giris basarisiz????";
	}
 ?>