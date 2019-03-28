<?PHP
include "../config.php";
class UtilisateurC {
function afficherUtilisateur ($utilisateur){
		echo "Nom: ".$utilisateur->getNom()."<br>";
		echo "Prenom: ".$utilisateur->getPrenom()."<br>";
		echo "Identifiant: ".$utilisateur->getId()."<br>";
		echo "Email: ".$utilisateur->getEmail()."<br>";
		echo "URL: ".$utilisateur->getUrl()."<br>";
			echo "Occupation: ".$utilisateur->getOccupation()."<br>";
		echo "Mot de passe: ".$utilisateur->getMdp()."<br>";
		echo "Tel: ".$utilisateur->getTel()."<br>";
	}
	/*function calculerSalaire($utilisateur){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}*/
	function ajouterUtilisateur($utilisateur){
		$sql="insert into utilisateurs (nom,prenom,id,email,url,occupation,mdp,tel) values (:nom,:prenom,:id,:email,:url,:occupation,:mdp,:tel)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $id=$utilisateur->getId();
        $email=$utilisateur->getEmail();
        $url=$utilisateur->getUrl();
	    $occupation=$utilisateur->getOccupation();
        $mdp=$utilisateur->getMdp();
        $tel=$utilisateur->getTel();
		
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':id',$id);
		$req->bindValue(':email',$email);
		$req->bindValue(':url',$url);
			$req->bindValue(':occupation',$occupation);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':tel',$tel);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherUtilisateurs(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From utilisateurs";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerUtilisateur($id){
		$sql="DELETE FROM utilisateurs where id= :id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierUtilisateur($utilisateur,$id){
		$sql="UPDATE utilisateurs SET nom=:nom, prenom=:prenom,id=:idd,email=:email,url=:url,occupation=:occ,mdp=:mdp,tel=:tel WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idd=$utilisateur->getId();
        $nom=$utilisateur->getNom();
        $prenom=$utilisateur->getPrenom();
        $email=$utilisateur->getEmail();
        $url=$utilisateur->getUrl();
		$occ=$utilisateur->getOccupation();
        $mdp=$utilisateur->getMdp();
        $tel=$utilisateur->getTel();
		$datas = array(':nom'=>$nom, ':prenom'=>$prenom, ':idd'=>$idd,':id'=>$id,':email'=>$email,':url'=>$url,':occ'=>$occ,':mdp'=>$mdp,':tel'=>$tel);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':email',$email);
		$req->bindValue(':url',$url);
		$req->bindValue(':occ',$occ);
		$req->bindValue(':mdp',$mdp);
		$req->bindValue(':tel',$tel);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererUtilisateur($id){
		$sql="SELECT * from utilisateurs where id='$id'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeUtilisateurs($tarif){
		$sql="SELECT * from utilisateurs where id=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>