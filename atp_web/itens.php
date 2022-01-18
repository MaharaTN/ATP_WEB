<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'atp_web';

$connect = mysqli_connect($servername, $username, $password, $db_name);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\itens.css">
    <link rel="shortcut icon" href="armazem.ico.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Itens</title>
</head>
<body>
        <div class="container">
            <div class="title">
                <h1>Itens</h1>
                    <div class="table-wrapper">
                        <table class="fl-table">
                            <thead>
                                <tr>
                                    <th>Nome:<br></th>
                                    <th>Tipo:</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM item";
                                $resultado = mysqli_query($connect, $sql);
                                while($dados = mysqli_fetch_array($resultado)):
                                ?>
                                <tr>
                                    <td><?php echo $dados['nome_item']?></td>
                                    <td><?php echo $dados ['type_item']?></td>
                                    <td> <button class="button-33"><a href="emprestimo.php?id=<?php echo $dados['id_item']; ?>"> Emprestar </button></a></td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                        <br>
                        <button class="button-33"><a href="cadastro_item.php">Adicionar Item</a></button>
                        <button class="button-33"><a href="inicio.php">Voltar para início</a></button>
                    </div>
            </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
