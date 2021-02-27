<?php 

include('../../connection.php');

$id = $_POST['id'];
$name = $_POST['name'];
$author = $_POST['author'];
$category_id = $_POST['category_id'];

$query = mysqli_query($connection, 'UPDATE books SET name = "'.$name.'", author = "'.$author.'", category_id = "'.$category_id.'" WHERE id = '. $id);

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