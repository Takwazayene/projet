<?PHP
include "../entities/utilisateur.php";
//include "..public/production/utilisateur.php";

include "../core/utilisateurC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['id']) and isset($_POST['email']) and isset($_POST['occupation']) and isset($_POST['mdp']) and isset($_POST['tel'])){
$utilisateur1=new utilisateur($_POST['nom'],$_POST['prenom'],$_POST['id'],$_POST['email'],$_POST['url'],$_POST['occupation'],$_POST['mdp'],$_POST['tel']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$utilisateur1C=new UtilisateurC();
$utilisateur1C->ajouterUtilisateur($utilisateur1);
header('Location: afficherUtilisateur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>