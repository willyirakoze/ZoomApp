<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
	<title>Saisie client </title>

<link rel="stylesheet" type="text/css" href="css/menu_admin.css" />
<link rel="stylesheet"  href="jquery-ui-1.10.4.custom\js/jquery-1.10.2.js" />
<link rel="stylesheet"  href="jquery-ui-1.10.4.custom\css\ui-lightness/jquery-ui-1.10.4.custom.css" />
<link href="PHP_plugins/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">  
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" type="text/css" href="http://code.jquery.com/jquery-1.10.2.min.js">

<link href="PHP_plugins/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/jquery-1.10.2.min.js">
<!-- fonction de java script -->
<link rel="stylesheet" href="PHP_plugins\jquery-ui-1.10.4.custom\css\ui-lightness/jquery-ui-1.10.4.custom.css">
  
  <script src="PHP_plugins\jquery-ui-1.10.4.custom\js/jquery-1.10.2.js"></script>
  <script src="PHP_plugins\jquery-ui-1.10.4.custom\js/jquery-ui-1.10.4.custom.js"></script>
   

</head>
<body>
  <?php include ("entete.php");?>
  <div class="content">
	<h1 class="titre" align="center"> <i>Nouveau Client</i> </h1>
<fieldset>
<legend><b><i>Nouveau client</i></b> </legend>
	<form method= "POST" action ="ajouterClient.php" enctype= "multipart/form-data">
		<table>
			<tr>
				<td>Matricule*  :</td>
				<td><input type="text" name="matricule" size="25"  value="" placeholder="Matricule" required autofocus></td>
			</tr>

      <tr>
        <td>CNI No*  :</td>
        <td><input type="text" name="cni" size="25"  value="" placeholder="cni" required autofocus></td>
      </tr>
		  
			<tr>
				<td>Nom  :</td>
				<td><input type="text" name="nom" size="25" maxlength="20" value="" placeholder="Nom"></td>
			</tr>
			<tr>
				<td>Prénom  :</td>
				<td><input type="text" name="prenom" size="25" maxlength="20" value="" placeholder="Prénom"></td>
			</tr>

      <tr>
          <td> Sexe : </td>
          <td><input type="radio" name="sexe" value="Masculin" checked>Masculin
          <input type="radio" name="sexe" value="Feminin">Feminin </td>
      </tr>

      <tr>
          <td> Nationnalité :</td>
           <td><input type="radio" name="nationalite" value="Burundais" checked="checked">
          Burundais
          <input type="radio" name="nationalite" value="Etranger" > Etranger </td>
      </tr>
      
      <tr>
        <td>E_Mail :</td>
        <td><input type="email" name="e_mail" size="25" maxlength="20" value="" placeholder="E_Mail"></td>
      </tr>

  <tr>
    <td>Date Inscription:</td>
    <td><input type="date" name="dateinscription"></td>
  </tr>

  <tr>
        <td>Téléphone* :</td>
        <td><input type="text" name="telephone" size="25" maxlength="20" value="" placeholder="Numero téléphone" required autofocus></td>
    </tr>
			
<tr>
  <td > Photo  : </td>
  <td><input type="file" name="photo"></td>
</tr>

<tr>

    <td ><img src="outils/button_ok.png" width="10" height="10" /><input name="save" class="savebutton" type=submit value="Enregistrer">
         <input name="reset" type=reset value="Initialiser" class="savebutton">
    </td>

    </table>
</tr>
</form>
</fieldset>
</div><?php include ("pied.php");?>
</body>
</html>