<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');
include(dirname(__FILE__).'/../../bootstrap/unit_database.php');

//INIT
$configuration = ProjectConfiguration::getApplicationConfiguration("pc_frontend", 'test', isset($debug) ? $debug : true);
sfContext::createInstance($configuration);
//INIT

$t = new lime_test(null, new lime_output_color());

$t->fail("always fail");

if(sizeof($result[0]["stats"]["failed"]) !=0)
{
  exit(1);
}else{
  exit(0);
}

