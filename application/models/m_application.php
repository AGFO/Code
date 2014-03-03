
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_application extends CI_Model {

	public function __construct(){ 	
		
		parent::__construct();	
		
	}
public function listePraticien() {
    
$sql = "SELECT PRA_NOM, PRA_PRENOM FROM praticien";
foreach ($sql->result() as $row){
             echo $row->nom;
             echo $row->prenom;
}

}
public function detailPraticien(){
 $sql = "SELECT PRA_NOM, PRA_PRENOM, PRA_ADRESSE, PRA_CP, PRA_VILLE FROM praticien";
foreach ($sql->result() as $row){
             echo $row->nom;
             echo $row->prenom;
             echo $row->adresse;
             echo $row->cp;
             echo $row->ville;
} 

}

public function medicament (){
$sql = "SELECT MED_NOMCOMMERCIAL FROM medicament";
foreach ($sql->result() as $row){
             echo $row->nom;
}
    
}
public function consultation (){
$sql = "SELECT * FROM rapport_visite";
foreach ($sql->result() as $row){
             echo $row->title;
} 
}
}
