<?php

if(!function_exists('is_already_in_use')){
    function is_already_in_use($field, $value, $table){
        global $db;
        $req= $db->prepare("SELECT nom, numpaie FROM $table WHERE $field=?");
        $req->execute([$value]);
        $count = $req->rowCount();
        $req->closeCursor();
        return $count;
    }
}
?>