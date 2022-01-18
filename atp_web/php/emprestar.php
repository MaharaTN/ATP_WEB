<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php

require_once "dbconnect.php";

session_start();

if(isset($_POST['btn-emprestar'])):
    $nome_item = mysqli_escape_string($connect, $_POST["nome_item"]);
    $id_item = mysqli_escape_string($connect,$_POST["id_item"]);
    $id_login = mysqli_escape_string($connect,$_POST["id_login"]);
    $data_emprestimo = mysqli_escape_string($connect,$_POST["data_emprestimo"]);
    $data_devolucao = mysqli_escape_string($connect,$_POST["data_devolucao"]);

    $sql="INSERT INTO emprestimo(id_item,id_login,data_emprestimo,data_devolucao,nome_item) VALUES('$id_item','$id_login','$data_emprestimo','$data_devolucao','$nome_item')";

    if(mysqli_query($connect,$sql)):
        echo "Empréstimo realizado com sucesso";
        header('Location: ../inicio.php');
    else:
        echo"Dados errados, tente novamente!";
        header('Location: ../itens.php');
    endif;
endif;

?>