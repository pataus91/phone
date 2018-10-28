<?php

class Phone
{
	public function sendMessageArchive($sender, $receiver, $message)
	{
		$listMessage = [
			"sender" => $sender,
			"receiver" => $receiver,
			"message" => $message
		];	
		return $listMessage;
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
var_dump($phone->sendMessageArchive("Quentino", "Silvia","Salut Silvia"));
