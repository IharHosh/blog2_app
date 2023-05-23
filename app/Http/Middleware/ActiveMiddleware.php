<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ActiveMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        Проверяем не заблокирован ли наш пользователь? если true
        if ($this->isActive($request)) {
            return $next($request);
        }
//        Если не активен, то
        abort(403);

    }
    protected function isActive(Request $request): bool
    {
        //        return $request->user()->admin;
//        Укажем ответ вручную true - если активен или false - если не активен
        return true;
    }
}
