<?php
if (isset($_POST['login'])) 
{
require_once("connection.php");
  // connexion a la base de donne


  $nombre=0;
  //echo " vyabaye";
   $adm="select * from user where ( NAME = '$_POST[name]' AND PASSWORD = '$_POST[word]')";     
      $res= mysql_query($adm);           
        $nombre=mysql_num_rows($res);
  if($nombre!=0)
  {
    //début de la sessions
    session_start () ;
    $row = mysql_fetch_array($res);
     $_SESSION["id_user"] = $row['id_user'] ;
     $_SESSION["profil"] = $row['profil'] ;    
     $_SESSION["username"] = $row['username'] ;
    header ("Location:garde.php");

  }//fin if
  //sinon on retourne à la page d'inscription
  else
  { 
      $f=1; 
      header ("Location: index.php?redirection=$f") ;
  }//fin else

}

?>