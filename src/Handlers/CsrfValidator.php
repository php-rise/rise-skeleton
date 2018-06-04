<?php
namespace App\Handlers;

use Rise\Http\Receiver;
use Rise\Session;

class CsrfValidator {
	public function __construct(Receiver $receiver, Session $session) {
		$this->receiver = $receiver;
		$this->session = $session;
	}

	public function validate() {
		$request = $this->receiver->getRequest();
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
