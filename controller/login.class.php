<?php

class Login extends Bdd {

    function __construct() {
        $this->coDB();
    }

    public function login($login, $mot_de_passe, $role) {
        $stid = oci_parse($this->conn, "SELECT * FROM users WHERE users_mail = '$login' AND users_password = '$mot_de_passe' AND users_roles_id = '$role'");
        oci_execute($stid);
        
        $row = oci_fetch_array($stid, OCI_ASSOC + OCI_RETURN_NULLS);
        
        $_SESSION['id_utilisateur'] = $row['USERS_ID'];
        $_SESSION['id_role'] = $row['USERS_ROLES_ID'];
        $_SESSION['nom'] = $row['USERS_NAME'];
        $_SESSION['prenom'] = $row['USERS_LASTNAME'];
        $_SESSION['telephone'] = $row['USERS_PHONE'];
        $_SESSION['telephone_mobile'] = $row['USERS_MOBILE'];
        $_SESSION['mail'] = $row['USERS_MAIL'];
        $_SESSION['validite'] = $row['USERS_IS_VALID'];
        $_SESSION['activate'] = $row['USERS_IS_ACTIVATED'];
        
        oci_close($this->conn);
    }
}
        