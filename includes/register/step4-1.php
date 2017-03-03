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
	.title-form{font-weight: bold;color: #db2376;}
	.filter-option{color:#999;font-weight: 100;}
	.bootstrap-select > .dropdown-toggle{background-color:#fff;}
	.bs-caret{color:#db2376;}
	.btn.dropdown-toggle.btn-default{padding:6px 10px;}
	h4{font-weight: bold;}
	h4 small{color:#db2376;}
	.btn-square{border-radius:0px;margin-left:0px;}
	.documentsFiles{margin: 10px 0px 10px 0px;border: 1px dashed;padding: 3px;font-size: 11px;overflow: hidden;}
	.check{height: 32px;margin-top: -8px;}
</style>
<div class="row-fluid text-center form-inline">
	<div class="col-md-12 col-lg-12">
		<label><img src="/img/check.png" class="check">Create Account</label>
		<label><img src="/img/check.png" class="check">Confirm email</label>
		<label><img src="/img/check.png" class="check">Details</label>
		<label><img src="/img/check.png" class="check">Documents</label>
		<label><img src="/img/uncheck.png" class="check">Review</label>
		<label><img src="/img/uncheck.png" class="check">Done</label>
	</div>
</div>

<div class="row-fluid text-center" style="color:#db2376;margin-top:30px;">
	<div class="col-md-12 col-lg-12" style="padding-bottom:25px;">
		<h3 class="step-text" style="margin:40px 0px 40px 0px;"><span>Step 4 </span>. Upload the required documents to verify the identity of your studio Manager.</h3>

		<div class="row-fluid text-center">
			<h3 style="background-color:#db2376;padding: 10px 0px 10px 0px;color: #fff;margin:0 auto;width:85%;">Documents</h3>
		</div>

		<div class="row-fluid text-left" style="width:82%;margin:0 auto;">
			<div class="col-md-6 col-lg-6" style="margin-top:30px;">
				<h4 style="margin-top:3px;">Government-issued photo ID</h4>
				<input type="file" name="photoID" style="display:none;" accept="application/pdf, image/*">
				<button type="file" name="upload" value="photoID" data-name="photoID" class="btn btn-blue btn-square browserFile">Browse File</button>
				<button type="button" name="uploadFile" value="photoID"  data-name="photoID" class="btn btn-black btn-square uploadFile" disabled>Upload File</button> 
				<p class="documentsFiles photoID"></p>

				<h4>
					Snapshot<br>
					<small>This is a pic of you holding your ID next to your face</small>
				</h4>
				<input type="file" name="Snapshot" style="display:none;" accept="application/pdf, image/*">
				<button type="button" name="browseFile" value="Snapshot" data-name="Snapshot" class="btn btn-blue btn-square browserFile">Browse File</button> 
				<button type="button" name="uploadFile" value="Snapshot" data-name="Snapshot" class="btn btn-black btn-square uploadFile" disabled>Upload File</button> 
				<p class="documentsFiles Snapshot"></p>
			</div>

			<div class="col-md-6 col-lg-6" style="margin-top:30px;">
			<strong>
				<p class="text-center" style="margin-left:-120px;font-size: 18px;"><strong>Requirements:</strong></p>
				Name and birthdate must be readable<br>
				Good resolution<br>
				Max. file size: 5MB<br>
				Formats: JPEG, JPG, GIF, PNG, PDF, TIFF<br>
				Valid ID:
			</strong><br>
			- Driver's license<br>
			- Passport<br>
			- Military/Government ID<br>
			- Permanent residence cards<br>
			- State-issued benefit card<br>
			- Government-issued health cards (Canada)<br>
			</div>
		</div>
	</div>
	<div class="row-fluid text-left" style="width: 82%;margin:0 auto">
		<div class="col-md-6 col-lg-6">
			<?php
				$path = $_SERVER['DOCUMENT_ROOT']."/models/".$_SESSION['iduser']."/register";
				$disabled = 'disabled';
				if(count(glob($path.'*.*')) == 2){
					$disabled = '';
				}
			?>
			<button type="button" name="continue" class="btn btn-pink" style="margin: 0px 0px 10px 10px;" <?= $disabled; ?>>Continue</button>
		</div>
	</div>
</div>

	<script>
		$("p.documentsFiles").text("0 Files");
		$(".browserFile").click(function(){
			var name = $(this).data("name");
			$('input[name="'+name+'"]').trigger("click");
		});
		$(".uploadFile").click(function(){
			var button	= $(this);
			var name	= button.data("name");
			var file		= $('input[name="'+name+'"]')[0].files[0];
			var data	= new FormData();
			// var file = this.files[0];
			data.append('file',file);
			data.append('name',name);
			data.append('action','uploadFile');
			var url = '/actions/models.actions.php';
			$.ajax({
				url:url,
				type:'POST',
				contentType:false,
				data:data,
				processData:false,
				cache:false,
				dataType: 'json',
				success: function(resp){
					if(typeof resp.success !== 'undefined'){
						button.text("Submitted");
					}
					if(typeof resp.next !== 'undefined'){
						$('button[name="continue"]').prop('disabled', false);
					}
				}
			});
		});
		$('button[name="continue"]').click(function(){
			window.location.href=window.location.href;
		});

		$("input").change(function(){
			var name	= $(this).attr("name"); // get name of pic upload
			var file		= $(this).val(); // get value of pic upload
			file			= file.split('\\'); // get name of pic
			var sizeInMB = (this.files[0].size / (1024*1024)).toFixed(2); //check size file
			if(sizeInMB > 5){
				$('[name="uploadFile"][value="'+name+'"]').prop("disabled", true);
				$("p."+name).text('The file has allowed greater weight');
				$(this).val("");
			}else{
				$('[name="uploadFile"][value="'+name+'"]').prop("disabled", false);
				$('p.'+name).text(file[file.length-1]);
			}
		});
	</script>