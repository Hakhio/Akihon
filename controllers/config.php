<?php

/*
    URL
*/

// http://localhost/studnet/home
$full_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// 1 http:/
// 2 /
// 3 localhost/
// 4 studnet/
// 5 home

// Récupère toute la partie après le 4e '/'
list($http, , $host, $dir) = explode('/', $full_link);

$basement = $http . "//" . $host . "/" . $dir;
//$http = http
//$host = localhost
//$dir  = workspace

$uri = array_slice(explode("/", $full_link), 4);
$query_string = $_SERVER['QUERY_STRING'];

// Supprimer la query string des uri
if (($key = array_search('?' . $query_string, $uri)) !== false) { unset($uri[$key]); }

$main = $uri[0];
$second = $uri[1];