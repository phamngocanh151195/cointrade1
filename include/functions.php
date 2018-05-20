<?php
session_start();
error_reporting(E_ERROR | E_PARSE);

$__pattern = '/cointrade1';

define('MAIN_PATH', './');
define('MAIN_URL', 'http://localhost'.$__pattern);
define('ASSETS', MAIN_URL.'/assets');
define('CSS', ASSETS.'/css');
define('IMG', ASSETS.'/images');
define('JS', ASSETS.'/js');

$__page = str_replace($__pattern.'/', '', $_SERVER['REQUEST_URI']);

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

	if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
		header("Access-Control-Allow-Headers:{$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

	exit(0);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && empty($_POST)) {
    $_POST = json_decode(file_get_contents('php://input'), true);
}


class Config {
    function addJS ($link) {
        $this->JS .= JS.'/'.$link.'|';
    }
    function echoJS () {
        $exJS = explode('|', $this->JS);
        foreach ($exJS as $exjs) {
            if ($exjs) echo '<script src="'.$exjs.'"></script>
    ';
        }
    }

    function get ($char) {
        $request = $this->request;
        if ($request && check($request, $char) > 0) {
            $ca = explode($char.'=', $request);
            if (isset($ca[1])) {
                $c = $ca[1];
                $c = explode('&', $c)[0];
                $request = str_replace("{$char}={$c}&", "", $request);
                return $c;
            }
        }
        return null;
    }
}

function check ($haystack, $needle) {
    return substr_count($haystack, $needle); // Find $word in $string
}

function checkURL ($word) {
    return check($_SERVER['REQUEST_URI'], $word);
}
