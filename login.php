<?php
	/*
		client-ID
		236440965114-gondfu01aekm577slshvq5b03cvcf05s.apps.googleusercontent.com
		Client Secret :
		ToEfEYAn3-iEEmbnbi-4KCwk
	*/
		
		// require_once __DIR__ . DIRECTORY_SEPARATOR .'googleApi'.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';
		require('config.php');
		
		header("location: ".$authUrl);
		print_r($client);