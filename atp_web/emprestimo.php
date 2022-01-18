<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'atp_web';

$connect = mysqli_connect($servername, $username, $password, $db_name);


session_start();

$data_atual = date( 'Y-M-D');
$data_atualT = strtotime($data_atual);


    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);

        $sql = "SELECT * FROM item WHERE id_item ='$id'";

        $resultado = mysqli_query($connect, $sql);

        $dados = mysqli_fetch_array($resultado);
    endif;
        if(isset($_SESSION['id_login'])):
            $id_login = mysqli_escape_string($connect, $_SESSION['id_login']);

            $sql_user = "SELECT * FROM logando WHERE id_login = '$id_login'";

            $resultado_user = mysqli_query($connect,$sql_user);

            $dados_user = mysqli_fetch_array($resultado_user);
        endif;
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\emprestimo.css">
    <link rel="shortcut icon" href="armazem.ico.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Empréstimo</title>
</head>
<body>
<div class="container">
            <form method="post" action="php/emprestar.php">
                
                <h1>Emprestar</h1>
                    <div class="emprestar">
                        <p>
                            <label for="id_login">ID do usuário</label>
                            <input name="id_login" required="required" type="text" value="<?php echo $dados_user['id_login']; ?>">
                        </p>
                        <p>
                            <label for="id_item">ID do item</label>
                            <input name="id_item" required="required" type="text" value="<?php echo $dados['id_item']; ?>" >
                        </p>

                        <p>
                            <label for="nome_item">Nome do item</label>
                            <input name="nome_item" type="text" value="<?php echo $dados['nome_item']; ?>" >
                        </p>

                        <p>
                            <label for="data_emprestimo">Data do empréstimo</label>
                            <input name="data_emprestimo" required="required" type="date" placeholder="YYYY/MM/DD">
                        </p>

                        <p>
                            <label for="data_devolucao">Data da devolução</label>
                            <input name="data_devolucao" required="required" type="date" placeholder="YYYY/MM/DD">
                        </p>

                        <p>
                            <input type="submit" value="Emprestar" name="btn-emprestar">
                            <button class="button-33"><a href="inicio.php">Voltar para início</a></button>
                        </p>

                    </div>
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>