<div class="col-md-12">
    <div class="jumbotron">        
        <h2>Modification du mot de passe</h2>
        
        <?php
            if(isset($_POST['mot_de_passe'])){
                $updateMotDePasse = new Users();
                echo $updateMotDePasse->changePassword();
            }
        ?>
        
        <div id="formulaire">
            <form method="post" action="" name="form1" id="form-password">
                        <div class="form-group">
                                <label class="control-label" for="mot_de_passe">Mot de passe : </label>
                                <input class="form-control" type="password" name="mot_de_passe" id="mot_de_passe" required/>
                        </div>

                        <div class="form-group">
                                <label class="control-label" for="password_confirm">Retaper votre mot de passe : </label>
                                <input class="form-control" type="password" id="password_confirm" name="password_confirm" required/>
                        </div>

                        <div class="form-group grp-bouton">
                                <button type="submit" id="submit" class="btn btn-success">Enregistrer</button>
                        </div>  

                </form>
        </div>
    </div>
</div>

<script>
    jQuery(function(){
        $("#submit").click(function(){
            $(".error").hide();
            var hasError = false;
            var passwordVal = $("#mot_de_passe").val();
            var checkVal = $("#password_confirm").val();
            if (passwordVal == '') {
                $("#mot_de_passe").after('<span class="error">Please enter a password.</span>');
                hasError = true;
            } else if (checkVal == '') {
                $("#password_confirm").after('<span class="error">Please re-enter your password.</span>');
                hasError = true;
            } else if (passwordVal != checkVal ) {
                $("#formulaire").before("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button><strong>Warning!</strong> Better check yourself, you're not looking too good.</div>");
                hasError = true;
            }
            if(hasError == true) {return false;}
        });
    });
</script>