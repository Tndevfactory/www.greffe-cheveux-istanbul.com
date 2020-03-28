<?php

define('DS',DIRECTORY_SEPARATOR);

//spl autoload core libraries
spl_autoload_register(function($className){
  require_once __DIR__.DS.'core'.DS.$className.'.php';
});

require_once dirname(__FILE__).DS.'vendor'.DS.'autoload.php';
 
define('DB_HOST','localhost');
define('DB_USER','u958902108_ch');
define('DB_PASS','West66!!');
define('DB_NAME','u958902108_istanbul');

// App Root
define('APPROOT',dirname(dirname(__FILE__)));

define('URLROOT','http://localhost/touchlink/www.greffe-cheveux-istanbul.com');

//define('URLROOT','https://www.greffe-cheveux-istanbul.com');

    define('SITENAME','CH_twig');
    define('LANG','fr');


require_once dirname(__FILE__).DS.'fpdf'.DS.'fpdf.php';


 
