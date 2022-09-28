<?php
if(!isset($_SESSION['user_id']) && !isset($_SESSION['nom'])){
    header('Location: connecter.php');
    exit();
}