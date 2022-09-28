<?php
    session_start();
    include('filtre/auth_filter.php');
    include('include/functions.php');
    include('include/constants.php');
?>

<?php
     require ("views/workspace.view.php");
?>