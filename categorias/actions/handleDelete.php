<?php 

include('../../connection.php');

$id = $_POST['id'];

$query = mysqli_query($connection, 'DELETE FROM categories WHERE id = '. $id);

if($query)
    echo '  <script>
                alert("Exclusão bem sucedida");
                window.location = "../"
            </script>';
else   
    echo '  <script>
                alert("Exclusão mal sucedida");
                window.location = "../"
            </script>';

?>