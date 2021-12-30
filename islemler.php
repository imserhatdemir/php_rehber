<?php 
error_reporting(0);
include("baglan.php");
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
	.t{
		width:1500px;
		background-color:white;
		padding:auto;
	color: purple;
}
	
.whitetext {width:1500px;
		background-color:purple;
		padding:auto;
	color: white;
}.text {width:1500px;
		background-color:white;
		padding:auto;
	color: purple;
}
	
		a
		{
			text-decoration:none;
			color:black;
			text-align:center;
			margin-top:20px;
		}
		
		a:hover
		{
			color:gray;
		}
		
		table
		{
			text-align:center;
		}
		
		</style>
	
</head>
<body>
	<?php include("cıkıs.php"); ?>
	
	<div class="genel">
		<?php include("menu.php"); ?>
		<div class="">
			<div class="row">
				<h2 class="text">İŞLEMLER <br> 
				<h2 class="whitetext">GİRİŞ/ÇIKIŞ <br> 
				
				</h2>
				<table class="t">
					
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">KULLANICI</th>
					      <th scope="col">GİRİŞ</th>
					      <th scope="col">ÇIKIŞ</th>
					    </tr>
					  </thead>
					
					  <tbody>
					  		<form method="post">
					    <?php
					    $i=0;
					  	$sqlquery="SELECT * FROM giriscıkıs";
					  	$sqliquery=mysqli_query($baglan,$sqlquery);
					  	while ($row=mysqli_fetch_assoc($sqliquery)) {
					  		$kisiadi=$row["kullanici_adi"];
					  		$kisigiris=$row["giris"];
					  		$kisicıkıs=$row["cıkıs"];
					  		$i++;
					  	 ?>
					  	
					    <tr>
					      <th scope="row"><?php echo $i ?></th>
					      <td><?php echo $kisiadi ?></td>
					      <td><?php echo $kisigiris ?></td>
					      <td><?php echo $kisicıkıs ?></td>
					    </tr>
						<?php } ?>
						
						    </form>
					  </tbody>
				</table>
			</div>
		</div>
		
		<div class="col-8 offset-2 mt-5 bg-dark text-center">
			<div class="row">
				<div class="s"><h2 class="whitetext">YAPILAN İŞLEMLER</h2></div>

				<table class="t">
					  
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">KULLANICI</th>
					      <th scope="col">İŞLEM</th>
					      <th scope="col">TARİH</th>
					      
					    </tr>
					  </thead>
					  <tbody>
					  	<?php 
					  		$i=0;
							$sqlquery="SELECT * FROM islem";
							$sqliquery=mysqli_query($baglan,$sqlquery);
							while ($row=mysqli_fetch_assoc($sqliquery)) {
								$kullaniciname=$row["kullanici"];
								$islem=$row["islem"];
								$tarih=$row["tarih"];
								$i++;
						 ?>
					    <tr>
					      <th scope="row"><?php echo $i ?></th>
					      <td><?php echo $kullaniciname ?></td>
					      <td><?php echo $islem ?></td>
					      <td><?php echo $tarih ?></td>
					    </tr>
						<?php } ?>
					  </tbody>

						</table>

					</div>
				</div>


				
				
			</div>	
		</div>

	</div>

</body>
</html>