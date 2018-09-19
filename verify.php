<?php
$access_token = 'ZFazmAJibmDGbd8BMErkIpd1x8EKvTab70a0l9Sq/L0+ISkZpQ3wXTeIFmC6Vp1BAICfyFxSb5reQ5cUtcg3DvHWhDMFmVU3dcp8MVR3cTkRSI0QIuqBNd6pFl3NuoQ1ZuK7b+SOUAVlBVeN+jKkAgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
