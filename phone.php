<?php


class Phone
{
	private $sentMessages = [];
	private $receivedMessages = [];
	private $allMessages = [];

	public function sendMessage($to, $message)
	{
		$this->sentMessages[] = [
			"sentAt" => new DateTime(),
			"to" => $to,
			"message" => $message
		];
	}

	public function receiveMessage($from, $message)
	{
		$this->receivedMessages[] = [
			"receivedAt" => new DateTime(),
			"to" => $from,
			"message" => $message
		];
	}

	private function getDate ($message) 
	{
		if(array_key_exists('sentAt', $message)) {
			$date = $message['sentAt'];
			} else {
				$date = $message['receivedAt'];
			}

			return $date;
	}

	private function orderMessagesByDate($messages)
	{
		$nMessages = count($messages);

		for ($j = 0; $j <= $nMessages -1; $j++) {
			$oldestMessage = $messages[0];
			$keyOldestMessage = 0;
			foreach ($messages as $key => $message) {
				
				// Je recupere la date du message actuel
				$date = $this->getDate($message);

				// Je veux la date du message le plus vieux en ce moment 
				$dateOldestMessage = $this->getDate($oldestMessage);

				if ($date < $dateOldestMessage) {
					$oldestMessage = $message;
					$keyOldestMessage = $key;
				}
			}
			$result[] = $oldestMessage;
			unset($messages[$keyOldestMessage]);
			$messages = array_values($messages);	
		}

		return $result;
	}


	public function displayConversation()
	{
		$allMessages = array_merge($this->sentMessages, $this->receivedMessages);
		$conversation = $this->orderMessagesByDate($allMessages);
		var_dump($conversation);
	}
}


$phone = new Phone();
$phone->sendMessage('Quentino', 'Ciao Quentino');
$phone->receiveMessage('Quentino', 'Hello Silvia');
$phone->sendMessage('Quentino', 'J\'ai une nouvelle version de phone sur github. Peux tu regarder ?');
$phone->receiveMessage('Quentino', 'Ok je regarde ça tout de suite !');
$phone->displayConversation();


