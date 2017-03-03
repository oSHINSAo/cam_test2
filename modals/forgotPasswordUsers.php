<style>
	.modaal-container{	border-radius:25px;overflow:hidden;}
	.modaal-content-container{	padding:0px;}
	.modaal-content-container .modal-header{	background-color: #000;color:#fff;}
	.modaal-content-container .modal-header span{	color:#fcf497}
	.modaal-content-container .modal-body p{	color:#de2377;font-size:12px;font-weight: bold;margin:0px;}
	.modaal-content-container .modal-body div div img{    height: 140px;border-radius: 150px;margin-bottom:15px;}
	.modaal-content-container .modal-body .row{    margin-bottom:15px;}
	.borderPink{border:4px solid #db2376;}
	.borderBlue{border:4px solid #45a4c4;}
	.modal-body .carousel-indicators{	position: initial;width: 100%;margin-left: 0px;}
	.modal-body .carousel-indicators .active{	background-color:#000;}
	.modal-body .carousel-indicators li{	background-color:#ababab;}
	.modal-body .row .col-md-12 input{	margin-bottom: 10px;margin-top: 10px;border: 3px solid #db2376;border-radius: 0px;color:#db2376;}
	.iconRegister{	max-height:50px;color:#db2376;}
	.iconRegister input{	display:inline-block;}
	.iconRegister i{    display:inline-block;position: relative;top: -37px;right: -94%;}
</style>
<div class="modal-header">
	<h3 class="modal-title textCenter">Can't remember your password?</h3>
</div>
<div class="modal-body textLeft">
	<div class="row">
		<div class="col-md-12">
			<form method="post">
				<p>Just type in the email address you used to register and we will send you an email to reset your password.</p>
				<div class="iconRegister">
					<input type="email" name="email" placeholder="Email Address" class="form-control" required>
					<i class="fa fa-envelope"></i>
				</div>
				<div class="row" style="margin: 15px -15px -5px -15px;">
					<div class="col-md-6">
						<button type="submit" name="action" value="resetPassword" class="btn btn-pink">Reset Password</button>
					</div>
					<div class="col-md-6" style="text-align:right;">
						<a class="modaal-ajax returnLogin btn btn-blue">Return to Login</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	$('.returnLogin').click(function() {
		$('.modaal-close').trigger('click');
		$('.loginAction').trigger('click');
	});
	$.validate({
		onSuccess: function($form){
			var email	= $form[0][0]['value'];
			var data	= {action: 'resetPassword', email: email};
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
					if(resp.disabled == 0){
						button.prop('disabled', false);
					}
					button.html(resp.msg);
				}
			})
			return false;
		}
	});
</script>