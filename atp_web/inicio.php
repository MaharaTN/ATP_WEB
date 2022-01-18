<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php

#conexão
require_once 'php\dbconnect.php';

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
<!-- início  html -->
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="armazem.ico.ico" type="image/x-icon">
<title>Me Empresta?</title>
<link rel="stylesheet" href="css\menu.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<main class="fundo">
<header>
    <nav><!-- nav para conseguir gerar a barra de navegação -->
        <a class="logo" href="inicio.php">Me Empresta?</a>
        <ul class="nav-list">
            <li><a href="perfil.php"target="_black">Perfil</a></li>                
            <li><a href="itens.php"target="_black">Itens</a></li>
            <li><a href="php\logout.php">Sair</a></li>
        </ul>
    <h2>Olá, <?php echo $dados['nome_cad']; ?> </h2>
    </nav>
</header>

    <div class="container"><!-- Gerar a tabela com as informações de empréstimo -->
        <div class="table-wrapper">
            <h1>Empréstimos feitos</h1>
                <table class="fl-table">
                        <thead>
                            <tr>
                                <th>Nome do item:</th>
                                <th>Data do empréstimo:<br></th>
                                <th>Data da devolução:</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php
                            $sql1 = "SELECT nome_item, data_devolucao, data_emprestimo, id_emprestimo FROM item INNER JOIN emprestimo";

                        $sql = "SELECT * FROM emprestimo";
                        $resultado = mysqli_query($connect, $sql);
                        while($dados = mysqli_fetch_array($resultado)):
                        ?>
                        <tr>
                            <td><?php echo $dados['nome_item']?></td>
                            <td><?php echo $dados ['data_emprestimo']?></td>
                            <td><?php echo $dados ['data_devolucao']?></td>
                            <?php
                            $data_atual = date('Y-m-d');
                            $data_atualT = strtotime($data_atual);
                            $data_devol = $dados['data_devolucao'];
                            $data_devolT = strtotime($data_devol);
                            if($data_atualT > $data_devolT){
                                echo "<td style='color:red'>", $data_devol,"</td>";
                            }else{
                                echo "<td>",$data_devol,"</td>";
                            }
                        ?>
                            <td> <form action="php/devolucao.php" method="post">
                                    <input type="hidden" name="devolver" value="<?php echo $dados['id_emprestimo'] ?>">
                                    <input type="submit" name="btn-devolver" value="Devolver">
                                </form>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                    </table>
            </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>