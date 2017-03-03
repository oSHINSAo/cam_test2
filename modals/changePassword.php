<style>
	.modaal-container{	border-radius:25px;overflow:hidden;}
	.modaal-content-container{	padding:0px;}
	.modaal-content-container .modal-header{	background-color: #45a4c4;color:#fff;}
	.modaal-content-container .modal-header span{	color:#fcf497}
	.modal-body .row .col-md-12 input{	margin-bottom: 10px;margin-top: 10px;border: 3px solid #46a1c2;border-radius: 0px;}
	.modal-body .carousel-indicators{	position: initial;width: 100%;margin-left: 0px;}
	.modal-body .carousel-indicators .active{	background-color:#000;}
	.modal-body .carousel-indicators li{	background-color:#ababab;}
	.iconRegister{	max-height:50px;color:#45a4c4;}
	.iconRegister input{	display:inline-block;color:#45a4c4;}
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
	<h3 class="textCenter">Please type in your new password</h3>
</div>
<div class="modal-body">
	<div class="row" id="registerStep1">
		<div class="col-md-12">
			<form id="changePassword" method="post">
				<div class="iconRegister">
					<input type="password" data-validation="required" name="pass" placeholder="New password" class="form-control">
						<i class="fa fa-lock"></i>
				</div>
				<div class="iconRegister">
					<input type="password" data-validation="confirmation required" data-validation-confirm="pass" name="repass" placeholder="Repeat new password" class="form-control">
						<i class="fa fa-lock"></i>
				</div>
				<p class="textCenter">
					<button type="submit" name="action" value="register" class="btn btn-blue">Change Password</button>
				</p>
			</form>
		</div>
	</div>
</div>
<script>
	$.validate({
		onSuccess: function($form){
			var pass	= $form[0][0]['value'];
			var data	= {action: 'changePassword', password: pass}
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
					button.html(resp.msg);
					if(resp.disabled == 0){
						button.prop('disabled', false);
					}
					if(resp.success == 1){
						window.location.href='/';
					}
				}
			})
			return false;
		}
	});
</script>