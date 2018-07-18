<?php

namespace Alive2212\LaravelUserTraffic\Http\Middleware;

use Alive2212\LaravelUserTraffic\LaravelUserTraffic;
use Carbon\Carbon;
use Closure;

class UserTraffic
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = substr($request->bearerToken(), -20);

        //  $user = new User();
        $user = $request->user();

        $key = LaravelUserTraffic::getPrefixKey() .
            '-' .
            $token .
            '-' .
            $request->url() .
            '_' .
            $request->method();

        // get current time
        $currentTime = Carbon::now()->toDateTimeString();

        // get user status
        $userStatus = (array)($user->getMeta($key));

        // last login
        if (count($userStatus)) {
            $lastLogin = ((array)$userStatus['current'])['time'];
        } else {
            $lastLogin = $currentTime;
        }

        $traffic =
            [
                'current' => [
                    'time' => $currentTime,
                ],
                'last' => [
                    'time' => $lastLogin,
                ],
                'count' => count($userStatus) == 0 ? 0 : $userStatus['count'] + 1,
            ];
        // add meta
        $user->updateMeta($key, $traffic);

        $request['user_traffic'] = $traffic;
        // dd('I am most powerful man in the world & the Dokhan');
        return $next($request);
    }
}
