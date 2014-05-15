<?php
	// Ici toutes les fonctions additionnelles qui ne sont pas dans une class

	// date FR to EN
        function dateFRtoEN($date){
            if (!empty($date)){
                $date = explode("/", $date);
                return($date[2] . "-" . $date[1] . "-" . $date[0]);
            }    
        }
        
	// FONCTION pour transformer une date EN en date FR
	function dateENtoFR($date){
            if (!empty($date)){
                $date = explode("-", $date);
                return($date[2] . "/" . $date[1] . "/" . $date[0]);
            }
        }
        
        //employe type
        function afficheRole($id_role){
            if($id_role == 0){
                return "Directeur";
            }elseif ($id_role == 1) {
                return "Conducteur";
            }
        }
?>