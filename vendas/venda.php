<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">


      
      
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
            <a href="index1.php"><li>inicio</li></a>
            <a href="Cadastrocliente.php"><li> Cliente</li></a>
            <a href="cadastraproduto.php"><li>Produtor</li></a>
            <a href="venda.php"><li>Venda</li></a>
        </ul>
    </nav>
</header>
<section class="menu2">
<a href="venda.php">realizar venda</a><a href="pesquisarvenda.php">lista</a><a href="excluirvenda.php">excluir</a><a href="atualizarvenda.php">atualizar</a><br>
</section>
 
<form id="cadprodutor" method="post"  class="Formulario" action="processavenda.php">


                    
                    preco do produto<br>
                    <input type="text" name="preco" class="campo" maxlength="20" required><br>
                    data da venda<br>
                    <input type="date" name="data" class="campo" maxlength="20" required><br>
                    idvenda<br>
                    <input type="text" name="idvenda" class="campo" maxlength="20" required><br>
                    idproduto<br>
                    <input type="text" name="idproduto" class="campo" maxlength="20" required><br>
                    idcliente<br>
                    <input type="text" name="idusuario" class="campo" maxlength="20" required><br>

                    <input type="submit" value="salvar" class="btn">  <br>
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

