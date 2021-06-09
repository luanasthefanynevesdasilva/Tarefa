<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar Produto</title>

      
      
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
         <a href="cadastraproduto.php">Cadastrar</a> <a href="pesquisarprodutor.php">lista</a><a href="excluirprodutophp">excluir</a><a href="atualizarprodutos.php">atualizar</a><br>
</section>
  <h1>cadastro</h1>
                <hr><br><br>  
<form id="cadprodutor" method="post"  class="Formulario" action="processaprodutor.php">


                    Nome do produtor<br>
                    <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                    Preco do produtor<br>
                    <input type="text" name="preco" class="campo" maxlength="20" required><br>
    

                    <input type="submit" value="salvar" class="btn">
                    <input type="reset" value="limpar" class="btn">

                    <br><br>
        </form>


<footer>

</footer>
</body>
</html>

