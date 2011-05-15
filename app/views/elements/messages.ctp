<?php

	$message = $this->Session->flash('auth');
	if(empty($message))
		$message = $this->Session->flash();

//	if (!empty($messages)) {
//		foreach ($messages as $message_key=>$message) {
//			if ( isset ($message['message'])) {
//				//	Print un-nested message (e.g. Message.flash)
//				echo '<div class="message '. $message_key .'Message">' . $message['message'] . '<div class="message-tl"></div><div class="message-tr"></div><div class="message-br"></div><div class="message-bl"></div></div>';
//				$session->del('Message.' . $message_key);
//			}
//			else {
//				//	Print nested message (e.g. Message.Auth.login, or Message.error.0)
//				foreach ($message as $subkey => $submessage) {
//					echo '<div class="message '. $message_key .'Message">' . $submessage['message'] . '<div class="message-tl"></div><div class="message-tr"></div><div class="message-br"></div><div class="message-bl"></div></div>';
//					$session->del('Message.' . $message_key . '.' . $subkey);
//				}
//			}
//		}
//	}

?>
<div align=center class=messagetext id="site_message"><?=$message?></div>