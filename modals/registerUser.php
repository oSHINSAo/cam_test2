<style>
	.modaal-container{	border-radius:25px;overflow:hidden;}
	.modaal-content-container{	padding:0px;}
	.modaal-content-container .modal-header{	background-color: #45a4c4;color:#fff;}
	.modaal-content-container .modal-header span{	color:#fcf497}
	.modal-body .row .col-md-12 input{	margin-bottom: 10px;margin-top: 10px;border: 3px solid #46a1c2;border-radius: 0px;}
	.modal-body .carousel-indicators{	position: initial;width: 100%;margin-left: 0px;}
	.modal-body .carousel-indicators .active{	background-color:#000;}
	.modal-body .carousel-indicators li{	background-color:#ababab;}
	.iconRegister{	max-height:50px;}
	.iconRegister input{	display:inline-block;}
	.iconRegister i{    display:inline-block;position: relative;top: -37px;right: -90%;}
	.iconRegister .form-error{	margin-top:-30px;}
	#registerStep2 p{ color:#45a4c4;font-weight:bold;font-size:12px; }
	#registerStep2 p span{	color:#db2376;font-size:16px;font-weight: normal}
	#registerStep2 p .span1{	font-weight: bold}
	#registerStep2 input{	    background-color: #46a1c2;color: #fff;}
	.row  p{ color:#45a4c4;font-weight:bold;font-size:12px; }
	input[type="checkbox"]{	margin: 12px 5px 14px 0px !important;vertical-align: middle; }
</style>
<div class="modal-header">
	<h3 class="textCenter">Welcome Home</h3>
</div>
<div class="modal-body">
	<ol class="carousel-indicators">
		<li></li>
		<li class="active"></li>
		<li></li>
	</ol>
	<div class="row" id="registerStep1">
		<div class="col-md-12">
			<form id="registerUser" method="post">
				<div class="iconRegister">
					<input type="text" name="nick" data-validation="server required" data-validation-url="/actions/validateRegister.php" placeholder="Nickname" class="form-control" autocomplete="off">
					<i class="fa fa-user"></i>
				</div>
				<div class="iconRegister">
					<input type="email" data-validation="server email required" data-validation-url="/actions/validateRegister.php" data-validation-error-msg="Email not valid or already in use" name="email" placeholder="Email" class="form-control">
						<i class="fa fa-envelope"></i>
				</div>
				<div class="iconRegister">
					<input type="password" data-validation="required" name="pass" placeholder="Password" class="form-control">
						<i class="fa fa-lock"></i>
				</div>
				<div class="iconRegister">
					<input type="password" data-validation="confirmation required" data-validation-confirm="pass" name="repass" placeholder="Repeat Password" class="form-control">
						<i class="fa fa-lock"></i>
				</div>
				<p class="textCenter">
					<label style="display:block"><input type="checkbox" name="agree" value="1" data-validation="required" data-validation-error-msg="You have to agree to our terms">I agree to the <a href="">Terms of Use</a></label>
					<button type="submit" name="action" value="register" class="btn btn-blue">Get started!</button>
				</p>
			</form>
		</div>
	</div>

	<div class="row" id="registerStep2">
		<div class="col-md-12">
			<p>We have sent you an activation link to the following email address:</p>
			<input type="email" name="newemail" value="prueba@test.com" class="form-control" disabled>
			<p>Please tap the link in the email we sent to complete your registration.</p>
			<p class="textCenter">
				<span class="span1">You didn't get an email from us?</span><br>
				<span>Try one of the following options:</span>
			</p>
			<p class="textCenter">
				<button type="button" name="action" value="resendEmail" class="btn btn-blue">Resend Email</button>
				<button type="button" name="changeEmail" class="btn btn-pink">Change Email Address</button>
			</p>
		</div>
	</div>

	<div class="row" id="registerStep3">
		<div class="col-md-12">
			<p>Please update your email address so we can send you the activation link:</p>
			<div class="iconRegister">
				<input type="email" name="changeEmail" class="form-control" placeholder="Email" style="width:98%">
				<i class="fa fa-envelope" style="background-color: #45a4c4;padding: 7px;top: -44px;right: -92%;font-size: 20px;color:#fff;"></i>
			</div>
			<p class="textCenter">
				<button type="button" name="action" value="changeEmail" class="btn btn-blue">
					Send Confirmation Email
				</button>
			</p>
		</div>
	</div>

	<input type="hidden" name="idUser" value="">
</div>
<script>
	$('#registerStep2').css("display","none");
	$('#registerStep3').css("display","none");
	
	// Resend email
	$('[value="resendEmail"]').click(function(){
		var button = $(this);
		button.prop('disabled','true');
		button.html('<i class="fa fa-spin fa-spinner"></i>');
		var email = $('[name="newemail"]').val();
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
	$('[name="changeEmail"]').click(function(){
		$('#registerStep2').slideUp('fast')
		$('#registerStep3').slideDown('fast');
	})
	// Change email Action
	$('[value="changeEmail"]').click(function(){
		var button = $(this);
		button.prop('disabled','true');
		button.html('<i class="fa fa-spin fa-spinner"></i>');
		var email = $('#registerStep3 div .iconRegister input[name="changeEmail"]').val();
		var idUser = $('[name="idUser"]').val();
		data = {action: 'changeEmail', email: email, idUser: idUser};
		$('#registerStep2 div input[name="newemail"]').val(email);
		$('#registerStep2').find('[value="resendEmail"]').prop('disabled',false);
		$('#registerStep2').find('[value="resendEmail"]').html('Resend Email');
		$.ajax({
			url: '/actions/users.actions.php',
			type: 'POST',
			data: data,
			dataType: 'json',
			success: function(resp){
				button.html("Send Confirmation Email");
				button.prop('disabled', false);
				$('#registerStep2').slideDown('fast')
				$('#registerStep3').slideUp('fast');
			}
		})
	})

	$.validate({
		onSuccess: function($form){
			var nick	= $form[0][0]['value'];
			var email	= $form[0][1]['value'];
			var pass	= $form[0][2]['value'];
			var data	= {action: 'register', nick: nick, email: email, pass: pass}
			var button =  $($form).find('button');
			$('#registerStep2 div input[name="newemail"]').val(email);
			button.empty();
			button.html('<i class="fa fa-spin fa-spinner"></i>');
			button.prop('disabled', "true");
			$.ajax({
				url: '/actions/users.actions.php',
				type: 'POST',
				data: data,
				dataType: 'json',
				success: function(resp){
					if(resp.success == 1){
						$("#registerStep1").slideUp('fast');
						$("#registerStep1").empty();
						$('.carousel-indicators .active').removeClass('active');

						$('.modal-header').html('<h3 class="textCenter">Check your mail</h3><p class="textCenter">(Including your spam folder)</p>');

						$("#registerStep2").slideDown('fast');
						$('.carousel-indicators :last-child').addClass('active');
						$('[name="idUser"]').val(resp.idUser);
					}
				}
			})
			return false;
		}
	});
</script>