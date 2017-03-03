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

			<div class="row" style="border:1px solid #db2376;margin:0px">
				<div class="col-lg-3 col-md-3" style="padding:0px">
					<!-- Color Filter-->
					<span class="title-filter">Color</span>
					<div class="content-filter">
						<i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> <i class="fa fa-square fa-2x"></i> 
					</div>
					<!-- Gender Filter -->
					<span class="title-filter">Gender</span>
					<div class="content-filter">
						<label class="check-filter"><input type="checkbox" name="gender[]"> Men</label>
						<label class="check-filter"><input type="checkbox" name="gender[]"> Women</label>
						<label class="check-filter"><input type="checkbox" name="gender[]"> Unisex</label>
						<label class="check-filter"><input type="checkbox" name="gender[]"> Not specified</label>
					</div>
					<!-- Condition Filter -->
					<span class="title-filter">Condition</span>
					<div class="content-filter">
						<label class="check-filter"><input type="checkbox" name="condition[]"> New</label>
						<label class="check-filter"><input type="checkbox" name="condition[]"> Used</label>
						<label class="check-filter"><input type="checkbox" name="condition[]"> Not specified</label>
					</div>
					<!-- Price Filter -->
					<span class="title-filter">Price</span>
					<div class="content-filter" style="font-size:16px;padding:20px 0px;text-align: center;">
						$<input type="text" size="6" style="font-size:initial">
						to $<input type="text" size="6" style="font-size:initial;">
						<button type="button" nmae="go" style="font-size: initial;background-color: #db2376;border: 2px solid #db2376;color: #fff;">GO</button>
					</div>
					<!-- Av. Customer Review Filter -->
					<span class="title-filter">Av. Customer Review</span>
					<div class="content-filter">
						<div><span class="rate" data-rate="4" style="display: inline-block;"></span> & Up</div>
						<div><span class="rate" data-rate="3" style="display: inline-block;"></span> & Up</div>
						<div><span class="rate" data-rate="2" style="display: inline-block;"></span> & Up</div>
						<div><span class="rate" data-rate="1" style="display: inline-block;"></span> & Up</div>
					</div>
					<!-- Shipment filter -->
					<span class="title-filter">Shipment</span>
					<div class="content-filter">
						<label class="check-filter"><input type="checkbox" name="shipment[]"> International</label>
						<label class="check-filter"><input type="checkbox" name="shipment[]"> USA</label>
					</div>
				</div>


				<!-- Articles -->
				<div class="col-lg-9 col-md-9" style="padding:0px;border-left:1px solid #db2376;min-height: 666px;">
					<img src="https://place-hold.it/800x100/#CCC/#FFF&text=NEW%20ITEM" style="width: 100%">
					<div class="row" style="margin:0px">
						<div class="col-lg-6 col-md-6"><h3 class="pink">Displaying 12-14 Items</h3></div>
						<div class="col-lg-6 col-md-6 text-right">
							<select name="sort" data-width="fit" data-title="Sort by" class="selectpicker">
								<option>All</option>
								<option>Latest</option>
								<option>Most Viewed</option>
								<option>Best-Rated</option>
								<option>Most Sold</option>
								<option>Price: Low to High</option>
								<option>Price: High to Log</option>
								<option>Name: A-Z</option>
								<option>Name: Z-A</option>
							</select>
						</div>
					</div>
					<div class="row" style="margin:0px;padding:15px">
						<!-- Article -->
						<?php
						for ($i=0; $i < 8; $i++) { ?>
							<a href="/shop/simulator-wominazer-503">
								<div class="col-lg-3 col-md-3 article">
									<div class="col-lg-12 col-md-12" style="text-align: center;">
										<img src="img/model.png" class="img-circle" style="height: 50px;border: 1px solid #000;float: left;">
										<span class="pink">Natalia/24</span>
										<span>Texas, US</span>
									</div>
									<div class="col-lg-12 col-md-12" style="margin:10px 0px;">
										<img src="https://place-hold.it/400x250/#CCC/#FFF&text=NEW%20ITEM" width="100%">
									</div>
									<div class="col-lg-12 col-md-12" style="text-align: center;">
										<p style="width:100%;font-weight: bold;">Simulator Wominazer</p>
										<p style="color:#696969">"My favorite dolls" <strong>(5)</strong></p>
									</div>
									<div class="col-lg-6 col-md-6">
										<p style="font-weight: bold;color:#696969">$85.00</p>
									</div>
									<div class="col-lg-6 col-md-6" style="padding:0px;">
										<span class="rate" data-rate="3" data-size="15"></span>
									</div>
								</div>
							</a>
						<?php
						} ?>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12 col-md-12 text-center" style="margin:20px 0px;">
					<a href="" style="color:#42a3c4"><< First Page</a>
					<a href="" style="color:#000;margin-right: 20px">< Previous Page</a>
						<a href="" style="color:#000;font-weight: bold;">1</a>
						<a href="" style="color:#000;font-weight: bold;">2</a>
						<a href="" style="color:#000;font-weight: bold;">3</a> ...
						<a href="" style="color:#000;font-weight: bold;">20</a>
					<a href="" style="color:#000;margin-left:20px;">Next Page ></a>
					<a href="" class="pink">Last Page >></a>
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
<?php	}	?>
		<script>
			$(".rate").each(function(){
				var rating = $(this).data("rate");
				var starWidth = "20px";
				if(typeof $(this).data("size") !== 'undefined'){
					starWidth = $(this).data("size") + "px";
				}
       		    $(this).rateYo({
       		    		rating: rating,
       		    		starWidth: starWidth,
       		    		readOnly: true
       		    })
       		});
		</script>
</body>
</html>