<?php

return [
	'client' => [
		'grant_type' => env('GRANT_TYPE', 'client_credentials'),
		'client_id' => env('CLIENT_ID', '5'),
		'client_secret' => env('CLIENT_SECRET', 'W9fUaSq2vjkXUPMmenlmp3Xqnc1xWPtN'),
	],
    'api_url' => env('API_URL')
];