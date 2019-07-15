<?php
	global $matchday;
    $uri = 'http://api.football-data.org/v2/competitions/2021/matches?matchday='.$matchday;
    $reqPrefs['http']['method'] = 'GET';
    $reqPrefs['http']['header'] = 'X-Auth-Token:  66bf777551774c41983400d9684f8cbe';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $matches = json_decode($response);
    // $time = $matches->matches[0]->utcDate;
    // echo $time;
    // echo $matches->count;
    // echo $matches->matches[0]->homeTeam->name;
    // echo $matches->matches[0]->status;
?>