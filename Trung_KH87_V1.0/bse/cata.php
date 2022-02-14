<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dmitryvolkov.me/demo/flixtv/main/Tất cả.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Nov 2021 05:52:26 GMT -->
<?php (require_once"./v1/head.php");?> 

<body>
	<!-- header (hidden style) -->
    <?php (require_once"./v1/header.php");?> 
	<!-- end header -->
    <?php (require_once"./v1/baner1.php");?> 
	<!-- head -->
	<section class="section section--head section--head-fixed">
		<div class="container">
			<div class="row">
				<div class="col-12 col-xl-6">
					<h1 class="section__title section__title--head">Tất cả</h1>
				</div>
                <?php (require_once"./v1/nav.php");?> 

				
			</div>
		</div>
	</section>
	<!-- end head -->

	<!-- categories -->
	<section class="section section--pb0">
		<div class="container">
			<div class="row row--grid">
				<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
					<a href="muty.php" class="category">
						<div class="category__cover">
							<img src="img/category/1.jpg" alt="">
						</div>
						<h3 class="category__title">HÀNH ĐỘNG</h3>
						<span class="category__value">322</span>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
					<a href="muty.php" class="category">
						<div class="category__cover">
							<img src="img/category/2.jpg" alt="">
						</div>
						<h3 class="category__title">KINH DỊ</h3>
						<span class="category__value">174</span>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
					<a href="muty.php" class="category">
						<div class="category__cover">
							<img src="img/category/3.jpg" alt="">
						</div>
						<h3 class="category__title">VIỄN TƯỞNG</h3>
						<span class="category__value">509</span>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
					<a href="muty.php" class="category">
						<div class="category__cover">
							<img src="img/category/4.jpg" alt="">
						</div>
						<h3 class="category__title">TÌNH CẢM</h3>
						<span class="category__value">1 228</span>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
					<a href="muty.php" class="category">
						<div class="category__cover">
							<img src="img/category/5.jpg" alt="">
						</div>
						<h3 class="category__title">ANIME</h3>
						<span class="category__value">1 025</span>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
					<a href="muty.php" class="category">
						<div class="category__cover">
							<img src="img/category/6.jpg" alt="">
						</div>
						<h3 class="category__title">CỔ TRANG</h3>
						<span class="category__value">819</span>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
					<a href="muty.php" class="category">
						<div class="category__cover">
							<img src="img/category/7.jpg" alt="">
						</div>
						<h3 class="category__title">LỊCH SỬ - CHIẾN TRANH</h3>
						<span class="category__value">3 601</span>
					</a>
				</div>

				<div class="col-12 col-sm-6 col-lg-4 col-xl-3">
					<a href="muty.php" class="category">
						<div class="category__cover">
							<img src="img/category/8.jpg" alt="">
						</div>
						<h3 class="category__title">SINH TỒN</h3>
						<span class="category__value">745</span>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-10 col-xl-2">
					<h1 class="section__title section__title--head">PHIM LẺ</h1>
				</div>
			</div>
			<?php (require_once"./v1/muty.php");?>
		</div>
	</section>
	<!-- endcategories -->
	
	<!-- popular -->
	<section class="section section--pb0">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="section__title"><a href="muty.php">Phim bộ có lươt xem khủng</a></h2>
				</div><br> <br>
			</div>
			<?php (require_once"./v1/grid.php");?> 
		</div>
		<div class="container">
		<div class="col-12">
					<h2 class="section__title"><a href="muty.php">Phim bộ sắp công chiếu</a></h2>
				</div><br> <br>
			<?php (require_once"./v1/slide2.php");?> 
		</div>
	</section>
	<!-- end popular -->

	<!-- newest -->
	
	<!-- end newest -->

	<!-- plan -->
	<?php (require_once"./v1/plan.php");?> 
	<!-- end plan -->

	<!-- footer -->
	<?php (require_once"./v1/foot.php");?> 
</body>

<!-- Mirrored from dmitryvolkov.me/demo/flixtv/main/Tất cả.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Nov 2021 05:52:37 GMT -->
</html>