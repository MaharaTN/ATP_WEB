<!-- Aluna: Mahara Teixeira Nunes -->
<!-- Matrícula: 1112021103948-->
<!-- Cursando: Análise e Desenvolvimento de Sistemas -->

<?php
if(!isset($_SESSION)) {
    session_start();
}

session_destroy();

header("Location: ../paralogin.php")
?>