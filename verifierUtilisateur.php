<?PHP
//include "C:/wamp64/www/projet2/entities/utilisateur.php";

//include "C:/wamp64/www/projet2/config.php" ;
include "../../config.php" ;

//include "C:/wamp64/www/projet2/core/loginC.php";

if (isset($_POST['id']) and isset($_POST['mdp']) ){



//$c=new connexion();
//$conn=$c->cnx;
$conn = config::getConnexion();
   $id = trim($_POST['id']);
   $mdp= trim($_POST['mdp']);
    // $query ="SELECT * FROM utilisateurs WHERE id ='".$id."' and mdp ='".$mdp."' ";
     $query="select * from utilisateurs WHERE id=? and occupation ='admin' ";
     $prep = $conn->prepare($query);
     $prep->bindValue(1, $id, PDO::PARAM_STR);
     $prep->execute();
     $user = $prep->fetchAll();
    foreach ($user as $u) {
                          if (($u['mdp']==$mdp) && ($u['id']==$id))
                          {
                         // $_SESSION['id'] = $u['id'];
                          //echo "truuuuuue" ;
						   //header('Location: C:/wamp64/www/projet2/public/production/index.html');
						  // require_once('C:/wamp64/www/projet2/public/production/index.html');
						  
						  ?>
                  
						    <script> document.location.href ='../../public/production/index.html'; </script>
                          <?php
                          }
                         /*else if ($u['mdp']==$mdp)
						 {
							 ?>
							 <script> alert(' id erroné ');
							   document.location.href ='afficherLogin.php'; 
							   </script>
							        <?php
					     }
						else if ($u['id']==$id)
						{ ?>
							 <script> alert(' mdp erroné ');
							   document.location.href ='afficherLogin.php'; 
							   </script>
							        <?php
							
						}*/
						
						else {
							 echo "falseee" ; 
							  ?>
							   <script> alert(' mdp et id erroné');
							   document.location.href ='afficherLogin.php'; 
							   </script>
							     <?php
                //  header('Location: ../login.php?type=error&message=Mauvais mail ou mot de passe ');
                        
	}}
}
    





/*$login1C=new LoginC();
$login1C->authentifier($_POST['idd'],$_POST['mdpp']);

	
}else{
	echo "vĂ©rifier les champs";
	
	
	
	
}*/


 

?>