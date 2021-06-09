<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$preco = $_POST['preco'];


$sql="insert into produto (nome,preco) values ('$nome','$preco')";
$salvar = mysqli_query($conexao,$sql);

$linhas=mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastrar produto</title>

      
      
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
            <a href="Index.php"><li>inicio</li></a>
            <a href="Cadastrocliente.php"><li> Cliente</li></a>
            <a href="cadastraproduto.php"><li>Produtor</li></a>
            <a href="venda.php"><li>Venda</li></a>
        </ul>
    </nav>
</header>
            <section>
                <h1>Confirmacao de Cadastro</h1>
                <hr><br><br>  
                
                <?php
                if($linhas == 1){
                    print"Cadastro efetuado com sucesso!";
                }else{
                    print"Cadastro Não efetuado";
                }
            
                
                
                ?>
            </section>
        </div>
</body>
</html>