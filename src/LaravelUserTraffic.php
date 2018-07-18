<?php

namespace Alive2212\LaravelUserTraffic;

use App\User;

class LaravelUserTraffic
{
    protected static $prefixKey = 'alive_user_traffic';

    public static function getTraffic($userId)
    {
        $user = new User();
        $metas = $user->find($userId)->getAllMeta();
        $result = [];
        foreach ($metas as $key => $value) {
            if (is_numeric(strpos($key, self::$prefixKey))){
                $result = array_add($result, $key, $value);
            };
        }
        return $result;
    }

    public static function getValue($request)
    {

    }

    /**
     * @return string
     */
    public static function getPrefixKey(): string
    {
        return self::$prefixKey;
    }

    /**
     * @param string $prefixKey
     */
    public static function setPrefixKey(string $prefixKey)
    {
        self::$prefixKey = $prefixKey;
    }
}