<?php
	$portfolio_title		= get_field('portfolio_title');
	$filter1				= get_field('filter1');
	$filter2				= get_field('filter2');
	$filter3				= get_field('filter3');

	$tn_img1				= get_field('tn_img1');
	$full_img1				= get_field('full_img1');
	$img1_caption			= get_field('img1_caption');
	$web_link1				= get_field('web_link1');
	$tn_img2				= get_field('tn_img2');
	$full_img2				= get_field('full_img2');
	$img2_caption			= get_field('img2_caption');
	$web_link2				= get_field('web_link2');
	$tn_img3				= get_field('tn_img3');
	$full_img3				= get_field('full_img3');
	$img3_caption			= get_field('img3_caption');
	$web_link3				= get_field('web_link3');
	$tn_img4				= get_field('tn_img4');
	$full_img4				= get_field('full_img4');
	$img4_caption			= get_field('img4_caption');
	$web_link4				= get_field('web_link4');
	$tn_img5				= get_field('tn_img5');
	$full_img5				= get_field('full_img5');
	$img5_caption			= get_field('img5_caption');
	$web_link5				= get_field('web_link5');
	$tn_img6				= get_field('tn_img6');
	$full_img6				= get_field('full_img6');
	$img6_caption			= get_field('img6_caption');
	$web_link6				= get_field('web_link6');
	$tn_img7				= get_field('tn_img7');
	$full_img7				= get_field('full_img7');
	$img7_caption			= get_field('img7_caption');
	$web_link7				= get_field('web_link7');
	$tn_img8				= get_field('tn_img8');
	$full_img8				= get_field('full_img8');
	$img8_caption			= get_field('img8_caption');
	$web_link8				= get_field('web_link8');
	$tn_img9				= get_field('tn_img9');
	$full_img9				= get_field('full_img9');
	$img9_caption			= get_field('img9_caption');
	$web_link9				= get_field('web_link9');
	$tn_img10				= get_field('tn_img10');
	$full_img10				= get_field('full_img10');
	$img10_caption			= get_field('img10_caption');
	$web_link10				= get_field('web_link10');
	$tn_img11				= get_field('tn_img11');
	$full_img11				= get_field('full_img11');
	$img11_caption			= get_field('img11_caption');
	$web_link11				= get_field('web_link11');
	$tn_img12				= get_field('tn_img12');
	$full_img12				= get_field('full_img12');
	$img12_caption			= get_field('img12_caption');
	$web_link12				= get_field('web_link12');
	$tn_img13				= get_field('tn_img13');
	$full_img13				= get_field('full_img13');
	$img13_caption			= get_field('img13_caption');
	$web_link13				= get_field('web_link13');
	$tn_img14				= get_field('tn_img14');
	$full_img14				= get_field('full_img14');
	$img14_caption			= get_field('img14_caption');
	$web_link14				= get_field('web_link14');
	$tn_img15				= get_field('tn_img15');
	$full_img15				= get_field('full_img15');
	$img15_caption			= get_field('img15_caption');
	$web_link15				= get_field('web_link15');
?>



<div id="portfolio" class="portfolioSection section">
	<div class="container">
		<div class="row">
			<div class="heading">
				<h2><?php echo $portfolio_title; ?></h2>
			</div>

			<div class="filter">
				<ul id="filters">
					<li><a href="#" data-filter="*" class="current"><?php echo $filter1; ?></a></li>
					<li><a href="#" data-filter=".apps"><?php echo $filter2; ?></a></li>
					<li><a href="#" data-filter=".websites"><?php echo $filter3; ?></a></li>
				</ul>
			</div>

			<div class="itemsContainer">
				<ul class="items">
					<li onclick="" class="apps col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img1; ?>">
							<div class="icons">
								<a href="<?php echo $full_img1; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img1_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link1; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img2; ?>">
							<div class="icons">
								<a href="<?php echo $full_img2; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img2_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link2; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img3; ?>">
							<div class="icons">
								<a href="<?php echo $full_img3; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img3_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link3; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-6 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img4; ?>">
							<div class="icons">
								<a href="<?php echo $full_img4; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img4_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link4; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<!-- <li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img5; ?>">
							<div class="icons">
								<a href="<?php echo $full_img5; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img5_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link5; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img6; ?>">
							<div class="icons">
								<a href="<?php echo $full_img6; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img6_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link6; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img7; ?>">
							<div class="icons">
								<a href="<?php echo $full_img7; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img7_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link7; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img8; ?>">
							<div class="icons">
								<a href="<?php echo $full_img8; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img8_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link8; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img9; ?>">
							<div class="icons">
								<a href="<?php echo $full_img9; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img9_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link9; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img10; ?>">
							<div class="icons">
								<a href="<?php echo $full_img10; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img10_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link10; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img11; ?>">
							<div class="icons">
								<a href="<?php echo $full_img11; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img11_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link11; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img12; ?>">
							<div class="icons">
								<a href="<?php echo $full_img12; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img12_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link12; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img13; ?>">
							<div class="icons">
								<a href="<?php echo $full_img13; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img13_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link13; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img14; ?>">
							<div class="icons">
								<a href="<?php echo $full_img14; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img14_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link14; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li>
					<li onclick="" class="websites col-xs-6 col-sm-4 col-md-3 col-lg-3">
						<div class="item">
							<img src="<?php echo $tn_img15; ?>">
							<div class="icons">
								<a href="<?php echo $full_img15; ?>" title="View Image" class="openButton" data-fancybox data-caption="<?php echo $img15_captiom; ?>">
									<i class="fa fa-search"></i>
								</a>
								<a href="<?php echo $web_link15; ?>" target="_blank" title="View Link" class="projectLink">
									<i class="fa fa-link"></i>
								</a>							
							</div>
							<div class="imageOverlay"></div>
						</div>
					</li> -->
				</ul>

			</div>
		</div>
	</div>
</div>