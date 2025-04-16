<?php 

// interface Registerable {
//      public function register($participant);
//      public function getParticipantsCount();
//      public function isFull();
// }


// abstract class AbstractSurfActivity implements Registerable {
//    protected  $id;
//    protected  $name;
//    protected $instructo;
//    protected $maxParticipants ;
//    protected $participants =[];
//    protected $equipmentNeeded =[];

//    public function __construct(string $name,string $instructo, int $maxParticipants,array $participant,array $equipmentNeeded){
//         $this->name=$name;
//         $this->instructo=$instructo;
//         $this->maxParticipants=$maxParticipants;
//         $this->participants=$participant;
//         $this->equipmentNeeded=$equipmentNeeded;

//    }

//    //getters et setters 
//    public function getId(){
//     return $this->id;
//    }
//    public function setId($id){
//        if(!is_numeric($id )&& $this->id=$id){
//         throw new InvalidArgumentException("le nombre doit etre un nombre ou id deja existe .");
//        }else{
//         $this->id=$id; 
//        }
//    }

//    public function getName(){
//     return $this->name ;
//    }

//    public function setName($name){
//     if(!is_string($name)){
//         throw new InvalidArgumentException(`{$name} doit etre string`);
//     } $this->name=$name;
//    }
//    public function getInstructo(){
//     return $this->instructo ;
//    }

//    public function setInstructo($name){
//     if(!is_string($name)){
//         throw new InvalidArgumentException(`{$name} doit etre string`);
//     } $this->instructo=$name;
//    }



//    public function getMaxParticipants(){
//     $this->maxParticipants;
//    }


//    public function setMaxParticipants($numbre){
//      if(!is_int($numbre)){
//         throw new InvalidArgumentException("doit etre un nombre integer ");
//      }
//      $this->maxParticipants=$numbre;
//    }



//    public function getParticipants(){
          
//     return $this->participants;
//    }

//    public function setParticipant($participants){
//    foreach($participants as $participant){

//     if(!is_string($participant)){
//         throw new InvalidArgumentException("chaque participant doit etre string");
//     } 
//     }
//     if(empty($participants)){
//         throw new InvalidArgumentException("le tableux des participant ne peut pas etre vide");
//     }

//     $this->participants=$participants;
   

//    }


//    public function  getEquipmentNeeded (){
//     return $this->equipmentNeeded;
//    }


//    public function setEquipmentNeeded(array $equipmentNeededs){
//              foreach($equipmentNeededs as $equipmentNeeded){
//                 if(!is_string($equipmentNeeded)){
//                     throw new InvalidArgumentException("chaque equipe doit etre string");
//                 }
//              }
//              if(empty($equipmentNeededs)){
//                 throw new InvalidArgumentException("le tableux des equipement ne peut pas etre vide ");
//              }

//              $this->equipmentNeeded=$equipmentNeededs;
//    }

//    public function register($participant){}
//    abstract public function calculatePrice();
//    abstract public function getActivityDetails();

// }

// //les class fille 

// class SurfLesson extends AbstractSurfActivity {

// public $SurfLesson ;
// public $prix

// public function calculatePrice() {

// }

// } 