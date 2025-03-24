<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

include "config.php";
include FUNC."url.php";

spl_autoload_register(function($class) {
  if(is_file(CORE.$class.".php")) {
    require_once CORE.$class.".php";
  } else if(is_file(CONTROLLERS.$class.".php")) {
    require_once CONTROLLERS.$class.".php";
  } else if(is_file(MODELS.$class.".php")) {
    require_once MODELS.$class.".php";
  } else {
    require_once CONTROLLERS."_404.php";
  }

});

$app = new App();
$app->load_controller();
