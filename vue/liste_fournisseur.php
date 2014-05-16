<?php
    if(isset($_GET['role_id'])){
        if(!isset($_GET['adresse_comp'])){$_GET['adresse_comp'] = "NULL";}
        $select = new Fournisseur();
        $select->selectFournisseurs($_GET['id'], $_GET['role_id'], $_GET['mutual_center_id'], $_GET['user_name'], $_GET['user_lastname'], $_GET['social_number'], $_GET['phone'], $_GET['mobile'], $_GET['mail'], $_GET['gender'], $_GET['valid'], $_GET['city'], $_GET['adresse'], $_GET['adresse_comp']);
    }
?>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').dataTable({
            "ajax": "myData.txt",
            "scrollY": "200px",
            "dom": "frtiS",
            "deferRender": true
        });
        $('#loading').css({"display":"none"});
    });
</script>

<div class="col-md-12">
    <div class="jumbotron">
        <div id="loading">
            <div class="progress progress-striped active" style="position: absolute; width: 600px; top: 50%; left: 50%; margin-top: -20px; margin-left: -300px">
                <div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    <span class="sr-only">100% Complete</span>
                </div>
            </div>
        </div>
        <?php
            $select = new Fournisseur();
            $html = "";
        ?>
        <table id="table" class='table table-bordered table-condensed'>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Mail</th>
                    <th>Téléphone</th>
                    <th>Téléphone mobile</th>
                    <th>Adresse</th>
                    <th>Ville</th>
                    <th>Code postal</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($select->selectFournisseurs() as $v){
                    
                    if(!isset($v['USERS_LASTNAME'])){$v['USERS_LASTNAME'] = "";}
                    if(!isset($v['USERS_PHONE'])){$v['USERS_PHONE'] = "";}
                    if(!isset($v['USERS_MOBILE'])){$v['USERS_MOBILE'] = "";}
                    if(!isset($v['ADRESSES_LABEL_COMP'])){$v['ADRESSES_LABEL_COMP'] = "NULL";}
                    
                    $html .= "<tr><td>". $v['USERS_NAME'] . "</td>";
                    $html .= "<td>". $v['USERS_LASTNAME'] . "</td>";
                    $html .= "<td>". $v['USERS_MAIL'] . "</td>";
                    $html .= "<td>". $v['USERS_PHONE'] . "</td>";
                    $html .= "<td>". $v['USERS_MOBILE'] . "</td>";
                    $html .= "<td>". $v['ADRESSES_LABEL'] . " | " . $v['ADRESSES_LABEL_COMP'] . "</td>";
                    $html .= "<td>". $v['CITIES_NAME'] . "</td>";
                    $html .= "<td>". $v['CITIES_ZIP_CODE'] . "</td>";
                    $html .= "<td><a href='?page=one_fournisseur&mail=" . $v['USERS_MAIL'] . "'><span class='glyphicon glyphicon-pencil'></span></a></td>";
                    $html .= "<td><a href='?page=liste_fournisseur&id=" . $v['USERS_ID'] . "&role_id=" . $v['USERS_ROLES_ID'] . "&mutual_center_id=". $v['MUTUALS_CENTERS_ID'] ."&user_name=" . $v['USERS_NAME'] ."&user_lastname=" . $v['USERS_LASTNAME'] ."&social_number=" . $v['USERS_SOCIAL_NUMBER'] ."&phone=" . $v['USERS_PHONE'] ."&mobile=" . $v['USERS_MOBILE'] ."&mail=" . $v['USERS_MAIL'] ."&gender=" . $v['USERS_GENDER'] ."&valid=" . $v['USERS_IS_VALID'] ."&city=" . $v['CITIES_ID'] ."&adresse=" . $v['ADRESSES_LABEL'] ."&adresse_comp=" . $v['ADRESSES_LABEL_COMP'] ."'><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
                }
                echo $html;
                ?>
            </tbody>
        </table>
    </div>
</div>