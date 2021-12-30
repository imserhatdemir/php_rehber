<?php 
session_start();
error_reporting(0);
include("baglan.php");
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
					margin:0 auto;
					text-align:center;
					padding:20px;
					background-color:#bca9da;
				}
				
.whitetext {width:1500px;
		background-color:purple;
		padding:auto;
	color: white;
}
	
			
				.giriskısım
				{
					width:250px;
					height:40px;
					margin-top:10px;
				}
				
				.girisbtn
				{
					width:200px;
					height:30px;
					margin-top:5px;
				}
				.t{
		width:1400px;
		background-color:white;
		padding:auto;
	color: purple;
}
				.tablom
				{
					margin:0 auto;
				}
				
				.altgenel
				{
					margin-bottom:40px;
				}
				
				.tabloknr
				{
					
					border-style: solid;
					border-color:white;
    border-width: 5px;
	padding:40px;
				}
			
			</style>
	
</head>
<body>

	
<?php include("cıkıs.php"); ?>

		<?php 
			if (isset($_POST["grup_ekle"])) {
				$grup_isim=$_POST["grup_adi"];
				$ii=0;
				$sorgu="SELECT * FROM gruplar";
				$quu=mysqli_query($baglan,$sorgu);
				while ($row=mysqli_fetch_assoc($quu)) {
					$eskigrupname=$row["grup_adi"];
					if($eskigrupname==$grup_isim) {
						$ii++;
					}
				}
			
			if ($grup_isim=="" || empty($grup_isim)) {
				echo "<script> alert('boş değer girilmez');</script>";
			}elseif($ii>0){
				echo "<script> alert('girmiş olduğunuz isim de grup bulunmaktadır');</script>";
			}
			else{
				$sqlquery="INSERT INTO gruplar(grup_adi)VALUE('$grup_isim')";
				$sqliquery=mysqli_query($baglan,$sqlquery);

				$time=date('Y.m.d H:i:s');
				$queryy="INSERT INTO islem (kullanici,islem,tarih)VALUES('$kulname','$grup_isim adlı grup eklendi','$time')";

				$sqliiquery=mysqli_query($baglan,$queryy);

				header("location:gruplar.php");
			}
			}
		 ?>
		
		<div class="genel"><?php include("menu.php"); ?>
				<div class="whitetext"><center><h2>GRUPLAR</h2></center></div>
				<div class="altgenel">
					<span>
						<?php 
								if (isset($_GET["gid"])) {
									$gid=$_GET["gid"];
									$query="SELECT * FROM gruplar WHERE id={$gid}";
									$sqliquery=mysqli_query($baglan,$query);
									if ($row=mysqli_fetch_assoc($sqliquery)) {
										$grupadii=$row["grup_adi"];

							  	}} ?>
						<form method="post">
						<input class="giriskısım" type="text" value="<?php echo $grupadii ?>" name="grup_adi" placeholder="GRUP ADI GİRİNİZ"></br>
							<input class="girisbtn" type="submit" class="btn btn-info" name="grup_ekle" value="EKLE"></br>
							<input class="girisbtn" type="submit" class="btn btn-primary" name="grup_duzenle" value="DUZENLE">
						</form>
						<?php 
							if (isset($_POST["grup_duzenle"])) {
								$grupadi=$_POST["grup_adi"];
								
								$i=0;
								$sorgucekme="SELECT * FROM gruplar";
								$sqllii=mysqli_query($baglan,$sorgucekme);
								while ($row=mysqli_fetch_assoc($sqllii)) {
									$eskiname=$row["grup_adi"];
									if ($eskiname==$grupadi) {
										$i++;
									}
								}
								if ($i>0) {
									echo "<script>alert('BU GRUPDA İSİM BULUNMAKTADIR');</script>";
									echo'<meta http-equiv="refresh" content="0;URL=gruplar.php">';
								}else{
								$query="UPDATE gruplar SET grup_adi='$grupadi' WHERE id=' $_GET[gid]' " ;
								$sqliquery=mysqli_query($baglan,$query);
								$time=date('Y.m.d H:i:s');
								$query="INSERT INTO islem (kullanici,islem,tarih)VALUES('$kulname','$_GET[gname] adlı grup ismi $grupadi olarak güncellendi','$time')";
								$sqliquery=mysqli_query($baglan,$query);

								$dznlequery="UPDATE kisiler SET grup_adi='$grupadi' WHERE grup_adi='$grupadii' ";
								$sqliquery=mysqli_query($baglan,$dznlequery);
								echo'<meta http-equiv="refresh" content="0;URL=gruplar.php">';
							}
						}


						 ?>
					</span>
				</div>
				<?php 
					if (isset($_GET["delete"])) {
						$sil=$_GET["delete"];
						$sqlquery="DELETE FROM kisiler WHERE id ={$sil}";
						$sqliquery=mysqli_query($baglan,$sqlquery);

						$time=date('Y.m.d H:i:s');
						$query="INSERT INTO islem (kullanici,islem,tarih)VALUES('$kulname','$_GET[$kisi_adi] bir kullanıcı silindi','$time')";

						$sqllquery=mysqli_query($baglan,$query);
						$sqliiquery=mysqli_query($baglan,$query);

						header("location:gruplar.php");

					}
					
					
					if (isset($_GET["delete1"])) {
						$i=0;
						$secquery="SELECT * FROM kisiler";
						$sqliqquery=mysqli_query($baglan,$secquery);
						while ($row=mysqli_fetch_assoc($sqliqquery)) {
							$gname=$row["grup_adi"];
							if ($gname==$_GET["gname"]) {
								
								$i++;
							}
						}
						if ($i>0) {
							echo "<script>alert('GRUPTA BULUNAN ÜYELER VAR LÜTFEN ONLARI SİLİN');</script>";

						}else{

						$sil=$_GET["delete1"];
						$sqlquery="DELETE FROM gruplar WHERE id ={$sil}";
						$time=date('Y.m.d H:i:s');
						$query="INSERT INTO islem (kullanici,islem,tarih)VALUES('$kulname','$_GET[gname] adlı grup silindi','$time')";

						$sqliquery=mysqli_query($baglan,$query);
						$sqllquery=mysqli_query($baglan,$sqlquery);
						header("location:gruplar.php?sayı={$i}");
						}

					
					}

				 ?>
				<div class="tabloknr">
				<table class="t" cellpadding="5">
					  
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					     <div class="whitetext"> <th scope="col">GRUP ADI</th></div>
					      
					    </tr>
					  </thead>
					  <tbody>
					  	<?php 
					  		$i=0;
							$sqlquery="SELECT * FROM gruplar";
							$sqliquery=mysqli_query($baglan,$sqlquery);
							while ($row=mysqli_fetch_assoc($sqliquery)) {
								$gruppadi=$row["grup_adi"];
								$grupid=$row["id"];
								$i++;
						 ?>
					    <tr>
					      <th scope="row"><?php echo $i ?></th>
					      <td><?php echo $gruppadi ?></td>
					      <td>
					      		
					      		<a href=<?php echo "gruplar.php?gid={$grupid}&gname={$gruppadi}" ?> class="btn btn-primary">DÜZENLE</a>
					      		<a href= <?php echo "gruplar.php?delete1={$grupid}&gname={$gruppadi}" ?>  class="btn btn-success">SİL</a>
					      		

					      	</td>
					    </tr>
						<?php } ?>
					  </tbody>

						</table></div>
				</div>


				
				

</body>
</html>