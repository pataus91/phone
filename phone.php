<?php

class Phone
{

	public function sendMessage()
	{

	}

	public function readMessage($sender, $message)
	{
		echo "From: " . $sender . "\n'" . $message . "'\n";
	}

	public function displayMessageAndReceiverNumber($receiver, $message)
	{
		echo "To: " . $receiver . "\n'" . $message . "'\n";
	}

}

$phone = new Phone();
$phone->readMessage("Quentino","Salut Silvia");
$phone->displayMessageAndReceiverNumber("Silvia", "Salut Silvia");
