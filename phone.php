<?php

class Phone
{

	private $sentMessages = [];
	private $receivedMessages = [];

	public function sendMessage($to, $message)
	{
		// To implement
	}

	public function receiveMessage($from, $message)
	{
        // To implement
	}

	public function seeAllSendedMessage()
	{
		// To implement
	}

	public function seeAllReceivedMessage()
	{
		// To implement
	}
}

$phone = new Phone();
$phone->sendMessage('Quentino', 'Ciao Quentino');
$phone->receiveMessage('Quentino', 'Hello Silvia');
$phone->sendMessage('Quentino', 'J\'ai une nouvelle version de phone sur github. Peux tu regarder ?');
$phone->receiveMessage('Quentino', 'Ok je regarde ça tout de suite !');

var_dump($phone->seeAllSendedMessage());
var_dump($phone->seeAllReceivedMessage());

/**

// seeAllSendedMessage
array(2) {
  [0]=>
  array(2) {
    ["to"]=>
    string(8) "Quentino"
    ["message"]=>
    string(13) "Ciao Quentino"
  }
  [1]=>
  array(2) {
    ["to"]=>
    string(8) "Quentino"
    ["message"]=>
    string(65) "J'ai une nouvelle version de phone sur github. Peux tu regarder ?"
  }
}

//seeAllReceivedMessage
array(2) {
  [0]=>
  array(2) {
    ["from"]=>
    string(8) "Quentino"
    ["message"]=>
    string(12) "Hello Silvia"
  }
  [1]=>
  array(2) {
    ["from"]=>
    string(8) "Quentino"
    ["message"]=>
    string(33) "Ok je regarde ça tout de suite !"
  }
}
 */


