<?php

function autoload($classname)
{
  $path = __DIR__ . "/../classes/" . strtolower($classname) . ".class.php";
  if (file_exists($path)) {
    require_once($path);
  }
}

spl_autoload_register("autoload");
