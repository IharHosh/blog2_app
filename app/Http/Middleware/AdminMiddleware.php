<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     * @throws AuthorizationException
     */
    public function handle(Request $request, Closure $next): Response
    {
        //        Проверяем является ли АДМИН АДМИНОМ
        if ($this->isAdmin($request)) {
            return $next($request);
        }
//        Если не является
        abort(403);
        // Или же можем исп. СКРИПТ проверки АВТОРИЗАЦИИ (ИЗ КОРОБКИ)
//        throw new AuthorizationException();
    }
    protected function isAdmin(Request $request): bool
    {
        //        Проверяем является ли АДМИН АДМИНОМ
//        return $request->user()->admin;
//        Укажем (пока) ответ вручную true - если АДМИН или false - если Не АДМИН
        return false;
    }
}
