     <?php
     $username = 'sylvia.engmann';
      include_once("pool.php");
      $obj= new pool();
      $obj->getTeleNumber($username);
      $result = $obj->fetch();

    $to = $result['phonenumber'];
    $from='Ride Along!';
    $text='Car full. Join will be disabled';

    $url = 'http://52.89.116.249:13013/cgi-bin/sendsms?username=mobileapp&password=foobar&to='.$to.'&from='.$from.'
    &text='.$text;
    $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        // Set so curl_exec returns the result instead of outputting it.
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);

        // Get the response and close the channel.
        $response = curl_exec($ch);
        if ($response == 0){
          echo "Message sent";
        }
        else 
          echo "Message not sent";
        curl_close($ch);
   ?>

