<?php
/**
 * PHPUnit bootstrap file
 */
$_tests_dir = getenv('WP_TESTS_DIR');

if (!$_tests_dir) {
    $_tests_dir = '/tmp/wordpress-tests-lib';
}

// Start up the WP testing environment.
require $_tests_dir . '/includes/bootstrap.php';
require dirname(__DIR__) . '/vendor/autoload.php';
