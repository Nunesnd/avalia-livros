<?php 

    require_once("config/db.php");
    require_once("config/globals.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avalia Livros</title>

    <!-- Inserindo o CSS bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.css" integrity="sha512-lp6wLpq/o3UVdgb9txVgXUTsvs0Fj1YfelAbza2Kl/aQHbNnfTYPMLiQRvy3i+3IigMby34mtcvcrh31U50nRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="img/livros/favicon_livro.png" type="image/png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/style.css">

</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?php echo $BASE_URL; ?>" class="navbar-brand">
                <img src="<?php echo $BASE_URL; ?>/img/livros/padrao_livro.png" alt="logo" id="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" method="get" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar livro" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?php echo $BASE_URL; ?>" class="nav-link">Entrar/Cadastrar</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div id="main-container" class="container-fluid">
        <h1>Corpo do site</h1>
    </div>

    <footer id="footer">
        <div id="social-container">
            <ul>
                <li>
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
            </ul>
        </div>
        <div id="footer-links-container">
            <ul>
                <li><a href="#">Adicionar livro</a></li>
                <li><a href="#">Adicionar crítica</a></li>
                <li><a href="#">Entrar / Registrar</a></li>                
            </ul>
        </div>
    </footer>
    <!-- Inserindo o JS bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.js" integrity="sha512-jxHTIcyuk3K/8tFI4UWP/2XfMAnBUL/GCcY0ah39DQfnsG8+YgtAJsOE8fznN+jWqwgLazJMEpmyE9HW1Mmc+A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Inserindo o Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>