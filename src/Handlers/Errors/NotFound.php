<?php
namespace App\Handlers\Errors;

use Rise\Http\Response;

class NotFound {
	public function showHtml(Response $response) {
		$response->html('errors/404');
	}
}
