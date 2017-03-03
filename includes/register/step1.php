<style>
	.img-center{margin:0 auto;}
	.option{transition: all 0.3s;cursor: pointer;}
	.option:hover{background-color:#c2c2c2;}
	.activeOption{background-color:#c2c2c2;}
	.iconRegister input{border-radius: 0px;border: 1px solid #db2376;margin-left:10px;margin-right: 10px;}
	.form-error{position: absolute;margin-left: 15px;}
	.error-account{color: #b94a48;text-align:center;font-weight: bold;display:none;}
	input[disabled]{cursor: default !important;}
	.check{height: 32px;margin-top: -8px;}
</style>
<div class="row-fluid text-center form-inline">
	<label><img src="/img/check.png" class="check">Create Account</label>
	<label><img src="/img/uncheck.png" class="check">Confirm email</label>
	<label><img src="/img/uncheck.png" class="check">Details</label>
	<label><img src="/img/uncheck.png" class="check">Documents</label>
	<label><img src="/img/uncheck.png" class="check">Review</label>
	<label><img src="/img/uncheck.png" class="check">Done</label>
</div>

<div class="row-fluid text-center" style="background-color:#db2376;padding: 10px 0px 10px 0px;color: #fff;margin:20px 0px 0px 0px;">
	<h1 style="margin:0px;">Create your free account now and start camming with us!</h1>
</div>

<div class="row-fluid options">
	<h3 class="step-text text-center"><span>Step 1</span> Choose your account</h3>
	<div class="col-md-12 col-lg-12" style="color: #dd2f79; margin-bottom:30px">
		<div class="row">
			<div class="col-md-offset-2 col-lg-offset-2 col-md-4 col-lg-4 text-center option" data-value="1">
				<img src="/img/model.png" class="img-responsive img-center">
				<h3 style="font-weight: bold;">Single Model</h3>
			</div>

			<div class="col-md-4 col-lg-4 text-center option" data-value="2">
				<div class="row-fluid" style="min-height: 240px;">
					<div class="col-md-offset-1 col-lg-offset-1 col-md-5 col-lg-5 text-center">
						<img src="/img/model.png" class="img-responsive  img-center">
					</div>
					<div class="col-md-offset-1 col-lg-offset-1 col-md-5 col-lg-5 text-center" style="margin-left:-10px;">
						<img src="/img/model.png" class="img-responsive  img-center">
					</div>
					<div class="col-md-offset-1 col-lg-offset-1 col-md-5 col-lg-5 text-center">
						<img src="/img/model.png" class="img-responsive  img-center">
					</div>
					<div class="col-md-offset-1 col-lg-offset-1 col-md-5 col-lg-5 text-center" style="margin-left:-10px;">
						<img src="/img/model.png" class="img-responsive  img-center">
					</div>
				</div>
				<h3 style="font-weight: bold;">Studio</h3>
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<div class="col-md-12" style="margin:40px 0px 50px 0px;">
		<form method="post" class="form-inline text-center">
			<div class="iconRegister form-group">
				<input type="text" name="nick" data-validation="server required" data-validation-url="/actions/validateRegister.php" placeholder="Nickname" class="form-control" autocomplete="off">
				<!-- <i class="fa fa-user"></i> -->
			</div>
			<div class="iconRegister form-group">
				<input type="email" data-validation="server email required" data-validation-url="/actions/validateRegister.php" data-validation-error-msg="Email not valid or in use" name="email" placeholder="Email" class="form-control">
					<!-- <i class="fa fa-envelope"></i> -->
			</div>
			<div class="iconRegister form-group">
				<input type="password" data-validation="required" name="pass" placeholder="Password" class="form-control">
					<!-- <i class="fa fa-lock"></i> -->
			</div>
			<p class="text-center form-group">
				<!-- <label style="display:block"><input type="checkbox" name="agree" value="1" data-validation="required" data-validation-error-msg="You have to agree to our terms">I agree to the <a href="">Terms of Use</a></label> -->
				<button type="submit" name="action" value="register" class="btn btn-pink" style="padding-left: 40px;padding-right: 40px;">Register</button>
			</p>
			<p class="text-center" style="margin-top:30px;">
				<label><input type="checkbox" name="agree" data-validation="required" data-validation-error-msg="You have to agree to our terms">I agree to the <a href="">Performer Agreement</a> for Models/Studios.</label>
			</p>
		</form>
	</div>
</div>

	<script>
		$(".option").click(function() {
			if($(".error-account").css("display") == 'block'){
				$(".error-account").remove();
			}
			if(!$(this).hasClass(".activeOption")){
				$(".option").removeClass("activeOption");
			}
			$(this).toggleClass("activeOption");
		});

		$.validate({
			onSuccess: function($form){
				var button =  $($form).find('button');
				button.empty();
				button.html('<i class="fa fa-spin fa-spinner"></i>');
				button.prop('disabled', true);
				if(!$(".option").hasClass("activeOption")){
					$('.options').append("<p class='error-account text-center'>Select a option for you account</p>");
					$('.error-account').fadeIn();
					button.html("Register");
					button.prop("disabled", false);
				}else{
					var nick	= $form[0][0]['value'];
					var email	= $form[0][1]['value'];
					var pass	= $form[0][2]['value'];
					var type	= $(".activeOption").data("value");
					var data	= {action: 'register', nick: nick, email: email, pass: pass, type: type};
					$.ajax({
						url: '/actions/models.actions.php',
						type: 'POST',
						data: data,
						dataType: 'json',
						success: function(resp){
							if(resp.success == 1){
								window.location.href=window.location.href;
							}
						}
					})
				}
				return false;
			}
		});
	</script>