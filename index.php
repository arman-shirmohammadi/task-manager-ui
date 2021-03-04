<?php

include("bootstrap/init.php");

if(isset($_GET['delete'])){
    $delete = $_GET['delete'];
    $deletedcount = deleteFolder($delete);
    echo "deletedcount";
}

$tasks = getTasks();

$folders = getFolders();

include("tpl/tpl-index.php");


