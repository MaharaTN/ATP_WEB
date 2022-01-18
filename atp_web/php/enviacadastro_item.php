<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php

require_once "dbconnect.php";
if( isset($_POST['btn-enviar'])):
    $nome_item=mysqli_escape_string($connect, $_POST["nome_item"] );
    $type_item=mysqli_escape_string($connect, $_POST["type_item"] );


    $sql="INSERT INTO item(nome_item,type_item) VALUES('$nome_item','$type_item')";


    if(mysqli_query($connect,$sql)):
        echo"<script language='javascript' type='text/javascript'>alert('Item cadastrado com sucesso!');</script>";
        header('Location: ../inicio.php');
    else: 
        echo"<script language='javascript' type='text/javascript'>alert('Erro ao cadastrar!');</script>";
        header('Location: ../cadastro_item.php');
    endif;
endif;

?>