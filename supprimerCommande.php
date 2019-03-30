<?PHP
include "../../core/commandeC.php";
$commandeC=new CommandeC();
if (isset($_POST["idCom"])){
	$commandeC->supprimerCommande($_POST["idCom"]);
	header('Location: afficheCommande.php');
}

?>