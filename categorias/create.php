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
            <h1>Criar Categoria</h1>
            <br>

            <form class="col-md-4" method="post" action="actions/handleCreate.php">
                <input type="hidden" name="id">
                <input 
                    placeholder="Nome"
                    type="text" 
                    class="form-control" 
                    name="name" 
                    required
                ><br>
                <button type="submit" class="btn btn-success mt-4 col-md-12">Salvar</button>
            </form>
        </div>

    </body>
</html>