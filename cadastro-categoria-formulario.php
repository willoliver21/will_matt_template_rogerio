<?php include("cabecalho.php");
      include("conecta.php");
?>
<h1>Cadastro de Categorias</h1> <!-- //cria formulario -->
<form action="add-categoria.php" method="post"> <!-- // chama pagina adiciona-produto-->
    <table class="table"> <!-- //cria tabela -->
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="categoria" /></td>
        </tr>
    </table>
    <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
</form>

<?php include("rodape.php"); ?>
