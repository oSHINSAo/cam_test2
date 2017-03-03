<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/includes/config.php";
	// require_once $_SERVER['DOCUMENT_ROOT']."/cifrado.php";
	// require_once $_SERVER['DOCUMENT_ROOT']."/class/mailsend.class.php"; // File Required for send email
	// require_once $_SERVER['DOCUMENT_ROOT']."/class/mailing.template.class.php"; // File Required for send email
	// error_reporting(E_ALL);
	class Models{
		// REGISTER FOR ACCOUNT
		public function register($nick,$email,$pass,$type){
			$mailing	= new Mailing();
			$template	= new MailingTemplate();
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$path		= $_SERVER['DOCUMENT_ROOT']."/models";
			$pass		= $cifrado->encrypt($pass, $conn->generateToken()); // Password Encript
			$token		= $cifrado->encrypt($nick, $conn->generateToken()); // Token Encript// $query		= $conn->prepare("call users_register(:nick, :email, :pass, :token)"); // Preapre Stored Procedure for execute
			$query		= $conn->prepare("call models_register(?, ?, ?, ?, ?)"); // Preapre Stored Procedure for execute// $query->bindParam(':nick', $nick); // BindParam for nick// $query->bindParam(':email', $email); // BindParam for email// $query->bindParam(':pass', $pass); // BindParam for password// $query->bindParam(':token', $token); // BindParam for token
			// IF execute the Store Procedure
			if($query->execute([$nick, $email, $pass, $token, $type])){
				$arrayFinish	= $query->fetch(PDO::FETCH_ASSOC);
				$_SESSION['registerSteps'] = 2;
				$sql		= "UPDATE user SET registerStep=? where id=?";
				$params	= [2,$arrayFinish['id']];
				$query		= $conn->prepare($sql);
				$query->execute($params);


				$idDir			= $cifrado->encrypt($arrayFinish['id'], $conn->generateToken());
				$path			.= "/".$idDir;
				if(!file_exists($path)){	mkdir($path);	}
				if(file_exists($path)){
					if(!file_exists($path."/register")){	mkdir($path."/register");	}
					if(!file_exists($path."/photos")){	mkdir($path."/photos");	}
					$arrayFinish['error'] = 1;
				}

				$_SESSION['registerNick']	= $cifrado->encrypt($nick, $conn->generateToken());
				$link	= "http://".$_SERVER['HTTP_HOST']."/".$token.".act"; // Generate link for activate account register
				$attr	= [
					"nick" => $nick,
					"link" => $link,
					"subject" => 'Activate your account'
				]; // Attribute for template email
				// IF not sent email
				$body = $template->select('activateAccount.php', $attr);
				if($mailing->sendMail($email, $body, $attr)){
					$query  = $conn->prepare("UPDATE users SET sentEmail=1 where nickname = ?");
					$query->execute([$nick]);
				}
				return $arrayFinish;
			}
		}

		// CHANGE EMAIL TO MODEL
		public function changeEmail($email){
			$mailing	= new Mailing();
			$template	= new MailingTemplate();
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$nick		= $cifrado->decrypt($_SESSION['registerNick'], $conn->generateToken());
			$query		= $conn->prepare("UPDATE users set email = ? where nickname = ?");
			if($query->execute([$email, $nick])){
				$query = $conn->prepare("SELECT 1 success, 'Email successfully changed, please check your email and validate this account' msg from users where nickname = ? and email = ?");
				// IF execute the Store Procedure
				if($query->execute([$nick, $email])){
					$arrayFinish = $query->fetch(PDO::FETCH_ASSOC);
					$arrayFinish['idUser'] = $cifrado->encrypt($nick, $conn->generateToken());
					$token		= $cifrado->encrypt($nick, $conn->generateToken()); // Token Encript
					$link	= "http://".$_SERVER['HTTP_HOST']."/".$token.".act"; // Generate link for activate account register
					$attr	= [
						"nick" => $nick,
						"link" => $link,
						"subject" => 'Activate your account'
					]; // Attribute for template email
					// IF not sent email
					$body = $template->select('activateAccount.php', $attr);
					if($mailing->sendMail($email, $body, $attr)){
						$query  = $conn->prepare("UPDATE users SET sentEmail=1 where nickname = ?");
						$query->execute([$nick]);
					}
					return $arrayFinish;
				}
			}
		}

		// UPDATE DETAILS
		public function updateDetails($details){
			$arrayFinish = ["success" => 0];
			$details = $this->stripTags($details);
			$conn = new Conexion();
			$cifrado = new cifrado();
			$iduser = $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());
			$birthdate = $details['year']."-".$details['month']."-".$details['day'];
			$parameters = [ $details['first'], $details['middle'], $details['last'], $birthdate, $details['gender'], $details['address'], $details['town-city'], $details['zipcode'], $details['country'], $iduser ];
			$sql = "UPDATE models_details set firstname = ?, middlename = ?, lastname = ?, birthdate = ?, gender = ?, address = ?, `town-city` = ?, zipcode = ?, country = ? WHERE idUser = ?";
			$query = $conn->prepare($sql);
			if($query->execute($parameters)){
				$arrayFinish['success'] = 1;
				if(isset($_SESSION['viewerEdit']) && $_SESSION['viewerEdit'] == 1){
					$_SESSION['registerSteps'] = 5;
				}else{
					$_SESSION['registerSteps'] = 4;
				}
				$sql = "UPDATE users SET registerStep=:registerStep where idUser=:iduser";
				$query1 = $conn->prepare($sql);
				$query1->bindParam(':registerStep', $_SESSION['registerSteps']);
				$query1->bindParam(':iduser', $iduser);
				$query1->execute();
			}
			return $arrayFinish;
		}

		// UPDATE DETAILS studio
		public function updateDetailsStudio($studioInfo,$managerInfo){
			$arrayFinish	= ['success' => 0];
			$studioInfo	= $this->stripTags($studioInfo);
			$managerInfo	= $this->stripTags($managerInfo);
			$conn			= new Conexion();
			$cifrado		= new cifrado();
			$iduser		= $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());

			ksort($studioInfo);
			$studioInfo['idStudio'] = $iduser;
			$sql			= "UPDATE studio_info SET address = ?, idCountry = ?, name = ?, numberModels = ?, `town-city` = ?, zipcode = ? where idStudio = ?";
			$query			= $conn->prepare($sql);
			if($query->execute(array_values($studioInfo))){
				$arrayFinish['success'] = 1;
			}else{
				$arrayFinish['errormsg1'] = $query->errorInfo();
			}
			
			ksort($managerInfo);
			$managerInfo['idStudio'] = $iduser;
			unset($sql);
			unset($query);
			$sql = "UPDATE studio_managerInfo SET address = ?, birthdate = ?, firstname = ?, idCountry = ?, lastname = ?, `town-city` = ?, zipcode = ? where idStudio = ?";
			$query = $conn->prepare($sql);
			if($arrayFinish['success'] == 1){
				if($query->execute(array_values($managerInfo))){
					$arrayFinish['success'] = 1;
				}else{
					$arrayFinish['errormsg2'] = $query->errorInfo();
				}
			}

			if($arrayFinish['success'] == 1){
				$_SESSION['registerSteps'] = 4;
			}

			return $arrayFinish;
		}

		public function stripTags($array){
			foreach($array as $key => $value){
				$array[$key] = strip_tags($value);
			}
			return $array;
		}

		//UPLOAD A PIC FOR  REGISTER THE MODEL
		public function uploadFile($pic, $params){
			$upload_folder		= $_SERVER['DOCUMENT_ROOT'].'/models/'.$_SESSION['iduser'].'/register/';
			$arrayFinish['error']	= 0;

			$exts					= ['jpeg'=>1,'jpg'=>1,'png'=>1,'gif'=>1,'pdf'=>1,'tiff'=>1,'tif'=>1];
			$ext					= strtolower(end(explode(".", $pic['file']['name'])));
			$arrayFinish['error']	= (!isset($exts[$ext])) ? 1 : $arrayFinish['error'];
			$arrayFinish['error']	= (number_format($pic['file']['size'] / (1024 * 1024), 2) > 5) ? 1 : $arrayFinish['error'];

			$file = $upload_folder.$params['name'].'.'.$ext;
			foreach ($exts as $key => $value) {
				$fileDelete = $upload_folder.$params['name'].'.'.$key;
				if(file_exists($fileDelete)){
					unlink($fileDelete);
				}
			}
			if (!move_uploaded_file($pic['file']['tmp_name'], $file)) {
				$arrayFinish['error']	= 1;
			}
			if($arrayFinish['error'] !== 1){
				unset($arrayFinish['error']);
				$arrayFinish['success'] = 1;
				if(count(glob($upload_folder.'*.*')) == 2){
					$arrayFinish['next'] = 1;
				}
			}
			if(!isset($arrayFinish['error']) && $arrayFinish['success'] == 1 && $arrayFinish['next'] == 1){
				$_SESSION['registerSteps'] = 5;
				$_SESSION['registerComplete'] = 1;
			}
			return $arrayFinish;
		}

		// FINISH REGISTER ACCOUNT
		public function registerComplete(){
			$arrayFinish['success'] = 0;
			$conn = new Conexion();
			$sql = "UPDATE models_details SET registerComplete = 1";
			$query = $conn->prepare($sql);
			if($query->execute()){
				$arrayFinish['success'] = 1;
				$_SESSION['registerSteps'] = "finish";
			}
			return $arrayFinish;
		}

		// GET INFORMATION FOR USER PUBLIC
		public function getInfoModelPublic($id){
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			if(!is_numeric($id)){
				$id = $cifrado->decrypt($id, $conn->generateToken());
			}
			$query		= $conn->prepare("call models_getInfo(:id)");
			$query->bindParam(':id', $id);
			$query->execute();
			return $query->fetch(PDO::FETCH_ASSOC);
		}

		// SHOW MODELS
		public function showModels(){
			$conn = new Conexion();
			$query = $conn->prepare("call models_show();");
			$query->execute();
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>