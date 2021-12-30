<?php include("baglan.php");
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>	
	<title>SERHAT DEMİR</title>
	
	<style type="text/css">
	
	.genel
	{
		width:1500px;
		height:auto;
		background-color:#bca9da;
		margin:0 auto;
		padding:20px;
		text-align:center;
	}
	
	.giriskısım
	{
		width:250px;
		height:40px;
		margin-top:10px;
	}
		.whitetext {width:1500px;
		background-color:purple;
		padding:auto;
	color: white;
}
	.girisbtn
	{
		width:250px;
		height:40px;
		margin-top:10px;
	}
	
	.kayıtbtn
	{
		width:200px;
		height:30px;
		margin-top:10px;
	}

	
</style>
	
</head>
<body>

	<?php include("cıkıs.php"); ?>
	<?php
		if (isset($_POST["kisi_ekle"])) {
			$kisi_isim=$_POST["kisi_adi"];
			$kisi_soyisim=$_POST["kisi_soyadi"];
			$kisi_unvan=$_POST["kisi_unvani"];
			$mail=$_POST["mail"];
			$kisi_numara=$_POST["numara"];
			$kisi_grup=$_POST["grup_adi"];
			$y=0;
			$queryy="SELECT * FROM kisiler";
			$sqliiquery=mysqli_query($baglan,$queryy);
			while ($row=mysqli_fetch_assoc($sqliiquery)) {
				$novar=$row["numara"];
				if ($novar==$kisi_numara) {
					$y++;
				}
				$mailvar=$row["mail"];
				if ($mailvar==$mail) {
					$x++;
				}
			}
			
			if ($kisi_isim=="" || empty($kisi_isim)) {
				echo "<script> alert('boş değer girilmez');</script>";
			}elseif ($kisi_grup=="bos") {
				echo "<script>alert('grup bos girilemez')</script>";
			}
			elseif ($y>0) {
				echo "<script>alert('bu numara başka bir kullanıcıya aittir')</script>";
			}
			elseif ($x>0) {
				echo "<script>alert('bu mail başka bir kullanıcıya aittir')</script>";
			}
			else{
				$sqlquery="INSERT INTO kisiler(kisi_adi,kisi_soyadi,kisi_unvani,mail,numara,grup_adi) VALUE ('$kisi_isim','$kisi_soyisim','$kisi_unvan','$mail','$kisi_numara','$kisi_grup' )";
				$sqliquery=mysqli_query($baglan,$sqlquery);
				
				$time=date('Y.m.d H:i:s');
				$query="INSERT INTO islem (kullanici,islem,tarih)VALUES('$kulname','$kisi_isim adlı kullanıcı $kisi_grup adlı gruba eklendi','$time')";
				$sqliiquery=mysqli_query($baglan,$query);
				header("location:gruplar.php");
			}
		}
	 ?>
	<form method="post">
		
	
		<div class="genel">
			<?php include("menu.php"); ?>
					     <div class="whitetext"><center><h2>KİŞİ EKLE</h2></center></div>
					    
					      <input class="giriskısım" type="text" name="kisi_adi" placeholder="İSİM"><br>
						  <input class="giriskısım" type="text" name="kisi_soyadi" placeholder="SOYİSİM"><br>
					      <input class="giriskısım" type="tel" placeholder="533-333-3333 gibi" pattern="[0-9]{10}" name="numara" maxlength="11"><br>
					     <input class="giriskısım" type="email" name="mail" placeholder="MAİL"><br>
						 <input class="giriskısım" type="text" name="kisi_unvani" placeholder="ÜNVAN"><br>
					   
						      <select class="girisbtn" name="grup_adi">
						      	<option value="bos">GRUP SEÇ</option>
						      	<?php 
						      		$sqlquery="SELECT * FROM gruplar";
						      		$sqliquery=mysqli_query($baglan,$sqlquery);
						      		while ($row=mysqli_fetch_assoc($sqliquery)) {
						      			$grupadi=$row["grup_adi"];
						      	 ?>
						      	<option value="<?php echo $grupadi ?>"><?php echo $grupadi?></option>
						      
						      <?php } ?>
						      </select>
					  	
					    		<br><input type="submit" class="kayıtbtn" name="kisi_ekle" value="KAYIT">	    	
		</div>
	</form>

</body>
</html>