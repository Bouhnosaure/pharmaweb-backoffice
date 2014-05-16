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
            $select = new Commande();
            $html = "";
        ?>
        <table id="table" class='table table-bordered table-condensed'>
            <thead>
                <tr>
                    <th>Statut</th>
                    <th>Client</th>
                    <th>Sexe client</th>
                    <th>Numéro de téléphone client</th>
                    <th>Numéro de téléphone portable client</th>
                    <th>Mail client</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($select->selectCommandes() as $v){
                    $html .= "<tr><td>". $v['STATUTS_LABEL'] . "</td>";
                    $html .= "<td>". $v['USERS_NAME'] . "</td>";
                    $html .= "<td>". $v['USERS_GENDER'] . "</td>";
                    $html .= "<td>". $v['USERS_PHONE'] . "</td>";
                    $html .= "<td>". $v['USERS_MOBILE'] . "</td>";
                    $html .= "<td>". $v['USERS_MAIL'] . "</td>";
                    $html .= "<td><a href='?page=one_fournisseur&mail=" . $v['USERS_MAIL'] . "'><span class='glyphicon glyphicon-pencil'></span></a></td>";
                    $html .= "<td><a href='?page=liste_fournisseur'><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
                }
                echo $html;
                ?>
            </tbody>
        </table>
    </div>
</div>