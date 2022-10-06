

  if($isset && $empty){
    
  }else{
    header('Location: connecter.php?error=champ');
    exit();
  }

}else{
  header('Location: connecter.php?error=form');
  exit();
}
?>

<p>Cette platteforme est à caractère Educative et Professionnelle pour la gestion et l'organisation de nos projets</p>




