<?php
$url = 'http://karresults.nic.in/cetresult2014.asp';
$data = array('frm_token' => '0.1727869', 'reg' => 'ba322', 'B1' => 'Submit');

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

$file = 'result.txt';
// Write the contents back to the file
file_put_contents($file, $results);

var_dump($result);
?>