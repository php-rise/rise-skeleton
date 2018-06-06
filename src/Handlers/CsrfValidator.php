<?php
namespace App\Handlers;

use Rise\Http\Request;
use Rise\Session;

class CsrfValidator {
	public function __construct(Request $request, Session $session) {
		$this->request = $request;
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
				return false;
			}
		}
	}
}
