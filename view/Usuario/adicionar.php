<link href="../../css/bootstrap.min.css" rel="stylesheet">

<?php

include ('../../template/menu.php');
include ('../../control/UsuarioController.php');
$usuarioController = new UsuarioController();

if(isset($_POST['salvar'])) {
    $usuarioController->insertControl();  
}
?>

<body>
    <form method="POST">
        <div class="col-md-6 col-md-offset-3">
        <label>Nome do usuário</label>
        <input type="text" class="form-control" name="descricao" required="true">
        <label>Email</label>
        <input type="email" class="form-control" name="email">
        <label>Senha</label>
        <input type="password" class="form-control" name="senha">
        <div class="col-md-4" style="margin-left: -15px;">
            <label>Status</label>
        <select class="form-control" name="status">
            <option value="ativo">ativo</option>
            <option value="inativo">inativo</option>
        </select>
            <label>Tipo de usuário</label>
        <select class="form-control" name="tipo_id">
            <option value="1">administrador</option>
            <option value="2">vendedor</option>
            <option value="3">usuario comun</option>
        </select><br>
        <input type="submit" class="btn btn-success btn-sm btn-block" name="salvar" value="enviar">
        <input type="reset" class="btn btn-danger btn-sm btn-block" value="limpar">
        </div>
        </div>
    </form>
</body>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../js/bootstrap.min.js"></script>
