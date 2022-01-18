<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php

    session_start();
    require_once "dbconnect.php";


    if(isset($_POST['btn-devolver'])):
        
        $id_emprestimo = mysqli_escape_string ($connect, $_POST['devolver']);

        $sql = "DELETE FROM emprestimo WHERE id_emprestimo = $id_emprestimo";

        if(mysqli_query($connect, $sql)):
            header("Location:../inicio.php");
        else:
            header("Location: ../perfil.php");
        endif;

    endif;

?>