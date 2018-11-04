<?php

class Phone
{

	private $sentMessages = [];
	private $receivedMessages = [];

	public function sendMessage($to, $message) 
	{
		$this->sentMessages = [
			"to" => $to,
			"message" => $message
		];
	}

	public function receiveMessage($from, $message) 
	{
		$this->receivedMessages = [
			"from" => $from,
			"message" => $message
		];
	}

	public function seeAllSendedMessage() 
	{
		return $this->sentMessages;
	}


	public function seeAllReceivedMessage()
	{
		return $this->receivedMessages;
	}
}

$messages = array(
	array ("Quentino", "Silvia", "Salut Silvia"),
	array ("Silvia", "Quentino", "Salut Quentino"),
	array ("Raph", "Silvia", "J'arrive")
);	

$phone = new Phone();

foreach ($messages as $message) {
	$phone->sendMessage($message[1], $message[2]);
	$phone->receiveMessage($message[0], $message[2]);
	$sentMessages [] = [$phone->seeAllSendedMessage()];
	$receivedMessages [] = [$phone->seeAllReceivedMessage()];
}

var_dump($sentMessages);
var_dump($receivedMessages);


