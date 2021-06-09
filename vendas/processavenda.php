<?php
include_once("conexao.php");


$idusuario = $_POST['idusuario'];
$preco = $_POST['preco'];
$data = $_POST['data'];
$idproduto = $_POST['idproduto'];
$idvenda = $_POST['idvenda'];

$sql="insert into venda (idusuario,preco,data) values ('$idusuario','$preco','$data')";
$salvar = mysqli_query($conexao,$sql);

$sql="insert into itensvenda (idproduto,idvenda) values ('$idproduto','$idvenda')";
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
                    print"venda  realizada com sucesso!";
                }else{
                    print"venda Não efetuado";
                }
            
                
                
                ?>
            </section>
        </div>
</body>
</html>