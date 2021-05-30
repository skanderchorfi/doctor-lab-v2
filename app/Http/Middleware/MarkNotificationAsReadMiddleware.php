<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;

class MarkNotificationAsReadMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('notification'))
        {
            $id = $request->get('notification');

            auth()->user()->unreadNotifications->where('id', $id)->markAsRead();
        }

        return $next($request);
    }
}
