<?php

$baseDir = dirname(dirname(dirname(__DIR__)));


return array (
  'dotenv' => 
  array (
  ),
  'defines' => 
  array (
  ),
  'params' => 
  array (
  ),
  'web' => 
  array (
    0 => $baseDir . '/common/config/main.php',
    1 => $baseDir . '/common/config/db.php',
    2 => $baseDir . '/frontend/config/main.php',
  ),
  'web-dev' => 
  array (
    0 => '$web',
    1 => '?' . $baseDir . '/frontend/config/env/main-dev.php',
  ),
  'web-prod' => 
  array (
    0 => '$web',
    1 => '?' . $baseDir . '/frontend/config/env/main-prod.php',
  ),
  'console' => 
  array (
    0 => $baseDir . '/common/config/main.php',
    1 => $baseDir . '/common/config/db.php',
    2 => $baseDir . '/console/config/main.php',
  ),
  'console-dev' => 
  array (
    0 => '$console',
    1 => '?' . $baseDir . '/console/config/env/main-dev.php',
  ),
  'console-prod' => 
  array (
    0 => '$console',
    1 => '?' . $baseDir . '/console/config/env/main-prod.php',
  ),
);
