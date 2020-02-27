<?php
namespace Plagiarism\Plagscan;

use \Plagiarism\Plagscan\Abstracts\AClient;

class PlagiarismCheck extends AClient {
	public static function submit() {
		$post_data = array(
			"access_token"=> "8e7c43e7db7e7e837edb3253b75522859818dae8",
		);
		$response = $this->Client->get("users", [ "query" => $post_data]);

		if($response->getStatusCode() == 200){
			$content = json_decode($response->getBody(), true);
			return $content;
		}
		else {
			return $response->getBody();
		}
	}
}