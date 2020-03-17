<?php

define('DS',DIRECTORY_SEPARATOR);

//spl autoload core libraries
spl_autoload_register(function($className){
  require_once __DIR__.DS.'core'.DS.$className.'.php';
});



// load twig class 

require_once dirname(__FILE__).DS.'vendor'.DS.'autoload.php';
 

// // local database 
// define('DB_HOST','localhost');
// define('DB_USER','u958902108_ch');
// define('DB_PASS','West66!!');
// define('DB_NAME','u958902108_istanbul');

// https://www.greffe-cheveux-istanbul.com

define('DB_HOST','localhost');
define('DB_USER','u958902108_ch');
define('DB_PASS','West66!!');
define('DB_NAME','u958902108_istanbul');

// App Root
define('APPROOT',dirname(dirname(__FILE__)));
// local approot C:\xampp\htdocs\greffe-cheveux-istanbul.com

// url root Root

//define('URLROOT','http://localhost/greffe-cheveux-istanbul.com');
define('URLROOT','https://www.greffe-cheveux-istanbul.com');

// local root http://localhost/greffe-cheveux-istanbul.com

// server root https://www.greffe-cheveux-istanbul.com
//
// site name
    define('SITENAME','CH_twig');
    define('LANG','fr');

//  pdf print format

require_once dirname(__FILE__).DS.'fpdf'.DS.'fpdf.php';


 