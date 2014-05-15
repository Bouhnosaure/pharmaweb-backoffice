<div class="col-md-12">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?page=accueil">PharmaWeb Administration</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul id="menu" class="nav navbar-nav">
                <li class="<?php if(isset($_GET['page']) && $_GET['page'] == "liste_users"){echo "active";}else{echo "";} ?>"><a href="?page=liste_users" title="Liste des utilisateurs">Liste des utilisateurs</a></li>
                <li class="<?php if(isset($_GET['page']) && $_GET['page'] == "liste_products"){echo "active";}else{echo "";} ?>"><a href="?page=liste_products" title="Liste des produits">Liste des produits</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="?page=accueil&deconnexion=true">Deconnexion</a></li>
                <li><a href="?page=modif_mot_de_passe">Changer son mot de passe</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
</div>