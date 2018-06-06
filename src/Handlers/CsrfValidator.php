<?php
namespace App\Handlers;

use Rise\Http\Request;
use Rise\Http\Response;
use Rise\Session;

class CsrfValidator {
	public function __construct(Request $request, Response $response, Session $session) {
		$this->request = $request;
		$this->response = $response;
		$this->session = $session;
	}

	public function validate() {
		$request = $this->request;
		if ($request->isMethod('POST')
			|| $request->isMethod('PUT')
			|| $request->isMethod('DELETE')
		) {
			$session = $this->session;
			if (!$session->validateCsrfToken($request->get($session->getCsrfTokenFormKey()))) {
				$this->response->setContentType('text/plain')->setBody('Invalid CSRF token');
				return false;
			}
		}
	}
}
