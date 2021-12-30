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
}.whitetext {width:1500px;
		background-color:purple;
		padding:auto;
	color: white;
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
	
</style>
	
</head>
<body>
<?php include("cıkıs.php"); ?>

<div class="genel">
	<?php include("menu.php"); ?>
	
						<h2 class="col-12 text-center">
							<span>
								<div class="dropdown">
									  
									 <div class="whitetext"><h2>GRUBU SEÇİN</h2></div>
							
									  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    	
							    	<?php 

							    		$query="SELECT * FROM gruplar";
							    		$sqliquery=mysqli_query($baglan,$query);
							    		while ($row=mysqli_fetch_assoc($sqliquery)) {
							    			$grupadi=$row["grup_adi"];
							    	 ?>
							      	<a class="dropdown-item" href= <?php echo "list.php?grupadi={$grupadi}" ?>><?php echo $grupadi ?></a><br>

							      <?php } ?>
							      	  
							      	  </div>
									</div>
							</span>
						</h2>
						<table class="t" cellpadding="30">

							<form method="post">
							  <thead>
							    <tr>
							      <th scope="col">#</th>
							      <th scope="col">Adı</th>
							      <th scope="col">Soyadı</th>
							      <th scope="col">Mail</th>
							      <th scope="col">Unvan</th>
							      <th scope="col">Telefon</th>
							      <th scope="col">Grup</th>
							      <th></th>
							    </tr>
							  </thead>
							</form>
							  <tbody>
							  		
							   <?php
							   
							
							    
							   	if (isset($_GET["grupadi"])) {
							   		$grup=$_GET["grupadi"];
							   		
							   		$sqlquery="SELECT * FROM kisiler";
							   		$sqliquery=mysqli_query($baglan,$sqlquery);
									$i=0;
							   		while ($row=mysqli_fetch_assoc($sqliquery)) {
							   			
							   			$kisiadi=$row["kisi_adi"];
								  		$kisisoyadi=$row["kisi_soyadi"];
								  		$kisiunvani=$row["kisi_unvani"];
										$mail=$row["mail"];
								  		$kisiid=$row["id"];
								  		$kisigrup=$row["grup_adi"];
								  		$kisinumara=$row["numara"];
							  			if ($grup==$kisigrup) {
							  					$i++;
							    ?>
							  	
							    <tr>
							      <th scope="row"><?php echo $i ?></th>
							      <td><?php echo $kisiadi ?></td>
							      <td><?php echo $kisisoyadi ?></td>
								    <td><?php echo $mail ?></td>
							      <td><?php echo $kisiunvani ?></td>
							      <td><?php echo $kisinumara ?></td>
							      <td><?php echo $kisigrup ?></td>
							      <td> 
							      		<a href=<?php echo "duzenle.php?id={$kisiid}" ?> class="btn btn-primary">DÜZENLE</a>
							      		
							      		<a  href=<?php echo "gruplar.php?delete={$kisiid}" ?> class="btn btn-success">SİL</a>
							  		</td>

							  	<?php } } } ?>
							    </tr>
								
								    
							  </tbody>
						</table>
					</div>
				</div>
				</div>
		</div>

	</div>