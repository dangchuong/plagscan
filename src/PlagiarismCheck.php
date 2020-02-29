<?php
namespace Plagiarism\Plagscan;

use \Plagiarism\Plagscan\Abstracts\AClient;

class PlagiarismCheck extends AClient {

	public function submit(string $filePath, string $token) {
		$Response = $this->Client->post("documents?access_token=" . $token,
			["multipart" => [
			 	[
					"name" => "fileUpload",
					"contents" => fopen($filePath, "r")
				]
			]]);

		return $this->response($Response);
	}

	public function check(int $docID, string $token) {
		$Response = $this->Client->put("documents/" . $docID . "/check", [
			"form_params" => ['access_token' => $token]]);

		return $this->response($Response);
	}
}