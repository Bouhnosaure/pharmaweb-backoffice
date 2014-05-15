<?php        
    session_start();
    
    if (empty($_GET['page']) && empty($_SESSION['id_utilisateur'])){
        
        require 'model/connexion.class.php';
        
        require 'controller/login.class.php';
        
        require 'vue/connexion.php';
        
        if(!empty($_POST['login'])){
            $connexion = new Login();
            $connexion->login($_POST['login'], $_POST['mot_de_passe'], $_POST['role']);
            if(!empty($_SESSION['id_role'])){
                echo'<script type="text/javascript">
                        <!--
                        window.location = "?page=accueil"
                        //-->
                    </script>';
            }
        }
        
    }
    elseif(empty($_GET['page']) && $_GET['page'] != 'index.php'){
        require 'vue/accueil_special.php';
    }else{
        
        require 'controller/allClass.php';

        require 'vue/header.php';

        require 'vue/menu.php';

        if(isset($_GET['page'])){
            require 'vue/' . $_GET['page'] . '.php';
        }
        else{
            require 'vue/404.php';
        }
    }
    
    if(isset($_GET['deconnexion'])){
        session_destroy();
        echo'<script type="text/javascript">
                    <!--
                    window.location = "index.php"
                    //-->
            </script>';
    }
    
?>