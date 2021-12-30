<?php include("baglan.php");
error_reporting(0);
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOŞGELDİNİZ</title>
	
	<style type="text/css">
	
		.genel
		{
			width:500px;
			height:500px;
			margin:0 auto;
			background-color:#bca9da;
    border-style: solid;
    border-width: 5px;
	padding:40px;
		}
		
		.giriskısım
		{
			width:250px;
			height:30px;
			margin-top:10px;
		}
		
		.buton
		{
			width:250px;
			height:30px;
			text-align:center;
			margin-top:10px;
			padding-top:10px;
		}
		
		a
		{
			text-decoration:none;
			color:black;
		}
		
		.buton:hover
		{
			background-color:white;
			font-color:black;
		}
		
		
	</style>
	
</head>
<body>

	<center>
	<div class="genel">

		<h2>HOŞGELDİNİZ</h2>
		<div class="">
			<form method="post">
				<input class="giriskısım" placeholder="KULLANICI ADI" type="text" name="kuladi">
				<input class="giriskısım" placeholder="SIFRE" type="password" name="sifre">
					<input class="giriskısım" type="submit" name="gonder" class="buton" value="GİRİŞ YAP"><br>
					<a href="uyeekle.php"><div class="buton">KAYIT OL</div></a>
			</form>
		</div>
	</div>
	<?php
				if (isset($_POST["gonder"])) {
					$kuladi=$_POST["kuladi"];
					$sifre=$_POST["sifre"];

					$sqlquery="SELECT * FROM uyeler";
					$sqliquery=mysqli_query($baglan,$sqlquery);
					while ($row=mysqli_fetch_assoc($sqliquery)) {
						$kulladi=$row["kullanici_adi"];
						$password=$row["sifre"];
						$id=$row["id"];
						$time=date('Y.m.d H:i:s');
						$_SESSION["giris"]=$time;
						$_SESSION["kullname"]=$kuladi;

						if ($kuladi==""|| empty($kuladi) ||$sifre==""||empty($sifre)) {
							echo "boş bırakılamaz";	
						}
						elseif ($kuladi==$kulladi && $sifre==$password) {
							echo "<script>alert('BAŞARIYLA GİRİŞ YAPTINIZ GİRİŞ EKRANINA YÖNLENDİRİLİYORSUNUZ');</script>";
							$query="INSERT INTO giriscıkıs (kullanici_adi,giris,cıkıs)VALUES('$kulladi','$time','henüz değer yok')";
							$sqliiquery=mysqli_query($baglan,$query);
							header("location:islemler.php");
						}
						else{
								echo "yanlış kullanıcı adı veya şifre!";
						}
					}
				}
			 ?>

</center>
</body>
</html>