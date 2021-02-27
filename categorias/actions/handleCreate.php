<?php 

include('../../connection.php');

$name = $_POST['name'];

$query = mysqli_query($connection, 'INSERT INTO categories VALUES (NULL, "'.$name.'");');

if($query)
    echo '  <script>
                alert("Criação bem sucedida");
                window.location = "../"
            </script>';
else   
    echo '  <script>
                alert("Criação mal sucedida");
                window.location = "../"
            </script>';

?>