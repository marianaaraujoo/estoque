<html>
<head>
	<title>Controle de Vendas - Editar Refrigerante</title>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../../index.php">Unilab</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../cadastrar/formcadastro.php" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar Refrigerante</a>
          </li>
        </ul>
   </nav>

    <?php   
      $id = filter_input(INPUT_POST, 'id');
      $marca = filter_input(INPUT_POST, 'marca');
      $tipo = filter_input(INPUT_POST, 'tipo');
      $sabor = filter_input(INPUT_POST, 'sabor');
      $litragem = filter_input(INPUT_POST, 'litragem');
      $precounidade = filter_input(INPUT_POST, 'precounidade');
      $qtdestoque = filter_input(INPUT_POST, 'qtdestoque');
    ?>

    <form name="form-concluir-chamado" action="salva.php" method="post" align="center">
      <table align="center" >
        <h4 align="center">Alterar dados do Refrigerante</h4><br>
        <tr>
          <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
        </tr>

        <tr>
          <td>
            <label>Marca:</label> 
            <input type="text" name="marca" maxlength="30" required class="form-control" value="<?php echo $marca;?>"><br><br>
          </td>
        </tr>

        <tr>
          <td>
            <label>Tipo:</label> 
            <input type="text" name="tipo" required class="form-control" value="<?php echo $tipo;?>"><br><br>
          </td>
        </tr>

        <tr>
          <td>
            <label>Sabor:</label> 
            <input type="text" name="sabor" required class="form-control" value="<?php echo $sabor;?>"><br><br>
          </td>
      </tr>

      <tr>
        <td>
          <label>Litragem:</label> 
          <input type="text" name="litragem" required class="form-control" value="<?php echo $litragem;?>"><br><br>
        </td>
      </tr>            

      <tr>
        <td>
          <label>Preço da Unidade:</label> 
          <input type="text" name="precounidade" data-mask="#.##" data-mask-reverse="true" data-mask-maxlength="false" required class="simple-field-data-mask-reverse form-control" value="<?php echo $precounidade;?>"><br><br>
        </td>
      </tr>

      <tr>
        <td>
          <label>Quantidade no estoque:</label> 
          <input type="number" name="qtdestoque" required class="form-control" value="<?php echo $qtdestoque;?>"><br><br>
        </td>
      </tr>
            
            
      <tr>
        <td>
          <p align="center">
            <input type="submit" class="btn btn-outline-primary" value="Salvar alterações">
          </p>
        </td>
      </tr>
    </form>

    <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="../mask/sinon-1.10.3.js"></script>
    <script type="text/javascript" src="../mask/sinon-qunit-1.0.0.js"></script>
    <script type="text/javascript" src="../mask/jquery.mask.js"></script>
    <script type="text/javascript" src="../mask/jquery.mask.test.js"></script>
</body>
</html>