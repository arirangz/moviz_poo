<?php
spl_autoload_register();

use Modules\Forum\Message;
use Modules\Chat\Message as MessageChat;

$messageForum = new Message();
$messageForum->setUserMessage("test");
var_dump($messageForum);


$chatMessage = new MessageChat();
