<?php

include("bootstrap/init.php");

$tasks = getTasks();

$folders = getFolders();

include("tpl/tpl-index.php");


