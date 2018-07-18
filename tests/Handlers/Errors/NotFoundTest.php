<?php
namespace App\Test\Handlers\Errors;

use PHPUnit\Framework\TestCase;
use App\Handlers\Errors\NotFound;
use Rise\{Response, Template};

final class NotFoundTest extends TestCase {
	public function testShowHtml() {
		$response = $this->createMock(Response::class);
		$template = $this->createMock(Template::class);

		$response->expects($this->once())
			->method('asHtml')
			->will($this->returnSelf());

		$response->expects($this->once())
			->method('send');

		$template->expects($this->once())
			->method('render')
			->with($this->equalTo('errors/404'));

		$handler = new NotFound();
		$handler->showHtml($response, $template);
	}
}
