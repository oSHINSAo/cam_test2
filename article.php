<?php
	require_once "includes/config.php";
	require_once "includes/front.conf"; // configuration for web site
	require_once "includes/head.php"; // head of document
	// Non display body if no was loged or not was accepted warning
	$active = ".shop";
?>
<body>
	<?php
		require "includes/header.php";?>
		<style>
			.navbar-shop .active{background-color:#db2376;}
			.navbar-shop .active a{color:#fff!important;font-weight: bold;}
			.navbar-shop a{color:#fff!important;font-weight: initial;}
			.pink{color:#db2376;}
			.dropdown-shop{background-color:rgba(0,0,0,0.7);}
			.dropdown-shop li a:hover{background-color:#000;}
			a#dropdownMenu1{cursor:pointer;}
			.title-filter{background-color:#db2376;display: block;padding: 5px 10px;color: #fff;font-weight: bold;font-size: 16px;}
			.content-filter{padding:5px 10px;/*border-right: 1px solid #db2376;*/}
			.check-filter{display:block;font-weight: initial;margin:0px;}
			.article{border:2px solid #ccc;padding:10px 0px;width:24%;margin: 0px 8px 10px 0px;}
			.bootstrap-select{margin: 15px 10px 0px 0px !important;}
			.bootstrap-select button{background-color: #000!important;border: 1px solid #000!important;border-radius: 20px!important;color: #db2376!important;}
			.bootstrap-select button span{color: #db2376!important;}
			.cost{font-size:25px;color:#db2376;}
			.back-results{background-color:#db2376;}
			.next-item{background-color:#42a3c4;}
			.back-results,.next-item{float:left;padding:10px;color:#fff;font-weight: bold;font-size:16px;}
			.back-results:hover,.next-item:hover{color:#fff;}
			.tags{padding: 10px 30px 10px 10px;margin: 0px;font-size: 16px;}
			.img-select{width:auto;height: 75px;display:block;margin:0 auto;padding:5px 0px;cursor: pointer;}
			.img-content{height: 350px;line-height: 350px;margin: 0px auto;text-align: center;}
			.title{margin-top:25px;font-weight: bold;}
			.description{color:#828282;}
			.price{color:#db2376;font-weight: bold;font-size:26px;}
			.add-cart{background-color:#db2376;color:#fff;padding:7px 15px;vertical-align: -webkit-baseline-middle;}
			.add-cart:hover{color:#fff;}
			.description:hover{color:#828282;}

			/* Carousel */
			.carousel-control.left, .carousel-control.right {background-image:none;}

			.img-responsive{width:100%;height:auto;}

			@media (min-width: 992px ) {
				.carousel-inner .active.left {left: -25%;}
				.carousel-inner .next {left:  25%;}
				.carousel-inner .prev {left: -25%;}
			}

			@media (min-width: 768px) and (max-width: 991px ) {
				.carousel-inner .active.left {left: -33.3%;}
				.carousel-inner .next {left:  33.3%;}
				.carousel-inner .prev {left: -33.3%;}
				.active > div:first-child {display:block;}
				.active > div:first-child + div {display:block;}
				.active > div:last-child {display:none;}
			}

			@media (max-width: 767px) {
				.carousel-inner .active.left {left: -100%;}
				.carousel-inner .next {left:  100%;}
				.carousel-inner .prev {left: -100%;}
				.active > div {display:none;}
				.active > div:first-child {display:block;}
			}
			.carousel-arrow{font-size: 50px;line-height: 0;position: absolute;top: 50%;color: #db2376;cursor: pointer;}
			.fa-caret-left{left: -15px;}
			.fa-caret-right{right: -15px;}
			.related{border:1px solid #828282;margin:0px 3px;padding:10px;}
			.related .row{margin:0px;}
			.second-line{display:block;color:#828282;}
			hr{width:92%;border-top:1px solid #ccc;}
			.blue{color: #42a3c4;}
			.grey{color: #828282;}
			.rate-comments{display: inline-block;}
			.title-comments{font-size:22px;font-weight: bold;}
			.slick-disabled{display:none!important;}
		</style>
		<div class="container">
			<div class="row" style="padding:10px 0px">
				<div class="col-lg-6 col-md-6">
					<h2 class="pink" style="margin:0px;">Shop</h2>
				</div>
				<div class="col-lg-6 col-md-6 text-right">
					<span style="font-size:30px;color:#49a8c9"><i class="fa fa-shopping-cart fa-fw"></i></span>
					<span class="cost">$0</span>
				</div>
			</div>

			<nav class="navbar navbar-inverse" style="font-weight: initial;height: initial;font-size: 12px;border-radius: 0px;">
				<div class="container-fluid" style="height: initial;padding:0px;">
					<ul class="nav navbar-nav navbar-shop">
						<li class="active"><a href="#">All</a></li>
						<li><a href="#">Videos</a></li>
						<li><a href="#">Photo Sets</a></li>
						<li><a href="#">Sex Toys</a></li>
						<li><a href="#">Phone Sex</a></li>
						<li><a href="#">Erotica</a></li>
						<li><a href="#">Lingerie</a></li>
						<li><a href="#">Personal Items</a></li>
						<li><a href="#">Show booking</a></li>
						<li><a href="#">Sexting</a></li>
						<li><a href="#">Social Media</a></li>
						<li><a href="#">Giftcards</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
								+More
							</a>
							<ul class="dropdown-menu dropdown-shop" aria-labelledby="dropdownMenu1">
								<li><a href="#">Body Juices</a></li>
								<li><a href="#">Photoshoot Bookings</a></li>
								<li><a href="#">Other</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>

			<div class="row" style="border:1px solid #db2376;margin:0px;margin-bottom:20px;">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<a href="" onclick="window.history.back();" class="back-results">< Back to results</a>
						<a href="" class="next-item">Next item ></a>
					</div>
					<div class="col-lg-8 col-md-8 text-right pink tags">
						<strong>Tags:</strong> #Corsett #Red #Sexy #Thong #Lace
					</div>
				</div>

				<!-- Pictures and Description -->
				<div class="row">
					<!-- Pictures -->
					<div class="col-lg-6 col-md-6">
						<div class="row">
							<div class="col-lg-4 col-md-4 img-content">
								<!-- VERTICAL CAROUSEL -->
								<div style="text-align: center;position: relative;top: 50%;-ms-transform: translateY(-50%);-webkit-transform: translateY(-50%);transform: translateY(-50%);">
									<img src="https://place-hold.it/100x100/#CCC/#FFF&text=NEW%20ITEM" alt="..." class="img-select">
									<!-- <img src="https://place-hold.it/100x100/#CCC/#FFF&text=NEW%20ITEM" alt="..." class="img-select"> -->
									<img src="https://place-hold.it/100x100/#CCC/#FFF&text=NEW%20ITEM" alt="..." class="img-select">
									<img src="https://place-hold.it/100x100/#CCC/#FFF&text=NEW%20ITEM" alt="..." class="img-select">
									<img src="https://place-hold.it/100x100/#CCC/#FFF&text=NEW%20ITEM" alt="..." class="img-select">
								</div>
							</div>
							<div class="col-lg-8 col-md-8 img-content">
								<img src="https://place-hold.it/400x300/#CCC/#FFF&text=NEW%20ITEM" alt="..." style="width: 100%;">
							</div>
						</div>
					</div>

					<!-- Description -->
					<div class="col-lg-6 col-md-6" class="description">
						<h4 class="pink title">G-Punkt-Vibrator "Luminate"</h4>
						<p class="description">Light up your love life! Der "Luminate" aus der Luz by TOYJOY Lovelight Collection ist die Erleuchtung für Dein Liebesleben. Der geschmeidige G-Punkt-Vibrator ist ein edles Designer-Love Toy mit sieben aufregenden Vibrationsmodi und besteht zu 100% aus Soft Touch</p>
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<span class="price">$59</span>
							</div>
							<div class="col-lg-8 col-md-8" style="padding-top:5px">
								<span class="description" style="font-size:20px">Ship to: <strong>US</strong></span>
							</div>
						</div>
						<!-- Buttons -->
						<div class="row" style="margin-top:40px;">
							<div class="col-lg-4 col-md-4">
								<?php
									if(!isset($_SESSION['iduser'])){
										$login = ['href' => "/modals/loginUsers.php",'params'=>' data-width="500" '];
									}else{
										$login = ['href' => "/modals/addCart.php?id={$_GET['id']}",'params'=>' data-width="700" '];
									}
								?>
								<a href="<?= $login['href']; ?>" class="modaal-ajax add-cart" <?= $login['params']; ?>>Add to cart</a>
							</div>
							<div class="col-lg-8 col-md-8" style="padding-top:5px">
								<a href="" class="description"><i class="fa fa-heart"></i> Add to favorite</a>
							</div>
						</div>
					</div>
				</div>

				<hr>

				<div class="row" style="width: 92%;margin:0 auto;">
					<div class="col-lg-12 col-md-12">
						<h3 class="pink title" style="margin-top:0px;">Check out these items</h3>
					</div>
				</div>
				
				<!-- Carousel -->
				<div class="row" style="width: 92%;margin:0 auto;">
					<div class="col-lg-12 col-md-12 text-center products">
					<?php
						for ($i=0; $i < 8; $i++) { 	?>
							<div class="related">
								<div class="row" style="margin:0px">
									<div class="col-lg-5 col-md-5 text-center">
										<img src="/img/model.png" class="img-circle img-responsive">
									</div>
									<div class="col-lg-7 col-md-7 text-center">
										<p style="margin-top:10%;">
											<span class="pink"><strong>Natalia</strong>/24</span>
											<span class="second-line">Texas, US</span>
										</p>
									</div>
									<!-- IMG Product -->
									<div class="col-lg-12 col-md-12">
										<img src="https://place-hold.it/400x300/#CCC/#FFF&text=NEW%20ITEM" class="img-responsive">
									</div>
									<!-- Description Product -->
									<div class="col-lg-12 col-md-12" style="text-align: center;">
										<p style="width:100%;font-weight: bold;">Simulator Wominazer</p>
										<p style="color:#696969">"My favorite dolls" <strong>(5)</strong></p>
									</div>
									<div class="col-lg-6 col-md-6">
										<p style="font-weight: bold;color:#696969">$85.00</p>
									</div>
									<div class="col-lg-6 col-md-6" style="padding:0px;">
										<span class="rate" data-rate="<?= rand(1,5); ?>" data-size="15"></span>
									</div>
								</div>
							</div>
				<?php	}	?>
					</div>
				</div>
				<script>
					$('.products').slick({
						slidesToShow: 4,
						slidesToScroll: 1,
						autoplay: false,
						prevArrow: '<i class="fa fa-caret-left carousel-arrow"></i>',
						nextArrow: '<i class="fa fa-caret-right carousel-arrow"></i>',
						infinite: false
					});
				</script>
				<!-- /.Carousel -->

				<hr>
				<!-- Comments -->
				<div class="row" style="width: 92%;margin:0 auto;">
					<div class="col-lg-12 col-md-12">
						<h3 class="title blue" style="margin-top:0px;">Customer reviews</h3>
					</div>
			<?php	for ($i=0; $i < 3; $i++) { ?>
						<div class="col-lg-12 col-md-12">
							<p class="blue title-comments">
								<span class="rate rate-comments" data-rate="<?= rand(1,5); ?>" data-color="#42a3c4" data-size="25"></span>
								<?= rand(1,100); ?>
								<span style="color:#000;font-size: 18px;">Two steps forward</span>
							</p>
							<p style="font-weight: bold;">
								By <a  href="" class="blue">G. brock</a> on <a href="" class="blue">Abril 29, 2016</a>
							</p>
							<p class="grey">Light up your love life! Der "Luminate" aus der Luz by TOYJOY Lovelight Collection ist die Erleuchtung für Dein Liebesleben. Der geschmeidige G-Punkt-Vibrator ist ein edles Designer-Love Toy mit sieben aufregenden Vibrationsmodi und besteht zu 100% aus Soft Touch</p>
						</div>
			<?php	} ?>

					</div>
				</div>

			</div>



		</div>



	<?php
		// require "includes/content.php";
		require "includes/footer.php";

		if(isset($_GET['nick']) && !isset($_SESSION['iduser'])){
			$_SESSION['nick'] = $_GET['nick'];	?>
			<a href="modals/changePassword.php" data-width="500" class="modaal-ajax changePasswordAction" style="display:none;"></a>
			<script>
				$(document).ready(function() {
					$('.changePasswordAction').trigger('click');
				});
			</script>
<?php	}
		if(isset($_SESSION['iduser'])){	?>
			<script>
				$('.add-cart').click(function(){
					var cost	= $('.cost').text();
					cost		= parseInt(cost.substr(1));
					var price	= $('.price').text();
					price		= parseInt(price.substr(1));
					cost		= cost+price;
					alert('Se agrega a la base de datos');
					$('.cost').text('$'+cost);
				});
			</script>
<?php	}	?>






		<script>
			$(".rate").each(function(){
				var rating = $(this).data("rate");
				var starWidth = "20px";
				var ratedFill = "#db2376";
				if(typeof $(this).data("size") !== 'undefined'){
					starWidth = $(this).data("size") + "px";
				}
				if(typeof $(this).data("color") !== 'undefined'){
					ratedFill = $(this).data("color");
				}
				$(this).rateYo({
					rating: rating,
					starWidth: starWidth,
					readOnly: true,
					ratedFill: ratedFill
				})
			});
		</script>
</body>
</html>