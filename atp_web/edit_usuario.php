<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'atp_web';

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Erro na conexão: ". mysqli_connect_error();
endif;

session_start();

$id_login = $_SESSION['id_login'];
$sql = "SELECT * FROM logando WHERE id_login = '$id_login'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);

?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\edit_user.css">
    <link rel="shortcut icon" href="armazem.ico.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Editando Perfil</title>
    </head>
    <body>
    <div class="container">
        <a class="cadastro" id="paracadastro.html"></a>
            <div id="idcadastro">
                <form method="post" action="php/edit.php" class="form_edit"> 
                    <h1>Editar Dados</h1>
                        <div class="edit">
                            <p>
                                <label for="nome_cad">Novo nome</label>
                                <input name="nome_cad" required value="<?php echo $dados['nome_cad'];?>" type="text" placeholder="Otávio">
                            </p>
                            <p>
                                <label for="sobrenome_cad">Novo sobrenome</label>
                                <input name="sobrenome_cad" required value="<?php echo $dados['sobrenome_cad'];?>" type="text" placeholder="De Oliveira">
                            </p>

                            </p>
                            <p>
                                <label for="cel_cad">Novo celular</label>
                                <input name="cel_cad" required value="<?php echo $dados['cel_cad'];?>" type="tel" placeholder="41988772112">
                            </p>
                            <p>
                                <label for="rua_cad">Nova rua</label>
                                <input name="rua_cad" required value="<?php echo $dados['rua_cad'];?>" type="text" placeholder="Francisco Derosso" >
                            </p>
                            <p>
                                <label for="bairro_cad">Novo bairro</label>
                                <input name="bairro_cad" required value="<?php echo $dados['bairro_cad'];?>" type="text" placeholder="Xaxim">
                            </p>
                            <p>
                                <label for="email_cad">Seu novo e-mail</label>
                                <input name="email_cad" required value="<?php echo $dados['email_cad'];?>" type="email" placeholder="contato@gmail.com">
                            </p>
                            <p>
                                <label for="password_cad">Digite nova senha</label>
                                <input name="password_cad" required value="<?php echo $dados['password_cad'];?>" type="password">
                            </p>
                            
                            <p>
                                <button class="button-33" type="submit" value="entrar" name="btn-edit">Editar Perfil</button>
                                <button type="button" class="button-33" role="button"><a href="inicio.php"> Voltar Inicio</a></button>
                            </p>
                        </div>
                </form>
            </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
    </html>