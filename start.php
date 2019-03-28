<?PHP
include "../entities/utilisateur.php";
include "../core/utilisateurC.php";
$utilisateur=new Utilisateur('zayene','takwa','takwa99','takwa.zayene@esprit.tn','https://www.google.com','admin','takwa99',95322200);
$utilisateurC=new UtilisateurC();
$utilisateurC->afficherUtilisateur($utilisateur);
echo "****************";
echo "<br>";
echo "Nom:".$utilisateur->getNom();
echo "<br>";
echo "Prenom:".$utilisateur->getPrenom();
echo "<br>";
echo "Identifiant:".$utilisateur->getId();
echo "<br>";
echo "Email:".$utilisateur->getEmail();
echo "<br>";
echo "URL:".$utilisateur->getUrl();
echo "<br>";
echo "Occupation:".$utilisateur->getOccupation();
echo "<br>";
echo "Mdp:".$utilisateur->getMdp();
echo "<br>";
echo "Tel:".$utilisateur->getTel();
echo "<br>";

/*echo "le salaire est : ";
$employerC->calculerSalaire($employe); 
echo "<br>";*/


?>