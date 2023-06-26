<?php
// HTTP
define('HTTP_SERVER', 'http://j3.test.local/');

// HTTPS
define('HTTPS_SERVER', 'http://j3.test.local/');

// DIR
define('DIR_APPLICATION', '/home/prem/web/j3.test.local/public_html/catalog/');
define('DIR_SYSTEM', '/home/prem/web/j3.test.local/public_html/system/');
define('DIR_IMAGE', '/home/prem/web/j3.test.local/public_html/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'Apsinno@12345');
define('DB_DATABASE', 'j3');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');