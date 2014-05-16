<div class="col-md-12">
    <div class="jumbotron">
        <div style="width: 600px;margin-left: 32%;">
            <?php
                $select = new Products();
                foreach($select->getOneProduct($_GET['id_product']) as $v){
            ?>
            <form method="post" action="" enctype="multipart/form-data">
                <input type="hidden" name="id_product" value="<?php echo $v['PRODUCTS_ID']; ?>" />
                
                <div class="form-group">
                    <label for="nom" class="control-label">Nom : </label>
                    <input type="text" name="nom" id="nom" class="form-control" required value="<?php echo $v['PRODUCTS_LABEL'];?>" />
                </div>
                
                <div class="form-group">
                    <label for="desc" class="control-label">Description : </label>
                    <input type="text" name="desc" id="desc" class="form-control" required value="<?php echo $v['PRODUCTS_DESCRIPTION'];?>" />
                </div>
                
                <div class="form-group">
                    <label for="prix_hors_taxe" class="control-label">Prix hors taxes : </label>
                    <input type="text" name="prix_hors_taxe" id="prix_hors_taxe" class="form-control" required value="<?php echo $v['PRODUCTS_TAXES_FREE_PRICE'];?>" />
                </div>
                
                <div class="form-group">
                    <label for="stock" class="control-label">Stock : </label>
                    <input type="text" name="stock" id="stock" class="form-control" required value="<?php echo $v['PRODUCTS_ACTUAL_STOCK'];?>" />
                </div>
                
                <div class="form-group">
                    <label for="stock_alert" class="control-label">Alerte stock : </label>
                    <input type="text" name="stock_alert" id="stock_alert" class="form-control" required value="<?php echo $v['PRODUCTS_ALERT_STOCK'];?>" />
                </div>
                
                <div class="form-group">
                    <label for="product_cat" class="control-label">Catégorie du produit : </label>
                    <select class="form-control" name="product_cat" id="product_cat">
                        <?php
                            $select2 = new Products();
                            foreach($select2->getAllCategorie() as $val){
                    
                            if($v['CATEGORIES_LABEL'] == $val['CATEGORIES_LABEL']){
                                $selected = "selected";
                            }else{
                                $selected = "";
                            }
                        ?>
                        <option value="<?php echo $v['CATEGORIES_LABEL'] ?>" <?php echo $selected; ?>><?php echo $val['CATEGORIES_LABEL'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="pharma_class" class="control-label">Classe pharmaceutique et taxe : </label>
                    <select class="form-control" name="pharma_class" id="pharma_class">
                        <?php
                            $select3 = new Products();
                            foreach($select3->getAllPharmaClass() as $value){
                    
                            if($v['PHARMA_CLASSES_LABEL'] == $value['PHARMA_CLASSES_LABEL']){
                                $selected1 = "selected";
                            }else{
                                $selected1 = "";
                            }
                        ?>
                        <option value="<?php echo $v['PHARMA_CLASSES_LABEL'] ?>" <?php echo $selected1; ?>><?php echo $value['PHARMA_CLASSES_LABEL'] ?> : <?php echo $value['PHARMA_CLASSES_PAYOFF'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                
                <input type="hidden" name="pharma_class_payoff" value="<?php echo $v['PHARMA_CLASSES_PAYOFF'];?>" />
                
                <div class="form-group">
                    <label for="pharma_class" class="control-label">Classe pharmaceutique et taxe : </label>
                    <select class="form-control" name="pharma_class" id="pharma_class">
                        <?php
                            $select4 = new Products();
                            foreach($select4->getAllTaxes() as $value){
                    
                            if($v['TAXES_LABEL'] == $value['TAXES_LABEL']){
                                $selected2 = "selected";
                            }else{
                                $selected2 = "";
                            }
                        ?>
                        <option value="<?php echo $v['TAXES_LABEL'] ?>" <?php echo $selected2; ?>><?php echo $value['TAXES_LABEL'] ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="taxe" class="control-label">Taxe : </label>
                    <input type="text" name="taxe" id="taxe" class="form-control" required value="<?php echo $v['TAXES_RATE'];?>" />
                </div>
                
                <div class="form-group grp-bouton text-center">
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div> 
            </form>
            <?php } ?>
        </div>
    </div>
</div>