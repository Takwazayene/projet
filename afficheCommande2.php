<?PHP
include "../../core/commandeC.php";
$commande1C=new CommandeC();
$listeCommandes=$commande1C->afficherCommandes();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>id commande</td>
<td>id client</td>
<td>produit</td>
<td>date</td>
<td>quantite</td>
<td>total</td>
<td>etat</td>
<td>supprimer</td>
<td>modifier</td>
</tr>

<?PHP
foreach($listeCommandes as $row){
	?>
	<tr>
	<td><?PHP echo $row['idCom']; ?></td>
	<td><?PHP echo $row['idClt']; ?></td>
	<td><?PHP echo $row['produit']; ?></td>
	<td><?PHP echo $row['date']; ?></td>
	<td><?PHP echo $row['quantite']; ?></td>
	<td><?PHP echo $row['total']; ?></td>
	<td><?PHP echo $row['etat']; ?></td>
	<td><form method="POST" action="supprimerCommande.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idCom']; ?>" name="idCom">
	</form>
	</td>
	<td><a href="modifierCommande.php?idCom=<?PHP echo $row['idCom']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP
}
?>
</table>


