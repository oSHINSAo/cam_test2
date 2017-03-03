<?php
	echo (isset($showWarning)) ? '<div class="capa animated"></div>' : ''; 
	$showLogged = false;
	if(isset($_SESSION['iduser'])){
		require_once $_SERVER['DOCUMENT_ROOT']."/class/users.class.php";
		$users	= new Users();
		$user	= $users->getInfo($_SESSION['iduser']);
		if($user['registerComplete'] == 1){
			$showLogged = true;
		}
	}
?>
<!-- Header -->
<header>
	<!-- Navbar -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php
					$local = 0;
					if($local == 1){	?>
						<a class="navbar-brand" href="/" style="padding-top:0px;"><img src="http://placehold.it/242x120?text=Logo"></a>
			<?php	}else if($local == 0){	?>
						<a class="navbar-brand" href="/" style="padding:0px;"><img src="/img/logo.png" alt=""></a>
			<?php	}	?>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
		<?php	if($showLogged === false){	?>
				<ul class="nav navbar-nav navbar-left visible-xs">
					<li class="col-xs-6"><a href="/modals/register.php" data-width="600" class="modaal-ajax button-su textCenter">Sign up</a></li>
					<li class="col-xs-6"><a href="/modals/loginUsers.php" data-width="500" class="modaal-ajax button-li loginAction textCenter">Log in</a></li>
				</ul>
		<?php	}	?>
				<ul class="nav navbar-nav navbar-left">
					<li class="nav-item activeWebcams"><a href="/">Webcams</a></li>
					<li class="nav-item activeModels"><a href="/models">Models</a></li>
					<li class="nav-item activeAuctions"><a href="/auctions-and-requests">Auctions &amp; requests</a></li>
					<li class="nav-item activeShop"><a href="/shop">Shop</a></li>
					<li class="nav-item activeNewsfeed"><a href="/newsfeed">Newsfeed</a></li>
				</ul>
				<form class="form-inline navbar-form navbar-left">
					<div class="input-group add-on">
						<input type="search" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
				</form>
			
			<?php	if($showLogged === false){	?>
			
					<ul class="nav nabvar-nav navbar-right hidden-xs">
						<li><a href="/modals/register.php" data-width="600" class="modaal-ajax button-su button-su-click">Sign up</a></li>
						<li><a href="/modals/loginUsers.php" data-width="500" class="modaal-ajax button-li loginAction login-action">Log in</a></li>
						<a href="/modals/forgotPasswordUsers.php" class="modaal-ajax forgotPasswordAction" data-width="500" style="display:none;"></a>

			<?php	}else if($showLogged === true){	?>
					
					<ul class="nav nabvar-nav navbar-right">
						<li class="size18"><a href="#"><span class="bucks">100</span> Bucks</a></li>
						<li>
							<a href="/messages">
								<i class="fa fa-envelope messageH"></i>
								<span class="number">0</span>
							</a>
						</li>
						<li style="margin-top: -50px;" class="textCenter">
							<div class="dropdown" style="margin: 0px 0px 0px 20px;">
								<a id="dLabel" class="notUnderlineHover" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="nickname"><?= $user['nickname']; ?></span>
									<img src="/img/member.png" style="height:50px;margin: 0px 0px 20px 0px;border-radius: 47px;border: 1px solid;overflow: hidden;">
									<i class="fa fa-caret-down" style="font-size: 20px;margin: 15px 0px 0px 0px;vertical-align: middle;color: #45a3c5;"></i>
								</a>

								<ul class="dropdown-menu userMenu" aria-labelledby="dLabel">
									<li><a href="/profile">My Profile</a></li>
									<li><a href="/settings">Settings</a></li>
									<li><a href="/help">Help</a></li>
									<li><a href="/logout">Log out</a></li>
								</ul>
							</div>
						</li>

			<?php	}	?>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<div class="modal fade modalRecipient" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content"></div>
		</div>
	</div>
	<!-- /.Navbar -->

<?php	if($showLogged === false){	?>
		<a class="modaal-ajax registerMembersAction" href="/modals/registerUser.php" data-width="450" style="visibility: hidden;"></a>
		<!-- Register  User -->
			<div class="modal fade register" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title textCenter">Join now our growing community for <span>FREE!</span></h3>
							<h3 class="modal-title textCenter">Enjoy full access to Camlicious.com</h3>
							<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title textCenter">I want register as</h4> -->
						</div>
						<div class="modal-body textCenter">
							<p>Please choose the type of account you would like to have:</p>
							<a data-dismiss="modal" href="/modals/registerUser.php" class="modaal-ajax btn btn-primary ls-modal">User</a>
							<a href='/registerModel' class="btn btn-danger">Model</a>
						</div>
					</div>
				</div>
			</div>
<?php	}	?>
</header>