	<script>
		// Filter conversations
		$('#search').keyup(function(){
			var search = $(this).val().toLowerCase();
			if(search == ''){
				$('.list-conversations > li').fadeIn(450);
				$('.user-nick').css("text-decoration","none");
			}else{
				var $el = $('ul.list-conversations li[data-nick*="'+search+'"]').fadeIn(450);
				$('ul.list-conversations li').not($el).hide();
			}
		});

		$('li.conversation').click(function(){
			var nick = $(this).find('.user-nick').text();
			window.location.href='/messages/'+nick;
		});

		$('[name="attachment"]').change(function(){
			var file		= $(this).val(); // get value
			file			= file.split('\\'); // get name
			$('.attachment .text').text(file[file.length-1]);
			$('div.attachment').css("display","block");
		});
		$('.close-file').click(function(){
			$('.attachment .text').text('');
			$('div.attachment').css("display","none");
			$('[name="attachment"]').val('');
		});
		$('.send-file').click(function(){
			var file		= $('[name="attachment"]')[0].files[0];
			var data	= new FormData();
			data.append('file',file);
			// data.append('name',name);
			data.append('action','sendFile');
			data.append('nick', '<?= $cifrado->encrypt($idUserConversation, $conn->generateToken()); ?>');
			var url = '/actions/messages.actions.php';
			$.ajax({
				url:url,
				type:'POST',
				contentType:false,
				data:data,
				processData:false,
				cache:false,
				dataType: 'json',
				success: function(resp){
					if(resp.success == 0){
						$('.attachment .text').text(resp.msg);
					}else if(resp.success == 1){
						$('.messages-container').append(unescape(resp.message)); // insert text
						document.querySelector('.messages-container').scrollTop = document.querySelector('.messages-container').scrollHeight;
						// clean to container
						while (document.querySelector('.writer-message').hasChildNodes()) {
							container.removeChild(container.firstChild);
						}
						$(".close-file").trigger("click");
					}else{
						$('.attachment .text').text('Unexpected error');
					}
				}
			});
		})
		// emojify run
		emojify.setConfig({
			emojify_tag_type : 'div',           // Only run emojify.js on this element
			// only_crawl_id    : null,            // Use to restrict where emojify.js applies
			// img_dir          : 'images/emoji',  // Directory for emoji images
			ignored_tags     : {                // Ignore the following tags
				'SCRIPT'  : 1,
				'TEXTAREA': 1,
				'A'       : 1,
				'PRE'     : 1,
				'CODE'    : 1
			}
		});
		if($('.short-message').size() > 0){
			emojify.run(document.querySelector('.short-message'));
		}
		if($('.recipent-messages').size() > 0){
			emojify.run(document.querySelector('.recipent-messages'));
		}
		if($('.emojis-selector').size() > 0){
			emojify.run(document.querySelector('.emojis-selector'));
		}
		if($('.messages-container').size() > 0){
			document.querySelector('.messages-container').scrollTop = document.querySelector('.messages-container').scrollHeight;
		}

		//check if message send on press enter
		function checkSender(){
			if($("input.sender").is(':checked')){
				$("button.sender").slideToggle('fast');
			}else{
				$("button.sender").slideToggle('fast');
			}
		}


		$("input.sender").click(function() {
			checkSender();
		});
		// /////////////////////////////////////
		

		$(document).bind('keydown',function(e){
			if( e.which == 13 && e.shiftKey == 0 && $('input.sender').is(':checked') ) {
				sender();
			}else if ( e.which == 27 ) { //esc
				$('emojis-selector').fadeOut();
			}
		});
		$("body").keyup(function(e) {
		});

		$(".writer-message").keyup(function(){
			var message = this.innerHTML;
			// this.innerHTML = message;
		})

		$("button.sender").click(function() {
			sender();
		});

		////////////////////////////////////////
		var params = {
			source:  function (query, process) {
				return $.post('/actions/users.actions.php', { query: query, action: 'listNicksMessages' }, function (data) {
					data = $.parseJSON(data);
					return process(data);
				});
			},
			afterSelect: function(resp){
				window.location.href='/messages/'+resp.name;
			}
		}
		$('input.searchUser').typeahead(params);
		$('[data-toggle="goConversation"]').click(function() {
			var user = $(this).data("user");
			window.location.href='/messages/'+user;
		});
		$('.emojis-selector div img').click(function(){
			var container	= document.querySelector('.writer-message');
			var message	= container.value;
			var emoji 		= $(this).attr('title'); // select emoji
			message		= message+' '+emoji;
			// message		= message.replace(/\n/g, "<br>");
			backspace	= message.charAt(message.lastIndexOf(' '));
			if(backspace != ' '){
				message += ' ';
			}
			container.value = '';
			container.value = message;
			$('writer-message').focus();
		});
		$('.viewer-emojis').click(function(){
			$('.emojis-selector').fadeToggle();
		})
		$('.writer-message').click(function(){
			$('.emojis-selector').fadeOut();
		})
		$('.add-attachment').click(function(){
			$('.attachment').trigger("click");
		})

		function validateText(str) {
			// return String(str).replace(/<div>/g, '').replace(/<\/div>/g, '_br_').replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
			var string = String(str).replace(/<div>/g, '').replace(/<\/div>/g, '_br_').replace(/<br>/g, '_br_');
			// return String(str).replace(/<div>/g, '').replace(/<\/div>/g, '_br_').replace(/<br>/g, '_br_');
			return string;
		}

		(function getListConversations(){
			$.ajax({
				url: '/actions/messages.actions.php',
				data: {action: 'listConversations', menu: '<?= $menuMessages; ?>'},
				dataType: 'json',
				type: 'post',
				success: function(list) {
					if(list.length > 0){
						$.each( list, function( key, value ) {
							var li = $('li[data-nick="'+value.nickname+'"]');
							$('li[data-nick="'+value.nickname+'"] div:first-child img').attr("src", value.photo);
							li.find('.user-nick').text(value.nickname);
							li.find('.fa-circle').removeClass('gray');
							li.find('.fa-circle').removeClass('green');
							li.find('.fa-circle').addClass(value.online);
							li.find('.user-age-country').text(value.ageCountry);
							li.find('.status-message').removeClass('fa-share');
							li.find('.status-message').removeClass('fa-check');
							li.find('.status-message').addClass(value.statusMessage);
							li.find('.short-message').text(value.message);
							li.find('.date-message').text(value.date);
							if(value.unread > 0){
								if(li.find('.total-messages').length){
									li.find('.total-messages').text(value.unread);
								}else{
									var insert = "<span class='total-messages'>"+value.unread+"</span>";
									li.find('.number-messages').append(insert);
								}
							}else{
								if(li.find('.total-messages')){
									li.find('.total-messages').remove();
								}
							}
						});
					}
				},
				complete: function(){
					if($('.short-message').size() > 0){
						emojify.run(document.querySelector('.short-message'));
					}
					setTimeout(getListConversations, 1000);
				}
			});
		})( jQuery );

		<?php
			if(isset($_GET['user']) && $_GET['user'] != ''){	?>
				function sender(){
					var container = $(".writer-message");
					// var message = validateText($(".writer-message").html());
					var message	= $(".writer-message").val();
					datas = {action: 'sendMessage', message: escape(message), nick: '<?= $cifrado->encrypt($idUserConversation, $conn->generateToken()); ?>'};
					document.querySelector('.writer-message').value = '';
					container.empty();
					// $.post( "/actions/messages.actions.php", data)
					// .done(function( resp ) {
					// 	alert( "Data Loaded: " + resp );
					// });
					$.ajax({
						url: '/actions/messages.actions.php',
						data: datas,
						dataType: 'json',
						type: 'post',
						success: function(data){
							$('.messages-container').append(unescape(data.message)); // insert text
							document.querySelector('.messages-container').scrollTop = document.querySelector('.messages-container').scrollHeight;
							// clean to container
							while (document.querySelector('.writer-message').hasChildNodes()) {
								container.removeChild(container.firstChild);
							}
							emojify.run(document.querySelector('.messages-container'));
						}
					});
				}

				(function getNewMessages(){
					data = { action: 'getNewMessages', nick: '<?= $cifrado->encrypt($idUserConversation, $conn->generateToken()); ?>'};
					$.ajax({
						url: '/actions/messages.actions.php',
						data: data,
						dataType: 'json',
						type: 'post',
						success: function(list) {
							if(list.total > 0){
								list.messages.reverse();
								$.each(list.messages, function( index, value ) {
									$('.messages-container').append(unescape(value)); // insert text
									document.querySelector('.messages-container').scrollTop = document.querySelector('.messages-container').scrollHeight;
								});
								emojify.run(document.querySelector('.messages-container'));
							}
						},
						complete: function(){
							setTimeout(getNewMessages, 5000);
						}
					});
				})( jQuery );
<?php	}?>
		</script>
