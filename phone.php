<?php

class Phone
{

	private $sentMessages = [];
	private $receivedMessages = [];

	public function sendMessage($to, $message)
	{
		$this->sentMessages [] = 
		[
			"to" => $to,
			"message" => $message
		];
	}

	public function receiveMessage($from, $message)
	{
        $this->receivedMessages [] = 
		[
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

$phone = new Phone();
$phone->sendMessage('Quentino', 'Ciao Quentino');
$phone->receiveMessage('Quentino', 'Hello Silvia');
$phone->sendMessage('Quentino', 'J\'ai une nouvelle version de phone sur github. Peux tu regarder ?');
$phone->receiveMessage('Quentino', 'Ok je regarde ça tout de suite !');

var_dump($phone->seeAllSendedMessage());
var_dump($phone->seeAllReceivedMessage());



