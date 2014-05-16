<div class="col-md-12">
    <div class="jumbotron">
        <div style="width: 600px;margin-left: 32%;">
            <?php
                $select = new Users();
                foreach($select->getOneUser($_GET['mail']) as $v){
            ?>
            <form method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="id_user" value="<?php echo $v['USERS_ID']; ?>" />
                
                <input type="hidden" name="genre" value="<?php echo $v['USERS_GENDER'] ?>" />

                <div class="form-group">
                    <label for="nom" class="control-label">Nom : </label>
                    <input type="text" name="nom" id="nom" class="form-control" required value="<?php echo $v['USERS_NAME'];?>" />
                </div>

                <div class="form-group">
                    <label for="prenom" class="control-label">Prenom : </label>
                    <input type="text" name="prenom" id="prenom" class="form-control" required value="<?php echo $v['USERS_LASTNAME'];?>" />
                </div>

                <input type="hidden" name="num_secu_social"value="<?php echo $v['USERS_SOCIAL_NUMBER'];?>" />


                <div class="form-group">
                    <label for="telephone" class="control-label">Téléphone : </label>
                    <input type="text" name="telephone" id="telephone" class="form-control" required value="<?php echo $v['USERS_PHONE'];?>" />
                </div>

                <div class="form-group">
                    <label for="telephone_mobile" class="control-label">Téléphone mobile : </label>
                    <input type="text" name="telephone_mobile" id="telephone_mobile" class="form-control" required value="<?php echo $v['USERS_MOBILE'];?>" />
                </div>

                <div class="form-group">
                    <label for="mail" class="control-label">Mail : </label>
                    <input type="text" name="mail" id="mail" class="form-control" required value="<?php echo $v['USERS_MAIL'];?>" />
                </div>
                
                <input type="hidden" name="Date_de_naissance"value="<?php echo $v['USERS_BIRTH_DATE'];?>" />


                <div class="form-group">
                    <label for="adresse" class="control-label">Adresse : </label>
                    <input type="text" name="adresse" id="adresse" class="form-control" required value="<?php echo $v['ADRESSES_LABEL'];?>" />
                </div>

                <div class="form-group">
                    <label for="adresse_comp" class="control-label">Adresse complémentaire : </label>
                    <input type="text" name="adresse_comp" id="adresse_comp" class="form-control" required value="<?php echo $v['ADRESSES_LABEL_COMP'];?>" />
                </div>

                <div class="form-group">
                    <label for="zipcode" class="control-label">Code postal : </label>
                    <input type="text" name="zipcode" id="zipcode" class="form-control" required value="<?php echo $v['CITIES_ZIP_CODE'];?>" />
                </div>

                <div class="form-group">
                    <label for="ville" class="control-label">Ville : </label>
                    <input type="text" name="ville" id="ville" class="form-control" required value="<?php echo $v['CITIES_NAME'];?>" />
                </div>

                <input type="hidden" name="centre_mutuel"value="<?php echo $v['MUTUALS_CENTERS_LABEL'];?>" />
                
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