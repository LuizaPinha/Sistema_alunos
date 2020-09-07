<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar alunos por RA</title>
</head>
<body>
    <?php
        if(empty($_POST)){
            include 'form.inc';
        }
        else{
            $ra = $_POST["ra"];
            include('cabecalho_conexao.php');

            $SQL = "SELECT * FROM pessoas WHERE id= $ra";

            // Executa o comando SQL
            $dados_recuperados = mysqli_query($con, $SQL);

            if(mysqli_num_rows($dados_recuperados) > 0){
                
                while( ($resultado = mysqli_fetch_($dados_recuperados)) != null) {
                    
                    echo $resultado[0] . " -" . $resultado[1] . " - " . $resultado[2] . "<br>";
                    echo '<a href="menu.php">Voltar</a>';
                }		
            }
            else{
                echo"Este aluno não consta no banco de dados!";
            }

            mysqli_close($con);
        }
        
    ?>
</body>
</html>
