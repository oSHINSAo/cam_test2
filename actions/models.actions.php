<?php
	if(isset($_POST['action'])){
		// require "";
		require $_SERVER['DOCUMENT_ROOT']."/class/models.class.php";
		$models = new Models();
		switch ($_POST['action']) {
			case 'register':
					$nick	= (isset($_POST['nick'])) ? $_POST['nick'] : '0';
					$email = (isset($_POST['email'])) ? $_POST['email'] : '0';
					$pass	= (isset($_POST['pass'])) ? $_POST['pass'] : '0';
					$type	= (isset($_POST['type'])) ? $_POST['type'] : '0';
					echo json_encode($models->register($nick, $email, $pass, $type));
				break;
			case 'changeEmail':
					echo json_encode($models->changeEmail($_POST['email']));
				break;
			case 'updateDetails':
					unset($_POST['action']);
					echo json_encode($models->updateDetails($_POST));
				break;
			case 'uploadFile':
					echo json_encode($models->uploadFile($_FILES, $_POST));
				break;
			case 'registerComplete':
					echo json_encode($models->registerComplete());
				break;
			case 'updateDetailsStudio':
					$studioInfo				= $_POST['studioInfo'];
					$managerInfo				= $_POST['managerInfo'];
					$studioInfo['idCountry']	= $studioInfo['country'];
					unset($studioInfo['country']);

					$managerInfo['idCountry']	= $managerInfo['country'];
					$managerInfo['birthdate']		= $managerInfo['year']."-".$managerInfo['month']."-".$managerInfo['day'];
					unset($managerInfo['country']);
					unset($managerInfo['year']);
					unset($managerInfo['month']);
					unset($managerInfo['day']);

					echo json_encode($models->updateDetailsStudio($studioInfo,$managerInfo));
				break;
			case 'edit':
					$arrayFinish['success'] = 0;
					if( $_POST['step'] == 3 || $_POST['step'] == 4 || $_POST['step'] == 6 ){
						$_SESSION['registerSteps'] = $_POST['step'];
						$_SESSION['viewerEdit'] = 1;
						$arrayFinish['success'] = 1;
					}
					echo json_encode($arrayFinish);
				break;
		}
	}