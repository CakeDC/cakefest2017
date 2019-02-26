<?php
namespace App\Middleware;

use Cake\I18n\Number;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * ProfileTime middleware
 */
class ProfileTimeMiddleware
{

    /**
     * Invoke method.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request The request.
     * @param \Psr\Http\Message\ResponseInterface $response The response.
     * @param callable $next Callback to invoke the next middleware.
     * @return \Psr\Http\Message\ResponseInterface A response
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $next)
    {
        $now = microtime(true);
        $response = $next($request, $response);
        $time = (microtime(true) - $now) * 1000;

        return $response->withHeader('X-Profile-Time', Number::precision($time, 2) . ' ms');
    }
}
