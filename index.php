<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set("display_errors", "1");

$page = $_GET["p"];

if (!$page) {
  $page = "home";
}

require_once(__DIR__ . "/includes/header.php");
require_once(__DIR__ . "/pages/" . $page . ".php");
require_once(__DIR__ . "/includes/header.php");
