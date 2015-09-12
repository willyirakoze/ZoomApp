<meta charset="UTF-8">
<?php
require_once("connection.php");

$id = $_POST['matricule'];
$cni = $_POST['cni'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$sexe = $_POST['sexe'];
$email = $_POST['e_mail'];
$nationalite = $_POST['nationalite'];
$inscription = $_POST['dateinscription'];
$telephone = $_POST['telephone'];
$date_enregistre=date('Y-m-d');
$nomPhoto= $_FILES['photo']['name']; 
$file_tmp_name= $_FILES['photo']['tmp_name'];
move_uploaded_file($file_tmp_name, "./images/$nomPhoto");




 if ((isset($_POST['nom']) && ($_POST['telephone']!=NULL))) 

			
			$req = "insert into client(ID, CNI, NOM, PRENOM, SEXE,NATIONALITE, EMAIL, DATE, TELEPHONE, PHOTO)
			values('$id','$cni','$nom','$prenom','$sexe', '$nationalite','$email','$inscription', $telephone, '$nomPhoto')";
			mysql_query($req) or (die (mysql_error()));
			
			echo "<script>
			alert('Le client est enregistré avec succès!!!') ;
			</script>";


/*Pour adulte***************************************************************************************************************************888888888888*/
?>

<html>
<?php include ("entete.php");?>
  <header>


  </header>
  <div class="content">
<body>


	<table border="">

		<tr>
			<td> Matricule:</td>
			<td><?php echo ($id)?></td>
		</tr>
		<tr>
			<td> CNI:</td>
			<td><?php echo ($cni)?></td>
		</tr>

		<tr>
			<td> Nom:</td>
			<td><?php echo ($nom)?></td>
		</tr>

		<tr>
			<td> Prenom:</td>
			<td><?php echo ($prenom)?></td>
		</tr>

		<tr>
			<td> Email:</td>
			<td><?php echo ($email)?></td>
		</tr>

		<tr>
			<td> Nationalite:</td>
			<td><?php echo ($nationalite)?></td>
		</tr>

		<tr>
			<td> Téléphone :</td>
			<td><?php echo ($telephone)?></td>
		</tr>
		<tr>
			<td> Photo:</td>

			<td><img src= "images/<?php echo ($nomPhoto)?>" width="150px";height="120px";</td>
		</tr>
	</table>
		

</div><?php include ("pied.php");?>
</body>
</html>