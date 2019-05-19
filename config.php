<?php

		require('googleApi/vendor/autoload.php');
		session_start();		

		$client = new Google_Client();
		$client->setAuthConfig('client_credentials.json');
		$client->addScope([Google_Service_Oauth2::PLUS_LOGIN,Google_Service_Oauth2::USERINFO_EMAIL, Google_Service_Oauth2::USERINFO_PROFILE]);
		
		$client->setRedirectUri('http://localhost.googleapi.com/callback.php');
		$authUrl = $client->createAuthUrl();