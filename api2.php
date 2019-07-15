<?php 
	global $matchday;
    $uri = 'http://api.football-data.org/v2/competitions/2021/standings';
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token:  66bf777551774c41983400d9684f8cbe';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $standings = json_decode($response);
    // echo $response;
?>