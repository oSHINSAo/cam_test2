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
	.check{height: 32px;margin-top: -8px;}
</style>
<div class="row-fluid text-center form-inline">
	<div class="col-md-12 col-lg-12">
		<label><img src="/img/check.png" class="check">Create Account</label>
		<label><img src="/img/check.png" class="check">Confirm email</label>
		<label><img src="/img/uncheck.png" class="check">Details</label>
		<label><img src="/img/uncheck.png" class="check">Documents</label>
		<label><img src="/img/uncheck.png" class="check">Review</label>
		<label><img src="/img/uncheck.png" class="check">Done</label>
	</div>
</div>

<div class="row-fluid text-center">
	<div class="col-md-12 col-lg-12 resend" style="padding-bottom:25px;">
		<h3 class="step-text" style="margin-top:40px;"><span>Step 2</span> Check your email <small>(Including your spam folder)</small></h3>
		<h4><pink>We have sent you an activation link to the following email address</pink></h4>
		<input type="email" name="email" value="<?= $user['email']; ?>" style="width: 600px;background-color: #db2376;border: 0px;padding: 5px 10px;color: #fff;font-weight: 600;">
		<h4><pink>Please tap the link in the email we sent to complete your registration.</pink></h4>
		<h4>
			<pink>
				<strong>You didn't get an email from us?</strong><br>
				Try one of the following options:
			</pink>
		</h4>
		<button type="button" name="action" value="resendEmail" class="btn btn-pink">Resend Email</button>
		<button type="button" name="action" value="newEmail" class="btn btn-blue">Change email address</button>
	</div>
</div>

<div class="row-fluid text-center">
	<div class="col-md-12 col-lg-12 change text-center display-none" style="padding-bottom:25px;">
		<form id="validEmail" method="post">
			<h4><pink>Please update your email address so we can send you the activation link:</pink></h4>
			<div class="iconRegister text-center" style="margin-bottom:20px;">
				<input type="email" data-validation="server email required" data-validation-url="/actions/validateRegister.php" data-validation-error-msg="Email not valid or already in use" name="changeEmail" value="<?= $user['email']; ?>" placeholder="Email" class="form-control"  style="width:600px;margin:0 auto;">
				<!-- <i class="fa fa-envelope" style="background-color: #45a4c4;padding: 7px;top: -44px;right: -92%;font-size: 20px;color:#fff;"></i> -->
			</div>
			<button type="submit" name="action" value="changeEmail" class="btn btn-blue">
				Send Confirmation Email
			</button>
		</form>
	</div>
</div>



	<script>
		// Resend email
		$('[value="resendEmail"]').click(function(){
			var button = $(this);
			button.prop('disabled',true);
			button.html('<i class="fa fa-spin fa-spinner"></i>');
			var email = $('[name="email"]').val();
			data = {action: 'resend', email: email}
			$.ajax({
				url: '/actions/users.actions.php',
				type: 'POST',
				data: data,
				dataType: 'json',
				success: function(resp){
					button.html(resp.msg);
					button.prop('disabled', false);
				}
			})
		})

		// Change email Visor
		$('[value="newEmail"]').click(function(){
			$('.resend').slideToggle();
			$('.change').slideToggle();
		})

		$.validate({
			errorMessageClass: 'error-msg',
			onSuccess: function($form){
				var email	= $form[0][0]['value'];
				var button =  $($form).find('button');
				button.empty();
				button.html('<i class="fa fa-spin fa-spinner"></i>');
				button.prop('disabled', true);
				data = {action: 'changeEmail', email: email};
				$.ajax({
					url: '/actions/models.actions.php',
					type: 'POST',
					data: data,
					dataType: 'json',
					success: function(resp){
						button.html("Send Confirmation Email");
						$('[value="resendEmail"]').html("Resned email");
						button.prop('disabled', false);
						$('.resend').slideToggle();
						$('.change').slideToggle();
						$('[name="email"]').val(email);
					}
				});
				return false;
			}
		});
	</script>