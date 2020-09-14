<?php       
    include '../bancodedados/conexao.php';

    $id = filter_input(INPUT_POST, 'id');
    $novamarca = filter_input(INPUT_POST, 'marca');
    $novotipo = filter_input(INPUT_POST, 'tipo');
    $novosabor = filter_input(INPUT_POST, 'sabor');
    $novalitragem = filter_input(INPUT_POST, 'litragem');
    $novopreco = filter_input(INPUT_POST, 'precounidade');
    $novoestoque = filter_input(INPUT_POST, 'qtdestoque');

    $sql = "UPDATE refrigerantes SET marca='" . $novamarca. "', tipo='" . $novotipo. "', sabor='" . $novosabor. "', litragem ='" . $novalitragem. "',  precounidade='" . $novopreco. "',   qtdestoque='" . $novoestoque. "' WHERE idrefrigerante=".$id;
    $update = mysqli_query($link, $sql);

    if( !$update ){
        header("Location:../../index.php?alteracao=false");
        exit;
    }

    header("Location:../../index.php?alteracao=true");
?>