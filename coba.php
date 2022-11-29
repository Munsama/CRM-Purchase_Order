<?php include('header.php'); ?>

<title>PHPCODE : Code Star Rating System with Ajax, PHP and MySQL</title>
<script src="rating.js"></script>
<link rel="stylesheet" href="style.css">
<?php include('container.php');?>
<div class="container">		
	<h2>Example: Star Rating System with Ajax, PHP and MySQL</h2>
	<?php
	include_once("koneksi.php");
	$ratingDetails = "SELECT rate FROM ulasan";
	$rateResult = mysqli_query($conn, $ratingDetails) or die("database error:". mysqli_error($conn));
	$rate = 0;
	$count = 0;
	
	while($rating = mysqli_fetch_assoc($rateResult)) {
		$rate+= $rating['rate'];
		$count += 1;
		
	}
	$average = 0;
	if($rate && $count) {
		$average = $rate/$count;
	}	
	?>		
	<br>		
	<div id="ratingDetails"> 		
		<div class="row">			
			<div class="col-sm-3">				
				<h4>Rating and Reviews</h4>
				<h2 class="bold padding-bottom-7"><?php printf('%.1f', $average); ?> <small>/ 5</small></h2>				
				<?php
				$averageRating = round($average, 0);
				for ($i = 1; $i <= 5; $i++) {
					$ratingClass = "btn-default btn-grey";
					if($i <= $averageRating) {
						$ratingClass = "btn-warning";
					}
				?>
				<button type="button" class="btn btn-sm <?php echo $ratingClass; ?>" aria-label="Left Align">
				  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				</button>	
				<?php } ?>				
			</div>
			
<?php include('footer.php');?>






