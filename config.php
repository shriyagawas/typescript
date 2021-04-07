<?php
define('START_TIME', microtime(true));
define('ENVIRONMENT', 'DEVELOPMENT');
error_reporting(E_ALL);
ini_set("display_errors", 1);
//session_start();
ini_set("log_errors", "1");
//date_default_timezone_set("UTC");
define("MONEYNET_BASE_DIR", "/home/cdmx/Workspace/public_html/moneynet/backoffice/");
define('BACKOFFICE', 'backoffice/');
define('MNT_DIR_INCLUDES', MONEYNET_BASE_DIR . 'includes/');
define('MNT_DIR_CONFIGS', MNT_DIR_INCLUDES . 'configs/');
/*
define('SALT_FILE_2_PAYIN', '6uvUgbb5');
define('SALT_FILE_2_MNG', 'nIl8Jy7M');
define('SALT_FILE_2_USER', 'kjP7ZQzL');
define('SALT_FILE_2_BTA', '4HGWT1c7');*/
define('MYSQL_SECURE_CON', false);
define('MYSQL_CA_KEY', '/home/codemaxpc-01/mysql/ca-key.pem');
define('MYSQL_CLIENT_CERT', '/home/codemaxpc-01/mysql/client-cert.pem');
define('MYSQL_CLIENT_KEY', '/home/codemaxpc-01/mysql/client-key.pem');
define('SALT_FILE_2_PAYIN', 'aaaaaaaa');
define('SALT_FILE_2_MNG', 'aaaaaaaa');
define('SALT_FILE_3_MNG', 'aaaaaaaa');
define('SALT_FILE_4_MNG', 'aaaaaaaa');
define('SALT_FILE_5_MNG', 'aaaaaaaa');
define('SALT_FILE_6_MNG', 'aaaaaaaa');
define('SALT_FILE_7_MNG', 'aaaaaaaa');
define('SALT_FILE_8_MNG', 'abcdabcd');
define('SALT_FILE_10_MNG', 'abcdabcd');
define('SALT_FILE_11_MNG', 'abcdabcd');
define('SALT_FILE_12_MNG', 'abcdabcd');
define('SALT_FILE_9_MNG', 'abcdabcd');
define('SALT_FILE_2_USER', '12345678');
define('SALT_FILE_2_BTA', 'aaaaaaaa');
define('NEXMO_CRYPT_FILE_ENC_KEY', '2fjYxDxOYj2oAObR');
define('NEXMO_CRYPT_FILE_AUTH_KEY', 'IlgnFrzLOiMNV3C7');
define('PASSWORD_CRYPT_FILE_ENC_KEY', '1234567891123456');
define('PASSWORD_CRYPT_FILE_AUTH_KEY', '1234567891123456');
define('SESSION_TRACKING', true);
//define('SITE_FLAG', 'GNI');
define('SITE_FLAG', 'MNI');
/*if ($_SERVER['HTTP_HOST'] == 'rest.moneynet.com') {
    define('SITE_DIRECTORY', '');
}
else{
    define('SITE_DIRECTORY', '/');
}*/
//
//if ($_SERVER['HTTP_HOST'] == 'rest.moneynet.com') {
//
//	define('DOMAIN_URL', 'http://rest.moneynet.com');
//	define('SERVER_NAME', 'rest.moneynet.com');
//	define('SITE_DIRECTORY', '');
//}
//else{
//	define('DOMAIN_URL', 'http://localhost/');
//	define('SERVER_NAME', 'localhost');
//    define('SITE_DIRECTORY', 'moneynet/');
//}
//define('MINIO', true);
//define('MINIO_ENDPOINT', 'http://127.0.0.1:9001');
//define('MINIO_ACCESS_KEY', 'P5OTQXFUWO2YS9MG42EE');
//define('MINIO_SECRET_KEY', 'eeX7WnFzQq+p+rVzIbctbDVS3DUTeHCk6ISNFNBM');
define('SITE_DIRECTORY', '/');
define('DOMAIN_URL', 'http://localhost');
define('SERVER_NAME', 'localhost');
include MNT_DIR_CONFIGS . 'common.php';
/*
if (isset($_SESSION['user_currency'])) {
    define("MAIN_CURRENCY", $_SESSION['user_currency']);
}
else {
    define("MAIN_CURRENCY", 'USD');
}*/