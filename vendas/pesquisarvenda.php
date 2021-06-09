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
            <a href="venda.php"><li>Venda</li></a>
        </ul>
    </nav>
</header>
<section class="menu2">
<a href="venda.php">realizar venda</a><a href="pesquisarvenda.php">lista</a><a href="excluirvenda.php">excluir</a><a href="atualizarvenda.php">atualizar</a><br>
</section>
     	
       
    <form method="post">
        <input type="search" name="txtprocurar" placeholder="Procure">
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
            $sql = 'Select * from venda where data LIKE "%'.$dado.'%"';
            else

                $sql = "Select * from venda";
        }
        else
        {
            if(isset($_POST["txtprocurar"]))
            {
                $dado = $_POST["txtprocurar"];
                $sql = 'Select * from venda where data LIKE "%'.$dado.'%"';
            }
            else
            {

                $sql = "Select * from venda";
            }
        }
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {

       echo"<table>
    <tr>
        
        <th >idusuario</th>
        <th >data</th>
        <th >preco</th>
        <th >idvenda</th>
    </tr>";

            while ($row = $result->fetch_assoc()) {
                
                $idusuario = $row['idusuario'];
                $data = $row['data'];
                $preco = $row['preco'];
                $idvenda = $row['idvenda'];
                echo " <tr>";
               
                echo "<td>" . $idusuario . "</td>";
                echo "<td>" . $data . "</td>";
                echo "<td>" . $preco . "</td>";
                echo "<td>" . $idvenda . "</td>";

                echo "</tr>";


            }
        } else {
          
            echo "<h2>Nenhum venda encontrado!!..</h2>";
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
