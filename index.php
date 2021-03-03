<?php
use Hekmatinasser\Verta\Verta;
include("bootstrap/init.php");
$v = Verta::now();

// var_dump($v);
echo ($v);
$tasks = getTasks();
include("tpl/tpl-index.php");


