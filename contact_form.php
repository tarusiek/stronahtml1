<?php

require('DiscordWebhooks\Client.php');
require('DiscordWebhooks\Embed.php');


$userName = $_POST['fname'];
$userMail = $_POST['fmail'];
$userSubject = $_POST['fsubject'];
$userMessage = $_POST['fmessage'];



use \DiscordWebhooks\Client;
use \DiscordWebhooks\Embed;

$webhook = new Client('https://discord.com/api/webhooks/992569996658094250/5-Puy5rOyImETNGV48HLiZ2oLOKrzAarFtMbSlc_s2zLcRclMlq-whqlfX44PqNR5saC');
$embed = new Embed();

$embed->title('NOWA WIADOMOŚĆ NA STRONIE TARUSIEK!');
$embed->field('Nazwa: ',$userName);
$embed->field('Mail: ',$userMail);
$embed->field('Temat: ',$userSubject);
$embed->field('Wiadomość: ',$userMessage);



$webhook->embed($embed)->send();
#username('Moj bocik')

?>