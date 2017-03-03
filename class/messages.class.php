<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/includes/config.php";
	// require_once $_SERVER['DOCUMENT_ROOT']."/cifrado.php";
	// require_once $_SERVER['DOCUMENT_ROOT']."/class/users.class.php";
	class Messages{

		public function getMessagesList(){
			if(isset($_SESSION['iduser'])){
				$conn		= new Conexion();
				$cifrado	= new cifrado();
				$iduser	= $cifrado->decrypt($_SESSION['iduser'],$conn->generateToken());
				$sql	= "call messages_listConversations(:iduser);";
				$query		= $conn->prepare($sql);
				$query->bindParam(':iduser', $iduser);
				$query->execute();
				$arrayFinish = $query->fetchAll(PDO::FETCH_ASSOC);
				foreach ($arrayFinish as $user => $key) {
					if(strstr($arrayFinish[$user]['message'], '<br>', true)){
						$arrayFinish[$user]['message'] = strstr($arrayFinish[$user]['message'], '<br>', true);
					}
				}
			}else{
				$arrayFinish = ['success' => 0, 'msg' => 'not session'];
			}
			return $arrayFinish;
		}

		public function unreadMessages(){
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$iduser	= $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());
			$sql		= "call messages_totalUnread(:iduser);";
			$query		= $conn->prepare($sql);
			$query->bindParam(':iduser', $iduser);
			$query->execute();
			return $query->rowCount();
		}

		public function listConversations($menu){
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$iduser	= $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());
			switch ($menu) {
				case 'inbox':
						$sql	= "call messages_listConversations(:iduser);";
					break;
				case 'sent':
						$sql	= "call messages_listConversationsSent(:iduser);";
					break;
				case 'deleted':
						$sql	= "call messages_listConversationsDeleted(:iduser);";
					break;
			}
			$query		= $conn->prepare($sql);
			$query->bindParam(':iduser', $iduser);
			$query->execute();
			$rows	= $query->fetchAll(PDO::FETCH_ASSOC);
			foreach ($rows as $user => $key) {
				if(strstr($rows[$user]['message'], '<br>', true)){
					$rows[$user]['message'] = strstr($rows[$user]['message'], '<br>', true);
				}
			}
			return $rows;
		}

		public function infoUserConversation($id){
			$conn			= new Conexion();
			$cifrado	= new cifrado();
			$sql			= "call messages_infoUserConversation(:iduser);";
			$query		= $conn->prepare($sql);
			$query->bindParam(':iduser', $id);
			$query->execute();
			// $rows
			return $query->fetch(PDO::FETCH_ASSOC);
		}

		public function readConversation($idSender, $page = 0){
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$start		= $page*20;
			$end		= $start+20;
			$sql		= "call messages_readConversation(:idsender, :idreceiver, :start, :end);";
			$query		= $conn->prepare($sql);
			$idreceiver	= $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());

			$query->bindParam(':idsender', $idSender);
			$query->bindParam(':idreceiver', $idreceiver);
			$query->bindParam(':start', $start);
			$query->bindParam(':end', $end);
			$query->execute();
			$rows = $query->fetchAll(PDO::FETCH_ASSOC);
			return $rows;
		}
		public function markRead($idUser2){
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$idUser		= $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());
			$sql = "call messages_markRead(:idUser, :idUser2);";
			$query = $conn->prepare($sql);
			$query->bindParam(':idUser', $idUser);
			$query->bindParam(':idUser2', $idUser2);
			$query->execute();
		}

		public function sentMessages(){
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$iduser	= $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());
			$sql		= "call messages_sent(:iduser);";
			$query		= $conn->prepare($sql);
			$query->bindParam(':iduser', $iduser);
			$query->execute();
			$rows = $query->fetchAll(PDO::FETCH_ASSOC);
			return $rows;
		}

		public function sendMessage($message, $idReceiver, $isFile = 0){
			$arrayFinish	= ["success" => 0];
			$conn			= new Conexion();
			$cifrado		= new cifrado();
			$iduser		= $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());
			$idReceiver	= $cifrado->decrypt($idReceiver, $conn->generateToken());
			$message 	= rawurldecode("$message");
			$message		= str_replace("\n", "<br>", $message);

			// Drop all new lines on html
			while(strstr($message, '<br><br>')){
				$message = str_replace('<br><br>', '<br>', $message);
			}
			// Drop last new line on html
			if(substr($message, -4) == '<br>'){
				$message = substr($message, 0, -4);
			}
			// Drop first new line on html
			if(substr($message, 0, 4) == '<br>'){
				$message = substr($message, 4);
			}
			// Strip tags on messages not new line on html
			$message = strip_tags($message, '<br>');

			$sql = "call messages_send(:message, :idReceiver, :idSender, :isFile);";
			$query = $conn->prepare($sql);
			$query->bindParam(':message', $message, PDO::PARAM_STR);
			$query->bindParam(':idReceiver', $idReceiver, PDO::PARAM_INT);
			$query->bindParam(':idSender', $iduser, PDO::PARAM_INT);
			$query->bindParam(':isFile', $isFile, PDO::PARAM_INT);
			if($query->execute()){
				$arrayFinish['success'] = 1;
				$rowMessage = $query->fetch(PDO::FETCH_ASSOC);
				if($isFile == 1){
					$arrayFinish['rowMessage'] = $rowMessage;
				}

				// Send email notification
				if($rowMessage['online'] == 0){
					$mailing	= new Mailing();
					$template	= new MailingTemplate();
					// Attributes for email
					$attr = [
						'photo' => $rowMessage['photo'],
						'nick' => $rowMessage['nickname'],
						'subject' => 'You received a new message'
					];
					$body = $template->select('newMessage.php', $attr); // Template for email
					if($mailing->sendMail($rowMessage['email'] ,$body, $attr)){
						$arrayFinish['successEmail'] = 1;
					}else{
						$arrayFinish['successEmail'] = 1;
					} // Send email
				}
			}else{
				$arrayFinish['errorInfo'] = $query->errorInfo();
			}

			$message		= rawurlencode("<div class='row' style='margin:0px;'><div class='col-lg-12 col-md-12'><p class='message-int iam'>".$message."<i class='triangule-iam'></i></p></div></div>");
			$arrayFinish['message']	= $message;

			return $arrayFinish;
		}

		public function getNewMessages($idSender){
			$arrayFinish 	= ['total' => 0];
			$conn			= new Conexion();
			$cifrado		= new cifrado();
			$idSender		= $cifrado->decrypt($idSender, $conn->generateToken());
			$idReceiver	= $cifrado->decrypt($_SESSION['iduser'], $conn->generateToken());
			$sql			= "call messages_getNews(:idReceiver,:idSender)";
			$query			= $conn->prepare($sql);
			$query->bindParam(':idSender', $idSender, PDO::PARAM_INT);
			$query->bindParam(':idReceiver', $idReceiver, PDO::PARAM_INT);
			$query->execute();
			$rows = $query->fetchAll(PDO::FETCH_ASSOC);
			foreach ($rows as $key => $value) {
				if($value['isFile'] == 1){
					$link = $this->generateLinkFile($value['id']);
					$value['message'] = "<a href='$link'>{$value['message']}</a>";
				}
				$arrayFinish['messages'][]			= rawurlencode("<div class='row' style='margin:0px;'><div class='col-lg-12 col-md-12'><p class='message-int doe'>".$value['message']."<i class='triangule-doe'></i></p></div></div>");
				$arrayFinish['total']++;
			}
			// array_reverse($arrayFinish['messages']);
			$arrayFinish['msg'] = $query->errorInfo();
			return $arrayFinish;
		}

		// GENERATE LINK FOR DOWNLOAD MESSAGE
		public function generateLinkFile($id){
			$conn		= new Conexion();
			$cifrado	= new cifrado();
			$link = '/file.'.$cifrado->encript($id, $conn->generateTokenMessages());
		}
		//UPLOAD A FILE FOR MESSAGE
		public function uploadFile($file, $params){
			if(!isset($_SESSION['iduser'])){
				return ['success'=>0, 'msg'=> 'User not logged'];
				exit();
			}else{
				$conn		= new Conexion();
				$cifrado	= new cifrado();
				$arrayFinish['error']	= 0;
				$upload_folder		= $_SERVER['DOCUMENT_ROOT'].'/messages';
				if(!file_exists($upload_folder)){
					mkdir($upload_folder);
				}
				$fileDB	= $this->sendMessage('prueba', $params['nick'], 1);
				$ext		= strtolower(end(explode(".", $file['file']['name']))); // save extension
				$name		= $cifrado->encript($fileDB['rowMessage']['id'], $conn->generateTokenMessages()).$ext;
				$newFile	= $upload_folder."/".$name;
				if (!move_uploaded_file($file['file']['tmp_name'], $newFile)) {
					$arrayFinish['error']	= 1;
					$arrayFinish['msg']	= 'Not uploaded file';
					$sql = "UPDATE messages set error=:msg, userDeleted1=:one, userDeleted2=:two where id=:id";
					$query = $conn->prepare($sql);
					$query->bindParam(':msg', $arrayFinish['msg']);
					$query->bindParam(':id', $fileDB['rowMessage']['id']);
					$query->bindParam(':one', 1);
					$query->bindParam(':two', 1);
					if(!$query->execute()){
						$arrayFinish['msg'] .= ' && error update status';
					}
				}else{
					$link = '/file.'.$this->generateLinkFile($fileDB['rowMessage']['id']); // $cifrado->encript($fileDB['rowMessage']['id'], $conn->generateTokenMessages());
					$arrayFinish['message']	= rawurlencode("<div class='row' style='margin:0px;'><div class='col-lg-12 col-md-12'><p class='message-int iam'><a href='$link'>".$message."</a><i class='triangule-iam'></i></p></div></div>");
				}
				return $fileDB;
			}
		}
	}
?>