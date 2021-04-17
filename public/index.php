<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';


$route = new \phpMvc\Http\Route(new \phpMvc\Http\Request(), new \phpMvc\Http\Response());

$route->resolve();