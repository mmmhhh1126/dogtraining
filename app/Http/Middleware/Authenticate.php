<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // return $request->expectsJson() ? null : route('login');
        //https://reffect.co.jp/laravel/breeze_multi_auth#i-6:~:text=%E3%81%A3%E3%81%A6%E3%81%84%E3%81%BE%E3%81%99%E3%80%82-,%E3%83%AD%E3%82%B0%E3%82%A4%E3%83%B3%E5%89%8D%E3%81%AE%E3%83%AA%E3%83%80%E3%82%A4%E3%83%AC%E3%82%AF%E3%83%88,-%E3%83%AD%E3%82%B0%E3%82%A4%E3%83%B3%E3%81%99%E3%82%8B%E5%89%8D　参考に下記に書き換え
        if (! $request->expectsJson()) {
            if($request->is('admin/*')) return route('admin.login');
            return route('login');
        }
    
    }
}
