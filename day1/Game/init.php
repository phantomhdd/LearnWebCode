<?php

// require_once 'Hewan/Hewan.php';
// require_once 'Hewan/Fight.php';
// require_once 'Hewan/Harimau.php';
// require_once 'Hewan/Elang.php';

spl_autoload_register(function($class){
    require_once __DIR__ . '/Animal/' .  $class . '.php';
});