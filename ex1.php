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

$eleve = new personne(1,"Jean","Michou");
echo $eleve;
$eleve->setPrenom("Vlam");
echo $eleve;

?>
