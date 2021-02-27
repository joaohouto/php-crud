<?php 

include('../../connection.php');

$name = $_POST['name'];
$author = $_POST['author'];
$category_id = $_POST['category_id'];

$query = mysqli_query($connection, 'INSERT INTO books VALUES (NULL, "'.$name.'", "'.$author.'", "'.$category_id.'");');

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