<?php
$API_URL = 'https://api.line.me/v2/bot/message/reply';
$ACCESS_TOKEN = 'oZZlYsAkX5Ij/sV2iXDw7MwpK5UT0x5GmWAVdI10fHfrOXpfh5zGmMCxb5nNNkfR9TE+rUVqjX9JeDWWJmEbWtQMTrdIfG1GxHjIEDjn/f8whb+9MmKoiHD68mXE72sOMAa3GTSJrM2lTk/3t/EfJgdB04t89/1O/w1cDnyilFU='; // Access Token ค่าที่เราสร้างขึ้น
$POST_HEADER = array('Content-Type: application/json', 'Authorization: Bearer ' . $ACCESS_TOKEN);

$reply_message = "TEST";

if( strlen($reply_message) > 0 )
  {
   //$reply_message = iconv("tis-620","utf-8",$reply_message);
   $data = [
    'replyToken' => $reply_token,
    'messages' => [['type' => 'text', 'text' => $reply_message]]
   ];
   $post_body = json_encode($data, JSON_UNESCAPED_UNICODE);
   $send_result = send_reply_message($API_URL, $POST_HEADER, $post_body);
   echo "Result: ".$send_result."\r\n";
  }

function send_reply_message($url, $post_header, $post_body)
{
 $ch = curl_init($url);
 curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
 curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
 $result = curl_exec($ch);
 curl_close($ch);
 return $result;
}

?>
