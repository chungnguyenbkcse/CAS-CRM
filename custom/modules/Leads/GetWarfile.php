<?php 
$curl = curl_init();
$data = $_GET['data'];
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://51.3.9.124/apibkk/apimaster/api.php?cmd=getwavfile&name=' . $data,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer 4Sl3iFxgpfx7LV4xAf5FUh4eoBUbmKVg6gHeQr3U2loj0ne3mQ'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo ($response);