<?php
namespace App\Handlers;

use Rise\Http\Response;

class Home {
	public function index(Response $response) {
		$response->html('home/index');
	}
}
