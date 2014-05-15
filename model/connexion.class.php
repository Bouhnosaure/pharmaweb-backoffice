<?php
    class Bdd {

        protected $conn;
        
        public function coDb() {
            $this->conn = oci_connect('pharmaweb', 'root', '(DESCRIPTION=(ADDRESS=(PROTOCOL=TCP)(HOST=10.33.127.132)(PORT=1521)) (CONNECT_DATA=(SID = orclpharma)))');
            if (!$this->conn) {
                $e = oci_error();
                trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
            }
        }
    }
?>