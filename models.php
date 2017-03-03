<?php
	require_once "includes/config.php";
	require_once "includes/front.conf"; // configuration for web site
	require_once "includes/head.php"; // head of document
	// Non display body if no was loged or not was accepted warning
	$active = ".activeModels";
	$models = new Models();
?>
<body>
	<?php
		require "includes/header.php";
	?>
	<br>
	<!-- Content -->
	<div class="container">
		<div class="row textCenter" style="margin-bottom:50px;">
			<div class="col-md-12 col-lg-offset-1 col-lg-10 textCenter" style="border-bottom:1px solid #db2376;">
				<h1 style="color:#db2376;margin:0px"><span class="total-live">(3)</span> Models Broadcasting Live!</h1>
	
				<!-- Gender -->
				<select name="gender" data-width="fit" data-title="Gender" class="selectpicker visible-md-inline-block visible-lg-inline-block">
					<option>All</option>
					<option>Female</option>
					<option>Shemale</option>
				</select>

				<!-- Language -->
				<select name="language" data-width="fit" data-title="Language" class="selectpicker visible-md-inline-block visible-lg-inline-block">
					<option>All</option>
					<option>English</option>
					<option>Spanish</option>
					<option>French</option>
					<option>German</option>
					<option>Russian</option>
				</select>

				<!-- Region -->
				<select name="region" data-width="fit" data-title="Region" class="selectpicker visible-md-inline-block visible-lg-inline-block">
					<option>All</option>
					<option>Europe</option>
					<option>Asia</option>
					<option>North America</option>
					<option>South America</option>
					<option>Africa</option>
					<option>Australia/Oceania</option>
				</select>

				<!-- Age -->
				<select name="age" data-width="fit" data-title="Age" class="selectpicker visible-md-inline-block visible-lg-inline-block">
					<option>All</option>
					<option>18-25</option>
					<option>26-35</option>
					<option>36-45</option>
					<option>46-55</option>
					<option>56+</option>
				</select>

				<!-- Ethnicity -->
				<select name="ethnicity" data-width="fit" data-title="Ethnicity" class="selectpicker visible-md-inline-block visible-lg-inline-block">
					<option>All</option>
					<option>Asian</option>
					<option>Ebony</option>
					<option>East Indian</option>
					<option>Latin/Hispanic</option>
					<option>Middle Eastern</option>
					<option>Mixed Race</option>
					<option>Native American</option>
					<option>Pacific Islander</option>
					<option>White/Caucasian</option>
					<option>Other</option>
				</select>


				<!-- Hair Color -->
				<select name="hairColor" data-width="fit" data-title="Hair Color" class="selectpicker visible-md-inline-block visible-lg-inline-block">
					<option>All</option>
					<option>Auburn</option>
					<option>Black</option>
					<option>Blonde</option>
					<option>Light Brown</option>
					<option>Dark Brown</option>
					<option>Gray</option>
					<option>Red</option>
					<option>White</option>
					<option>Other</option>
				</select>

				<!-- Other -->
				<select name="other" data-width="fit" data-title="Other" class="selectpicker visible-md-inline-block visible-lg-inline-block">
					<option>All</option>
					<option>BBW</option>
					<option>Big Booty</option>
					<option>Big Tits</option>
					<option>Petite</option>
					<option>Smoking</option>
					<option>Squirter</option>
					<option>Dominant</option>
				</select>

				<a class="visible-md-inline-block visible-lg-inline-block clearAll" style="cursor:pointer;margin:0px;font-weight:bold">Clear all</a>
			</div>
		</div>


		<!-- Webcams online -->
		<section class="row">
		<?php
			// var_dump($models->showModels())
			foreach ($models->showModels() as $model => $details) {
				?>
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 webcams" data-nick="<?= $details['nickname'] ?>">
					<div class="thumbnail wc-<?= $details['online']; ?>">
						<a href="#">
							<img src="<?= $details['photo']; ?>" alt="..." class="img-responsive">
							<div class="caption">
								<h6 class="model-name"><?= $details['nickname']; ?><span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-search" style="color: #cf0286;"></span>&nbsp;<?= $details['age']; ?></span></h6>
								<div class="modelID-rate" data-rate="<?= $details['rating']; ?>"></div>
							</div>
						</a>
					</div>
				</div>
	<?php	} ?>
		</section>
	</div>
	<!-- /.Content -->
	<script>
		$(document).ready(function(){
			$('.webcams').click(function(){
				var nick = '/profile/'+$(this).data("nick");
				window.location.href=nick;
			});
			$('.selectpicker').selectpicker();
			$('.clearAll').click(function(){
				$('.selectpicker').val('');
				$('.selectpicker').selectpicker('render');
			})
			$(".modelID-rate").each(function(){
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
			var totalLive = $('.wc-live').size();
			$('.total-live').text('('+totalLive+')');
		})
	</script>

	<?php
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
</body>
</html>