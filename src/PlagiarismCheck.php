<?php
namespace Plagiarism\Plagscan;

use \Plagiarism\Plagscan\Abstracts\AClient;

class PlagiarismCheck extends AClient {

	const MODE_0 = 0;

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

	public function status(int $docID, string $token) {
		$Response = $this->Client->get("documents/" . $docID . "/status?access_token=" . $token);
		return $this->response($Response);
	}

	public function retrieve(int $docID, string $token, int $mode = self::MODE_0) {
		$Response = $this->Client->get("documents/" . $docID . "/retrieve", [
			"query" => ['access_token' => $token, 'mode' => $mode]]);

		return $this->response($Response);
	}
}