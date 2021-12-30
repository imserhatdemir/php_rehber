<?php
	date_default_timezone_set('Europe/Istanbul');
	$host="localhost";
	$db_kullanici="root";
	$db_sifre="";
	$db_name="serhat";

	$baglan=mysqli_connect($host,$db_kullanici,$db_sifre,$db_name);

	$query="SELECT * FROM giriscıkıs";
	$sqliquery=mysqli_query($baglan,$query);
	while ($row = mysqli_fetch_assoc($sqliquery)) {
		$kulname=$row["kullanici_adi"];
		$cıkıs=$row["giris"];
	}
	
 ?>
