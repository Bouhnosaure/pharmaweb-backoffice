<div class="col-md-12">
    <div class="jumbotron">
        <div style="width: 600px;margin-left: 32%;">
            <?php
                $select = new Users();
                foreach($select->getOneUser($_GET['mail']) as $v){
            ?>
            <form method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="id_user" value="<?php echo $v['USERS_ID']; ?>" />

                <div class="form-group">
                    <label for="gender" class="control-label">Genre : </label>
                    <select class="form-control" name="gender" id="gender">
                        <?php
                            if($v['USERS_GENDER'] == "Homme"){
                                $sexe1 = "selected";
                                $sexe2 = "";
                            }else{
                                $sexe1 = "";
                                $sexe2 = "selected";
                            }
                        ?>
                        <option value="<?php echo $v['USERS_GENDER'] ?>" <?php echo $sexe1; ?>>Homme</option>
                        <option value="<?php echo $v['USERS_GENDER'] ?>" <?php echo $sexe2; ?>>Femme</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nom" class="control-label">Nom : </label>
                    <input type="text" name="nom" id="nom" class="form-control" required value="<?php echo $v['USERS_NAME'];?>" /><br/>
                </div>

                <div class="form-group">
                    <label for="prenom" class="control-label">Prenom : </label>
                    <input type="text" name="prenom" id="prenom" class="form-control" required value="<?php echo $v['USERS_LASTNAME'];?>" /><br/>
                </div>

                <div class="form-group">
                    <label for="num_secu_social" class="control-label">Numéro sécurité social : </label>
                    <input type="text" name="num_secu_social" id="num_secu_social" class="form-control" required value="<?php echo $v['USERS_SOCIAL_NUMBER'];?>" /><br/>
                </div>

                <div class="form-group">
                    <label for="telephone" class="control-label">Téléphone : </label>
                    <input type="text" name="telephone" id="telephone" class="form-control" required value="<?php echo $v['USERS_PHONE'];?>" /><br/>
                </div>

                <div class="form-group">
                    <label for="telephone_mobile" class="control-label">Téléphone mobile : </label>
                    <input type="text" name="telephone_mobile" id="telephone_mobile" class="form-control" required value="<?php echo $v['USERS_MOBILE'];?>" /><br/>
                </div>

                <div class="form-group">
                    <label for="mail" class="control-label">Mail : </label>
                    <input type="text" name="mail" id="mail" class="form-control" required value="<?php echo $v['USERS_MAIL'];?>" /><br/>
                </div>

                <div class="form-group">
                    <label for="Date_de_naissance" class="control-label">Date de naissance : </label>
                    <input type="text" name="Date_de_naissance" id="Date_de_naissance" class="form-control" required value="<?php echo $v['USERS_BIRTH_DATE'];?>" /><br/>
                </div>

                <div class="form-group">
                    <label for="adresse" class="control-label">Adresse : </label>
                    <input type="text" name="adresse" id="adresse" class="form-control" required value="<?php echo $v['ADRESSES_LABEL'];?>" /><br/>
                </div>

                <div class="form-group">
                    <label for="adresse_comp" class="control-label">Adresse complémentaire : </label>
                    <input type="text" name="adresse_comp" id="adresse_comp" class="form-control" required value="<?php echo $v['ADRESSES_LABEL_COMP'];?>" /><br/>
                </div>

                <div class="form-group">
                    <label for="zipcode" class="control-label">Code postal : </label>
                    <input type="text" name="zipcode" id="zipcode" class="form-control" required value="<?php echo $v['CITIES_ZIP_CODE'];?>" /><br/>
                </div>

                <div class="form-group">
                    <label for="ville" class="control-label">Ville : </label>
                    <input type="text" name="ville" id="ville" class="form-control" required value="<?php echo $v['CITIES_NAME'];?>" /><br/>
                </div>

                <div class="form-group">
                    <label for="centre_mutuel" class="control-label">Centre de mutuelle : </label>
                    <input type="text" name="centre_mutuel" id="centre_mutuel" class="form-control" required value="<?php echo $v['MUTUALS_CENTERS_LABEL'];?>" /><br/>
                </div>
                
                <div class="form-group grp-bouton text-center">
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div> 
            </form>
            <?php
                }
            ?>
        </div>
    </div>
</div>