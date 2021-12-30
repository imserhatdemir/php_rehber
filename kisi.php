<html>
<head>
<meta http-equiv="Content-Ytpe" content="text/html;charset=UTF8"/>
<title>SERHAT DEMİR</title>
	
<style type="text/css">
	
	.genel
	{
		width:1500px;
		height:auto;
		background-color:#bca9da;
		margin:0 auto;
		padding:20px;
	}
	
	.baslık
	{
		text-align:center;
	}
	
	.link
	{
		text-decoration:none;
		color:black;
	}  
	
	.eklebtn:hover
	{
		background-color:#bca9da;
		color:white;
	}
	
	
.t{
		width:1500px;
		background-color:white;
		padding:auto;
	color: purple;
}
	
	table
	{
		font-size:22px;
	}
	.whitetext {width:1500px;
		background-color:purple;
		padding:auto;
	color: white;
}
	.geneltablo
	{
		margin-left:180px;
		margin-top:20px;
	}
	
</style>

</head>

<body><?php 
session_start();
error_reporting(0);
include("baglan.php");
 ?>
<?php include("cıkıs.php"); ?>
	<div class="genel">
		<?php include("menu.php"); ?>
		
				<div class="whitetext"><center><h2>KİŞİLER</h2></center></div>
					

				<table class="t" cellpadding="15">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Adı</th>
					      <th scope="col">Soyadı</th>
					      <th scope="col">Unvan</th>
						  <th scope="col">Mail</th>
					      <th scope="col">Numara</th>
					      <th scope="col">Grup</th>
					      <th></th>
					    </tr>
					  </thead>
					  <tbody>
					  		<form method="post">
					    <?php
					    $i=0;
					  	$sqlquery="SELECT * FROM kisiler";
					  	$sqliquery=mysqli_query($baglan,$sqlquery);
					  	while ($row=mysqli_fetch_assoc($sqliquery)) {
					  		$kisiadi=$row["kisi_adi"];
					  		$kisisoyadi=$row["kisi_soyadi"];
					  		$kisiunvani=$row["kisi_unvani"];
							$mail=$row["mail"];
					  		$kisiid=$row["id"];
					  		$kisigrup=$row["grup_adi"];
					  		$kisinumara=$row["numara"];
					  		$i++;
					  	 ?>
					  	
					    <tr>
					      <th scope="row"><?php echo $i ?></th>
					      <td><?php echo $kisiadi ?></td>
					      <td><?php echo $kisisoyadi ?></td>
					      <td><?php echo $kisiunvani ?></td>
						  <td><?php echo $mail ?></td>
					      <td><?php echo $kisinumara ?></td>
					      <td><?php echo $kisigrup ?></td>
					      <td> 
					      		<a href=<?php echo "duzenle.php?id={$kisiid}" ?> class="btn btn-primary">duzenle</a>
					      		
					      		<a  href=<?php echo "list.php?delete={$kisiid}" ?> class="btn btn-success">sil</a>
					  		</td>
					    </tr>
						<?php } ?>
						    </form>
					  </tbody>
				</table>
				</div>
				</body>
				</html>
		