<?php
namespace App\Handlers;

class Home {
	public function index() {
		service('http')->html('home/index');
	}
}
