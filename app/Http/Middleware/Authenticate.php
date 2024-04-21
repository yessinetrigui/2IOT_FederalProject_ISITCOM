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
        if (strpos("AgencyManager", $request->url) != -1) {
            return route("AgencyManager.showLogin");
        } else if (strpos("admin", $request->url) != -1) {
            return route("admin.showLogin");
        } else {
            return $request->expectsJson() ? null : route('user.home');
        }
    }
}
