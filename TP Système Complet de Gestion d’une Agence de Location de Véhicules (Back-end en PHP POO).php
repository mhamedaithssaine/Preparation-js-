<?php 
 interface ReservableInterface {
	public function reserver (Client $client, DateTime $dateDubut,int $nbJoures);
}


abstract class Vehicule implements ReservableInterface{
	protected $id;
	protected $immatriculation;
	protected $marque;
	protected $modele;
	protected $prixJour;
	protected $disponible;
	
	public function __construct(int $id,$immatriculation,$marque,$modele,$disponible, $prixJour){
		$this->id=$id;
		$this->immatriculation=$immatriculation;
		$this->marque=$marque;
		$this->modele=$modele;
		$this->disponible=$disponible;
        $this->prixJour=$prixJour;
	}
	
	
	abstract public function afficherDetails();
	
	public function calculerPrix (int $jours){
		
		if($this->prixJour !== 0 ){
	           return $this->prixJour *= $jours ;
		}else {
	         	return 0;
		}
	}
	
	public function estDisponible (){
		return $this->disponible;
	}
	
	
	abstract public function getType();
	
	
}

// les class concretes 
class Voiture extends Vehicule {
    private int $nbPortes;
    private string $transmission;

    public function __construct(int $id,$immatriculation,$marque,$modele,$disponible, $prixJour,$nbPortes,$transmission) {
        parent::__construct( $id,$immatriculation,$marque,$modele,$disponible, $prixJour);
        $this->nbPortes = $nbPortes;
        $this->transmission = $transmission;
    }

    public function getType(): string {
        return "Voiture";
    }

    public function afficherDetails(): void {
        echo ` Type Vehcule: {$this->getType}, Marque :{$this->marque},Model :{$this->modele}, Nombre de porte :{$this->nbPortes}, Transmission : {$this->transmission}`;
    }

    public function reserver(Client $client, DateTime $dateDebut, int $nbJours) {
        return new Reservation($this, $client, $dateDebut, $nbJours);
    }
}


// moto 

class moto extends Vehicule {

    public $cylindree ;

    public function __construct(int $id, $immatriculation, $marque, $modele, $disponible, $prixJour,$cylindree){
       parent::__construct( $id, $immatriculation, $marque, $modele, $disponible, $prixJour);
       $this->cylindree=$cylindree;
    }

    
    public function getType(): string {
        return "Moto";
    }

    public function afficherDetails(): void {
        echo ` Type Vehcule: {$this->getType}, Marque :{$this->marque},Model :{$this->modele}, Cylindree :{$this->cylindree}`;
    }


    public function reserver(Client $client, DateTime $dateDebut, int $nbJours) {
        return new Reservation($this, $client, $dateDebut, $nbJours);
    }
}


//class Cammion 


class Cammion extends Vehicule {

    public $capaciteTonnage ;

    public function __construct(int $id, $immatriculation, $marque, $modele, $disponible, $prixJour,$capaciteTonnage){
       parent::__construct( $id, $immatriculation, $marque, $modele, $disponible, $prixJour);
       $this->cylindree=$capaciteTonnage;
    }

    
    public function getType(): string {
        return "Moto";
    }

    public function afficherDetails(): void {
        echo ` Type Vehcule: {$this->getType}, Marque :{$this->marque},Model :{$this->modele}, Capacite Tonnage :{$this->capaciteTonnage}`;
    }


    public function reserver(Client $client, DateTime $dateDebut, int $nbJours) {
        return new Reservation($this, $client, $dateDebut, $nbJours);
    }
}



//party 3 

abstract class Perssone {
    protected $name ;

    protected $prenom;

    protected $email;

    public function __construct($name,$prenom,$email){
        $this->name=$name;
        $this->$prenom=$prenom;
        $this->$email=$prenom;
    }

    abstract public function afficherProfil();
}


//Client 

class Client extends Perssone{

  public $numeroClient ;
  public $reservation = [];

  public function __construct($name, $prenom, $email,$numeroClient,$reservation){
    parent::__construct($name, $prenom, $email);
    $this->numeroClient=$numeroClient;
    $this->reservation=$reservation;
  } 


  public function ajouterReservation (Reservation $r){
      $this->reservation=$r;
  }

  public function afficherProfil(){
    echo `Numero de client :{$this->numeroClient}, Name : {$this->name},Prenome : {$this->prenom}, Email : {$this->email}`;
  }

  public function getHistorique(): void {
    if (empty($this->reservation)) {
        echo "pas de histoire ";
    }else {
        echo "hstorique :";

        foreach ($this->reservation as $res) {
            

        }
    }

    
   
}

}


//party class agence et reser 

class Agence {
   public $nom ;
   public $ville ;
   public $vehicule=[] ;

   public $clients =[];


   public function __construct($nome,$ville,$vehicule,$clients){
        $this->nome=$nome;
        $this->ville=$ville;
        $this->vehicule=$vehicule;
        $this->clients=$clients;
   }


  public function  ajouterVehicule(Vehicule $v){
    $this->vehicule[]=$v;
  }


 public function  rechercherVehiculeDisponible(string $type){
    
 }



  public function enregistrerClient(Client $c ){
    $this->clients[]=$c;
  }


  public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours){
       
  }


}

class Resrvetion { 
    public $vehicule; 
    public $client; 
    public $dateDebut; 
    public $nbJours; 
    public $statut;



}


