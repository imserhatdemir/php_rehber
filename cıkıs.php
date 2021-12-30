<style type="text/css">.sea
	{
		width:250px;
		height:35px;
		background-color:white;
		text-align:center;
		padding-top:15px;
		font-size:19px;
		margin:0 auto;
	}
</style>
	<?php 
		include("baglan.php");
		error_reporting(0);
		session_start();
	 ?>
	<div class="container">
		<form method="post">
			
			
				<div class="sea">
					<input type="submit" name="cıkıs123" value="CIKIS" class="btn btn-outline-warning col-2 py-3">
					
					
				</div>
			<?php 
		if (isset($_POST["cıkıs123"])) {
			$time=date('Y.m.d H:i:s');
			$cıkısquery="UPDATE giriscıkıs SET cıkıs='$time' WHERE giris='$_SESSION[giris]' ";
			$sqliquery=mysqli_query($baglan,$cıkısquery);
			header("location:index.php");
			
		}
	 ?>

		</form>
	</div>
