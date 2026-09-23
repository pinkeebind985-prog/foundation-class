<?php
$url = "https://blacksms.in/sms";
$data = [
    "sender_id" => "652",
    "route" => "1",
    "variables_values" => "123456",
    "numbers" => "6394746053"
];

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: f66e8fc23bc25362f68ad0b7437c22fa",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

$response = curl_exec($ch);
curl_close($ch);
echo $response;