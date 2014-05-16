<?php
class Question extends Bdd{
    
    function __construct(){
        $this->coDB();
    }
    
    public function selectQuestions(){
        $stid = oci_parse($this->conn, 'SELECT PHARMAWEB.COMMANDES_PACK.GET_ALL_QUESTION() AS mfrc FROM dual');
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
        var_dump($array);
        return $array;
    }
}
?>