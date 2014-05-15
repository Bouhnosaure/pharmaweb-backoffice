<?php
class Users extends Bdd{
    
    function __construct(){
        $this->coDB();
    }
    
    public function selectUsers(){
        $stid = oci_parse($this->conn, 'SELECT PHARMAWEB.USERS_PACK.GET_ALL_USERS() AS mfrc FROM dual');
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
    
    public function changePassword(){
        $stid = oci_parse($this->conn, "UPDATE users SET users_password = '$_POST[mot_de_passe]' WHERE users_id = '$_SESSION[id_utilisateur]'");
        oci_execute($stid);
        
        return "<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Changement effectuer</div>";
    }
    
    public function selectOneUser($id_utilisateur){
        $stid = oci_parse($this->conn, "SELECT * FROM users WHERE users_id = '$id_utilisateur'");
        oci_execute($stid);
        
        $row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS);
        
        return $row;
    }
    
    public function getOneUser($mail) {
        $stid = oci_parse($this->conn, 'SELECT PHARMAWEB.USERS_PACK.GET_ONE_USER(:MAIL) AS mfrc FROM dual');
        oci_bind_by_name($stid, ':MAIL', $mail, 32);
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
}