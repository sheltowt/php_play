<?php
	require_once 'vendor/autoload.php';
	require_once 'twitter/generated-conf/config.php';
	require 'classes/twitter.php';
	
	$string = file_get_contents("settings.json");
	
	$settings_json = json_decode($string, true);

	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	$getfield = '?screen_name=j7mbo';
	$requestMethod = 'GET';
	
	$twitter = new TwitterAPIExchange($settings_json);
	$response = $twitter->setGetfield($getfield)
	    ->buildOauth($url, $requestMethod)
	    ->performRequest();
	
	$twitterData = json_decode($response);

	$twitterApi = new TwitterApi($twitterData);
	$names = $twitterApi->returnDesiredValues();
	var_dump($names);
?>