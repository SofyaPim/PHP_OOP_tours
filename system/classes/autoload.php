<?php

function classLoader($class) {
    require_once( $_SERVER['DOCUMENT_ROOT'].'/myProject2/system/classes/'.str_replace('\\','/',$class.'.php'));
}
spl_autoload_register('classLoader');