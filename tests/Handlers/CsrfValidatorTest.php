<?php
namespace App\Test\Handlers;

use PHPUnit\Framework\TestCase;
use Rise\Http\Request;
use Rise\Http\Response;
use Rise\Session;
use App\Handlers\CsrfValidator;

final class CsrfValidatorTest extends TestCase {
	public function testValidateBypassHttpMethods() {
		$request = $this->createMock(Request::class);
		$response = $this->createMock(Response::class);
		$session = $this->createMock(Session::class);

		$request->expects($this->any())
			->method('isMethod')
			->willReturn(false);

		$handler = new CsrfValidator($request, $response, $session);
		$this->assertNotSame(false, $handler->validate());
	}

	public function testValidateCsrfSuccess() {
		$request = $this->createMock(Request::class);
		$response = $this->createMock(Response::class);
		$session = $this->createMock(Session::class);

		$request->expects($this->any())
			->method('isMethod')
			->willReturn(true);

		$session->expects($this->once())
			->method('validateCsrfToken')
			->willReturn(true);

		$handler = new CsrfValidator($request, $response, $session);
		$this->assertNotSame(false, $handler->validate());
	}

	public function testValidateCsrfFail() {
		$request = $this->createMock(Request::class);
		$response = $this->createMock(Response::class);
		$session = $this->createMock(Session::class);

		$request->expects($this->any())
			->method('isMethod')
			->willReturn(true);

		$session->expects($this->once())
			->method('validateCsrfToken')
			->willReturn(false);

		$response->expects($this->once())
			->method('setContentType')
			->with($this->equalTo('text/plain'))
			->will($this->returnSelf());

		$response->expects($this->once())
			->method('setBody')
			->with($this->equalTo('Invalid CSRF token'))
			->will($this->returnSelf());

		$handler = new CsrfValidator($request, $response, $session);
		$this->assertFalse($handler->validate());
	}
}
