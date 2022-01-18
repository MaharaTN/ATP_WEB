<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php

    require_once "dbconnect.php";

    session_start();

    if(isset($_POST['btn-edit']));
        $nome_cad=mysqli_escape_string($connect, $_POST["nome_cad"] );
        $sobrenome_cad=mysqli_escape_string($connect, $_POST["sobrenome_cad"] );
        $cel_cad=mysqli_escape_string($connect, $_POST["cel_cad"] );
        $rua_cad=mysqli_escape_string($connect, $_POST["rua_cad"] );
        $bairro_cad=mysqli_escape_string($connect, $_POST["bairro_cad"] );
        $email_cad=mysqli_escape_string($connect, $_POST["email_cad"] );
        $password_cad=md5(mysqli_escape_string($connect, $_POST["password_cad"] ));

        $id_login = mysqli_escape_string($connect,$_SESSION['id_login']);

        $sql = "UPDATE logando SET nome_cad ='$nome_cad', sobrenome_cad ='$sobrenome_cad', cel_cad ='$cel_cad', rua_cad ='$rua_cad', bairro_cad ='$bairro_cad',email_cad ='$email_cad',password_cad ='$password_cad' WHERE id_login = '$id_login'";

        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Dado(s) atualizado(s)";
            header('Location:../perfil.php');
        else:
            $_SESSION['mensagem'] = "Erro, tente novamente";
            header('Location:../edit_usuario.php');
        endif;
    

?>