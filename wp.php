<?php

$data = [
    'phone' => '', //Mesajin gonderilecegi tel no'su
    'body' => 'selam', // Gonderilecek mesaj
];

$json = json_encode($data);
$url = ''; // Siteden aldiginiz request adresi

$options = stream_context_create(['http' => [
    'method' => 'POST',
    'header' => 'Content-type: application/json',
    'content' => $json,
]]);




file_get_contents($url, false, $options);





