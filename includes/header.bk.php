<header class="row">
	<div class="col-md-2">
		<img src="http://placehold.it/350x150?text=Camlicious" class="logo" alt="logo" title="Camlicious">
	</div>
	
	<div class="col-md-6">
		<div class="input-group">
			<div class="input-group-btn">
				<select class="selectpicker">
					<option>Webcams</option>
					<option>Models</option>
					<option>Auctions & Requests</option>
					<option>Shop</option>
					<option>Newsfeed</option>
				</select>
			</div><!-- /btn-group -->
			<input type="text" class="form-control" aria-label="...">
		</div><!-- /input-group -->
	</div>
	<div class="col-md-4">
<?php	if(!isset($_SESSION['iduser'])){	?>
		<a class="modaal-ajax btn btn-warning" href="/modals/registerUser.php" data-width="350">Register now!</a>
		<a class="modaal-ajax btn btn-default" href="modals/loginUsers.php" data-width="350">Log in</a>
<?php	}	?>
	</div>
</header>
<div class="modal fade modalRecipient" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content"></div>
	</div>
</div>

<?php	if(!isset($_SESSION['iduser'])){	?>
		<!-- Register  User -->
			<div class="modal fade register" tabindex="-1" role="dialog">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title textCenter">I want register as</h4>
						</div>
						<div class="modal-footer textCenter">
							<a data-dismiss="modal" data-toggle="modal"  href="modals/registerUser.php" data-target=".modalRecipient" class="btn btn-primary ls-modal">User</a>
							<a href='/registerModel' class="btn btn-danger">Model</a>
						</div>
					</div>
				</div>
			</div>
<?php	}	?>