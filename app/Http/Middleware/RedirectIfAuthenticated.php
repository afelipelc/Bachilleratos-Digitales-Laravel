<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class RedirectIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            switch ($request->user()->role) {
                case 'admin':
                    return redirect('/school');
                    break;
                case 'director':
                    return redirect()->route('school.show', [$request->user()->school_id]);
                    break;
                case 'profesor':
                    return redirect()->route('user.show', [$request->user()->id]);
                    break;
                default:
                    return redirect('/auth/login');
                    break;
            }
            
        }

        return $next($request);
    }
}
