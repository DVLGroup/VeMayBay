<?php

// Always provide a TRAILING SLASH (/) AFTER A PATH
define('URL', '//'.$_SERVER['HTTP_HOST'].'/VeMayBay/');
define('LIBS', 'Libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'dbvemaybay');
define('DB_USER', 'root');
define('DB_PASS', '');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'dvlGroupbestgroupITinVietNam');