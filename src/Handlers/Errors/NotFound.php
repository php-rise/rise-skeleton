<?php
namespace App\Handlers\Errors;

use Rise\{Response, Template};

class NotFound {
	public function showHtml(Response $response, Template $template) {
		$response->asHtml()->send($template->render('errors/404'));
	}
}
