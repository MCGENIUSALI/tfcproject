<?php
   if(isset($errors) && count($errors) != 0){
    echo '<div class="alert alert-danger" align="center" role="alert">';
    foreach($errors as $error){
      echo $error.'</br>';
    echo '</div>';
  }
}
?>