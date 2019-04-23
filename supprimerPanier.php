<?PHP
include "../../core/panierC.php";
$panierC=new PanierC();
if (isset($_POST["idPanier"])){
	$panierC->supprimerPanier($_POST["idPanier"]);
	header('Location: afficherPanier.php');
}

?>