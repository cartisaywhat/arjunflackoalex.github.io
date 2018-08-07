<?php

$msg = "Name: " . $_GET['name'] . "\nMessage: " . $_GET['message'] . "";
$msg = wordwrap($msg,70);
$subject = "yeezustang new message :: " . $_GET['name'] . "";

$mail=mail("yeezustang97@gmail.com", $subject, $msg, $header);

?>
