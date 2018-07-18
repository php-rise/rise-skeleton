<?php
namespace App\Handlers;

use Rise\{Response, Template};

class Home {
	public function index(Response $response, Template $template) {
		$response->asHtml()->send($template->render('home/index'));
	}
}
