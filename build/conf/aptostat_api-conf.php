<?php
// This file generated by Propel 1.6.9 convert-conf target
// from XML runtime conf file /Users/Nox/git/aptostat_api/runtime-conf.xml
$conf = array (
  'datasources' => 
  array (
    'aptostat' => 
    array (
      'adapter' => 'mysql',
      'connection' => 
      array (
        'dsn' => 'mysql:host=localhost;dbname=aptostat',
        'user' => 'aptostat',
        'password' => 'statapto',
      ),
    ),
    'default' => 'aptostat',
  ),
  'generator_version' => '1.6.9',
);
$conf['classmap'] = include(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'classmap-aptostat_api-conf.php');
return $conf;