<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php
require_once "dbconnect.php";
// sessão
session_start();

//botão enviar
if(isset($_POST['btn-entrar'])):
    $erro = array();
    $email_cad = mysqli_escape_string($connect,$_POST['email_cad']);
    $password_cad =mysqli_escape_string($connect,$_POST['password_cad']);

    if(empty($email_cad) or empty($password_cad)):
        $erro[] = "<li> Os campos precisam ser preenchidos </li>";
    else:
        $sql = "SELECT email_cad FROM logando WHERE email_cad = '$email_cad'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
            $password_cad = md5($password_cad);
            $sql = "SELECT * FROM logando WHERE email_cad = '$email_cad' AND password_cad = '$password_cad'";
            $resultado = mysqli_query($connect, $sql);
        else:
            $erro[] = "<li> Usuário inexistente</li>";
        endif;

            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                $_SESSION['logado'] = true;
                $_SESSION['id_login'] = $dados['id_login'];
                header('Location:../inicio.php');
            else:
                $erro[] = "<li> Dados incorretos</li>";
            endif;
    endif;
endif;

?>