<?php

require_once "config.global.php";

require_once "{$global_config['path']['system']}/fortnight.php";

FN_Base::$_global_config = $global_config;

$sys = new Fortnight();
$sys->execute();

?>
