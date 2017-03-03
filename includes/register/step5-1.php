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
		<label><img src="/img/uncheck.png" class="check">Done</label>
	</div>
</div>

<div class="row-fluid text-center" style="color:#db2376;margin-top:30px;">
	<div class="col-md-12 col-lg-12" style="padding-bottom:25px;">
		<h3 class="step-text" style="margin:40px 0px 40px 0px;"><span>Step 5 </span>. Review and submit your application</h3>

		<?php
			$path	= "/models/".$_SESSION['iduser']."/register";
			$count	= 0;
			foreach (scandir($_SERVER['DOCUMENT_ROOT'].$path) as $key => $value) {
				if($value != '.' && $value != '..'){
					if($count === 0){
						$snapshot = $path."/".$value;
						$count++;
					}else if($count === 1){
						$photoID = $path."/".$value;
					}
				}
			}
		?>

		<!-- <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true"> -->
			
			<!-- Edit step 3 -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<!-- <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> -->
						<a>
							Studio and Manager information
						</a>
						<button type="button" class="btn btn-xs btn-pink edit" data-step="3">Edit</button>
					</h4>
				</div>
				<div class="panel-body">
					<h5>Studio Information</h5>
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<input type="text" class="form-control model-register" placeholder="Studio name" value="<?= $studio['studioName']; ?>" readonly>
						</div>
						<div class="col-lg-4 col-md-4">
							<input type="text" class="form-control model-register" placeholder="Address" value="<?= $studio['studioAddress']; ?>" readonly>
						</div>
						<div class="col-md-4 col-lg-4">
							<input type="text" class="form-control model-register" placeholder="ZipCode" value="<?= $studio['studioZipcode']; ?>" readonly>
						</div>
					</div>

					<div class="row" style="margin: 15px -15px 15px -15px;">
						<div class="col-md-4 col-lg-4">
							<input type="text" class="form-control model-register" placeholder="Town/City" value="<?= $studio['studioTownCity']; ?>" readonly>
						</div>
						<div class="col-md-4 col-lg-4">
							<input type="text" class="form-control model-register" placeholder="Country" value="<?= $studio['studioCountry']; ?>" readonly>
						</div>
						<div class="col-md-4 col-lg-4">
							<input type="text" class="form-control model-register" placeholder="Number models" value="<?= $studio['studioNumberModels']; ?>" readonly>
						</div>
					</div>

					<h5>Manager Information</h5>
					<div class="row">
						<div class="col-lg-3 col-md-3">
							<input type="text" class="form-control model-register" placeholder="Firstname" value="<?= $studio['managerFirstname']; ?>" readonly>
						</div>
						<div class="col-lg-3 col-md-3">
							<input type="text" class="form-control model-register" placeholder="Lastname" value="<?= $studio['managerLastname']; ?>" readonly>
						</div>
						<div class="col-lg-3 col-md-3">
							<input type="text" class="form-control model-register" placeholder="birthdate" value="<?= $studio['managerBirthdate']; ?>" readonly>
						</div>
						<div class="col-lg-3 col-md-3">
							<input type="text" class="form-control model-register" placeholder="zipcode" value="<?= $studio['managerZipcode']; ?>" readonly>
						</div>
					</div>

					<div class="row" style="margin: 15px -15px 15px -15px;">
						<div class="col-md-4 col-lg-4">
							<input type="text" class="form-control model-register" placeholder="Address" value="<?= $studio['managerAddress']; ?>" readonly>
						</div>
						<div class="col-md-4 col-lg-4">
							<input type="text" class="form-control model-register" placeholder="Town/City" value="<?= $studio['managerTownCity']; ?>" readonly>
						</div>
						<div class="col-md-4 col-lg-4">
							<input type="text" class="form-control model-register" placeholder="Country" value="<?= $studio['managerCountry']; ?>" readonly>
						</div>
					</div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<!-- <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> -->
						<a>
							Identity of your studio Manager
						</a>
						<button type="button" class="btn btn-xs btn-pink edit" data-step="4">Edit</button>
					</h4>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<h5>Photo ID</h5>
							<img class="img-responsive text-center" src="<?= $photoID; ?>">
						</div>
						<div class="col-lg-6 col-md-6">
							<h5>Snapshot</h5>
							<img class="img-responsive text-center" src="<?= $snapshot; ?>">
						</div>
					</div>
				</div>
			</div>




		<div class="row-fluid text-center">
			<button type="button" name="action" value="finish" class="btn btn-pink">Submit Application</button>
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
	$('.edit').click(function(){
		var data = {
			action: 'edit',
			step: $(this).data("step")
		};
		var url		= "/actions/models.actions.php";
		$.ajax({
			url: url,
			type: 'POST',
			dataType: 'json',
			data:data,
			success: function(resp){
				if(resp.success == 1){
					window.location.href = window.location.href;
				}
			}
		})
	});
</script>