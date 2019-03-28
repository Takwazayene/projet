<?PHP
include "../core/utilisateurC.php";
$utilisateur1C=new UtilisateurC();
$listeUtilisateurs=$utilisateur1C->afficherUtilisateurs();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Nom</td>
<td>Prenom</td>
<td>Identifiant</td>
<td>Email</td>
<td>URL</td>
<td>Occupation</td>
<td>Mdp</td>
<td>Tel</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeUtilisateurs as $row){
	?>
	<tr>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['id']; ?></td>
	<td><?PHP echo $row['email']; ?></td>
	<td><?PHP echo $row['url']; ?></td>
	<td><?PHP echo $row['occupation']; ?></td>
	<td><?PHP echo $row['mdp']; ?></td>
	<td><?PHP echo $row['tel']; ?></td>
	<td><form method="POST" action="supprimerUtilisateur.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
	</form>
	</td>
	<td><a href="modifierUtilisateur.php?id=<?PHP echo $row['id']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


