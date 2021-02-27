<?php 

include('../connection.php');

$query = mysqli_query($connection, 'SELECT * FROM categories');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
            crossorigin="anonymous"
        >

        <title>Categorias</title>
    </head>
    <body>

        <header class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <strong class="navbar-brand">🔥 PHP CRUD</strong>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/crud-php/livros/">Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/crud-php/categorias/">Categorias</a>
                    </li>
                </ul>
            </div>
        </header>

        <div class="container py-5">
            <h1>Categorias</h1>
            <br>
                <a href="create.php" class="btn btn-success col-md-2">Nova +</a>
            <br>
            <br>

            <div class="list-group list-group-vertical-lg">
                <?php 
                    while($categories = mysqli_fetch_assoc($query)) {
                        echo '
                            <a href="./edit.php?id='.$categories['id'].'" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span class="me-2">'.$categories['name'].'</span>
                            </a>';
                    }
                ?>
            </div>
        </div>

    </body>
</html>