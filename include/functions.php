<?php
   /* if(!function_exists('not_empty')){
        function not_empty($fields=[]){
            if(count($fields) != 0){
                foreach($fields as $field){
                    if(empty($_POST[$field]) || trim($field == "")){
                        return false;
                    }
                }
            return true; 
            }
        }
    }
*/





if(!function_exists('e')){
    function e($string){
        if($string){
            return htmlspecialchars($string);
        }
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


