<?php
namespace App\Handlers;

use Rise\Http\Request;
use Rise\Http\Response;
use Rise\Session;

class CsrfValidator {
	public function validate(Request $request, Response $response, Session $session) {
		if ($request->isMethod('POST')
			|| $request->isMethod('PUT')
			|| $request->isMethod('DELETE')
		) {
			if (!$session->validateCsrfToken($request->get($session->getCsrfTokenFormKey()))) {
				$response->setContentType('text/plain')->setBody('Invalid CSRF token');
				return false;
			}
		}
	}
}
