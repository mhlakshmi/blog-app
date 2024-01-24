<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class RequestLoggerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $startTime = microtime(true);

        $response = $next($request);

        $endTime = microtime(true);
        $duration = round(($endTime - $startTime) * 1000, 2); // Convert to milliseconds

        $this->logRequest($request, $duration);

        return $response;
    }

    private function logRequest($request, $duration)
    {
        $logData = [
            'method' => $request->method(),
            'url' => $request->fullUrl(),
            'duration' => $duration . 'ms',
            'ip' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ];

        Log::info('Request Log', $logData);
    }
}
