<?php
namespace App\Test\TestCase\Middleware;

use App\Middleware\ProfileTimeMiddleware;
use Cake\Http\Response;
use Cake\Http\ServerRequest;
use Cake\TestSuite\TestCase;

/**
 * Test Case
 */
class ProfileTimeMiddlewareTest extends TestCase
{
    public function testInvokeShouldAddNewHeader()
    {
        $request = new ServerRequest('/url');
        $response = new Response();
        $next = function (ServerRequest $request, Response $response) {
            return $response;
        };
        $profileTimeMiddleware = new ProfileTimeMiddleware();
        $result = $profileTimeMiddleware($request, $response, $next);
        $header = $result->getHeader('X-Profile-Time');
        $this->assertNotNull($header);
        $this->assertRegExp('/^\d\.\d\d ms/', reset($header));
    }
}
