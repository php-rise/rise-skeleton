<?php
namespace App\Test\Handlers;

use PHPUnit\Framework\TestCase;
use Rise\Http\Response;
use App\Handlers\Home;

final class HomeTest extends TestCase {
	public function testIndex() {
		$response = $this->createMock(Response::class);

		$response->expects($this->once())
			->method('html')
			->with($this->equalTo('home/index'));

		$handler = new Home();
		$handler->index($response);
	}
}
