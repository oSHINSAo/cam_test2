<?php
	error_reporting(E_ALL);
	$sectionMessages	= 1;
	$menuMessages		= 'sent';
	require_once "includes/config.php";
	require_once "class/messages.class.php";
	$conn			= new Conexion();
	$messages	= new Messages();
	$users			= new Users();
	$cifrado		= new cifrado();
	$active 		= "";
	
	if(!isset($_SESSION['iduser'])){
		header("Location: /");
	}

	/***** Class****/
	$listMessages = $messages->sentMessages($_SESSION['iduser']);
	if(isset($_GET['user']) && $_GET['user'] != ''){
		$idUserConversation = $users->getIdUser($_GET['user']);
		$infoUserConversation = $messages->infoUserConversation($idUserConversation);
	}

	require_once "includes/front.conf"; // configuration for web site
	require_once "includes/head.php"; // head of document
	// Non display body if no was loged or not was accepted warning

?>
<body>
	<style>
		.border-black{border:1px solid #000; /*border-right: 2px solid;*/}
		.border-top-none{border-top: 0px;}
		.border-right-none{border-right: 0px;}
		.min-height{min-height: 400px;}
		.text-blue{color: #42a3c5;}
		.strong{font-weight: bold;}
		.background-blue{background-color:#42a3c5;color:#fff;}
		.vertical-align{position: absolute;top: 50%;left: 50%;transform: translate(-50%,-50%);border: 1px dashed #42a3c5;}
		.padding-left-none{padding-left: 0px;}
		.padding-right-none{padding-right: 0px;}
		.recipent-destination{height:40px;color:#42a3c5;}
		.recipent-messages{height: 295px;background-color:#d6d6d6;}
		.recipent-redaction{height: 105px;background-color:#ededed;}
		.recipent-redaction textarea{resize:none;margin-top: 5px;border-radius: 0px;}
		.option{transition: all 0.3s;cursor: pointer;}
		.option:hover{background-color:#c2c2c2;}
		.bootstrap-select > .dropdown-toggle{background-color:#fff;}
		.title-form{font-weight: bold;color: #db2376;}
		.filter-option{color:#999;font-weight: 100;}
		ul.settingConversation{background-color: rgba(0,0,0,0.4);left:initial;right:0px;color:#fff;border-radius: 0px;padding: 5px 0px;min-width: initial;}
		ul.settingConversation li{padding:0px 5px;}
		ul.settingConversation li:hover{background-color:rgba(0,0,0,0.5);}
		.typeahead{background-color: #fff;}
		.info-list-user span{font-size:10px;color: #42a3c5;}
		.info-list-user span strong{font-size:14px;}
		.message-list-user p{overflow:hidden;white-space:nowrap;text-overflow:ellipsis;}
		.message-list-user p img{border:none;height: 21px;width: 21px;padding-bottom: 2px;}
		.badge{margin-bottom:-30px;background-color:#db2376;}
		.list-user{padding: 15px 0px;cursor:pointer;}
		.list-user img{border: 1px solid #000;border-radius: 2px;height: 48px;width: 48px;}
		.list-user:hover{background-color:#ccc;}
		.active{background-color:#ddd;}
		.nickname{text-align: left !important;}
		.message-int{background-color:#fff;max-width: 60%;padding:7px;}
		.iam{background-color: #45a4c4;float:right;color: #fff;}
		.doe{float:left;}
		.triangule-iam {width: 0;height: 0;border-bottom: 10px solid #45a4c4;border-right: 15px solid transparent;position: absolute;right: 0px;bottom: 10px;		}
		.triangule-doe {width: 0;height: 0;border-bottom: 10px solid #fff;border-left: 15px solid transparent;position: absolute;left: 0px;bottom: 10px;		}
		.messages-container{overflow-y: auto;height: 240px;padding-top:10px;}
		.emojis-selector{display:none;}
		.emojis-selector div{position: absolute;right: 27px;top: -130px;height: 150px;border: 1px solid #ccc;width: 283px;background-color: #fff;padding: 4px;overflow: hidden;overflow-y: auto;}
		.triangule-emojis{width: 0;height: 0;border-top: 15px solid #c1c1c1;border-left: 15px solid transparent;position: absolute;right: 27px;top: 20px;}
		.writer-message{height:60px;background-color:#fff;overflow: hidden;overflow-y: auto;}
		[contenteditable=true]:empty:before{content: attr(placeholder);display: block; /* For Firefox */}
		textarea {resize: none;}
		.attachment{margin-top: -24px;width: 98%;background-color: #fff;padding: 2px;color: #45a4c4;font-weight: bold;display:none;}
		.close-file{float: right;margin-right: 5px;cursor: pointer;}
		.send-file{float: right;margin-right: 10px;cursor:pointer;}
		ul.list-conversations{list-style: none;padding:0px;}
		.gray{color:#828282;}
		.clicklable{cursor: pointer;}
		.blue{color: #45a4c4;}
		.user-nick{font-size:16px;font-weight: bold;margin-right: 5px;}
		.total-messages{padding: 5px;background-color: #de2179;border-radius: 15px;color: #fff;font-weight: bold;font-size: 10px;}
		.delete-conversation{position: absolute;top: -15px;right: 5px;}
		ul.list-conversations li{border-bottom: 1px solid #ccc;margin:0px;padding:20px 0px;}
		ul.list-conversations li:last-child{border-bottom:1px solid #000;}
		.green{color:rgb(66, 183, 42);}
		.conversation{cursor:pointer;}
		.conversation:hover{background-color:rgba(200,200,200,0.5);}
		.active-menu{background-color: #42a3c5;color: #fff;border-radius: 5px;cursor:default;}
		.message-menu li a{color: #42a3c5;}
	</style>
<?php
	require "includes/header.php";	?>


	<br>
	<!-- Content -->
	<div class="container" style="margin-top:-35px;margin-bottom:100px;">
		<div class="row text-center">
			<div class="col-md-4 col-lg-4 border-black border-right-none">
				<ul class="list-inline text-blue strong message-menu" style="margin:8px;">
					<li><a href="/messages">Inbox</a></li>
					<li class="active-menu">Sent</li>
					<li><a href="/messages-deleted">Deleted</a></li>
				</ul>
			</div>
			<div class="col-md-8 col-lg-8 border-black background-blue" style="border:1px solid #000;">
		<?php
			if(isset($_GET['user']) && $_GET['user'] != ''){	?>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<!--<h3 style="margin:5px;" class="title-message text-left">
						<a href="/messages/" style="color:#fff;"><i class="fa fa-arrow-left"></i></a>
						</h3>-->
					</div>
					<div class="col-lg-6 col-md-6">
						<h4 style="margin:8px;" class="title-message text-right"><a href="/messages/" style="color:#fff;">New Message</a></h4>
					</div>
				</div>
	<?php	}else{
				echo '<h3 style="margin:5px;" class="title-message">
							New Message
						</h3>';
			}	?>
			</div>
		</div>

		<div class="row border-top-none">
			<!-- List Conversation -->
			<div class="col-md-4 col-lg-4 border-black min-height border-top-none list-conversation border-right-none" style="height: 401px;overflow-y:auto;">
				<div class="row" style="padding:10px 0px;">
					<div class="col-lg-12 col-md-12 text-right">
						<div class="form-inline">
							<div class="form-group">
								<i class="fa fa-search" style="position:absolute;right: 25px;top: 9px;color: #828282;"></i>
								<label for="search" style="color:#828282;">Search</label>
								<input type="text" class="form-control" id="search" style="border-radius: 0px;">
							</div>
						</div>
						<hr style="width:95%:margin: 0 auto;border-top:1px solid #000;margin-bottom:0px">

						<!-- List Conversations -->
						<ul class="list-conversations">
					<?php
						foreach ($listMessages as $user) {	?>
							<li class="row text-left conversation" data-nick="<?= strtolower($user['nickname']); ?>">
								<div class="col-lg-3 col-md-3">
									<img src="<?= $user['photo']; ?>" class="img-responsive">
								</div>
								<div class="col-lg-9 col-md-9">
									<div class="row">
										<div class="col-lg-1 col-md-1 text-center" style="padding:0px">
											<i class="fa fa-circle <?= $user['online']; ?>" style="font-size:10px"></i>
										</div>
										<div class="col-lg-11 col-md-11 blue text-left" style="text-overflow:ellipsis;white-space:nowrap;">
											<span class="user-nick"><?= $user['nickname']; ?></span>
											<span class="user-age-country" ><?= $user['ageCountry']; ?></span>
											<i class="fa fa-close gray clicklable delete-conversation"></i>
										</div>
									</div>
									
									<div class="row" style="margin-top:10px;font-size:12px;">
										<div class="col-lg-1 col-md-1 text-center" style="padding:0px">
											<i class="fa status-message <?= $user['statusMessage']; ?> gray"></i>
										</div>
										<div class="col-lg-5 col-md-5" style="text-overflow:ellipsis;white-space:nowrap;overflow:hidden;padding-right: 0px;">
											<span class="short-message gray"><?= $user['message']; ?></span>
										</div>
										<div class="col-lg-4 col-md-4">
											<span class="date-message"><?= $user['date']; ?></span>
										</div>
										<div class="col-lg-2 col-md-2 text-center number-messages"  data-nick="<?= strtolower($user['nickname']); ?>"  style="padding:0px;margin-top:-2px;">
											<?php
												if($user['unread'] > 0){
													echo "<span class='total-messages'>{$user['unread']}</span>";
												}
											?>
										</div>
									</div>
								</div>
							</li>
			<?php	} ?>
						</ul>
						<!-- /List Conversations -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
					</div>
				</div>
			</div>
			<div class="col-md-8 col-lg-8 border-black min-height border-top-none">
				
		<?php
			if(!isset($_GET['user']) || $_GET['user'] == ''){	?>
				<div class="row" style="border-bottom: 1px solid #ccc;">
					<div class="col-md-12 col-lg-12 recipent-destination" style="margin:4px 0px 0px 0px">
						<div class="row">
							<div class="col-lg-1 col-md-1 padding-left-none text-right"><p style="margin-top:5px;">To:</p></div>
							<div class="col-lg-11 col-md-11 padding-left-none">
								<input type="search" name="searchUser" placeholder="Type in the nickname of the person you're trying to reach." class="form-control searchUser" value="<?= (isset($_GET['user']) && $_GET['user'] != '') ? $_GET['user'] : '' ; ?>">
							</div>
						</div>
					</div>
				</div>
		<?php
			}

			if(isset($_GET['user']) && $_GET['user'] != ''){	?>
				<div class="row">
					<div class="col-lg-12 col-md-12 recipent-messages">

						<div class="row info-user" style="height: 50px;">
							<div class="col-lg-6 col-md-6">
								<img src="<?= $infoUserConversation['photo']; ?>" style="margin-top:<?= ($infoUserConversation['location'] == '') ? '0px' : '-10px'; ?>;height: 48px;">
								<p style="display:inline-block;margin-top:10px;color:#42a3c5;">
									<span class="nickname"><strong><?= $infoUserConversation['nickname']; ?></strong><?= $infoUserConversation['age']; ?></span>
									<span style="font-size:12px;display:block;" class="town-country"><?= $infoUserConversation['location']; ?></span>
								</p>
							</div>
							<div class="col-lg-6 col-md-6 text-right">
								<div class="dropdown">
									<a id="settingConversation" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-gear" style="margin-top:15px;color:#000"></i>
									</a>
									<ul class="dropdown-menu settingConversation" aria-labelledby="settingConversation">
										<li data-token='<?= $cifrado->encrypt($infoUserConversation['id'], $conn->generateToken()); ?>'>Favorite Member</li>
										<li data-token='<?= $cifrado->encrypt($infoUserConversation['id'], $conn->generateToken()); ?>'>Delete</li>
										<li data-token='<?= $cifrado->encrypt($infoUserConversation['id'], $conn->generateToken()); ?>'>Block</li>
										<li data-token='<?= $cifrado->encrypt($infoUserConversation['id'], $conn->generateToken()); ?>'>Report Member</li>
									</ul>
								</div>
							</div>
						</div>
						<hr style="margin: 10px -15px -1px -15px;">
						<div class="row messages-container">
							<?php
								foreach($messages->readConversation($idUserConversation, 0) as $message){
									echo "<div class='row' style='margin:0px;'>";
										echo "<div class='col-lg-12 col-md-12'>";
											echo "<p class='message-int {$message['who']}'>{$message['message']}
														<i class='triangule-{$message['who']}'></i>
													</p>";
										echo "</div>";
									echo "</div>";
								}
							?>
						</div>

					</div>
				</div>
				
				<div class="row">
					<div class="col-md-12 col-lg-12 padding-left-none padding-right-none recipent-redaction">
						<div class="attachment">
							<span class="text">Hola</span>
							<span class="close-file"><i class="fa fa-close"></i></span>
							<span class="send-file"><i class="fa fa-paper-plane"></i></span>
						</div>
						<a style="position: absolute;right: 21px;top: 5px;font-size: 20px;" class="add-attachment"><i class="fa fa-paperclip"></i></a>
						<input type="file" name="attachment" class="attachment" style="display: none;">
						<a style="position: absolute;right: 20px;top: 30px;font-size: 20px;" class="viewer-emojis"><i class="fa fa-smile-o"></i></a>
						<div class="emojis-selector">
							<div>
								:bowtie: :smile: :laughing: :blush: :smiley: :relaxed: :smirk: :heart_eyes: :kissing_heart: :kissing_closed_eyes: :flushed: :relieved: :satisfied: :grin: :wink: :stuck_out_tongue_winking_eye: :stuck_out_tongue_closed_eyes: :grinning: :kissing: :kissing_smiling_eyes: :stuck_out_tongue: :sleeping: :worried: :frowning: :anguished: :open_mouth: :grimacing: :confused: :hushed: :expressionless: :unamused: :sweat_smile: :sweat: :disappointed_relieved: :weary: :pensive: :disappointed: :confounded: :fearful: :cold_sweat: :persevere: :cry: :sob: :joy: :astonished: :scream: :neckbeard: :tired_face: :angry: :rage: :triumph: :sleepy: :yum: :mask: :sunglasses: :dizzy_face: :imp: :smiling_imp: :neutral_face: :no_mouth: :innocent: :alien: :yellow_heart: :blue_heart: :purple_heart: :heart: :green_heart: :broken_heart: :heartbeat: :heartpulse: :two_hearts: :revolving_hearts: :cupid: :sparkling_heart: :sparkles: :star: :star2: :dizzy: :boom: :collision: :anger: :exclamation: :question: :grey_exclamation: :grey_question: :zzz: :dash: :sweat_drops: :notes: :musical_note: :fire: :hankey: :poop: :shit: :+1: :thumbsup: :-1: :thumbsdown: :ok_hand: :punch: :facepunch: :fist: :v: :wave: :hand: :raised_hand: :open_hands: :point_up: :point_down: :point_left: :point_right: :raised_hands: :pray: :point_up_2: :clap: :muscle: :metal: :fu: :runner: :running: :couple: :family: :two_men_holding_hands: :two_women_holding_hands: :dancer: :dancers: :ok_woman: :no_good: :information_desk_person: :raising_hand: :bride_with_veil: :person_with_pouting_face: :person_frowning: :bow: :couplekiss: :couple_with_heart: :massage: :haircut: :nail_care: :boy: :girl: :woman: :man: :baby: :older_woman: :older_man: :person_with_blond_hair: :man_with_gua_pi_mao: :man_with_turban: :construction_worker: :cop: :angel: :princess: :smiley_cat: :smile_cat: :heart_eyes_cat: :kissing_cat: :smirk_cat: :scream_cat: :crying_cat_face: :joy_cat: :pouting_cat: :japanese_ogre: :japanese_goblin: :see_no_evil: :hear_no_evil: :speak_no_evil: :guardsman: :skull: :feet: :lips: :kiss: :droplet: :ear: :eyes: :nose: :tongue: :love_letter: :bust_in_silhouette: :busts_in_silhouette: :speech_balloon: :thought_balloon: :feelsgood: :finnadie: :goberserk: :godmode: :hurtrealbad: :rage1: :rage2: :rage3: :rage4: :suspect: :trollface:
							</div>
							<i class='triangule-emojis'></i>
						</div>
						<textarea class="textarea writer-message form-control" placeholder="Enter message here..."></textarea>
						<!-- <div class="writer-message" placeholder="Enter message here..." contenteditable="true"></div> -->
						<p class="text-right" style="margin:5px;">
							<span>Press Enter to send <input type="checkbox" name="sender" class="sender"></span>
							<button name="action" value="sendMessage" class="btn btn-blue sender" style="padding:6px 20px;">Send</button>
						</p>
					</div>
				</div>
		<?php
			}else{	?>
				<div class="row">
					<div class="col-lg-12 col-md-12 recipent-messages" style="display: table;table-layout: fixed;height: 355px;">
						<p style="display:table-cell;vertical-align:middle;text-align:center;">Select a conversation or search a user.</p>
					</div>
				</div>
		<?php
			} ?>

			</div>
		</div>
	</div>


<?php
	require_once "includes/footer.php";
	require_once "includes/messages-js.php"; 
?>


</body>
</html>