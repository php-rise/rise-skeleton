<?php
namespace App\Handlers\Errors;

use Rise\Http\Response;

class NotFound {
	public function __construct(Response $response) {
		$this->response = $response;
	}

	public function html() {
		$this->response->html('errors/404');
	}
}
