<HTML>
<head>
</head>
<body>
<?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurC.php";
if (isset($_GET['id'])){
	$utilisateurC=new UtilisateurC();
    $result=$utilisateurC->recupererUtilisateur($_GET['id']);
	foreach($result as $row){
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$id=$row['id'];
		$email=$row['email'];
		$url=$row['url'];
		$occ=$row['occupation'];
		$mdp=$row['mdp'];
		$tel=$row['tel'];
?>
<form method="POST">
<table>
<caption>Modifier Utilisateur</caption>
<tr>
<td>Nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>
<td>ID</td>
<td><input type="text" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td>URL</td>
<td><input type="url" name="url" value="<?PHP echo $url ?>"></td>
</tr>
<tr>
<td>Occupation</td>
<td><input type="text" name="occ" value="<?PHP echo $occ ?>"></td>
</tr>
<tr>
<td>Mdp</td>
<td><input type="password" name="mdp" value="<?PHP echo $mdp ?>"></td>
</tr>
<tr>
<td>Tel</td>
<td><input type="tel" name="tel" value="<?PHP echo $tel ?>"></td>
</tr>

<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}

if (isset($_POST['modifier'])){
	$utilisateur=new utilisateur($_POST['nom'],$_POST['prenom'],$_POST['id'],$_POST['email'],$_POST['url'],$_POST['occ'],$_POST['mdp'],$_POST['tel']);
	$utilisateurC->modifierUtilisateur($utilisateur,$_POST['id_ini']);
	echo $_POST['id_ini'];
	header('Location: afficherUtilisateur.php');
}
?>
</body>
</HTMl>