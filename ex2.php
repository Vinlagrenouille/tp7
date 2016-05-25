<?php
class personne {
	protected $id;
	protected $nom;
	protected $prenom;

  function __construct($id,$nom,$prenom){
    $this->id=($id);
    $this->nom=($nom);
    $this->prenom=($prenom);
  }
  function __toString(){
    return "personne = ".$this->nom." ".$this->prenom;
  }
  function getNom(){
    return $this->nom;
  }
  function getPrenom(){
    return $this->prenom;
  }
  function setNom($qui){
    return $this->nom=($qui);
  }
  function setPrenom($qui){
    return $this->prenom=($qui);
  }
}

class contact extends personne{
	
	protected $email;
	
	function __construct($id,$nom,$prenom,$email){
    parent::__construct($id,$nom,$prenom);
		$this->email=$email;
  }
	
	function __toString(){
	
		return parent::__toString()." email = ".$this->email;
		
	}
	
	function getEmail(){
    return $this->email;
  }
  function setEmail($e){
    return $this->email=($e);
  }
}

$eleve = new contact(1,"Jean","Michou","jm@h.fr");
echo $eleve;

?>
