<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $token): Response
    {
//      Далее мы будем проверять равен ли input нашему токену (input метод на Request - позволяет получить 1 пар-р из
//      запроса, all - все пар-ры из запроса)
        if ($request->input('token') === $token) {
//      если все ОК пропускаем запрос ниже указанным скриптом далее
        return $next($request);
    }
// Если же input не совподает
        abort(403);
    }

}
