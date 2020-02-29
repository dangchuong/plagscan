<?php
namespace Plagiarism\Plagscan;

use \Illuminate\Support\ServiceProvider;
use \Plagiarism\Plagscan\PlagiarismCheck;

class PlagiarismProvider extends ServiceProvider {
	
	public function boot() {
		$this->publishes([
			__DIR__ . '/../config/config.php' => config_path('plagscan.php'),
		]);
	}

	public function register() {
		$this->app->bind('plagiarism',function(){
			return new PlagiarismCheck();
		});
	}
}