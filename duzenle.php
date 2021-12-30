<?php include("baglan.php");
session_start(); ?>
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
	
				
	<form method="post">
		<?php 
			$sqlquery="SELECT * FROM kisiler WHERE id={$_GET['id']}";
			$sqliquery=mysqli_query($baglan,$sqlquery);
			while ($row=mysqli_fetch_assoc($sqliquery)) {
				$kisii_isim=$row["kisi_adi"];
				$kisi_soyadi=$row["kisi_soyadi"];
				$kisi_unvan=$row["kisi_unvani"];
				$mail=$row["mail"];
				$kisi_numara=$row["numara"];
				$kisi_grup=$row["grup_adi"];
			
		 ?>
		<div class="genel">
				<?php include("menu.php"); ?>
					     <h2 class="text-center text-primary">DÜZENLE</h2>
					    
					     <input class="giriskısım" type="text" name="kisi_adi" value="<?php echo"$kisii_isim" ?>"><br>
					      <input class="giriskısım" type="text" name="kisi_soyadi" value="<?php echo"$kisi_soyadi" ?>"><br>
					    
					      <input class="giriskısım" type="text" name="numara" value="<?php echo"$kisi_numara" ?>"><br>
					    
					      <input class="giriskısım" type="text" name="kisi_unvani" value="<?php echo"$kisi_unvan" ?>"><br>
						  <input class="giriskısım" type="email" name="mail" value="<?php echo"$mail" ?>"><br>
						      <select class="girisbtn" name="grup_adi">
						      	<option><?php echo $kisi_grup ?></option>
						      	<?php 
						      		$sqlquery="SELECT * FROM gruplar";
						      		$sqliquery=mysqli_query($baglan,$sqlquery);
						      		while ($row=mysqli_fetch_assoc($sqliquery)) {
						      			$grupadi=$row["grup_adi"];
						      	 ?>
						      	<option value="<?php echo $grupadi ?>"><?php echo $grupadi?></option>
						      
						      <?php } ?>
						      </select><br>
					  
					  	 <?php } ?>
					   
					    		<input type="submit" class="kayıtbtn" name="kisi_duzenle" value="DUZENLE">
					    	
				<?php 
					if (isset($_POST["kisi_duzenle"])) {
						$kisi_isim=$_POST["kisi_adi"];
						$kisi_soyad=$_POST["kisi_soyadi"];
						$kisi_numaraa=$_POST["numara"];
						$mail=$_POST["mail"];
						$kisi_unvan=$_POST["kisi_unvani"];
						$kisi_grup=$_POST["grup_adi"];
						
						$y=0;
						$queryy="SELECT * FROM kisiler";
						$sqliiquery=mysqli_query($baglan,$queryy);
						while ($row=mysqli_fetch_assoc($sqliiquery)) {
							$eskinumara=$row["numara"];

							if ($eskinumaraa==$kisi_numaraa) {
								$y++;
							}
							if ($kisi_numara==$kisi_numaraa) {
								$y--;
							}
							$eskimail=$row["mail"];

							if ($eskimail==$mail) {
								$x++;
							}
							if ($eskimail==$mail) {
								$x--;
							}
						}
						if ($y>0) {
							echo "<script>alert(''$kisi_numaraa' Bu numara başka bir kullancıya ait')</script>'";
						}else if ($x>0) {
							echo "<script>alert(''$mail' Bu mail başka bir kullancıya ait')</script>'";
						}
						else{
						$query="UPDATE kisiler SET kisi_adi='$kisi_isim' , kisi_soyadi='$kisi_soyad' , kisi_unvani='$kisi_unvan' , mail='$mail' , numara='$kisi_numara' , grup_adi='$kisi_grup' WHERE id='$_GET[id]' ";
						
						$time=date('Y.m.d H:i:s');
						$queryy="INSERT INTO islem (kullanici,islem,tarih)VALUES('$kulname',
						
						'$kisi_isim adlı kullanıcının ismi  $kisi_isim olarak güncellendi ve verileri değiştirildi'

						,'$time')";
						
						$sqliiquery=mysqli_query($baglan,$query);
						$sqliquery=mysqli_query($baglan,$queryy);
						
						header("location:list.php");
					}
				}


				 ?>
		</div>


	</form>

</body>
</html>