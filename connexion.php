

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



