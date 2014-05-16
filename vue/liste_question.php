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
            $select = new Question();
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
                    <th>Adresse(+complémentaire)</th>
                    <th>Ville</th>
                    <th>Code postal</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($select->selectQuestions() as $v){
                    
                }
                echo $html;
                ?>
            </tbody>
        </table>
    </div>
</div>