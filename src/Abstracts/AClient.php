<?php
namespace Plagiarism\Plagscan\Abstracts;

use \GuzzleHttp\Client;
use \Plagiarism\Plagscan\Exceptions\ErrorException;

abstract class AClient {

	protected $Client;

	public function __construct() {
		$this->Client = new Client([
			"base_uri" => "https://api.plagscan.com/v3/",
			"timeout" => 20.0,
			"http_errors" => false
		]);
	}

	public function response($Response) {
		// if (!in_array($Response->getStatusCode(), [200, 201, 204])) {
		// 	return json_decode($Response->getBody(), true)['error']['message'];
		// }
		return json_decode($Response->getBody(), true);
	}
}