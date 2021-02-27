<?php 

include('../../connection.php');

$id = $_POST['id'];
$name = $_POST['name'];

$query = mysqli_query($connection, 'UPDATE categories SET name = "'.$name.'" WHERE id = '. $id);

if($query)
    echo '  <script>
                alert("Alteração bem sucedida");
                window.location = "../"
            </script>';
else   
    echo '  <script>
                alert("Alteração mal sucedida");
                window.location = "../"
            </script>';

?>