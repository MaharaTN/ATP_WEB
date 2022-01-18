<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php

require_once "dbconnect.php";
if( isset($_POST['btn-enviar'])):
    $nome_cad=mysqli_escape_string($connect, $_POST["nome_cad"] );
    $sobrenome_cad=mysqli_escape_string($connect, $_POST["sobrenome_cad"] );
    $cpf_cad=mysqli_escape_string($connect, $_POST["cpf_cad"] );
    $dtnasc_cad=mysqli_escape_string($connect, $_POST["dtnasc_cad"] );
    $cel_cad=mysqli_escape_string($connect, $_POST["cel_cad"] );
    $rua_cad=mysqli_escape_string($connect, $_POST["rua_cad"] );
    $bairro_cad=mysqli_escape_string($connect, $_POST["bairro_cad"] );
    $email_cad=mysqli_escape_string($connect, $_POST["email_cad"] );
    $password_cad=md5(mysqli_escape_string($connect, $_POST["password_cad"] ));

    $sql="INSERT INTO logando(nome_cad,sobrenome_cad,cpf_cad,dtnasc_cad,cel_cad,rua_cad,bairro_cad,email_cad,password_cad) VALUES('$nome_cad','$sobrenome_cad','$cpf_cad','$dtnasc_cad','$cel_cad','$rua_cad','$bairro_cad','$email_cad','$password_cad')";


    if(mysqli_query($connect,$sql)):
        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');</script>";
        header('Location: ../paralogin.php');
    else: 
        echo"<script language='javascript' type='text/javascript'>alert('Erro ao cadastrar!');</script>";
        header('Location: ../paracadastro.php');
    endif;
endif;

?>