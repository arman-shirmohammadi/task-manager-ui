<?php

function getTasks(){

    return [1,2,3,4];
}

function getFolders(){
    global $pdo;
    $sql = "select * from folders";
    $stmt= $pdo->prepare($sql);
    $stmt ->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;


}