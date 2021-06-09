<?php
include_once "conexao.php";

 ?>



<!DOCTYPE html>

<html>
<head>
    <meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
    <?php header("Content-Type: text/html; charset=ISO-8859-1", true);?>
    <link rel="stylesheet" href="estilo.css">
    <title>pesquisar produtor</title>

      
      
</head>
<body>
<header>
    <nav class="Menu">
        <ul>
            <a href="index1.php"><li>inicio</li></a>
            <a href="Cadastrocliente.php"><li> Cliente</li></a>
            <a href="Cadastroprodutor.php"><li>Produtor</li></a>
            <a href="venda.php"><li>Venda</li></a>
        </ul>
    </nav>
</header>
<section class="menu2">
  <a href="cadastraproduto.php">Cadastrar</a> <a href="pesquisarprodutor.php">listar</a><a href="excluirproduto.php">excluir</a><a href="atualizarprodutos.php">atualizar</a><br>
</section>
         <br><br>
            >
 	
       
    <form method="post">
        <input type="search" name="txtprocurar" placeholder="Procure por produto">
        <input type="submit" value="Buscar">
    </form>

                
				
<?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dados";
    

     $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Falha na conexao: " . $conn->connect_error);
    }
    else {

        if(isset($_POST["pr"]))
        {
            $dado = $_POST["pr"];

            if(!$dado == "")
                $sql = 'Select * from produto where nome LIKE "%'.$dado.'%"';
            else
                $sql = "Select * from produto";
        }
        else
        {
            if(isset($_POST["txtprocurar"]))
            {
                $dado = $_POST["txtprocurar"];
                $sql = 'Select * from produto where nome LIKE "%'.$dado.'%"';
            }
            else
            {

                $sql = "Select * from produto";
            }
        }
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

       echo"<table>
    <tr>
        
        <th >nome</th>
        <th >preco</th>

    </tr>";

            while ($row = $result->fetch_assoc()) {
                
                $nome = $row['nome'];
                $preco = $row['preco'];
 


                echo " <tr>";
               
                echo "<td>" . $nome . "</td>";
                echo "<td>" . $preco . "</td>";
 
                echo "</tr>";


            }
        } else {
          
            echo "<h2>Nenhum produto encontrado!!..</h2>";
        }
        $conn->close();
    }
    ?>
</table>

</section>
<footer>

</footer>
</body>
</html>
