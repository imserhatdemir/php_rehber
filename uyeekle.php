<?php include("baglan.php");

 ?>
<!DOCTYPE html>
<html>
<head>	
	<title>SERHAT DEMİR</title>
	
	<style type="text/css">
	
		.genel
		{
			width:500px;
			height:500px;
			margin:0 auto;
			background-color:#bca9da;
			border-style: solid;
			border-width: 5px;
			padding:30 40;
			text-align:center;
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

	
	<?php
		if (isset($_POST["kisi_ekle"])) {
			$kisi_kullanici=$_POST["kisi_isim"];
			$kisi_sifre=$_POST["kisi_sifre"];
			$i=0;
			
			$sorgu="SELECT * FROM uyeler";
			$sorguli=mysqli_query($baglan,$sorgu);
			
			while ($row=mysqli_fetch_assoc($sorguli)) {
				$eskikuladi=$row["kullanici_adi"];
				
				if ($eskikuladi==$kisi_kullanici) {
					$i++;
				}
			}
			if ($i>0) {
				echo "<script>alert('GİRMİS OLDUĞUNUZ KULLANICI ADI KULLANILMAKTADIR BASKA BİRTANE DENEYİN')</script>";
				
			}
			elseif($kisi_kullanici=="" || $kisi_sifre==""|| empty($kisi_kullanici)|| empty($kisi_sifre)){
				echo "<script>alert('BOŞ DEĞER GİRMEYİN')</script>";
			}
			else{
				$sqlquery="INSERT INTO uyeler (kullanici_adi,sifre)VALUES('$kisi_kullanici','$kisi_sifre')";
				$sqliquery=mysqli_query($baglan,$sqlquery);
				header("location:index.php");
			}

			
			
		}
	 ?>
	<form method="post">
		
		<div class="genel">
	<h2 class="text-center text-primary">KAYIT OL</h2>				      
	<input class="giriskısım" type="text" name="kisi_isim" placeholder="KULLANICI ADI">
	<input class="giriskısım" type="password" name="kisi_sifre" placeholder="ŞİFRE">
	<input class="giriskısım" type="submit" class="btn btn-primary" name="kisi_ekle" value="KAYIT OL"></br>
	<button ><a href="index.php">GERİ DÖN</button>

		</div>
	</form>

</body>
</html>