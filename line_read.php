<?php

$accessToken = 'oZZlYsAkX5Ij/sV2iXDw7MwpK5UT0x5GmWAVdI10fHfrOXpfh5zGmMCxb5nNNkfR9TE+rUVqjX9JeDWWJmEbWtQMTrdIfG1GxHjIEDjn/f8whb+9MmKoiHD68mXE72sOMAa3GTSJrM2lTk/3t/EfJgdB04t89/1O/w1cDnyilFU='; // Access Token ค่าที่เราสร้างขึ้น
$channelSecret = "e49746bfa8889c84066470dd0eba81ca";

$content = file_get_contents('php://input');
$arrayJson = json_decode($content, true);
//รับข้อความจากผู้ใช้
echo "TEST";
$message = $arrayJson['events'][0]['message']['text'];
$my_file = 'output.txt';
  $handle = fopen($my_file, 'r') or die('Cannot open file:  '.$my_file);
  $contents = fread($handle, filesize($my_file));
echo $contents;
fclose($handle);

function echoMessage($_accessToken,$_channelSecret,$_id,$_message)
   {
		$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($_accessToken);
		$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $_channelSecret]);
		$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($_message);
		$response = $bot->pushMessage($_id, $textMessageBuilder);
		echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
   }

if($message != "")
{
  $my_file = 'output.txt';
  $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
  $contents = fread($handle, filesize($my_file));
	fclose($handle);
	echoMessage($accessToken,$channelSecret,$id,$contents); 
}
?>
