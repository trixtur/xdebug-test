<?php

function class_auto_loader($className)
{
    require_once('container.class.php');
    require_once('fizzbuzz.php');
}

spl_autoload_register('class_auto_loader');