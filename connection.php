<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'livraria', );

    if($connection->connect_errno)
        die('Erro na conexão com o BD.');
?>