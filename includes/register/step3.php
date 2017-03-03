<?php
	error_reporting(E_ALL);
	require_once $document_root."/class/users.class.php";
	require_once $document_root."/class/models.class.php";
	$users		= new Users();
	$models	= new Models();
	$cifrado	= new cifrado();
	if(isset($_SESSION['registerNick'])){
		$nick		= $cifrado->decrypt($_SESSION['registerNick'], $conn->generateToken());
		$model	= $models->getInfoModelPublic($users->getIdUser($nick));
	}else{
		$iduser	= $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());
		$model	= $models->getInfoModelPublic($iduser);
	}
	// print_r($_SESSION);
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
	.title-form{font-weight: bold;color: #db2376;}
	.filter-option{color:#999;font-weight: 100;}
	.bootstrap-select > .dropdown-toggle{background-color:#fff;}
	.bs-caret{color:#db2376;}
	.btn.dropdown-toggle.btn-default{padding:6px 10px;}
	.btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default{background-color:#db2376 !important;color: #fff !important;}
	/*.bootstrap-select > .dropdown-toggle.bs-placeholder,*/
	.bootstrap-select > .dropdown-toggle.bs-placeholder:hover,
	.bootstrap-select > .dropdown-toggle.bs-placeholder:focus,
	.bootstrap-select > .dropdown-toggle.bs-placeholder:active {background-color:#db2376 !important;color: #fff !important;}
	.filter-option{color:#000;}
	.btn:active, .btn.active {box-shadow: inset 0 4px 25px rgba(0, 0, 0, .5);border: 1px solid rgba(0,0,0,0.5);background-color:rgba(0,0,0,1);}
	.btn-grey{background-color:rgba(0,0,0,0.5);}
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

<div class="row-fluid text-center">
	<div class="col-md-12 col-lg-12 resend" style="padding-bottom:25px;">
		<h3 class="step-text" style="margin:40px 0px 40px 0px;"><span>Step 3 </span>. Please give your personal details as stated in your official ID</h3>

		<div class="row-fluid text-center">
			<h3 style="background-color:#db2376;padding: 10px 0px 10px 0px;color: #fff;margin:0 auto;width:85%;">Your details</h3>
		</div>

		<form class="row text-left" style="width: 82%;margin:0 auto;">
			<div class="row">
				<h4 class="title-form">REAL NAME</h4>
				<div class="col-lg-3 col-md-3 none-padding-left">
					<input type="text" name="first" data-validation="required" class="form-control model-register" placeholder="First name" value="<?= $model['firstname']; ?>">
				</div>
				<div class="col-lg-3 col-md-3 none-padding-left">
					<input type="text" name="middle" class="form-control model-register" placeholder="Middle name" value="<?= $model['middlename']; ?>">
				</div>
				<div class="col-lg-3 col-md-3 none-padding-left">
					<input type="text" name="last" data-validation="required" class="form-control model-register" placeholder="Last name" value="<?= $model['lastname']; ?>">
				</div>
			</div>

			<div class="row">
				<h4 class="title-form">DATE OF BIRTH</h4>
				<div class="col-lg-3 col-md-3 none-padding-left">
					<input type="text" name="day" data-validation="required date" data-validation-format="dd" class="form-control model-register" placeholder="Day (dd)" value="<?= explode("-", $model['birthdate'])[2]; ?>">
				</div>
				<div class="col-lg-3 col-md-3 none-padding-left">
					<input type="text" name="month" data-validation="required date" data-validation-format="mm" class="form-control model-register" placeholder="Month (mm)" value="<?= explode("-", $model['birthdate'])[1]; ?>">
				</div>
				<div class="col-lg-3 col-md-3 none-padding-left">
					<input type="text" name="year" data-validation="required date number" data-validation-format="yyyy" data-validation-allowing="range[1917;1999]" class="form-control model-register" placeholder="Year (yyyy)" value="<?= explode("-", $model['birthdate'])[0]; ?>">
				</div>
			</div>

			<div class="row">
				<h4 class="title-form">GENDER</h4>
				<div class="col-lg-6 col-md-6 none-padding-left">
					<div data-toggle="buttons">
						<label class="btn-gender btn btn-grey btn-pink <?php echo ($model['gender'] == 'Female') ? 'active' : ''; ?>" data-value="Female" style="color:#fff;">
							<input type="radio" name="gender" value="Female" autocomplete="off" <?php echo ($model['gender'] == 'Female') ? 'checked' : ''; ?> > Female
						</label>
						<label class="btn-gender btn btn-grey btn-pink <?php echo ($model['gender'] == 'Transgender') ? 'active' : ''; ?>" data-value="Transgender" style="color:#fff;">
							<input type="radio" name="gender" value="Transgender" autocomplete="off" <?php echo ($model['gender'] == 'Transgender') ? 'checked' : ''; ?> > Transgender
						</label>
					</div>
				</div>
			</div>

			<div class="row">
				<h4 class="title-form">RESIDENCE</h4>
				<div class="col-lg-3 col-md-3 none-padding-left">
					<input type="text" name="address" data-validation="required" class="form-control model-register" placeholder="Address" value="<?= $model['address']; ?>">
				</div>
				<div class="col-lg-3 col-md-3 none-padding-left">
					<input type="text" name="town-city" data-validation="required" class="form-control model-register" placeholder="Town/City" value="<?= $model['town-city']; ?>">
				</div>
				<div class="col-lg-3 col-md-3 none-padding-left">
					<input type="text" name="zipcode" data-validation="required" class="form-control model-register" placeholder="Zip Code" value="<?= $model['zipcode']; ?>">
				</div>
				<div class="col-lg-3 col-md-3 none-padding-left">
					<select name="country" data-validation="required" class="selectpic form-control country">
						<option value="">Country</option>
						<?php
							$sql = "SELECT * from countries";
							foreach ($conn->query($sql) as $country) {
								$selected = ($country['id'] == $model['country']) ? 'selected' : '' ;
								echo "<option value='".$country['id']."' $selected>".utf8_encode($country['name'])."</option>";
							}	?>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-3 none-padding-left">
					<button type="submit" name="action" value="updateDetails" class="btn btn-pink" style="margin:20px 0px;padding: 6px 50px;">Continue</button>
				</div>
			</div>
		</form>
	</div>
</div>

	<script>
		$('.selectpic').selectpicker({
			selectOnTab: true
		})
		$('.btn-gender').click(function(){
			$('input[name="gender"]').removeAttr("checked");
			var value = $(this).data("value");
			$('input[name="gender"][value="'+value+'"]').attr("checked",'checked');
		})
		$.validate({
			errorMessageClass: 'error-msg',
			onSuccess: function($form){
				var form = $($form).find('input[type="text"], select, button, input:checked');
				var button =  $($form).find('button[name="action"]');
				console.log(form);
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