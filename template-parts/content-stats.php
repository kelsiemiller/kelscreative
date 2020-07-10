<?php
$stat1_number			= get_field('stat1_number');
$stat1_title			= get_field('stat1_title');
$stat2_number			= get_field('stat2_number');
$stat2_title			= get_field('stat2_title');
$stat3_number			= get_field('stat3_number');
$stat3_title			= get_field('stat3_title');
$stat4_number			= get_field('stat4_number');
$stat4_title			= get_field('stat4_title');
?>

<div id="stats" class="statsSection section">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<div class="squareItem">
					<div class="squareInnerContainer">
						<div class="squareIcon">
							<i class="fa fa-clock"></i>
						</div>
						<div class="squareContent">
							<h2 class="counter"><?php echo $stat1_number ?></h2>
							<h3><?php echo $stat1_title ?></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="squareItem">
					<div class="squareInnerContainer">
						<div class="squareIcon">
							<i class="fa fa-user-friends"></i>
						</div>
						<div class="squareContent">
							<h2 class="counter"><?php echo $stat2_number ?></h2>
							<h3><?php echo $stat2_title ?></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="squareItem">
					<div class="squareInnerContainer">
						<div class="squareIcon">
							<i class="fa fa-cloud"></i>
						</div>
						<div class="squareContent">
							<h2 class="counter"><?php echo $stat3_number ?></h2>
							<h3><?php echo $stat3_title ?></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6">
				<div class="squareItem">
					<div class="squareInnerContainer">
						<div class="squareIcon">
							<i class="fa fa-keyboard"></i>
						</div>
						<div class="squareContent">
							<h2 class="counter"><?php echo $stat4_number ?></h2>
							<h3><?php echo $stat4_title ?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>