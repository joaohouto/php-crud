<?php 

include('../connection.php');

$query = mysqli_query($connection, 'SELECT * FROM books');

function getCategoryName($connection, $id) {
	$query = mysqli_query($connection, "SELECT name FROM categories WHERE id =".$id);
	$name = $query->fetch_array()[0] ?? '';
	return $name;
}

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

        <title>Livros</title>
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
            <h1>Livros</h1>
            <br>
                <a href="create.php" class="btn btn-success col-md-2">Novo +</a>
            <br>
            <br>

            <div class="list-group list-group-vertical-lg">
                <?php 
                    while($books = mysqli_fetch_assoc($query)) {
                        echo '
                            <a href="./edit.php?id='.$books['id'].'" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div>
                                    <strong class="me-2">'.$books['name'].'</strong>
                                    '.$books['author'].'
                                </div>
                                <span class="badge bg-secondary rounded-pill">'.getCategoryName($connection, $books['category_id']).'</span>
                            </a>';
                    }
                ?>
            </div>
        </div>

    </body>
</html>