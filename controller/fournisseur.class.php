<?php
class Fournisseur extends Bdd{
    
    function __construct(){
        $this->coDB();
    }
    
    public function selectFournisseurs(){
        $stid = oci_parse($this->conn, 'SELECT PHARMAWEB.USERS_PACK.GET_ALL_USERS_BY_USERSROLES(4) AS mfrc FROM dual');
        oci_execute($stid);
       
        
        while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
            $rc = $row['MFRC'];
            OCIExecute($rc);
            $i = 1;
            while (($rc_row = oci_fetch_array($rc, OCI_ASSOC))) {
                $array[$i] = $rc_row;
                $i++;
            }
        }
        oci_close($this->conn);
        return $array;
    }
    
    public function deleteFournisseurs($id, $role_id, $mutual_center_id, $user_name, $user_lastname, $social_number, $phone, $mobile, $mail, $gender, $valid, $city, $adresse, $adresse_comp){
        $stid = oci_parse($this->conn, 'SELECT PHARMAWEB.USERS_PACK.UPDATE_USER(:USERS_ID, :USERS_ROLES_ID, :MUTUALS_CENTERS_ID, :USERS_NAME, :USERS_LASTNAME, :USERS_SOCIAL_NUMBER, :USERS_PHONE, :USERS_MOBILE, :USERS_MAIL, :USERS_GENDER, :USERS_IS_VALID, :USERS_IS_ACTIVATED, :CITIES_ID, :ADRESSES_LABEL, :ADRESSES_LABEL_COMP) AS mfrc FROM dual');
        
        $test = 0;
        oci_bind_by_name($stid, ':USERS_ID', $id, 32);
        oci_bind_by_name($stid, ':USERS_ROLES_ID', $role_id, 32);
        oci_bind_by_name($stid, ':MUTUALS_CENTERS_ID', $mutual_center_id, 32);
        oci_bind_by_name($stid, ':USERS_NAME', $user_name, 32);
        oci_bind_by_name($stid, ':USERS_LASTNAME', $user_lastname, 32);
        oci_bind_by_name($stid, ':USERS_SOCIAL_NUMBER', $social_number, 32);
        oci_bind_by_name($stid, ':USERS_PHONE', $phone, 32);
        oci_bind_by_name($stid, ':USERS_MOBILE', $mobile, 32);
        oci_bind_by_name($stid, ':USERS_MAIL', $mail, 32);
        oci_bind_by_name($stid, ':USERS_BIRTH_DATE', $naissance, 32);
        oci_bind_by_name($stid, ':USERS_GENDER', $gender, 32);
        oci_bind_by_name($stid, ':USERS_IS_VALID', $valid, 32);
        oci_bind_by_name($stid, ':CITIES_ID', $city, 32);
        oci_bind_by_name($stid, ':ADRESSES_LABEL', $adresse, 32);
        oci_bind_by_name($stid, ':ADRESSES_LABEL_COMP', $adresse_comp, 32);
        oci_bind_by_name($stid, ':USERS_IS_ACTIVATED', $test, 32);
        
        $result = oci_execute($stid);
        var_dump($result);
        
        $array = null;
        oci_close($this->conn);
        return $array;
        
        /*while (($row = oci_fetch_array($stid, OCI_ASSOC))) {
            $rc = $row['MFRC'];
            OCIExecute($rc);
            $i = 1;
            while (($rc_row = oci_fetch_array($rc, OCI_ASSOC))) {
                $array[$i] = $rc_row;
                $i++;
            }
        }
        oci_close($this->conn);
        return $array;*/
    }
}
?>