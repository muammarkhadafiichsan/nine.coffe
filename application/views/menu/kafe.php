<!-- Swiper Silder
    ================================================== -->
<!-- Slider main container -->
<div class="bd-example">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">

				<img src="<?= base_url('assets/images/nine_1.jpg'); ?>" class="d-block w-100" alt="...">

				<div class="carousel-caption d-none d-md-block">

				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url('assets/images/kafe10.jpg'); ?>" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">

				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= base_url('assets/images/kafe8.jpg'); ?>" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">

				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<section class="ftco-about d-md-flex">
	<div class="one-half img" style="background-image: url();"></div>
	<div class="one-half ftco-animate">
		<div class="heading-section ftco-animate ">
			<h3 class="mb-4">Selamat Datang di Nine <span class="flaticon-pizza">Coffee</span> Roastery Bondowoso</h3>
		</div>
		<div>
			<p></p>
		</div>
	</div>
</section>

<br>

<section class="ftco-intro">
	<div class="container-wrap">
		<div class="wrap d-md-flex">
			<div class="info">
				<div class="row no-gutters">
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-phone"></span></div>
						<div class="text">
							<h3>0812-9247-5083</h3>
							<p>Nine Coffee Roastery Bondowoso</p>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-my_location"></span></div>
						<div class="text">
							<h3>Kali Nangkaan, Dabasah</h3>
							<p>Kec. Bondowoso Kabupaten Bondowoso</p>
							<p>Jawa Timur 68211</p>
						</div>
					</div>
					<div class="col-md-4 d-flex ftco-animate">
						<div class="icon"><span class="icon-clock-o"></span></div>
						<div class="text">
							<h3>Buka Jam</h3>
							<p>Setiap Hari</p>
							<p>09.00 - 23.00</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section ftco-animate text-center">
				<h2 class="mb-4">BARISTA</h2>
				<h3 class="mb-4">nine coffee</h3>
				<p></p>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php foreach ($barista as $brs) : ?>
				<div class="col-md-3">
					<div class="menu-entry">
						<img src="<?php echo base_url('assets/images/') . $brs->foto; ?>" class="block-20">
						<div class="text text-center pt-4">
							<h3><?= $brs->nama_barista ?></h3>
							<p><?= $brs->deskripsi ?></p>
							<div class="social">
								<a href="#" class="btn"><i class="fa fa-facebook"></i></a>
								<a href="#" class="btn"><i class="fa fa-instagram"></i></a>
								<a href="#" class="btn"><i class="fa fa-twitter"></i></a>
								<a href="#" class="btn"><i class="fa fa-envelope"></i></a>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</section>