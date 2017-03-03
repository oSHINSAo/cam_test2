<style>
	.padding0{padding:0px;}

	@media (max-width: 1200px) {
		.owl-prev{position: absolute;top: 80px;left: 360px;color: #e0ded1;}
		.owl-next{position: absolute;top: 80px;left: 565px;color: #e0ded1;}
		.center .item img{height: 240px !important;overflow:hidden;}
		.nav.nav-tabs li a {	font-size:13px;}
		.center .item img{height: 240px !important;overflow:hidden;}
		.nav.nav-tabs li a {	font-size:12px;}
		.dl-horizontal dt{	width:115px;}
		.textDownPicture{width: 188px;text-align: center;font-weight: bold;color:#fff;background-color: #db2379;border-radius: 0px 0px 10px 10px;position: relative;top:20px;left: 126px;}
	}
	@media (min-width: 1201px) {
		.owl-prev{position: absolute;top: 80px;left: 443px;color: #e0ded1;}
		.owl-next{position: absolute;top: 80px;left: 682px;color: #e0ded1;}
		.textDownPicture{width: 228px;text-align: center;font-weight: bold;color:#fff;background-color: #db2379;border-radius: 0px 0px 10px 10px;position: relative;top:20px;left: 61px;}
	}

	/* CAROUSEL */
	#owl-demo .item{background: #42bdc2;color: #FFF;text-align: center;}
	.owl-carousel .owl-item {margin-top:15px;}
	.owl-carousel .center{margin-top:0px;}
	.center .item{height: 240px !important;overflow:hidden;}
	.item{height: 200px;overflow:hidden;transition: all 0.3s;}
	.list-inline li a{	color:#45a4c4;}

	/* MENU DOWN CAROUSEL */
	
	/* PERSONAL INFO */
	.containerInfo{border: 1px solid #db2379;margin-top:10px;}
	.containerInfo .personalInfo{color: #db2379;}
	.dl-horizontal dt{text-align: left;margin:5px 0 5px 0;color:#db2379;}
	.dl-horizontal dd{margin:5px 0 5px 0;padding-top:5px;}

	/* MENU INFO */
	.nav-tabs{background-color:#000;}
	.nav-tabs li a{color:#fff;}
	.nav-tabs .active{background-color: #db2379;color:#fff;}
	.nav-tabs .active a{color:#fff !important;border:none !important;border-bottom: 1px solid #db2379 !important;}
	.nav > li > a:hover, .nav > li > a:focus {text-decoration: none;background-color: #000; border:none;}
	.bootstrap-select > .dropdown-toggle{	background-color: #000;border-color: #000;border-radius:25px;}
	.filter-option, .bs-caret .caret{	color: #db2379 !important;}
	.btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default,.btn-default:active:hover, .btn-default.active:hover, .open > .dropdown-toggle.btn-default:hover, .btn-default:active:focus, .btn-default.active:focus, .open > .dropdown-toggle.btn-default:focus, .btn-default:active.focus, .btn-default.active.focus, .open > .dropdown-toggle.btn-default.focus{	background-color:#000;}
	.dropdownFilter{	background-color:none;background-color: rgba(0,0,0,0.5);opacity: 1;}
	.dropdown-menu li a{	color:#fff !important;}
	.bootstrap-select.btn-group .dropdown-menu li a:hover{	background-color:#000 !important;}
	pink{	color:#db2379;}
	#aboutMe h2, #aboutMeMD h2{	color:#db2379;}


	h3.titleProfile{margin: 0px -15px;background-color: #db2379;padding:10px 15px;color: #fff;}
	ul.nav.nav-tabs{    margin: 0px -15px;height: 47px;}
	ul.nav.nav-tabs .active{    height: 46px;}
	div[role="tabpanel"]{	color:#949494;}
	.descripcion{	overflow:hidden;white-space:nowrap;text-overflow: ellipsis;}
	.img-responsive{	margin:0 auto;}
	span.title{	font-weight: bold;color:#db2379;}
	p.descripcion{	margin:0px;}
	span.price{	font-size: 18px;font-weight: bold;color: #db2379;}
	.img div{	margin:10px 0px 10px 0px;}
	.headActivityStream{background-color:#db2379;color: #fff;}
	.timeline{line-height: 50px;}

	/* CALENDAR */
	.fc-day-grid-event{border:0px;}
	.fc-sat, .fc-sun {color: #db2379;font-weight: bold;}
	.fc-widget-content {position: relative;}
	.fc-day-number {float:none !important;left: 0;top: 0;}
	.fc-day-header.fc-widget-header.fc-sun{background-color:#000;color:#fff;}
	.fc-day-header.fc-widget-header.fc-sat{background-color:#000;color:#fff;}


	/* RESPONSIVE */
	.panel-default{	color: #333;border-color: #db2379;border-radius: 0px;}
	.panel-default > .panel-heading{	background-color: #db2379;border-radius: 0px; color:#fff;font-weight: bold;}
	.panel-default > .panel-heading i{	position: absolute;right: 35px;top: 13px;}
	.panel-body dl dt{	color: #db2379;}
	.panel-body dl dd{	margin-bottom:10px;color:#949494;}
	.nav-tabs > li.active > a {border:0px !important;color:#fff !important;}
	.nav-tabs > li.active{	border-left:1px solid #000;margin-left: -2px;}
	.nick-responsive{
		display:block;
		margin: 0 auto;
		background-color: #db2379;
		width: 100%;
		border-radius: 0px 0px 5px 5px;
		color: #fff;
		font-weight: bold;
		font-size:18px;
	}
	.list-inline li{
		margin: 5px;
		font-size:18px;
	}
	.dl-responsive dd{
		margin:0px;
	}
	.dl-responsive dt{
		width: 150px;
	}
	.col-xs-12{
		/*padding:0px 0px 0px 0px;*/
	}
	.fc-event, .fc-event-dot{
		background-color:transparent;
	}
	

	.img-profile{
		width:100%;
		height:auto;
		overflow:hidden; 
	}
	.img-profile img{
		width: 100%;
	}
</style>
<div class="container" style="padding-bottom:20px;">
	<div class="row-fluid visible-lg visible-md" style="height:300px;">
		<div id="owl-demo">
			<div class="item"><img src="http://placehold.it/220x240?text=1"></div>
			<div class="item"><img src="//placehold.it/220x240?text=2"></div>
			<div class="item"><img src="//placehold.it/220x240?text=3"></div>
			<div class="item"><img src="//placehold.it/220x240?text=4"></div>
			<div class="item"><img src="//placehold.it/220x240?text=5"></div>
		</div>
	</div>

	<div class="row-fluid visible-md visible-lg" style="margin-top:-80px;color:#45a4c4;position:relative;z-index:2;">
		<div class="col-md-3 col-lg-4">
			<ul class="list-inline">
		<?php	if(!$iAm){	?>
					<li><a href=""><i class="fa fa-envelope"></i></a></li>
					<li><a href="/block/user">Block</a></li>
					<li><a href="/report/user">Report</a></li>
		<?php	}	?>
				<li><div class="modelID-rate"></div></li>
			</ul>
		</div>
		<div class="col-md-4 col-lg-4">
			<div class="textDownPicture visible-lg visible-md">
				<?= $user['nickname']; ?>
				<i class="fa fa-heart<?= $isFavorite; ?> favorite"></i>
			</div>
		</div>
		<div class="col-md-5 col-lg-4 text-right">
	<?php	// if(!$iAm){	?>
				<p><strong>Last Login:</strong> <?= $user['lastLogin']; ?></p>
	<?php	// }
			if(!$iAm){	?>
				<a class="btn btn-blue">Send Request</a>
				<a class="btn btn-pink"><i class="fa fa-video-camera"></i> Start Cam Show</a>
	<?php	}	?>
		</div>
	</div>

	<div class="row-fluid visible-md visible-lg" style="margin-top:80px;color:#949494;">
		<div class="col-lg-3 col-md-3" style="border:1px solid #db2379">
			<h3 class="titleProfile">Personal info</h3>
			<dl class="dl-horizontal">
				<dt>Member since</dt>
				<dd><?= $user['since']; ?></dd>
				
				<dt>Age</dt>
				<dd>29</dd>
				
				<dt>Gender</dt>
				<dd>Female</dd>
				
				<dt>Body type</dt>
				<dd>Average</dd>
				
				<dt>Ethnicity</dt>
				<dd>Ethnicity</dd>
				
				<dt>Orientation</dt>
				<dd>Orientation</dd>
				
				<dt>Hair/Eyes</dt>
				<dd>Hair/Eyes</dd>
				
				<dt>Weight</dt>
				<dd>48Kg</dd>

				<dt>Height</dt>
				<dd>1.6m</dd>

				<dt>Location</dt>
				<dd>Location</dd>

				<dt>Nacionality</dt>
				<dd>Nacionality</dd>

				<dt>Occupation</dt>
				<dd>Nick</dd>

				<dt>Relationship</dt>
				<dd>Single</dd>

				<dt>Languages</dt>
				<dd>English</dd>

				<dt>Features</dt>
			</dl>
		</div>
		<div class="col-lg-9 col-md-9" style="border:1px solid #db2379;">
			 <!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#shopItems" aria-controls="shopItems" role="tab" data-toggle="tab">Shop Items <strong>(13)</strong></a></li>
				<li role="presentation"><a href="#photos" aria-controls="photos" role="tab" data-toggle="tab">Photos <strong>(20)</strong></a></li>
				<li role="presentation"><a href="#auctions" aria-controls="auctions" role="tab" data-toggle="tab">Auctions <strong>(3)</strong></a></li>
				<li role="presentation"><a href="#aboutMe" aria-controls="aboutMe" role="tab" data-toggle="tab">About me</a></li>
				<li role="presentation"><a href="#activityStream" aria-controls="activityStream" role="tab" data-toggle="tab">Activity Stream</a></li>
				<li role="presentation"><a href="#camSchedule" aria-controls="camSchedule" role="tab" data-toggle="tab">Cam Schedule</a></li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Shop Items -->
				<div role="tabpanel" class="tab-pane active" id="shopItems">
					<div class="row" style="margin:10px 0px">
						<div class="col-lg-offset-8 col-lg-4 col-md-offset-6 col-md-6 text-right">
							<select name="categoriesAuctions" data-width="fit" data-title="Categories" class="selectpicker visible-md-inline-block visible-lg-inline-block">
								<option>All</option>
								<option>Videos</option>
								<option>Photo Sets</option>
								<option>Private webcam</option>
								<option>Show booking</option>
								<option>Gifcards</option>
								<option>Social Media</option>
								<option>Sexting</option>
								<option>Phone Sex</option>
								<option>Erotica</option>
								<option>Personal Items</option>
								<option>Sex Toys</option>
								<option>Body Juices</option>
								<option>Photoshoot Bookings</option>
								<option>Other Items</option>
							</select>

							<select name="sortAuctions" data-width="fit" data-title="Sort by" class="selectpicker visible-md-inline-block visible-lg-inline-block">
								<option>All</option>
								<option>Latest</option>
								<option>Most Viewed</option>
								<option>Best Rated</option>
								<option>Most Sold</option>
								<option>Price</option>
							</select>
						</div>
					</div>
					<div class="row-fluid img">
						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>
					</div>
				</div>

				<!-- Photos -->
				<div role="tabpanel" class="tab-pane" id="photos">
					<div class="row-fluid img">
						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>
					</div>
				</div>

				<!-- Auctions -->
				<div role="tabpanel" class="tab-pane" id="auctions">
					<div class="row" style="margin:10px 0px">
						<div class="col-lg-offset-8 col-lg-4 col-md-offset-6 col-md-6 text-right">
							<select name="categoriesAuctions" data-width="fit" data-title="Categories" class="selectpicker visible-md-inline-block visible-lg-inline-block">
								<option>All</option>
								<option>Videos</option>
								<option>Photo Sets</option>
								<option>Private webcam</option>
								<option>Show booking</option>
								<option>Gifcards</option>
								<option>Social Media</option>
								<option>Sexting</option>
								<option>Phone Sex</option>
								<option>Erotica</option>
								<option>Personal Items</option>
								<option>Sex Toys</option>
								<option>Body Juices</option>
								<option>Photoshoot Bookings</option>
								<option>Other Items</option>
							</select>

							<select name="sortAuctions" data-width="fit" data-title="Sort by" class="selectpicker visible-md-inline-block visible-lg-inline-block">
								<option>All</option>
								<option>Latest</option>
								<option>Most Viewed</option>
								<option>Best Rated</option>
								<option>Most Sold</option>
								<option>Price</option>
							</select>
						</div>
					</div>
					<div class="row-fluid img">
						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3 col-md-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>
					</div>
				</div>

				<!-- About Me -->
				<div role="tabpanel" class="tab-pane" id="aboutMe">
					<h2>This is me</h2>
					<p>Hello guys! A little somethings about mysqlf. I was born in Thailand but Ive lived in England all my life, I go back to visit family in Thailand often and can still speak the language fluently! I am currently learning to speak Japanese, I enjoy learning new things all the time, in every aspcet of life!</p>
					
					<h2>My kinks/fetishes</h2>
					<p style="font-size:18px;"><pink>A finger in the ass and dick in the pussy(Receiving) - ass play(Everything to do with it) -ass worship(Everything to do with it) -Butt plugs(Everithing to do with it) -cock milkink(Giving) -hot oil massages(Receiving) -lesbian domination(Giving) - rimming(Everything to do with it) -teasing(Receiving).</pink></p>
					
					<h2>Links / Wishlist</h2>
					<p>
						<ul style="list-style: none;">
							<li>Facebook</li>
							<li>Twitter</li>
							<li>Instagram</li>
							<li>Tumblr</li>
							<li>Official website</li>
							<li>Amazon Wishlist</li>
							<li>Other</li>
						</ul>
					</p>
					
					<h2>Interview</h2>
				</div>

				<!-- Activity Stream -->
				<div role="tabpanel" class="tab-pane" id="activityStream">
					<div class="row" style="margin:10px 0px;">
						<div class="col-lg-12 col-md-12 headActivityStream">
							<div class="row-fluid">
								<div class="col-lg-3 col-md-3"><strong class="timeline">Timeline</strong></div>
								<div class="col-lg-6 col-md-6">
									<p class="text-center">
										<strong>Golosita8965 has uploaded video</strong><br>
										Sep 20 2016, 3:27pm
									</p>
								</div>
								<div class="col-lg-offset-2 col-lg-1 col-md-offset-2 col-md-1">
									<img src="/img/member.png" class="img-responsive img-circle" style="margin:6px  0px 0px 0px">
								</div>
							</div>
						</div>
						<video width="100%" controls>
							<source src="/users/3/videos/videotest.mp4" type="video/mp4">
						</video>
					</div>
					
					<div class="row" style="margin:10px 0px;">
						<div class="col-lg-12 col-md-12 headActivityStream">
							<div class="row-fluid">
								<div class="col-lg-3 col-md-3"><strong class="timeline">Timeline</strong></div>
								<div class="col-lg-6 col-md-6">
									<p class="text-center">
										<strong>Golosita8965 has uploaded video</strong><br>
										Sep 20 2016, 3:27pm
									</p>
								</div>
								<div class="col-lg-offset-2 col-lg-1 col-md-offset-2 col-md-1">
									<img src="/img/member.png" class="img-responsive img-circle" style="margin:6px  0px 0px 0px">
								</div>
							</div>
						</div>
						<video width="100%" controls>
							<source src="/users/3/videos/videotest.mp4" type="video/mp4">
						</video>
					</div>
				</div>

				<!-- Cam Schedule -->
				<div role="tabpanel" class="tab-pane" id="camSchedule">
					<div class="row-fluid">
						<div class="col-lg-12 col-md-12">
							<div class="calendar"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Visible for xs and sm in bootstrap -->
		<div class="row-fluid visible-sm visible-xs">
			<div class="col-xs-12 col-sm-offset-3 col-sm-6 text-center">
				<div class="img-responsive">
					<div class="img-profile">
						<img src="http://placehold.it/330x300?text=Picture" class="img-responsive">
					</div>
					<span class="nick-responsive">
						<?= $user['nickname']; ?>
						<i class="fa fa-heart<?= $isFavorite; ?> favorite"></i>
					</span>
				</div>
			</div>
		</div>
		<div class="row-fluid visible-sm visible-xs">
			<div class="col-xs-12 col-sm-6 text-center">
				<ul class="list-inline">
			<?php	if(!$iAm){	?>
						<li><a href=""><i class="fa fa-envelope"></i></a></li>
						<li><a href="/block/user">Block</a></li>
						<li><a href="/report/user">Report</a></li>
			<?php	}	?>
					<li><div class="modelID-rate"></div></li>
				</ul>
			</div>
			<div class="col-xs-12 col-sm-6 text-center" style="color:#45a4c4;font-size:20px;">
				<p><strong>Last Login:</strong> <?= $user['lastLogin']; ?></p>
				<?php
					if(!$iAm){	?>
						<a class="btn btn-pink" style="padding: 4px 7px;margin: 0px 0px 10px 0px;font-size: 12px;"><i class="fa fa-video-camera"></i> Start Cam Show</a>
						<a class="btn btn-blue" style="padding: 4px 7px;margin: 0px 0px 10px 0px;font-size: 12px;">Send Request</a>
				<?php	}	?>
			</div>
		</div>
	<div class="row-fluid visible-sm visible-xs">
		<div class="col-xs-12 col-sm-12">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<!-- Personal Info -->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
						<h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Personal Info
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body">
							<div class="row-fluid">
								<dl class="dl-horizontal dl-responsive">
									<div class="col-sm-6">
										<dt>Member since</dt>
										<dd><?= $user['since']; ?></dd>
										
										<dt>Age</dt>
										<dd>29</dd>
										
										<dt>Gender</dt>
										<dd>Male</dd>
										
										<dt>Body type</dt>
										<dd>Average</dd>
										
										<dt>Ethnicity</dt>
										<dd>Ethnicity</dd>
										
										<dt>Orientation</dt>
										<dd>Orientation</dd>

										<dt>Hair/Eyes</dt>
										<dd>Hair/Eyes</dd>
										
										<dt>Weight</dt>
										<dd>58Kg</dd>
									</div>
									<div class="col-sm-6">
										<dt>Height</dt>
										<dd>1.6m</dd>

										<dt>Location</dt>
										<dd>Location</dd>

										<dt>Nacionality</dt>
										<dd>Nacionality</dd>

										<dt>Ocuppation</dt>
										<dd>Nick</dd>

										<dt>Relationship</dt>
										<dd>Single</dd>

										<dt>Languages</dt>
										<dd>English</dd>

										<dt>Features</dt>
									</div>
								</dl>
							</div>
						</div>
					</div>
				</div>
				<!-- /Personal info -->

				<!-- Shop Items -->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Shop Items <strong>(13)</strong>
							</a>
						</h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
						<div class="panel-body">
							<div class="row" style="margin:10px 0px">
								<div class="col-xs-12 col-sm-12">
									<select name="categoriesAuctions" data-width="fit" data-title="Categories" class="selectpicker visible-md-inline-block visible-lg-inline-block">
										<option>All</option>
										<option>Videos</option>
										<option>Photo Sets</option>
										<option>Private webcam</option>
										<option>Show booking</option>
										<option>Gifcards</option>
										<option>Social Media</option>
										<option>Sexting</option>
										<option>Phone Sex</option>
										<option>Erotica</option>
										<option>Personal Items</option>
										<option>Sex Toys</option>
										<option>Body Juices</option>
										<option>Photoshoot Bookings</option>
										<option>Other Items</option>
									</select>
								</div>
								<div clas="col-xs-12 col-sm-12">
									<select name="sortAuctions" data-width="fit" data-title="Sort by" class="selectpicker visible-md-inline-block visible-lg-inline-block">
										<option>All</option>
										<option>Latest</option>
										<option>Most Viewed</option>
										<option>Best Rated</option>
										<option>Most Sold</option>
										<option>Price</option>
									</select>
								</div>
							</div>
							<div class="row-fluid img">
								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Shop Items -->

				<!-- Photos -->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Photos <strong>(20)</strong>
							</a>
						</h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
						<div class="panel-body">
							<div class="row-fluid img">
								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>

								<div class="col-xs-6 col-sm-4">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Photos -->

				<!-- Auctions -->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingFour">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								Auctions <strong>(3)</strong>
							</a>
						</h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
						<div class="panel-body">
							<div class="row-fluid img">
								<div class="col-lg-offset-8 col-lg-4 col-md-offset-6 col-md-6 text-right">
									<select name="categoriesAuctions" data-width="fit" data-title="Categories" class="selectpicker visible-md-inline-block visible-lg-inline-block">
										<option>All</option>
										<option>Videos</option>
										<option>Photo Sets</option>
										<option>Private webcam</option>
										<option>Show booking</option>
										<option>Gifcards</option>
										<option>Social Media</option>
										<option>Sexting</option>
										<option>Phone Sex</option>
										<option>Erotica</option>
										<option>Personal Items</option>
										<option>Sex Toys</option>
										<option>Body Juices</option>
										<option>Photoshoot Bookings</option>
										<option>Other Items</option>
									</select>

									<select name="sortAuctions" data-width="fit" data-title="Sort by" class="selectpicker visible-md-inline-block visible-lg-inline-block">
										<option>All</option>
										<option>Latest</option>
										<option>Most Viewed</option>
										<option>Best Rated</option>
										<option>Most Sold</option>
										<option>Price</option>
									</select>
								</div>
							</div>
							<div class="row-fluid img">
								<div class="col-xs-6 col-sm-12">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-12">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>

								<div class="col-xs-6 col-sm-12">
									<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
									<span class="title">Bra de Flores</span>
									<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
									<span class="price">$150</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Auctions -->

				<!-- About Me -->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingFive">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								About me
							</a>
						</h4>
					</div>
					<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
						<div class="panel-body">
							<h2>This is me</h2>
							<p>Hello guys! A little somethings about mysqlf. I was born in Thailand but Ive lived in England all my life, I go back to visit family in Thailand often and can still speak the language fluently! I am currently learning to speak Japanese, I enjoy learning new things all the time, in every aspcet of life!</p>
							
							<h2>My kinks/fetishes</h2>
							<p style="font-size:18px;"><pink>A finger in the ass and dick in the pussy(Receiving) - ass play(Everything to do with it) -ass worship(Everything to do with it) -Butt plugs(Everithing to do with it) -cock milkink(Giving) -hot oil massages(Receiving) -lesbian domination(Giving) - rimming(Everything to do with it) -teasing(Receiving).</pink></p>
							
							<h2>Links / Wishlist</h2>
							<p>
								<ul style="list-style: none;">
									<li>Facebook</li>
									<li>Twitter</li>
									<li>Instagram</li>
									<li>Tumblr</li>
									<li>Official website</li>
									<li>Amazon Wishlist</li>
									<li>Other</li>
								</ul>
							</p>
							
							<h2>Interview</h2>
						</div>
					</div>
				</div>
				<!-- /About Me -->


				<!-- Activity Stream -->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingSix">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								Activity Stream
							</a>
						</h4>
					</div>
					<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
						<div class="panel-body">
							<div class="row-fluid" style="margin:10px 0px;">
								<div class="col-xs-12 col-sm-12 headActivityStream">
									<div class="row-fluid">
										<div class="col-xs-4 col-sm-3 text-center"><strong class="timeline">Timeline</strong></div>

										<div class="col-xs-offset-5 col-xs-3 col-sm-offset-7 col-sm-2 text-center">
											<img src="/img/member.png" class="img-responsive img-circle" style="margin:0 auto;margin-top:5px;width:55px;">
										</div>

										<div class="col-xs-12 col-sm-12">
											<p class="text-center">
												<strong>Golosita8965 has uploaded video</strong><br>
												Sep 20 2016, 3:27pm
											</p>
										</div>
									</div>
								</div>
								<video width="100%" controls>
									<source src="/users/3/videos/videotest.mp4" type="video/mp4">
								</video>
							</div>

							<div class="row-fluid" style="margin:10px 0px;">
								<div class="col-xs-12 col-sm-12 headActivityStream">
									<div class="row-fluid">
										<div class="col-xs-4 col-sm-3 text-center"><strong class="timeline">Timeline</strong></div>

										<div class="col-xs-offset-5 col-xs-3 col-sm-offset-7 col-sm-2 text-center">
											<img src="/img/member.png" class="img-responsive img-circle" style="margin:0 auto;margin-top:5px;width:55px;">
										</div>

										<div class="col-xs-12 col-sm-12">
											<p class="text-center">
												<strong>Golosita8965 has uploaded video</strong><br>
												Sep 20 2016, 3:27pm
											</p>
										</div>
									</div>
								</div>
								<video width="100%" controls>
									<source src="/users/3/videos/videotest.mp4" type="video/mp4">
								</video>
							</div>
							
							<!-- <div class="row" style="margin:10px 0px;">
								<div class="col-lg-12 col-md-12 headActivityStream">
									<div class="row-fluid">
										<div class="col-lg-3 col-md-3"><strong class="timeline">Timeline</strong></div>
										<div class="col-lg-6 col-md-6">
											<p class="text-center">
												<strong>Golosita8965 has uploaded video</strong><br>
												Sep 20 2016, 3:27pm
											</p>
										</div>
										<div class="col-lg-offset-2 col-lg-1 col-md-offset-2 col-md-1">
											<img src="/img/member.png" class="img-responsive img-circle" style="margin:6px  0px 0px 0px">
										</div>
									</div>
								</div>
								<video width="100%" controls>
									<source src="http://4unity.mx/proyectos/proyectxqa/users/3/videos/videotest.mp4" type="video/mp4">
								</video>
							</div> -->
						</div>
					</div>
				</div>
				<!-- /Activity Stream -->

				<!-- Cam Schedule -->
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingSeven">
						<h4 class="panel-title">
							<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
								Cam Schedule
							</a>
						</h4>
					</div>
					<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
						<div class="panel-body">
							<div class="row-fluid">
								<div class="col-xs-12 col-sm-12">
									<div class="calendar"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Cam Schedule -->

			</div>
		</div>
	</div>




</div>

<script>
	var owl = $("#owl-demo");
	owl.owlCarousel({
		center: true,
		loop: true,
		items: 5,
		nav: true,
		navText: ['<i class="fa fa-caret-left fa-3x"></i>', '<i class="fa fa-caret-right fa-3x"></i>']
	});
	$('.selectpicker').selectpicker();

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		if(e.currentTarget['hash'] == "#camSchedule"){
			loadCalendar();
		}
	})
	$('#collapseSeven').on('shown.bs.collapse', function () {
		loadCalendar();
	})

	function loadCalendar(){
		$('.calendar').fullCalendar({
			header: {
				left: 'title',
				center: '',
				right: ''
			},
			defaultDate: '<?= date("Y-m-d"); ?>',//'2016-10-28',
			events: [
				{
					title  : '<img style="margin-right:10px;height:20px;" src="/plugins/glyphicons_free/glyphicons/png/glyphicons-302-webcam-pink.png">',
					start  : '2016-10-01'
				},
				{
					title  : '<img style="margin-right:10px;height:20px;" src="/plugins/glyphicons_free/glyphicons/png/glyphicons-302-webcam-pink.png">',
					start  : '2016-10-05'
				},
				{
					title  : '<img style="margin-right:10px;height:20px;" src="/plugins/glyphicons_free/glyphicons/png/glyphicons-302-webcam-pink.png">',
					start  : '2016-10-10'
				}
			]
		});
	}
</script>