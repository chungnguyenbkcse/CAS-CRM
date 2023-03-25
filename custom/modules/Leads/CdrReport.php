<?php 
$curl = curl_init();
$field_name = 'dst';
$field_pattern = $_GET['field_pattern'];
$sip = $_GET['sip'];
$status = 'ANSWERED';
$limit = 1;
$offset = 0;
curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://51.3.9.124/apibkk/apimaster/api.php?cmd=cdrreport',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => "status=" . $status . "&field_pattern=" . $field_pattern . "&field_name=" . $field_name . "&sip=" . $sip . '&limit=1&offset=0',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer 4Sl3iFxgpfx7LV4xAf5FUh4eoBUbmKVg6gHeQr3U2loj0ne3mQ',
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;