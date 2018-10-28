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

	public function displayMessageAndReceiverNumber()
	{

	}

}



$phone = new Phone();
$phone->readMessage("Quentino","Salut Silvia");
