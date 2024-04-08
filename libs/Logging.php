<?php

namespace MyApp;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require_once "vendor/autoload.php";

$logger_signin = new Logger('signin');
$logger_signin -> pushHandler(new StreamHandler('logs/log_signin.log', Logger::NOTICE));
$logger_signout = new Logger('signout');
$logger_signout -> pushHandler(new StreamHandler('logs/log_signout.log', Logger::NOTICE));
$logger_signup = new Logger('signup');
$logger_signup -> pushHandler(new StreamHandler('logs/log_signup.log', Logger::NOTICE));

class Logging {
    public static function log_signin($user) {
        global $logger_signin;
        $logger_signin -> notice($user);
    }

    public static function log_signout($user) {
        global $logger_signout;
        $logger_signout -> notice($user);
    }

    public static function log_signup($user) {
        global $logger_signup;
        $logger_signup -> notice($user);
    }
}