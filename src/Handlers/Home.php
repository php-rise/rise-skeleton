<?php
namespace App\Handlers;

use Rise\Http\Response;

class Home {
	public function __construct(Response $response) {
		$this->response = $response;
	}

	public function index() {
		$this->response->html('home/index');
	}
}
