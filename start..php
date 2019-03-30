<?PHP
include "../../entities/commande.php";
include "../../core/commandeC.php";
$commande=new Commande(54,75757575,'px','2019/8/5','non',5,5,'non');
$commandeC=new CommandeC();
$commandeC->afficheCommande($commande);
echo "****************";
echo "<br>";
echo "cin:".$commande->getIdclt();
echo "<br>";
echo "nom:".$commande->getProduit();
echo "<br>";
echo "prenom:".$commande->getDate();
echo "<br>";
echo "nbH:".$commande->getLivraison();
echo "<br>";
echo "tarif:".$commande->getQuantite();
echo "<br>";
echo "nom:".$commande->getIdCom();
echo "<br>";
echo "prenom:".$commande->getEtat();
echo "<br>";
echo "nbH:".$commande->getTotal();
echo "<br>";

/*echo "le salaire est : ";
$employerC->calculerSalaire($employe); 
echo "<br>";*/


?>