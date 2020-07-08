<?php


if(isset($_POST['name']))
{
    echo 'Responce from server:  ' . $_POST['name'];
    $url = 'https://script.google.com/macros/s/AKfycby8rIY-Acha0dumUsbIz-NWRE5NDFfnViMBpscr8IxJMpCEzaw/exec';
    $data = $_POST;

    // use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            // 'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    if ($result === FALSE) { /* Handle error */
        echo "Error";
    }

    var_dump($result);

}
else
{
    echo 'Request without paramenter';  
}
?>