<?php
	require_once "includes/config.php";
	require_once "includes/front.conf"; // configuration for web site
	require_once "includes/head.php"; // head of document
	// Non display body if no was loged or not was accepted warning
	if(!isset($_SESSION['iduser']) && !isset($_COOKIE['older18'])){
		$showWarning = true;
	}
	// $showWarning = true;
	$active = ".activeWebcams";
?>
<body>
	<?php
		if(isset($showWarning)){
			echo '<div class="capa animated"></div>';
		}
		require "includes/header.php";	?>
		<script>
			$(document).ready(function(){
				$('.selectpicker').selectpicker();
				$('.clearAll').click(function(){
					$('.selectpicker').val('');
					$('.selectpicker').selectpicker('render');
				})
			})
		</script>
		<!-- Filter Webcams -->
		<div class="container-fluid">
			<div class="row textCenter" style="margin-bottom:50px;">
				<div class="col-md-offset-1 col-md-10 col-lg-offset-1 col-lg-10 textCenter" style="border-bottom:1px solid #db2376;">
					<h1 style="color:#db2376">(3) Models Broadcasting Live!</h1>

					<!-- Gender -->
					<select name="gender" data-title="Gender" class="selectpicker visible-lg-inline-block">
						<option>All</option>
						<option>Female</option>
						<option>Shemale</option>
					</select>

					<!-- Language -->
					<select name="language" data-title="Language" class="selectpicker visible-lg-inline-block">
						<option>All</option>
						<option>English</option>
						<option>Spanish</option>
						<option>French</option>
						<option>German</option>
						<option>Russian</option>
					</select>

					<!-- Region -->
					<select name="region" data-title="Region" class="selectpicker visible-lg-inline-block">
						<option>All</option>
						<option>Europe</option>
						<option>Asia</option>
						<option>North America</option>
						<option>South America</option>
						<option>Africa</option>
						<option>Australia/Oceania</option>
					</select>

					<!-- Age -->
					<select name="age" data-title="Age" class="selectpicker visible-lg-inline-block">
						<option>All</option>
						<option>18-25</option>
						<option>26-35</option>
						<option>36-45</option>
						<option>46-55</option>
						<option>56+</option>
					</select>

					<!-- Ethnicity -->
					<select name="ethnicity" data-title="Ethnicity" class="selectpicker visible-lg-inline-block">
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
					<select name="hairColor" data-title="Hair Color" class="selectpicker visible-lg-inline-block">
						<option>All</option>
						<option>Auburn</option>
						<option>Black</option>
						<option>Blonde</option>
						<option>Light Brown</option>
						<option>Dark Brown</option>
						<option>Gray, Red</option>
						<option>White</option>
						<option>Other</option>
					</select>

					<!-- Other -->
					<select name="other" data-title="Other" class="selectpicker visible-lg-inline-block">
						<option>All</option>
						<option>BBW</option>
						<option>Big Booty</option>
						<option>Big Tits</option>
						<option>Petite</option>
						<option>Smoking</option>
						<option>Squirter</option>
						<option>Dominant</option>
					</select>

					<a class="visible-lg-inline-block clearAll" style="cursor:pointer;margin-left:10px;font-weight:bold">Clear all</a>
				</div>
			</div>
		</div>
<?php
		require "includes/content.php";
		require "includes/footer.php";

		if(isset($_GET['nick']) && !isset($_SESSION['iduser'])){
		// if(isset($_GET['nick'])){
			$_SESSION['nick'] = $_GET['nick'];
			?>
			<a href="modals/changePassword.php" data-width="500" class="modaal-ajax changePasswordAction" style="display:none;"></a>
			<script>
				$(document).ready(function() {
					$('.changePasswordAction').trigger('click');
				})
			</script>
	<?php
		}

		if(isset($showWarning)){	
			require_once "includes/older.msg.php";
		}	?>
</body>
</html>