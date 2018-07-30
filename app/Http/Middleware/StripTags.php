<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Input;

class StripTags
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Input::merge(array_strip_tags(Input::all(), false));
        return $next($request);
    }
}
