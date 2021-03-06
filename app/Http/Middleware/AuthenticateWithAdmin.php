<?php
/**
 * Created by PhpStorm.
 * User: Lan Anh
 * Date: 02/05/2016
 * Time: 2:51 CH
 */
namespace App\Http\Middleware;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Closure;
class AuthenticateWithAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Sentinel::getUser()) {
            return redirect()->to('/login');
        }
        if (!Sentinel::getUser()->inRole('admin')) {
            return redirect()->to('/');
        }

        return $next($request);
    }
}