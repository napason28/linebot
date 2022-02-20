 <?php
  

function send_LINE($msg){
 $access_token = 'c7hy5f091xxYJfw1FT2CgtYrdlIumuk0EuT4FE0i01lFb2Ta25No5O2pU7Rv98/XoJncDgVT2yy2Ubp9N2hp510vvkU9S1lHYpWB8fli8YNPeYAPz2fGiH1y2OGC58RmCHyCIaZNgtAsLnvdIDkM6AdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => '#ใส่ ID HERE',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
