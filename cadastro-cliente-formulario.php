<?php include("cabecalho.php");
      include("conecta.php");
      include("banco-categoria.php");
?>
<h1>Cadastro de Clientes</h1> <!-- //cria formulario -->
<form action="add-clientes.php" method="post"> <!-- // chama pagina adiciona-produto-->
    <table class="table"> <!-- //cria tabela -->
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input class="form-control" type="E-mail" name="mail" /></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input class="form-control" type="text" name="senha" /></td>
        </tr>
        <tr>
            <td>RG - Inscrição Estadual</td>
            <td><input class="form-control" type="text" name="rg-ie" /></td>
        </tr>
        <tr>
            <td>CPF - CNPJ</td>
            <td><input class="form-control" type="text" name="cpf-cnpj" /></td>
        </tr>
        <tr>
            <td>Telefone</td>
            <td><input class="form-control" type="text" name="tel" /></td>
        </tr>
        <tr>
            <td>Celular</td>
            <td><input class="form-control" type="text" name="cel" /></td>
        </tr>
        <tr>
            <td>Data de Nascimento</td>
            <td><input class="form-control" type="date" name="data" /></td>
        </tr>
        <tr>
            <td>Renda</td>
            <td><input class="form-control" type="number" name="renda" /></td>
        </tr>
        <TR>
            <td>
                Estado
            </td>
            <td><input class="form-control" type="test" name="estado"/></td>
        </TR>
        <tr>
            <td>Rua</td>
            <td><input class="form-control" type="text" name="rua" /></td>
        </tr>
        <tr>
            <td>Número</td>
            <td><input class="form-control" type="text" name="numero" /></td>
        </tr>
        <tr>
            <td>Bairro</td>
            <td><input class="form-control" type="text" name="bairro" /></td>
        </tr>
        <tr>
            <td>Complemento</td>
            <td><input class="form-control" type="text" name="complemento" /></td>
        </tr>
        <tr>
            <td>CEP</td>
            <td><input class="form-control" type="text" name="cep" /></td>
        </tr>
    </table>
    <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
</form>

<?php include("rodape.php"); ?>
