<?php


define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__).DS);
define("APP",ROOT."app".DS);
define("CONTROLLER",APP."controllers".DS);
define("CORE",APP."core".DS);
define("MODEL",APP."models".DS);
define("VIEW",APP."views".DS);
define("CONFIG",APP."config".DS);


// config 
define("SERVER","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE","proone");
define("DATABASE_TYPE","mysql");
define("DOMAIN_NAME","http://news.test");

define('CSS_PATH', DOMAIN_NAME.'/');
define('PATH', DOMAIN_NAME.'/');
require_once ("../vendor/autoload.php");


$app = new MVC\core\app();