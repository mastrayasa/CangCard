<!-- PORTFOLIO -->
<section class="wrapper" id="portfolio">
	<div class="container">
		<div class="row row-offcanvas">
		
			<?php include "sidebar.php"; ?>
			
			<div class="col-sm-8 area-content">
				<div class="item-content active">
					<div class="row">
						<div class="col-sm-12">
							<div class="cover-inner text-center">
								<h1 class="cover-heading">Gallery</h1>
								<p class="lead">
									Lorem Ipsum summer consectetur pulvinar pellentesque bibendum. Vestibulum varius hendrerit turpis quiseam cursus.
								</p>
							</div>
						</div>
					</div>
					
					
					
					<div class="row" id="gallery">
						<?php 
							for($i=1; $i <= 27; $i++){
							$img = ($i < 10) ? 0 . $i : $i;
						?>
						<div class="col-xs-4 col-sm-6 col-md-4">
							<div class="thumbnail"><img src="img/gallery/gal-<?php echo $img; ?>-thumb.jpg" /></div>
						</div>
						<?php } ?>
					</div>
			
				</div>
				
				<?php include "footer-content.php"; ?>
				
			</div>
		</div>
	</div>
</section>