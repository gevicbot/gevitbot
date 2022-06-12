<?php
include 'FbBot.php';
$tokken = $_REQUEST['hub_verify_token'];
$hubVerifyToken = 'tu_hub_verify_token';
$challange = $_REQUEST['hub_challenge'];
$accessToken = 'tu_token_de_tu_pagina';
$bot = new FbBot();
$bot->setHubVerifyToken($hubVerifyToken);
$bot->setaccessToken($accessToken);
echo $bot->verifyTokken($tokken,$challange);
$input = json_decode(file_get_contents('php://input'), true);
$message = $bot->readMessage($input);
$textmessage = $bot->sendMessage($message);
