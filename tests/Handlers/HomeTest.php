<?php
namespace App\Test\Handlers;

use PHPUnit\Framework\TestCase;
use App\Handlers\Home;
use Rise\{Response, Template};

final class HomeTest extends TestCase {
	public function testIndex() {
		$response = $this->createMock(Response::class);
		$template = $this->createMock(Template::class);

		$response->expects($this->once())
			->method('asHtml')
			->will($this->returnSelf());

		$response->expects($this->once())
			->method('send');

		$template->expects($this->once())
			->method('render')
			->with($this->equalTo('home/index'));

		$handler = new Home();
		$handler->index($response, $template);
	}
}
