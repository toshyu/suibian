<?php
namespace app\common\model;

class Utils {
    
    // 返回当前用户ip
    public static function returnUserIp() {
        if (getenv("HTTP_CLIENT_IP")) {
            $ip = getenv("HTTP_CLIENT_IP");
        } else if (getenv("HTTP_X_FORWARDED_FOR")) {
            $ip = getenv("HTTP_X_FORWARDED_FOR");
        } else if (getenv("REMOTE_ADDR")) {
            $ip = getenv("REMOTE_ADDR");
        } else {
            $ip = "Unknow";
        }

        if ($ip == '::1') {
            $ip = '127.0.0.1';
        }
        return $ip; 
    }
}