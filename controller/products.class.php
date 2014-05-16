<?php
class Products extends Bdd{
    
    function __construct(){
        $this->coDB();
    }
    
    public function selectProducts(){
        $stid = oci_parse($this->conn, 'SELECT PHARMAWEB.PRODUCTS_PACK.GET_ALL_PRODUCT(-1, -1) AS mfrc FROM dual');
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
    
    public function getOneProduct($id_product) {
        $stid = oci_parse($this->conn, 'SELECT PHARMAWEB.PRODUCTS_PACK.GET_ONE_PRODUCT(:PRODUCT_ID) AS mfrc FROM dual');
        oci_bind_by_name($stid, ':PRODUCT_ID', $id_product, 32);
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
    
    public function getAllCategorie() {
        $stid = oci_parse($this->conn, 'SELECT PHARMAWEB.PRODUCTS_PACK.GET_ALL_CATEGORIES() AS mfrc FROM dual');
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
    
    public function getAllPharmaClass() {
        $stid = oci_parse($this->conn, 'SELECT PHARMAWEB.PRODUCTS_PACK.GET_ALL_PHARMA_CLASSES() AS mfrc FROM dual');
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
    
    public function getAllTaxes() {
        $stid = oci_parse($this->conn, 'SELECT PHARMAWEB.PRODUCTS_PACK.GET_ALL_TAXES() AS mfrc FROM dual');
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