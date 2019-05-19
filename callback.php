<?php
	require('config.php');
	if (isset($_SESSION['accessToken'])) {
		$client->setAccessToken($_SESSION['accessToken']);
	} else if (isset($_GET['code'])) {
	    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
	    $_SESSION['accessToken'] = $token;
	} else {
		header("Location: index.php ");
	}

	$oAuth = new Google_Service_Oauth2($client);
	$user = $oAuth->userinfo->get();

	$userData['name'] = $user->name;
	$userData['picture'] = $user->picture;
	$userData['email'] = $user->email;
	$userData['gender'] = $user->gender;
	$userData['link'] = $user->link;

	$_SESSION['user'] = $userData;

	header("Location: userinfo.php");

?>