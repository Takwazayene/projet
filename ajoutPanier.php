<?PHP
//include_once "../../core/ProduitC.php";
//include_once "../../entities/Produit.php";
//include_once "../../base.php" ; 
include_once dirname(__FILE__) . '/../../base.php';
include_once dirname(__FILE__) . '/../../entities/Produit.php' ;
include_once dirname(__FILE__) .  '/../../core/ProduitC.php';

 if(config::getUserSession()==null) {
        header('Location: ../login/login.php');
    }
$user = config::getUserSession();
$idUser=$user->getId() ; 
if (isset($_GET['id'])){
	$produitC=new ProduitC();
    $result=$produitC->recupererProduit($_GET['id']);
	foreach($result as $row){
		
		$id=$row['id'];
		$reference=$row['reference'];
		$nom=$row['nom'] ;
		$prix=$row['prix'];
		$qte=$row['qte'];
		$description=$row['description'];
		$constructeur=$row['constructeur'];
		$modele=$row['modele'];
		$image=$row['image'];
		$categorie_id=$row['categorie_id'];
	}
	
include_once "../../core/panierC.php" ;
include_once "../../entities/panier.php" ;
	
	$panier1=new panier($idUser,$id,$qte,$prix);
	//var_dump($panier1);
	$panier1C=new PanierC();
$panier1C->ajouterPanier($panier1,$id);
	

header('Location:afficherPanier.php');


}



?>