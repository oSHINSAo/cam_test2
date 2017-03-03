<?php
	require_once $document_root."/class/users.class.php";
	$users		= new Users();
	$cifrado	= new cifrado();
	$nick		= $cifrado->decrypt($_SESSION['registerNick'], $conn->generateToken());
	$user		= $users->getInfoUserPublic($users->getIdUser($nick));
?>
<style>
	.img-center{margin:0 auto;}
	.option{transition: all 0.3s;cursor: pointer;}
	.option:hover{background-color:#c2c2c2;}
	.activeOption{background-color:#c2c2c2;}
	.iconRegister input{border-radius: 0px;border: 1px solid #db2376;margin-left:10px;margin-right: 10px;}
	.form-error{position: absolute;margin-left: 15px;}
	.error-account{color: #b94a48;text-align:center;font-weight: bold;display:none;}
	input[disabled]{cursor: default !important;}
	pink{color :#db2376;}
	h4{margin:25px 0px;}
	.btn{margin: 0px 20px;padding: 6px 30px;}
	.display-none{display:none;}
	.model-register{border: 1px solid #db2376;border-radius: 0px;}
	.none-padding-left{padding-left:0px;}
	.none-padding-right{padding-right: 0px;}
	.title-form{font-weight: bold;color: #db2376;}
	.filter-option{color:#999;font-weight: 100;}
	.bootstrap-select > .dropdown-toggle{background-color:#fff;}
	.bs-caret{color:#db2376;}
	.btn.dropdown-toggle.btn-default{padding:6px 10px;}
	h5{margin: -5px 0px 10px 0px;font-weight: bold;font-size: 18px;}
	.check{height: 32px;margin-top: -8px;}
	/*select{
		border: 1px solid #db2376 !important;
		border-radius: 0px !important;
	}
	select option{
		background-color: rgba(0,0,0,0.5);
		color: #fff;
	}
	option:checked option:hover{
		background-color: rgba(0,0,0,1);
	}*/
</style>
<div class="row-fluid text-center form-inline">
	<div class="col-md-12 col-lg-12">
		<label><img src="/img/check.png" class="check">Create Account</label>
		<label><img src="/img/check.png" class="check">Confirm email</label>
		<label><img src="/img/check.png" class="check">Details</label>
		<label><img src="/img/uncheck.png" class="check">Documents</label>
		<label><img src="/img/uncheck.png" class="check">Review</label>
		<label><img src="/img/uncheck.png" class="check">Done</label>
	</div>
</div>

<div class="row text-center">
	<div class="col-md-12 col-lg-12 resend" style="padding-bottom:25px;">
		<h3 class="step-text" style="margin:40px 0px 40px 0px;"><span>Step 3 </span>. Fill in the forms with the Studio and Manager information</h3>

		<div class="row text-center">
			<h3 style="background-color:#db2376;padding: 10px 0px 10px 0px;color: #fff;margin:0 auto;">STUDIO INFO</h3>
		</div>

		<form class="text-left">
			<div class="row" style="margin-top: 10px;">
				<div class="col-lg-6 col-md-6 none-padding-left">
					<input type="text" name="studioInfo[name]" data-validation="required" class="form-control model-register" placeholder="Studio name">
				</div>
				<div class="col-lg-6 col-md-6 none-padding-right">
					<input type="text" name="studioInfo[address]" data-validation="required" class="form-control model-register" placeholder="Address">
				</div>
			</div>

			<div class="row" style="margin-top:10px;">
				<div class="col-lg-3 col-md-3 none-padding-left">
					<input type="text" name="studioInfo[town-city]" data-validation="required" class="form-control model-register" placeholder="Town/City">
				</div>
				<div class="col-lg-3 col-md-3">
					<input type="text" name="studioInfo[zipcode]" data-validation="required" class="form-control model-register" placeholder="ZipCode">
				</div>
				<div class="col-lg-3 col-md-3">
					<select name="studioInfo[country]" data-validation="required" class="form-control selectpicker country">
						<option value="">Country</option>
						<?php
							$sql = "SELECT * from countries";
							foreach ($conn->query($sql) as $country) {	?>
								<option value="<?= $country['id']; ?>"><?= utf8_encode($country['name']); ?></option>
					<?php	}	?>
					</select>
				</div>
				<div class="col-lg-3 col-md-3 none-padding-right">
					<select name="studioInfo[numberModels]" data-validation="required" class="form-control selectpicker country">
						<option value="">Number of models</option>
						<option value="1-5">1 - 5</option>
						<option value="6-10">6 - 10</option>
						<option value="11-20">11 - 20</option>
						<option value="20+">20+</option>
					</select>
				</div>
			</div>

			<div class="row text-center" style="margin-top:40px;">
				<h3 style="background-color:#db2376;padding: 10px 0px 10px 0px;color: #fff;margin:0 auto;">STUDIO MANAGER INFO</h3>
			</div>

			<div class="row" style="margin-top:10px;">
				<div class="col-lg-3 col-md-3 none-padding-left">
					<input type="text" name="managerInfo[firstname]" data-validation="required" class="form-control model-register" placeholder="First Name">
				</div>
				<div class="col-lg-3 col-md-3">
					<input type="text" name="managerInfo[lastname]" data-validation="required" class="form-control model-register" placeholder="Last Name">
				</div>
				<div class="col-lg-6 col-md-6 none-padding-right">
					<div class="row">
						<div class="col-lg-3 col-md-3 none-padding-right text-left">
							<p style="margin-top:7px;font-weight: bold;"><pink>DATE OF BIRTH</pink></p>
						</div>
						<div class="col-lg-3 col-md-3">
							<input type="text" name="managerInfo[day]" data-validation="required date" data-validation-format="dd" class="form-control model-register" placeholder="Day (dd)">
						</div>
						<div class="col-lg-3 col-md-3">
							<input type="text" name="managerInfo[month]" data-validation="required date" data-validation-format="mm" class="form-control model-register" placeholder="Month (mm)">
						</div>
						<div class="col-lg-3 col-md-3">
							<input type="text" name="managerInfo[year]" data-validation="required date number" data-validation-format="yyyy" data-validation-allowing="range[1917;1999]" class="form-control model-register" placeholder="Year (yyyy)">
						</div>
					</div>
				</div>
			</div>

			<div class="row" style="margin-top:10px;">
				<div class="col-md-1 col-lg-1 none-padding-left none-padding-right">
					<p style="margin-top:7px;font-weight: bold;"><pink>RESIDENCE</pink></p>
				</div>
				<div class="col-lg-11 col-md-11 none-padding-right">
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<input type="text" name="managerInfo[address]" data-validation="required" class="form-control model-register" placeholder="Address">
						</div>
						<div class="col-lg-3 col-md-3">
							<input type="text" name="managerInfo[town-city]" data-validation="required" class="form-control model-register" placeholder="Town/City">
						</div>
						<div class="col-lg-3 col-md-3">
							<input type="text" name="managerInfo[zipcode]" data-validation="required" class="form-control model-register" placeholder="Zip Code">
						</div>
						<div class="col-lg-3 col-md-3">
							<select name="managerInfo[country]" data-validation="required" class="form-control selectpicker country">
								<option value="">Country</option>
								<?php
									$sql = "SELECT * from countries";
									foreach ($conn->query($sql) as $country) {	?>
										<option value="<?= $country['id']; ?>"><?= utf8_encode($country['name']); ?></option>
							<?php	}	?>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="row text-center" style="margin-top:10px;">
				<div class="col-lg-12 col-lg-12">
					<button type="submit" name="action" value="updateDetailsStudio" class="btn btn-pink">Continue</button>
				</div>
			</div>
		</form>
	</div>
</div>

	<script>
		$.validate({
			errorMessageClass: 'error-msg',
			onSuccess: function($form){
				var form = $($form).find('input, select, button');
				var button =  $($form).find('button[name="action"]');
				var datas = {};
				$.each(form, function( index, value ) {
					datas[value.name] = value.value;
				});
				button.empty();
				button.html('<i class="fa fa-spin fa-spinner"></i>');
				button.prop('disabled', true);
				$.ajax({
					url: '/actions/models.actions.php',
					type: 'POST',
					data: datas,
					dataType: 'json',
					success: function(resp){
						button.html("Continue");
						button.prop('disabled', false);
						if(resp.success == 1){
							window.location.href=window.location.href;
						}
					}
				});
				return false;
			}
		});
	</script>