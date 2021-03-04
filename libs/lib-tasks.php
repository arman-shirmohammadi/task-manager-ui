<?php

function getTasks(){

    return [1,2,3,4];
}

function getCurrentUserId() {
return 1;
};
function addFolders($data){
    global $pdo;
    $sql = "select * from folders";
    $stmt= $pdo->prepare($sql);
    $stmt ->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;


}

function getFolders(){
    global $pdo;
    $current_user_id = getCurrentUserId();
    $sql = "select * from folders where user_id = $current_user_id";
    $stmt= $pdo->prepare($sql);
    $stmt ->execute();
    $records = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $records;


}

function deleteFolder($folder_id){
    global $pdo;
    $sql = "delete from folders where id = $folder_id";
    $stmt = $pdo->prepare($sql);
    $stmt ->execute();
    return $stmt->rowCount();


}