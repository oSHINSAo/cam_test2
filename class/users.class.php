<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/includes/config.php";
	// require_once $_SERVER['DOCUMENT_ROOT']."/cifrado.php";
	if(isset($_SESSION['remember']) && $_SESSION['remember'] == 1){
		ini_set("session.cookie_lifetime","2592000");
		ini_set("session.gc_maxlifetime","2592000");
	}
	// require_once $_SERVER['DOCUMENT_ROOT']."/class/mailsend.class.php"; // File Required for send email
	// require_once $_SERVER['DOCUMENT_ROOT']."/class/mailing.template.class.php"; // File Required for send email
	// error_reporting(E_ALL);
	class Users{
		// REGISTER FOR ACCOUNT
		public function register($nick,$email,$pass){
			$arrayFinish['error'] = 1;
			$mailing	= new Mailing();
			$template	= new MailingTemplate();
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$pass		= $cifrado->encrypt($pass, $conn->generateToken()); // Password Encript
			$token		= $cifrado->encrypt($nick, $conn->generateToken()); // Token Encript// $query		= $conn->prepare("call users_register(:nick, :email, :pass, :token)"); // Preapre Stored Procedure for execute
			$query		= $conn->prepare("call users_register(?, ?, ?, ?)"); // Preapre Stored Procedure for execute// $query->bindParam(':nick', $nick); // BindParam for nick// $query->bindParam(':email', $email); // BindParam for email// $query->bindParam(':pass', $pass); // BindParam for password// $query->bindParam(':token', $token); // BindParam for token
			// IF execute the Store Procedure
			if($query->execute(array($nick, $email, $pass, $token)) == true){
				$arrayFinish = $query->fetch(PDO::FETCH_ASSOC);
				$arrayFinish['idUser'] = $cifrado->encrypt($nick, $conn->generateToken());
				$link	= "http://".$_SERVER['HTTP_HOST']."/".$token.".act"; // Generate link for activate account register
				$attr	= array(
							"nick" => $nick,
							"link" => $link,
							"subject" => 'Activate your account'
				); // Attribute for template email
				// IF not sent email
				$body = $template->select('activateAccount.php', $attr);
				if($mailing->sendMail($email, $body, $attr)){
					$query  = $conn->prepare("UPDATE users SET sentEmail=1 where nickname = ?");
					$query->execute(array($nick));
				}
			}
			return $arrayFinish;
		}

		// VALIDATE IF SENT EMAIL ACTIVATION
		public function resentEmail($email){
			$arrayFinish = array(
				'success'	=> 0,
				'msg'		=> 'Error, try again',
				'disabled'	=> 0
			);
			$mailing	= new Mailing();
			$template	= new MailingTemplate();
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$query		= $conn->prepare("SELECT * FROM users where email=:email");
			$query->bindParam(':email', $email);
			// IF execute the Store Procedure
			if($query->execute()){
				$row	= $query->fetch(PDO::FETCH_ASSOC);
				$link	= "http://".$_SERVER['HTTP_HOST']."/".$row['token'].".act"; // Generate link for activate account register
				$attr	= array(
							"nick" => $row['nickname'],
							"link" => $link,
							"subject" => 'Activate your account'
					); // Attribute for template email
				// IF sent email
				$body = $template->select('activateAccount.php', $attr);
				if($mailing->sendMail($email, $body, $attr)){
					$arrayFinish = array(
						'success' => 1,
						'msg' => 'Email sent',
						'disabled' => 1
					);
					$query1  = $conn->prepare("UPDATE users SET sentEmail=1 where nickname=:nick");
					$query1->bindParam(':nick', $nick);
					$query1->execute();
				}
			}
			return $arrayFinish;
		}

		// CHANGE EMAIL TO USER
		public function changeEmail($nick,$email){
			$mailing	= new Mailing();
			$template	= new MailingTemplate();
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$nick		= $cifrado->decrypt($nick, $conn->generateToken());
			$query		= $conn->prepare("UPDATE users set email=:email where nickname=:nick");
			$query->bindParam(':email', $email);
			$query->bindParam(':nick', $nick);
			if($query->execute()){
				$query = $conn->prepare("SELECT 1 success, 'Email successfully changed, please check your email and validate this account' msg from users where nickname=:nick and email=:email");
				$query->bindParam(':nick', $nick);
				$query->bindParam(':email', $email);
				// IF execute the Store Procedure
				if($query->execute()){
					$token		= $cifrado->encrypt($nick, $conn->generateToken()); // Token Encript
					$link	= "http://".$_SERVER['HTTP_HOST']."/".$token.".act"; // Generate link for activate account register
					$attr	= array(
								"nick" => $nick,
								"link" => $link,
								"subject" => 'Activate your account'
						); // Attribute for template email
					// IF not sent email
					$body = $template->select('activateAccount.php', $attr);
					if($mailing->sendMail($email, $body, $attr)){
						$query1  = $conn->prepare("UPDATE users SET sentEmail=1 where nickname=:nick");
						$query1->bindParam(':nick', $nick);
						$query1->execute();
					}
					$arrayFinish = $query->fetch(PDO::FETCH_ASSOC);
					$arrayFinish['idUser'] = $cifrado->encrypt($nick, $conn->generateToken());
					return $arrayFinish;
				}
			}
		}

		// LOGIN FOR USERS
		public function login($user,$pass,$check){
			$conn =  new Conexion();
			$cifrado = new cifrado();
			$pass = $cifrado->encrypt($pass, $conn->generateToken());
			$sql = "call users_login(:user, :pass);";
			$query = $conn->prepare($sql);
			$query->bindParam(':user', $user);
			$query->bindParam(':pass', $pass);
			if($query->execute()){
				$row = $query->fetch(PDO::FETCH_ASSOC);
				if($row['success'] == 1){
					if(($row['nickname'] == $user || $row['email'] == $user) && $row['password'] == $pass){
						$arrayFinish['success'] = 1;
						if($row['active'] == 0){
							$arrayFinish['url'] = '/activate/';
						}else{
							if($check == "true"){
								$_SESSION['remember'] = 1;
							}
							$arrayFinish['url'] = 0;
							$_SESSION['iduser']	= $cifrado->encrypt($row['id'], $conn->generateToken());
							// $_SESSION['type']	= $cifrado->encrypt($row['type'], $conn->generateToken());
							// $query = $conn->prepare("UPDATE users SET lastLogin=CURDATE() WHERE id=:id");
							// $query->bindParam(':id', $row['id']);
							// $query->execute();
						}
						return $arrayFinish;
					}
				}else{
					return $row;
				}
			}else{
				return $query->errorInfo();
				// return array('error' => '1');
			}
		}

		// SEND EMAIL FOR RESET PASSWORD
		public function resetPassword($email){
			$arrayFinish = array(
				'success' => 0,
				'msg' => 'Error, try again',
				'disabled' => 0
			);
			$mailing	= new Mailing();
			$template	= new MailingTemplate();
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$query		= $conn->prepare("SELECT * from users where email=:email");
			$query->bindParam(':email', $email);
			if($query->execute()){
				if($query->rowCount() > 0){
					$row	= $query->fetch(PDO::FETCH_ASSOC);

					$token = $cifrado->encrypt($email, $conn->generateToken());
					$nick	= $cifrado->encrypt($row['nickname'], $conn->generateToken());
					$link	= "http://".$_SERVER['HTTP_HOST']."/".$nick.".tkn".$token.".res";
					$attr	= array(
						'nick' => $row['nickname'],
						'link' => $link,
						'subject' => 'Reset your password'
					);
					$body = $template->select('resetPassword.php', $attr);
					if($mailing->sendMail($email, $body, $attr)){
						$arrayFinish = array(
							'success' => 1,
							'msg' => 'Email sent',
							'disabled' => 1
						);
					}
				}else{
					$arrayFinish = array(
						'success' => 1,
						'msg' => 'Email does not exist',
						'disabled' => 0
					);
				}
			}
			return ($arrayFinish);
		}

		// CHANGE PASSWORD FOR USER AFTER RECIVIED EMAIL
		public function changePassword($pass){
			$arrayFinish = array(
				'success' => 0,
				'msg' => 'Error, password is not change',
				'disabled' => 0
			);
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$nick		= $cifrado->decrypt($_SESSION['nick'], $conn->generateToken());
			$pass		= $cifrado->encrypt($pass, $conn->generateToken());
			$query		= $conn->prepare("call users_changePassword(:nick, :pass);");
			$query->bindParam(':nick', $nick);
			$query->bindParam(':pass', $pass);
			if($query->execute()){
				if($query->rowCount() > 0){
					$row = $query->fetch(PDO::FETCH_ASSOC);
					$_SESSION['iduser']	= $cifrado->encrypt($row['id'], $conn->generateToken());
					$_SESSION['type']	= $cifrado->encrypt($row['type'], $conn->generateToken());
					$arrayFinish = array(
						'success' => 1,
						'msg' => 'Password changed',
						'disabled' => 1
					);
				}else{
					session_destroy();
				}
			}
			return $arrayFinish;
		}

		// GET INFORMATION FOR USER ONLINE
		public function getInfo($id){
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			if(!is_numeric($id)){
				$id = $cifrado->decrypt($id, $conn->generateToken());
			}
			$query		= $conn->prepare("call users_getInfo(:id)");
			$query->bindParam(':id', $id);
			$query->execute();
			return $query->fetch(PDO::FETCH_ASSOC);
		}

		// GET INFORMATION FOR USER PUBLIC
		public function getInfoUserPublic($id){
			$conn		= new Conexion();
			$query		= $conn->prepare("call users_getInfo(:id)");
			$query->bindParam(':id', $id);
			$query->execute();
			return $query->fetch(PDO::FETCH_ASSOC);
		}

		//GET ID USER BY NICKNAME
		public function getIdUser($nick){
			$conn	= new Conexion();
			$query	= $conn->prepare("call users_getIdByNick(:nick)");
			$query->bindParam(':nick', $nick);
			$query->execute();
			$row	= $query->fetch(PDO::FETCH_ASSOC);
			return $row['id'];
		}

		// IS FAVORITE FOR PROFILE
		public function isFavorite($sessionUser,$iduser){
			$conn = new Conexion();
			$cifrado = new cifrado();
			$sessionUser = $cifrado->decrypt($sessionUser, $conn->generateToken());
			$query = $conn->prepare("SELECT * from users_favorites where idUser=:sessionUser and idUserFavorite=:iduser");
			$query->bindParam(':sessionUser', $sessionUser);
			$query->bindParam(':iduser', $iduser);
			$query->execute();
			return ($query->rowCount() == 0) ? '-o' : '';
		}

		// ADD OR REMOVE USER OR MODEL OF FAVORITE
		public function userFavorite($iduser, $idUserSession){
			$arrayFinish = ['success' => 0];
			$conn			= new Conexion();
			$cifrado	= new cifrado();
			$iduser		= $cifrado->decrypt($iduser, $conn->generateToken());
			$query = $conn->prepare("call users_addRemoveFavorites(:iduser, :idUserSession);");
			$query->bindParam(":iduser", $iduser);
			$query->bindParam(':idUserSession', $idUserSession);
			if($query->execute()){
				$arrayFinish['success'] = 1;
			}else{
				$arrayFinish['msg'] = $query->errorInfo();
			}
			return $arrayFinish;
		}

		// GET LIST NICKNAMES OF MESSAGES
		public function listNicksMessages($nick){
			$conn		= new Conexion();
			$cifrado = new cifrado();
			$iduser = $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());
			$nick = strip_tags($nick);
			$sql = "call users_listNicksMessages(:iduser, :nick);";
			$query = $conn->prepare($sql);
			$query->bindParam(':iduser', $iduser);
			$query->bindParam(':nick', $nick);
			$query->execute();
			// foreach ($query->fetchAll(PDO::FETCH_ASSOC) as $key => $value) {
			// 	$array[] = [$key => $value];
			// }
			return $query->fetchAll(PDO::FETCH_ASSOC);
		}

		// USER ONLINE
		public function userOnline(){
			if(!isset($_SESSION['iduser'])){
				$arrayFinish = ['succss'=>0,'msg'=>'User not logged'];
			}else{
				$conn			= new Conexion();
				$cifrado	= new cifrado();
				$iduser		= $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());
				$sql			= "call users_online(:iduser);";
				$query		= $conn->prepare($sql);
				$query->bindParam(':iduser', $iduser);
				if($query->execute()){
					$arrayFinish = ['success'=>1];
				}else{
					$arrayFinish = ['success'=>1,'msg'=>'not runner'];
				}
			}
			return $arrayFinish;
		}
	}
?>