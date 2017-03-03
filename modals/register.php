<style>
	.modaal-container{	border-radius:25px;overflow:hidden;}
	.modaal-content-container{	padding:0px;}
	.modaal-content-container .modal-header{	background-color: #000;color:#fff;}
	.modaal-content-container .modal-header span{	color:#fcf497}
	.modaal-content-container .modal-body p{	color:#de2377;font-size:18px;}
	.modaal-content-container .modal-body div div img{    height: 140px;border-radius: 150px;margin-bottom:15px;}
	.modaal-content-container .modal-body .row{    margin-bottom:15px;}
	.borderPink{border:4px solid #db2376;}
	.borderBlue{border:4px solid #45a4c4;}
	.modal-body .carousel-indicators{	position: initial;width: 100%;margin-left: 0px;}
	.modal-body .carousel-indicators .active{	background-color:#000;}
	.modal-body .carousel-indicators li{	background-color:#ababab;}
	.btnLogin{	color:#45a4c4;}
	.size-xs{	height:100px!important;}
</style>
<div class="modal-header">
	<h3 class="textCenter">Join now our growing community for <span>FREE!</span></h3>
	<h3 class="textCenter">Enjoy full access to Camlicious.com</h3>
</div>
<div class="modal-body textCenter">
	<ol class="carousel-indicators">
		<li class="active"></li>
		<li></li>
		<li></li>
	</ol>
	<p>Please choose the type of account you would like to have:</p>
	<div class="row hidden-xs">
		<div class="col-lg-6 col-md-6 col-sm-6 textCenter">
			<img src="/img/member.png" class="borderBlue" alt="User Register"><br>
			<a style="cursor:pointer;" class="modaal-ajax btn btn-blue btnMember">Member</a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 textCenter">
			<img src="/img/model.png" class="borderPink" alt="Model Register"><br>
			<a href='/register/models' class="btn btn-pink">Model</a>
		</div>
	</div>

	<!-- VISIBLE ONLY SMARTPHONE -->
	<div class="row visible-xs">
		<div class="col-xs-6 textCenter">
			<img src="/img/member.png" class="borderBlue size-xs" alt="User Register"><br>
			<a style="cursor:pointer;" class="modaal-ajax btn btn-blue btnMember">Member</a>
		</div>
		<div class="col-xs-6 textCenter">
			<img src="/img/model.png" class="borderPink size-xs" alt="Model Register"><br>
			<a href='/register/models' class="btn btn-pink">Model</a>
		</div>
	</div>
	<p class="visible-xs textCenter"><strong>Already a member? <br><a style="cursor:pointer;" class="modaal-ajax btnLogin">Log in</a></strong></p>
	<p class="hidden-xs"><strong>Already a member?<a style="cursor:pointer;" class="modaal-ajax btnLogin">Log in</a></strong></p>
</div>
<script>
	$('.btnLogin').click(function() {
		$('.modaal-close').trigger('click');
		$('.login-action').trigger('click');
	});
	$('.btnMember').click(function() {
		$('.modaal-close').trigger('click');
		$('.registerMembersAction').trigger('click');
	});
</script>