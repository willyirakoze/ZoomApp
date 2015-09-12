
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
<!-- Bootstrap Core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet" type="text/css">



    <link href="PHP plugins/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/menu_admin.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/jquery-1.10.2.min.js">
<script type="text/javascript">
</script>
</head>
<body>


<?php 
if(isset($_GET['redirection']))
{
  echo "<script>
  alert('User name et / ou Password saisi est incorrect, Vérifiez corriger vos paramètres d\'authentification S.V.P !!!!!!!');
  </script>";
}
  ?>

<!-- Section: intro -->
    <section id="intro" class="intro">
  
    <div class="slogan">
    <h2>E-Zoom<span class="text_color"></span> </h2>
      <h4>ZoomApp</h4>
    </div>
    <div class="page-scroll">
      <a href="#service" class="btn btn-circle">
        <i class="fa fa-angle-double-down animated"></i>
      </a>
    </div>
    
    
                
<div class="loginform-in">
<h2> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Authentification <b><i>ZoomApp</i></b></h2></br>

<!-- <div  class="err" id="add_err"></div> -->

    <form action="ch_index.php" method="post">
      
<fieldset style="width:80% ; margin:auto; ">
        <ul>
            <label for="name">User name </label>
            <input type="text" size="30"  name="name" id="name"id="name" onblur="return ValideNom(this.id)  " required autofocus /></br></br>
                        <label for="name">Password </label>
            <input type="password" size="40"  name="word" id="word" onblur="return ValidePass(this.id)" required autofocus/>
            <label></label>
            </br></br>
      <div class="loginbouton">
            <input type="submit" id="login" name="login" value="Login" class="loginbutton">
      </div>
        </ul>
     </form>    
</fieldset> 
</div>     
</div>
</div></section>
</body>
</html>