<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>PharmaWeb Back Office</title>
        
        <link rel="stylesheet" href="vue/css/jquery.dataTables.css">
        <link rel="stylesheet" href="vue/css/bootstrap-theme.css">
        <link rel="stylesheet" href="vue/css/bootstrap.css">
        <link rel="stylesheet" href="vue/css/style.css">
        
        <script src="vue/js/jquery-1.10.2.js"></script>
        <script src="vue/js/jquery.dataTables.js"></script>
        <script src="vue/js/bootstrap.js"></script>
    </head>
    <body class="connexion-body">
        <div class="col-md-12">
            <h1 class="titresite">PharmaWeb Administration</h1>
        </div>
        <div class="col-md-12">
            <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="jumbotron connexion">
                        <form method="post" action="" enctype="multipart/form-data" role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="login" placeholder="Login" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="mot_de_passe" placeholder="Mot de passe" required>
                            </div>
                            <div class="form-group">
                                <select name="role" class="form-control">
                                    <option value="0">Choissisez votre metier</option>
                                    <option value="2">Pharmacien</option>
                                    <option value="3">Préparateur</option>
                                </select>
                            </div>
                            <div class="form-group grp-bouton text-center">
                                <button type="submit" class="btn btn-success">Connexion</button>
                            </div>
                        </form>
                    </div>
                </div>
            <div class="col-md-4"></div>
        </div>
    </body>
</html>