<?php
	require_once $document_root."/class/users.class.php";
	require_once $document_root."/class/studios.class.php";
	$users		= new Users();
	$cifrado	= new cifrado();
	$studios	= new Studios();
	$nick		= $cifrado->decrypt($_SESSION['registerNick'], $conn->generateToken());
	$user		= $users->getInfoUserPublic($users->getIdUser($nick));
	$studio	= $studios->getInfo($_SESSION['iduser']);
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
	h4{font-weight: bold;}
	h4 small{color:#db2376;}
	.btn-square{border-radius:0px;margin-left:0px;}
	.documentsFiles{margin: 10px 0px 10px 0px;border: 1px dashed;padding: 3px;font-size: 11px;overflow: hidden;}
	h5{margin: -5px 0px 10px 0px;font-weight: bold;font-size: 18px;}
	.edit{padding: 1px 15px;float: right;margin:0px;}
	.check{height: 32px;margin-top: -8px;}
</style>
<div class="row-fluid text-center form-inline">
	<div class="col-md-12 col-lg-12">
		<label><img src="/img/check.png" class="check">Create Account</label>
		<label><img src="/img/check.png" class="check">Confirm email</label>
		<label><img src="/img/check.png" class="check">Details</label>
		<label><img src="/img/check.png" class="check">Documents</label>
		<label><img src="/img/check.png" class="check">Review</label>
		<label><img src="/img/check.png" class="check">Done</label>
	</div>
</div>

<div class="row-fluid text-center" style="color:#db2376;margin-top:30px;">
	<div class="col-md-12 col-lg-12" style="padding-bottom:25px;">
		<h3 class="step-text" style="margin:40px 0px 40px 0px;"><span>Step 6 </span>. You're almost done! We will review your application and send you an email when your account has been approved</h3>
		<div class="row-fluid text-center">
			<button type="button" name="action" value="finish" class="btn btn-pink">Done</button>
		</div>
	</div>
</div>


<script>
	$('button[name="action"]').click(function(){
		var button = $(this);
		button.html("<i class='fa fa-spin fa-spinner'></i>");
		button.prop("disabled", true);
		var url		= "/actions/models.actions.php";
		var data	= {action: 'registerComplete'};
		$.ajax({
			url:url,
			type:'POST',
			data:data,
			dataType: 'json',
			success: function(resp){
				var msg = "Try again";
				if(resp.success == 1){
					msg = "Finish";
					window.location.href=window.location.href
				}
				button.html(msg);
				button.prop("disabled", false);
			}
		});
	});
</script>