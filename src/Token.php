<?php
namespace Plagiarism\Plagscan;

use \Plagiarism\Plagscan\Abstracts\AClient;

class Token extends AClient{

	public function get() {
		$Response = $this->Client->post("token", [
			'form_params' => [
				"grant_type" => config('plagscan.client.grant_type'),
				"client_id" => config('plagscan.client.client_id'),
				"client_secret" => config('plagscan.client.client_secret'),
			]
		]);

		return $this->response($Response);
	}
}
