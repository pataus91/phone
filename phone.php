<?php

class Phone
{

	private $sentMessages = [];
	private $receivedMessages = [];

	public function generateDateTime()
	{
		$now = getdate();	
		$date = [
			$now["mday"],
			$now["mon"],
			$now["year"],
		];
		$date = implode("-", $date);	

		$time = [
			$now["hours"],
			$now["minutes"],
			$now["seconds"],
		];
		$time = implode(":", $time);

		return [$date, $time];
	}


	public function sendMessage($to, $message)
	{	
		$dateTime = $this->generateDateTime();
		
		$this->sentMessages [] = 
		[
			"date" => $dateTime[0],
			"time" => $dateTime[1],
			"to" => $to,
			"message" => $message
		];
	}

	public function receiveMessage($from, $message)
	{
		$dateTime = $this->generateDateTime();
		
		$this->sentMessages [] = 
		[
			"date" => $dateTime[0],
			"time" => $dateTime[1],
			"to" => $from,
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



