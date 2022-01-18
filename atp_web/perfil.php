<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php

#conexão
include_once 'php/dbconnect.php';

#sessão
session_start();

#verificação
if(!isset($_SESSION['logado'])):
    header('Location: paralogin.php');
endif;
#dados
$id= $_SESSION['id_login'];
$sql = "SELECT * FROM logando WHERE id_login = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\perfil.css">
    <link rel="shortcut icon" href="armazem.ico.ico" type="image/x-icon">
    <title>Perfil</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <div class="container">
        <div class="title">
            <div class="table-wrapper">
                <h1>Perfil</h1>
                    <p>Olá <?php echo $dados['nome_cad'];?></p>

                    <table class="fl-table">
                        <thead>
                        <tr>
                            <th>Nome:</th>
                            <th>Sobrenome:</th>
                            <th>Celular:</th>
                            <th>Rua:</th>
                            <th>Bairro:</th>
                            <th>E-mail:</th>
                        </tr>
                        </thead>
                        <?php
                        $sql =  "SELECT nome_cad,sobrenome_cad,cel_cad,rua_cad,bairro_cad,email_cad,password_cad FROM logando";
                        $resultado = mysqli_query($connect,$sql);
                        while($dados = mysqli_fetch_array($resultado)): 
                        ?>
                        <tbody>
                        <tr>
                            <td><?php echo $dados['nome_cad']?></td>
                            <td><?php echo $dados['sobrenome_cad']?></td>
                            <td><?php echo $dados['cel_cad']?></td>
                            <td><?php echo $dados['rua_cad']?></td>
                            <td><?php echo $dados['bairro_cad']?></td>
                            <td><?php echo $dados['email_cad']?></td>
                        </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
                    <br>
                        <button type="button" class="button-33" role="button"><a href="edit_usuario.php"> Editar Conta</a></button>
                        <button type="button" class="button-33" role="button"><a href="inicio.php"> Voltar Inicio</a></button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>