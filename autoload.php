<?php
    function autoload($class) {
        include 'controllers/'.$class.'.php';
    }

    spl_autoload_register('autoload');

    $setup = new Setup();
    $pages = new Pages($setup);