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
            $select = new Users();
            $html = "";
        ?>
        <table id="table" class='table table-bordered table-condensed'>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Mail</th>
                    <th style="width: 120px;">Téléphone</th>
                    <th style="width: 120px;">Téléphone mobile</th>
                    <th>Adresse(+complémentaire)</th>
                    <th>Ville</th>
                    <th>Code postal</th>
                    <th>Mutuel</th>
                    <th>Role</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($select->selectUsers() as $v){
                    $html .= "<tr><td>". $v['USERS_NAME'] . "</td>";
                    $html .= "<td>". $v['USERS_LASTNAME'] . "</td>";
                    $html .= "<td>". $v['USERS_MAIL'] . "</td>";
                    $html .= "<td>". $v['USERS_PHONE'] . "</td>";
                    $html .= "<td>". $v['USERS_MOBILE'] . "</td>";
                    $html .= "<td>". $v['ADRESSES_LABEL'] . " " . $v['ADRESSES_LABEL_COMP'] . "</td>";
                    $html .= "<td>". $v['CITIES_NAME'] . "</td>";
                    $html .= "<td>". $v['CITIES_ZIP_CODE'] . "</td>";
                    $html .= "<td>". $v['MUTUALS_CENTERS_LABEL'] . "</td>";
                    $html .= "<td>". $v['USERS_ROLES_LABEL'] . "</td>";
                    $html .= "<td><a href='?page=one_utilisateur&mail=" . $v['USERS_MAIL'] . "'><span class='glyphicon glyphicon-pencil'></span></a></td>";
                    $html .= "<td><a href='#'><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
                }
                echo $html;
                ?>
            </tbody>
        </table>
    </div>
</div>