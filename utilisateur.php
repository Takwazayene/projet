<?PHP
class Utilisateur{
	private $nom;
	private $prenom;
	private $id;
	private $email;
	private $url;
	private $occupation;
	private $mdp;
	private $tel;
	function __construct($nom,$prenom,$id,$email,$url,$occupation,$mdp,$tel){
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->id=$id;
		$this->email=$email;
		$this->url=$url;
		$this->occupation=$occupation;
		$this->mdp=$mdp;
		$this->tel=$tel;
	}
	
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getId(){
		return $this->id;
	}
	function getEmail(){
		return $this->email;
	}
	function getUrl(){
		return $this->url;
	}
	function getOccupation(){
		return $this->occupation;
	}
	function getMdp(){
		return $this->mdp;
	}
	function getTel(){
		return $this->tel;
	
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom;
	}
	
	function setEmail($email){
		$this->email=$email;
	}
	function setUrl($url){
		$this->url=$url;
	}
	function setOccupation($occupation){
		$this->occupation;
	}
	function setMdp($mdp){
		$this->mdp=$mdp;
	}
	function setTel($tel){
		$this->tel=$tel;
	}
	
	function setID($id){
		$this->id=$id;
	}
	
}

?>