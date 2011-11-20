<?php
/**
 * Laravel - A clean and classy framework for PHP web development.
 *
 * @package  Laravel
 * @version  2.0.0 Beta 2
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 * @link     http://laravel.com
 */

// --------------------------------------------------------------
// Tick... Tock... Tick... Tock...
// --------------------------------------------------------------
define('LARAVEL_START', microtime(true));

// --------------------------------------------------------------
// The path to the application directory.
// --------------------------------------------------------------
$application = 'application';

// --------------------------------------------------------------
// The path to the Laravel directory.
// --------------------------------------------------------------
$laravel = $application.'/laravel';

// --------------------------------------------------------------
// The path to the public directory.
// --------------------------------------------------------------
$public = __DIR__;

// --------------------------------------------------------------
// Launch Laravel.
// --------------------------------------------------------------
require $laravel.'/laravel.php';

// echo number_format((microtime(true) - LARAVEL_START), 5);