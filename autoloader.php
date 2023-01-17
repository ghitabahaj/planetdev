<?php 
spl_autoload_register(function($class){
    $path = 'classes/'.$class.'.php';
    require $path;
})
?>