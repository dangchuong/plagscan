<?php
namespace Plagiarism\Plagscan\Abstracts;

use \GuzzleHttp\Client;

class AClient {
	protected $Client;

	public function __construct() {
		$this->Client = new Client([
			"base_uri" => "https://api.plagscan.com/v3/",
			"timeout" => 20.0,
			"http_errors" => false
		]);
	}
}