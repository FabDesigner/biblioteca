<link href="../../css/bootstrap.min.css" rel="stylesheet">

<?php
include '../../control/EditoraController.php';
include '../../template/menu.php';
?>




<?php
$editoraController = new EditoraController();
?>

<div class="col-md-10 col-md-offset-1">
    <div class="panel panel-success">
        <!-- Default panel contents -->
        <div class="panel-heading">Editoras cadastradas</div>
        <div class="panel-body">

            <button type="button" class="btn btn-warning btn-sm col-md-offset-11" aria-label="Left Align">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                <a href="http://www.globo.com" target="_blank" style="color: #ffffff; text-decoration: none">adicionar</a>
            </button><br><br>
            <table class="table table-striped table-hover">
                <tr>
                    <th>
                        Id
                    </th>

                    <th>
                        Endereço
                    </th>

                    <th>
                        Status
                    </th>

                    <th>
                        Ações
                    </th>
                </tr>
                <?php
                foreach ($editoraController->findAll() as $editora) {
                    ?>
                    <tr>
                        <td><?php echo $editora->id; ?></td>
                        <td><?php echo $editora->descricao; ?></td>
                        
                        <td>
                            <?php if ($editora->status == "ativo") {
                                ?>
                                <span class="label label-success"><?php echo $editora->status; ?></span>
                                <?php
                            } else {
                                ?>
                                <span class="label label-danger"><?php echo $editora->status; ?></span>
                                <?php }
                            ?>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Ações
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Editar</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Excluir</a></li>    
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../js/bootstrap.min.js"></script>





