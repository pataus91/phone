<?php

class Phone
{
	public function sendMessage($sender, $receiver, $message)
	{
		$this->listMessage = $listMessage = [
			"sender" => $sender,
			"receiver" => $receiver,
			"message" => $message
		];	
		return $listMessage;
	}

	public function readMessage()
	{
		echo "From: " . $this->listMessage["sender"] . "\n" . $this->listMessage["message"] . "\n";
	}

	public function displayMessageAndReceiverNumber()
	{
		echo "To: " . $this->listMessage["receiver"] . "\n" . $this->listMessage["message"] . "\n";
	}

}

$phone = new Phone();
$phone->sendMessage("Quentino", "Silvia","Salut Silvia");
$phone->readMessage();
$phone->displayMessageAndReceiverNumber();


$phone2 = new Phone();
$phone2->sendMessage("Raph", "Romain","Salut Romain");
$phone2->readMessage();
$phone2->displayMessageAndReceiverNumber();

