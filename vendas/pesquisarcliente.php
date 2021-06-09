<?php
include_once "conexao.php";

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
            <a href="index1.php"><li>inicio</li></a>
            <a href="Cadastrocliente.php"><li> Cliente</li></a>
            <a href="cadastraproduto.php"><li>Produtor</li></a>
            <a href="cadastravenda.php"><li>Venda</li></a>
        </ul>
    </nav>
</header>
<section class="menu2">
        <a href="Cadastrocliente.php">Cadastrar</a> <a href=" pesquisarcliente.php">lista</a><a href="excluircliente.php">excluir</a>
       <a href="Atualizarcliente.php">atualizar</a><br>
</section>
         <br><br>
            >

       
    <form method="post">
        <input type="search" name="txtprocurar" placeholder="Procure por Clientes">
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
                $sql = 'Select * from usuario where nome LIKE "%'.$dado.'%"';
            else
                $sql = "Select * from usuario";
        }
        else
        {
            if(isset($_POST["txtprocurar"]))
            {
                $dado = $_POST["txtprocurar"];
                $sql = 'Select * from usuario where nome LIKE "%'.$dado.'%"';
            }
            else
            {

                $sql = "Select * from usuario";
            }
        }
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

       echo"<table>
    <tr>
        
        <th >nome</th>
        <th >cpf</th>

    </tr>";

            while ($row = $result->fetch_assoc()) {
                
                $nome = $row['nome'];
                $cpf = $row['cpf'];
 


                echo " <tr>";
               
                echo "<td>" . $nome . "</td>";
                echo "<td>" . $cpf . "</td>";
 
                echo "</tr>";


            }
        } else {
          
            echo "<h2>Nenhum cliente encontrado!!..</h2>";
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
