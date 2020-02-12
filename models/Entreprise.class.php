<?php 
class Cat
{
	
	// Propriétés
	private $id;
	private $nom ;
	private $adresse;
	private $activite;
	private $contact;
	
	
	public function __construct($db)
		{
			$this->db = $db;
		}

	// Méthodes
	// Liste des getters
	
	public function getId()
	{
		return $this->id;
	}
	
	public function getNom()
	{
		return $this->nom;
	}	
	public function getAdresse()
	{
		return $this->adresse;
    }
    public function getActivite()
	{
		return $this->Activite;
    }
    public function get>Contact()
	{
		return $this->contac;
	}	
	

	// Liste des setters
	
	public function setNom($nom)
	{
		
			$this->nom = $nom;
	}
	public function setAdresse($adresse)
	{
			$this->adresse= $adresse;		
    }
    public function setActivite($activite)
	{
			$this->activite= $activite;		
    }
    public function setContact($contact)
	{
			$this->contact= $contact;		
	}
	
	


	
}
 ?>