<style>
	.modaal-container{	border-radius:25px;overflow:hidden;}
	.modaal-content-container{	padding:0px;}
	.modaal-content-container .modal-header{	background-color: #45a4c4;color:#fff;}
	.modaal-content-container .modal-header span{	color:#fcf497}
	.modal-body .row .col-md-7 input{	margin-bottom: 10px;margin-top: 10px;border: 3px solid #46a1c2;border-radius: 0px;}
	.modal-body .carousel-indicators{	position: initial;width: 100%;margin-left: 0px;}
	.modal-body .carousel-indicators .active{	background-color:#000;}
	.modal-body .carousel-indicators li{	background-color:#ababab;}
	.iconRegister{	max-height:50px;}
	.iconRegister input{	display:inline-block;}
	.iconRegister i{    display:inline-block;position: relative;top: -37px;right: -86%;}
	.iconRegister .form-error{	margin-top:-30px;}
	#registerStep2 p{ color:#45a4c4;font-weight:bold;font-size:12px; }
	#registerStep2 p span{	color:#db2376;font-size:16px;font-weight: normal}
	#registerStep2 p .span1{	font-weight: bold}
	#registerStep2 input{	    background-color: #46a1c2;color: #fff;}
	.row  p{ color:#45a4c4;font-weight:bold;font-size:12px; }
	.modal-body img{	position: absolute;height: 340px;bottom: 0px;right: 20px;}
	.textCenter{	text-align:center;}
	label{	color:#44a2c2;margin-bottom:0px;}
	label input{	margin: 0px 4px 0px 0px !important;}
	.forgotPassword{	color:#44a2c2;font-size:12px;text-decoration:underline;}
	.registerPink{	color:#db2577;font-size:16px;font-weight: bold;margin:30px 0 30px 0;}
	.newUser{	margin-top:5px;}
</style>
<div class="modal-header">
	<h3 class="modal-title textCenter">Log in</h3>
</div>
<div class="modal-body">
	<div class="alert alert-danger" style="display:none;" role="alert"></div>
	<form id="loginUser" method="post" class="hidden-xs">
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-7">
				<div class="iconRegister">
					<input type="text" name="user" data-validation="required" placeholder="Nickname or Email" class="form-control">
					<i class="fa fa-user"></i>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-7">
				<div class="iconRegister">
					<input type="password" data-validation="required" name="pass" placeholder="Password" class="form-control">
					<i class="fa fa-lock"></i>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-4">
						<label><input type="checkbox" name="remember">Remember me</label><br>
						<a style="cursor:pointer;" class="modaal-ajax textCenter block forgotPassword">¿Forgot Password?</a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 textCenter">
						<button type="submit" name="action" value="login" class="btn btn-blue">Let me in!</button>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 registerPink">
				Not registered yet?<br>
				<a style="cursor:pointer;" class="modaal-ajax btn btn-pink newUser">Register now for free!</a>
			</div>
		</div>
	</form>


	<!-- VISIBLE ONLY SMARTPHONE -->
	<form id="loginUser" method="post" class="visible-xs">
		<div class="row">
			<div class="col-xs-12">
				<div class="iconRegister">
					<input type="text" name="user" data-validation="required" placeholder="Nickname or Email" class="form-control">
					<i class="fa fa-user" style="top:-27px;"></i>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<div class="iconRegister">
					<input type="password" data-validation="required" name="pass" placeholder="Password" class="form-control">
					<i class="fa fa-lock" style="top:-27px;"></i>
				</div>
			</div>
		</div>
		<div class="row textCenter">
			<div class="col-xs-12">
				<label><input type="checkbox" name="remember">Remember me</label><br>
				<a style="cursor:pointer;" class="modaal-ajax textCenter block forgotPassword">¿Forgot Password?</a>
			</div>
		</div>
		<div class="row textCenter">
			<div class="col-xs-12">
				<button type="submit" name="action" value="login" class="btn btn-blue">Let me in!</button>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 registerPink textCenter">
				Not registered yet?<br>
				<a style="cursor:pointer;" class="modaal-ajax btn btn-pink newUser">Register now for free!</a>
			</div>
		</div>
	</form>
	<img src="/img/mailing/modelActivateAccount.png" class="hidden-xs">
</div>
<script>
	$('.forgotPassword').click(function() {
		$('.modaal-close').trigger('click');
		$('.forgotPasswordAction').trigger('click');
	});
	$('.newUser').click(function() {
		$('.modaal-close').trigger('click');
		$('.button-su-click').trigger('click');
	});
	$.validate({
		onSuccess: function($form){
			var user	= $form[0][0]['value'];
			var pass	= $form[0][1]['value'];
			var remb	= $form[0][2]['checked'];
			var data	= {action: 'login', user: user, pass: pass, remember: remb};
			var button =  $($form).find('button');
			button.empty();
			button.html('<i class="fa fa-spin fa-spinner"></i>');
			button.prop('disabled', "true");
			$.ajax({
				url: '/actions/users.actions.php',
				type: 'POST',
				data: data,
				dataType: 'json',
				success: function(resp){
					if(typeof resp.success != 'undefined'){
						if(resp.success == 1){
							if(resp.url == 0){
								window.location.href=window.location.href;
							}else{
								window.location=resp.url;
							}
						}else{
							$('.alert-danger').empty();
							$('.alert-danger').html(resp.msg);
							$('.alert-danger').slideDown();
							$('.alert-danger').delay(8000).slideUp(600);
							button.html('Let me in!');
							button.prop('disabled', false);
						}
					}else{
						button.html('Let me in!');
						button.prop('disabled', false);
					}
				}
			});
			return false;
		}
	});
</script>