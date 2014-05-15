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
            $select = new Products();
            $html = "";
        ?>
        <table id="table" class='table table-bordered table-condensed'>
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Stock actuel</th>
                    <th>Catégorie</th>
                    <th>Classe pharmacetique</th>
                    <th>Réduction</th>
                    <th>Taxe</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($select->selectProducts() as $v){
                        $html .= "<tr><td>". $v['PRODUCTS_LABEL'] . "</td>";
                        $html .= "<td>". $v['PRODUCTS_ACTUAL_STOCK'] . "</td>";
                        $html .= "<td>". $v['CATEGORIES_LABEL'] . "</td>";
                        $html .= "<td>". $v['PHARMA_CLASSES_LABEL'] . "</td>";
                        $html .= "<td>". $v['PHARMA_CLASSES_PAYOFF'] . "</td>";
                        $html .= "<td>". $v['TAXES_RATE'] . "</td>";
                        $html .= "<td><a href='#'><span class='glyphicon glyphicon-pencil'></span></a></td>";
                        $html .= "<td><a href='#'><span class='glyphicon glyphicon-trash'></span></a></td></tr>";
                    }
                    echo $html;
                ?>
            </tbody>
        </table>
    </div>
</div>