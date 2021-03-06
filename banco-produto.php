<?php

function listaProdutos($conexao) {
    $produtos = array();
    $resultado = mysqli_query($conexao, "select p.*, c.nome as categoria_nome from produtos as p join categorias as c on p.categoria_id = c.id");

    while($produto = mysqli_fetch_assoc($resultado)) {
        array_push($produtos, $produto);
    }

    return $produtos;
}

function insereProduto($conexao, $nome, $preco, $categoria_id) {
    $query = "insert into produtos (nome, preco, categoria_id)
        values ('{$nome}', {$preco}, {$categoria_id})";
    return mysqli_query($conexao, $query);
}


function removeProduto($conexao, $id) {
    $query = "delete from produtos where id = {$id}";
    return mysqli_query($conexao, $query);
}

function alteraProduto($conexao, $id, $nome, $preco, 
    $categoria_id) {
    $query = "update produtos set nome = '{$nome}', preco = {$preco}, categoria_id= {$categoria_id} where id = '{$id}'";
    return mysqli_query($conexao, $query);
}

function buscaProduto($conexao, $id) {
    $query = "select * from produtos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

?>