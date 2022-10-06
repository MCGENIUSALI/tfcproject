<?php

if(!function_exists('e')){
    function e($string){
        if($string){
            return htmlspecialchars($string);
        }
    }
}

if(!function_exists('get_avatar_url')){
    function get_avatar_url($email){
        return "http://gravatar.com/avatar/".md5(strtolower(trim(e($email))));
    }
}


if(!function_exists('get_session')){
    function get_session($key){
        if($key){
        return !empty($_SESSION[$key]) ? 
        e($_SESSION[$key])
        : null;
        }
    }
}



if(!function_exists('findUserById')){
    function findUserById($id){
       global $db;
       $req = $db->prepare('SELECT nom, postnom, email FROM membre WHERE id = ?');
        $req->execute([$id]);
        $data = current($req->fetchAll(PDO::FETCH_OBJ));
        $req->CloseCursor();
        return $data;
    }
}
 


if(!function_exists('is_already_in_use')){
    function is_already_in_use($field, $value, $table){
        global $db;
        $req= $db->prepare("SELECT numpaie FROM $table WHERE $field=?");
        $req->execute([$value]);
        $count = $req->rowCount();
        $req->closeCursor();
        return $count;
    }
}


if(!function_exists('redirect')){
    function redirect($page){
        header('Location:'.$page);
        exit();
    }
}


if(!function_exists('saveInput')){
    function saveInput(){
        foreach($_POST as $key => $value) {
            if (strpos($key, 'numpaie') === false){
                $_SESSION['input'][$key] = $value; 
            }
        }
    }
}


if(!function_exists('getInput')){
    function getInput($key){
        return !empty($_SESSION['input'][$key]) ? 
        e($_SESSION['input'][$key])
        : null;
    }
}

if(!function_exists('clearInput')){
    function clearInput(){
        if(isset($_SESSION['input'])){
            $_SESSION['input'] = [] ;
        }
    }
}




?>


