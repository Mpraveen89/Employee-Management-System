<?php
/**
 * CodeIgniter Front Controller
 *
 * Compatible with PHP 7.4 – PHP 8.2
 * Safe error handling for CodeIgniter 3
 */

/*
|--------------------------------------------------------------------------
| APPLICATION ENVIRONMENT
|--------------------------------------------------------------------------
*/
define(
    'ENVIRONMENT',
    isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development'
);

/*
|--------------------------------------------------------------------------
| ERROR REPORTING
|--------------------------------------------------------------------------
*/
switch (ENVIRONMENT)
{
    case 'development':
        error_reporting(
            E_ALL & ~E_DEPRECATED & ~E_NOTICE & ~E_STRICT & ~E_USER_DEPRECATED
        );
        ini_set('display_errors', 1);
    break;

    case 'testing':
    case 'production':
        ini_set('display_errors', 0);
        error_reporting(
            E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT &
            ~E_USER_NOTICE & ~E_USER_DEPRECATED
        );
    break;

    default:
        header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
        echo 'The application environment is not set correctly.';
        exit(1);
}

/*
|--------------------------------------------------------------------------
| SYSTEM DIRECTORY NAME
|--------------------------------------------------------------------------
*/
$system_path = 'system';

/*
|--------------------------------------------------------------------------
| APPLICATION DIRECTORY NAME
|--------------------------------------------------------------------------
*/
$application_folder = 'application';

/*
|--------------------------------------------------------------------------
| VIEW DIRECTORY NAME
|--------------------------------------------------------------------------
*/
$view_folder = '';

/*
|--------------------------------------------------------------------------
| Resolve system path
|--------------------------------------------------------------------------
*/
if (defined('STDIN')) {
    chdir(dirname(__FILE__));
}

if (($temp = realpath($system_path)) !== FALSE) {
    $system_path = $temp . DIRECTORY_SEPARATOR;
} else {
    $system_path = rtrim($system_path, '/\\') . DIRECTORY_SEPARATOR;
}

if (!is_dir($system_path)) {
    header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
    echo 'System folder path is incorrect: ' . pathinfo(__FILE__, PATHINFO_BASENAME);
    exit(3);
}

/*
|--------------------------------------------------------------------------
| Define path constants
|--------------------------------------------------------------------------
*/
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('BASEPATH', $system_path);
define('FCPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('SYSDIR', basename(BASEPATH));

/*
|--------------------------------------------------------------------------
| Resolve application folder
|--------------------------------------------------------------------------
*/
if (is_dir($application_folder)) {
    $application_folder = realpath($application_folder);
} elseif (is_dir(BASEPATH . $application_folder)) {
    $application_folder = BASEPATH . $application_folder;
} else {
    header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
    echo 'Application folder path is incorrect: ' . SELF;
    exit(3);
}

define('APPPATH', $application_folder . DIRECTORY_SEPARATOR);

/*
|--------------------------------------------------------------------------
| Resolve views folder
|--------------------------------------------------------------------------
*/
if (!isset($view_folder[0]) && is_dir(APPPATH . 'views')) {
    $view_folder = APPPATH . 'views';
} elseif (is_dir($view_folder)) {
    $view_folder = realpath($view_folder);
} elseif (is_dir(APPPATH . $view_folder)) {
    $view_folder = APPPATH . $view_folder;
} else {
    header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
    echo 'View folder path is incorrect: ' . SELF;
    exit(3);
}

define('VIEWPATH', rtrim($view_folder, '/\\') . DIRECTORY_SEPARATOR);

/*
|--------------------------------------------------------------------------
| Load CodeIgniter Bootstrap
|--------------------------------------------------------------------------
*/
require_once BASEPATH . 'core/CodeIgniter.php';
