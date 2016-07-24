<!-- HOME -->
<section class="wrapper" id="home">
	<div class="container">
		<div class="row row-offcanvas">
			
			<?php include "sidebar.php"; ?>
			
			<div class="col-sm-8 area-content">
				<div class="item-content active">
				<!-- Carousel
				================================================== -->
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img class="first-slide" src="img/img1.jpg" alt="First slide">
					  <div class="container">
						<div class="carousel-caption">
						  <h1>Selamat datang</h1>
						  <p>saat ini anda melihat halaman website saya. dihalaman ini anda dapat melihat informasi tentang saya</p>
						  <p><a class="btn btn-md btn-danger" href="#" role="button">Jabat Tangan</a></p>
						</div>
					  </div>
					</div>
					<div class="item">
					  <img class="second-slide" src="img/img2.jpg" alt="Second slide">
					  <div class="container">
						<div class="carousel-caption">
						  <h1>Yakin...? Lakukan!!!</h1>
						  <p>Keyakinan adalah hal utama yang harus kamu selesaikan, Tanpa itu, sulit bagimu untuk menjalani hidup</p>
						  <p><a class="btn btn-md btn-danger" href="#" role="button">Mari Merenung</a></p>
						</div>
					  </div>
					</div>
					<div class="item">
					  <img class="third-slide" src="img/img3.jpg" alt="Third slide">
					  <div class="container">
						<div class="carousel-caption">
						  <h1>Berusaha...!</h1>
						  <p>Semua yang kamu yakini harus kamu tempuh dengan kerja keras. Berusaha menjadi yang terbaik bagi dirimu</p>
						  <p><a class="btn btn-danger" href="#" role="button">Ayo Lakukan Sekarang</a></p>
						</div>
					  </div>
					</div>
				  </div>
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div><!-- /.carousel -->
			
				<br/>
				
				<div class="box-hobby">
				<ul class="hobby-list">
					<li>
						<a href="#">
							<div class="hobby-icon"><i class="fa fa-pencil"></i></div>
							<div class="hobby-des">Write</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="hobby-icon"><i class="fa fa-magic"></i></div>
							<div class="hobby-des">Design</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="hobby-icon"><i class="fa fa-code"></i></div>
							<div class="hobby-des">Programing</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div class="hobby-icon"><i class="fa fa-music"></i></div>
							<div class="hobby-des">Music</div>
						</a>
					</li>
					
				</ul>
				</div>
				
				
			</div>
			<?php include "footer-content.php"; ?>
			</div>
			
		</div>
	</div>
</section>