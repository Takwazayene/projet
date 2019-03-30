<?PHP
include "../../entities/commande.php";
include "../../core/commandeC.php";

if (isset($_POST['idClt']) and isset($_POST['produit']) and isset($_POST['date']) and isset($_POST['livraison']) and isset($_POST['quantite'])){
$commande1=new commande($_POST['idCom'],$_POST['idClt'],$_POST['produit'],$_POST['date'],$_POST['livraison'],$_POST['quantite'],$_POST['total'],$_POST['etat']);
$commande1C=new CommandeC();
$commande1C->ajouterCommande($commande1);
header('Location: afficheCommande.php');
	
}
else{
	echo "vĂ©rifier les champs";
}
//*/

?>