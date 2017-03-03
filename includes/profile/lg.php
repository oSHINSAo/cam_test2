<style>
	@media (max-width: 1200px) {
		.center .item img{height: 240px !important;overflow:hidden;}
		.nav.nav-tabs li a {	font-size:13px;}
	}
	.owl-carousel .owl-item {
		margin-top:15px;
	}
	.owl-carousel .center{
		margin-top:0px;
	}
	.textDownPicture-lg{width: 228px;text-align: center;font-weight: bold;color:#fff;background-color: #db2379;border-radius: 0px 0px 10px 10px;position: relative;top:20px;left: 61px;}
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
	.headActivityStream{
		background-color:#db2379;
		color: #fff;
	}
	.timeline{
		line-height: 50px;
	}
</style>

<!-- /// CSS -->


<div class="container">
	<div class="row-fluid visible-lg visible-md" style="height:300px;">
		<div id="owl-demo">
			<div class="item"><img src="http://placehold.it/220x240?text=1"></div>
			<div class="item"><img src="//placehold.it/220x240?text=2"></div>
			<div class="item"><img src="//placehold.it/220x240?text=3"></div>
			<div class="item"><img src="//placehold.it/220x240?text=4"></div>
			<div class="item"><img src="//placehold.it/220x240?text=5"></div>
		</div>
	</div>

	<div class="row-fluid" style="margin-top:-80px;color:#45a4c4;position:relative;z-index:2;">
		<div class="col-md-3 col-lg-4">
			<ul class="list-inline">
				<li><a href=""><i class="fa fa-envelope"></i></a></li>
				<li><a href="/block/user">Block</a></li>
				<li><a href="/report/user">Report</a></li>
			</ul>
		</div>
		<div class="col-md-4 col-lg-4">
			<div class="textDownPicture-lg visible-lg">
				nick <i class="fa fa-heart-o"></i>
			</div>
		</div>
		<div class="col-md-5 col-lg-4 text-right">
			<p><strong>Last Login:</strong> 07/09/2016</p>
			<a class="btn btn-pink"><i class="fa fa-video-camera"></i> Start Cam Show</a>
			<a class="btn btn-blue">Send Request</a>
		</div>
	</div>

	<div class="row-fluid" style="margin-top:80px;color:#949494;">
		<div class="col-lg-3" style="border:1px solid #db2379">
			<h3 class="titleProfile">Personal info</h3>
			<dl class="dl-horizontal">
				<dt>Member since</dt>
				<dd>07/09/2016</dd>
				
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

				<dt>Ocuppation</dt>
				<dd>Nick</dd>

				<dt>Relationship</dt>
				<dd>Single</dd>

				<dt>Languages</dt>
				<dd>English</dd>

				<dt>Features</dt>
			</dl>
		</div>
		<div class="col-lg-9" style="border:1px solid #db2379;">
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
						<div class="col-lg-offset-8 col-lg-4">
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
						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
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
						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<p class="descripcion">Descripción</p>
						</div>
					</div>
				</div>

				<!-- Auctions -->
				<div role="tabpanel" class="tab-pane" id="auctions">
					<div class="row" style="margin:10px 0px">
						<div class="col-lg-offset-8 col-lg-4">
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
						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción asdasdsad asdasd asda ds ads asd sd</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
							<img src="http://placehold.it/240x200?text=Bra" class="img-responsive">
							<span class="title">Bra de Flores</span>
							<p class="descripcion">Descripción</p>
							<span class="price">$150</span>
						</div>

						<div class="col-lg-3">
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
						<div class="col-lg-12 headActivityStream">
							<div class="row-fluid">
								<div class="col-lg-3"><strong class="timeline">Timeline</strong></div>
								<div class="col-lg-6">
									<p class="text-center">
										<strong>Golosita8965 has uploaded video</strong><br>
										Sep 20 2016, 3:27pm
									</p>
								</div>
								<div class="col-lg-offset-2 col-lg-1 text-">
									<img src="/img/member.png" class="img-responsive img-circle" style="margin:6px  0px 0px 0px">
								</div>
							</div>
						</div>
						<video width="100%" controls>
							<source src="http://4unity.mx/proyectos/proyectxqa/users/3/videos/videotest.mp4" type="video/mp4">
						</video>
					</div>
					
					<div class="row" style="margin:10px 0px;">
						<div class="col-lg-12 headActivityStream">
							<div class="row-fluid">
								<div class="col-lg-3"><strong class="timeline">Timeline</strong></div>
								<div class="col-lg-6">
									<p class="text-center">
										<strong>Golosita8965 has uploaded video</strong><br>
										Sep 20 2016, 3:27pm
									</p>
								</div>
								<div class="col-lg-offset-2 col-lg-1 text-">
									<img src="/img/member.png" class="img-responsive img-circle" style="margin:6px  0px 0px 0px">
								</div>
							</div>
						</div>
						<video width="100%" controls>
							<source src="http://4unity.mx/proyectos/proyectxqa/users/3/videos/videotest.mp4" type="video/mp4">
						</video>
					</div>
				</div>

				<!-- Cam Schedule -->
				<div role="tabpanel" class="tab-pane" id="camSchedule">
					<div class="row-fluid">
						<div class="col-lg-12 col-md-12">
							<h2><pink><?= date("F"); ?></pink></h2>
							<table class="table">
								<thead>
									<tr>
										<th class="text-center">SUN</th>
										<th class="text-center">MON</th>
										<th class="text-center">TUE</th>
										<th class="text-center">WED</th>
										<th class="text-center">THR</th>
										<th class="text-center">FRI</th>
										<th class="text-center">SAT</th>
									</tr>
								</thead>
								<tbody>
<?php
	$days	= array(
		'SUN' => 0,
		'MON' => 1,
		'TUE' => 2,
		'WED' => 3,
		'THR' => 4,
		'FRI' => 5,
		'SAT' => 6,
		'month' => date("t")
	);
	for ($i=1; $i < $days['month']+1; $i++) {
	 	ECHO "";	
	}
?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- // HTML -->








<script>
	$(document).ready(function(){
		var owl = $("#owl-demo");
		owl.owlCarousel({
			center: true,
			loop: true,
			items: 5,
			nav: true,
			navText: ['<i class="fa fa-caret-left fa-3x"></i>', '<i class="fa fa-caret-right fa-3x"></i>']
		});
		$('#myTabs a').click(function (e) {
			e.preventDefault()
			$(this).tab('show')
		})
		$('.selectpicker').selectpicker();
	});
</script>

