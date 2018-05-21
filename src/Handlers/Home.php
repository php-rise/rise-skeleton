<?php
namespace App\Handlers;

use Rise\Services\Http\Responder;

class Home {
	public function __construct(Responder $responder) {
		$this->responder = $responder;
	}

	public function index() {
		$this->responder->html('home/index');
	}
}
