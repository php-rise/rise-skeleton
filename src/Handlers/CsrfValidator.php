<?php
namespace App\Handlers;

class CsrfValidator {
	public function validate() {
		$request = service('http')->getRequest();
		if ($request->isMethod('POST')
			|| $request->isMethod('PUT')
			|| $request->isMethod('DELETE')
		) {
			$session = service('session');
			if (!$session->validateCsrfToken($request->get($session->getCsrfTokenFormKey()))) {
				var_dump('false');
				return false;
			}
		}
	}
}
