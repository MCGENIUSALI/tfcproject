<?php
session_start();
include('filtre/auth_filter.php');
require('config/database.php');
require('include/functions.php');


if(!empty($_GET['id'])){
    $user = findUserById($_GET['id']);

    if(!$user){
        redirect('index.php');
    }
}else{
    redirect('profil.php?id='.get_session('user_id'));
}

require ("views/profil.view.php");
?>