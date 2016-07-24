<!-- BLOG -->
<section class="wrapper" id="blog">
	<div class="container">
		<div class="row row-offcanvas">
		
			<?php include "sidebar.php"; ?>
			
			<div class="col-sm-8 area-content">
				
				<!-- blog -->
				<div class="item-content active" id="area-blog">
						<!-- Post Gallery -->
					
					<article class="post text-center">
						
						<div class="post-img media">
							<div id="post-galeri-1" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#post-galeri-1" data-slide-to="0" class="active"></li>
									<li data-target="#post-galeri-1" data-slide-to="1"></li>
									<li data-target="#post-galeri-1" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img class="img-responsive" src="img/blog-03.jpg" alt="">
									</div>
									<div class="item">
										<img class="img-responsive" src="img/blog-04.jpg" alt="">
									</div>
									<div class="item">
										<img class="img-responsive" src="img/blog-05.jpg" alt="">
									</div>
								</div>
								<a class="left carousel-control" href="#post-galeri-1" role="button" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#post-galeri-1" role="button" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							  </a>
							</div>
						</div>
						
						<div class="post-format">
							<i class="fa fa-pencil"></i>
						</div>

						<section class="post-content">

							<header class="meta">
								<h2><a href="post-detail.php">Morbis congue mauris eget dolor</a></h2>
								<ul>
									<li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
									<li><i class="fa fa-calendar"></i> May 11, 2015</li>
									<li><i class="fa fa-folder"></i> <a href="#">Computer</a></li>
									<li><i class="fa fa-comments"></i> <a href="#">3 Comments</a></li>
								</ul>
							</header>

							<p>Summer Vocation With Natur ellentesque sed consectetur pulvinar pellentesque bibendum. Vestibulum varius hendrerit turpis quiseam cursus. Donec bibendum vestibulum gravida. Pellentesque condimentum orci vel leo laoreet accumsan interdum eros vel sapien tincidunt dignissim. Integer mauris lacus consequat.</p>
							
							<a href="post-detail.php" class="btn btn-primary hide"><i class="icon-align-left"></i> Read More</a>
						</section>
						
					</article>
					
					
					
					
					<!-- Post Audio -->
					
					<article class="post text-center">
						
						<div class="post-media">
							<iframe width="642" height="200" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?visual=true&#038;url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F130459845&#038;show_artwork=true&#038;maxwidth=642&#038;maxheight=1000"></iframe>
						</div>
						
						<div class="post-format">
							<i class="fa fa-music"></i>
						</div>

						<section class="post-content">

							<header class="meta">
								<h2><a href="post-detail.php">Morbis congue mauris eget dolor</a></h2>
								<ul>
									<li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
									<li><i class="fa fa-calendar"></i> May 11, 2015</li>
									<li><i class="fa fa-folder"></i> <a href="#">Computer</a></li>
									<li><i class="fa fa-comments"></i> <a href="#">3 Comments</a></li>
								</ul>
							</header>

							<p>Summer Vocation With Natur ellentesque sed consectetur pulvinar pellentesque bibendum. Vestibulum varius hendrerit turpis quiseam cursus. Donec bibendum vestibulum gravida. Pellentesque condimentum orci vel leo laoreet accumsan interdum eros vel sapien tincidunt dignissim. Integer mauris lacus consequat.</p>
							
							<a href="post-detail.php" class="btn btn-primary hide"><i class="icon-align-left"></i> Read More</a>
						</section>
						
					</article>
					
					
					<!-- Post video -->
					
					<article class="post text-center">
						
						<div class="post-media">
							<iframe width="640" height="360" src="https://www.youtube.com/embed/PTUrO8eYgu4" frameborder="0" allowfullscreen></iframe>
						</div>
						
						<div class="post-format">
							<i class="fa fa-film"></i>
						</div>

						<section class="post-content">

							<header class="meta">
								<h2><a href="post-detail.php">Morbis congue mauris eget dolor</a></h2>
								<ul>
									<li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
									<li><i class="fa fa-calendar"></i> May 11, 2015</li>
									<li><i class="fa fa-folder"></i> <a href="#">Computer</a></li>
									<li><i class="fa fa-comments"></i> <a href="#">3 Comments</a></li>
								</ul>
							</header>

							<p>Summer Vocation With Natur ellentesque sed consectetur pulvinar pellentesque bibendum. Vestibulum varius hendrerit turpis quiseam cursus. Donec bibendum vestibulum gravida. Pellentesque condimentum orci vel leo laoreet accumsan interdum eros vel sapien tincidunt dignissim. Integer mauris lacus consequat.</p>
							
							<a href="post-detail.php" class="btn btn-primary hide"><i class="icon-align-left"></i> Read More</a>
						</section>
						
					</article>
					
					
					
					
					<?php for($i = 1; $i<=10; $i++){ ?>
					
					<!-- Post <?php echo $i; ?> -->
					
					<article class="post text-center">
						
						<figure class="post-img media">
							<div class="mediaholder">
								<a href="post-detail.php">
									<img class="img-responsive" src="img/blog-01.jpg" alt="">
									<div class="hovercover">
										<div class="hovericon"><i class="hoverlink"></i></div>
									</div>
								</a>
							</div>
						</figure>
						
						<div class="post-format">
							<i class="fa fa-picture-o"></i>
						</div>

						<section class="post-content">

							<header class="meta">
								<h2><a href="post-detail.php">Summer Vocation With Nature</a></h2>
								<ul>
									<li><i class="fa fa-user"></i> <a href="#">Admin</a></li>
									<li><i class="fa fa-calendar"></i> May 11, 2015</li>
									<li><i class="fa fa-folder"></i> <a href="#">Computer</a></li>
									<li><i class="fa fa-comments"></i> <a href="#">3 Comments</a></li>
								</ul>
							</header>

							<p>Morbis congue mauris eget dolor pellentesque sed consectetur pulvinar pellentesque bibendum. Vestibulum varius hendrerit turpis quiseam cursus. Donec bibendum vestibulum gravida. Pellentesque condimentum orci vel leo laoreet accumsan interdum eros vel sapien tincidunt dignissim. Integer mauris lacus consequat.</p>
							
							<a href="post-detail.php" class="btn btn-primary hide"><i class="icon-align-left"></i> Read More</a>
						</section>
						
					</article>
					
					
					
					<?php } ?>	
							
							
							
							
					<div class="text-center">
						<ul class="pagination pagination-sm">
							<li><a href="#">PREV</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li class="disabled"><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">NEXT</a></li>
						</ul>
					</div>
					</div>
			
			<?php include "footer-content.php"; ?>
			</div>
			
		</div>
	</div>
</section>