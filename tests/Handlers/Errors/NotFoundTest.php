<?php
namespace App\Test\Handlers\Errors;

use PHPUnit\Framework\TestCase;
use Rise\Http\Response;
use App\Handlers\Errors\NotFound;

final class NotFoundTest extends TestCase {
	public function testShowHtml() {
		$response = $this->createMock(Response::class);

		$response->expects($this->once())
			->method('html')
			->with($this->equalTo('errors/404'));

		$handler = new NotFound();
		$handler->showHtml($response);
	}
}
