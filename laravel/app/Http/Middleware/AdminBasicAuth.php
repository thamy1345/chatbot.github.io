<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminBasicAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        $username = env('ADMIN_USER', 'admin');
        $password = env('ADMIN_PASS', 'admin');

        if ($request->getUser() !== $username || $request->getPassword() !== $password) {
            $headers = ['WWW-Authenticate' => 'Basic realm="Admin"'];
            return new Response('Unauthorized.', 401, $headers);
        }

        return $next($request);
    }
}
