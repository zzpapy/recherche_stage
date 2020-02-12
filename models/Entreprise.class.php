<?php 
class Cat
{
	
	// Propriétés
	private $id;
	private $nom ;
	private $adresse;
	private $activite;
    private $contact;
    private $email;
    private $tel;
    private $date;
    private $date_reponse;
    private $reponse;
    private $doc;
    private $user_id;
	
	
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
    public function getContact()
	{
		return $this->contac;
	}	
	public function getEmail()
	{
		return $this->email;
    }
    public function getTel()
	{
		return $this->tel;
    }
    public function getDate()
	{
		return $this->date;
    }
    public function getDate_reponse()
	{
		return $this->date_reponse;
    }
    public function getDoc()
	{
		return $this->doc;
    }
    public function getUserId()
	{
		return $this->user_id;
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
    public function setEmail($email)
	{
			$this->email= $email;		
    }
    public function setTel($tel)
	{
			$this->tel= $tel;		
    }
    public function setDate($date)
	{
			$this->date= $date;		
    }
    public function setDate_reponse($date_reponse )
	{
			$this->date_reponse = $date_reponse ;		
    }
    public function setDoc($doc )
	{
			$this->doc = $doc ;		
    }
    public function setUserId($user_id )
	{
			$this->user_id = $user_id ;		
	}
	


	
}
 ?>