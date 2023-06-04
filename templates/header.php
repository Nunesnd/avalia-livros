<?php 

    require_once("config/db.php");
    require_once("config/globals.php");
    require_once("models/User.php");
    require_once("dao/UserDAO.php");

    $message = new Message($BASE_URL);

    $flassMessage = $message->getMessage();

    if(!empty($flassMessage["msg"])){
        $message->clearMessage();
    }

    $userDao = new UserDAO($conn, $BASE_URL);
    $userData = $userDao->verifyToken(false);

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
            <a href="<?php echo $BASE_URL; ?>/index.php" class="navbar-brand">
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
                    <?php if($userData):?>

                    <li class="nav-item">
                        <a href="<?php echo $BASE_URL; ?>/novo_livro.php" class="nav-link">
                            <i class="far fa-plus-square"></i>
                            Novo livro
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $BASE_URL; ?>/painel.php" class="nav-link">Painel</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo $BASE_URL; ?>/editprofile.php" class="nav-link">
                            <?= $userData->login ?>
                        </a>
                    </li>
                    <li class="nav-item naveg-fim">
                        <a href="<?php echo $BASE_URL; ?>/logout.php" class="nav-link">Sair</a>
                    </li>
                    
                    <?php else:?>
                        <li class="nav-item naveg-fim">
                            <a href="<?php echo $BASE_URL; ?>/auth.php" class="nav-link">Entrar/Cadastrar</a>
                        </li>
                    <?php endif;?>

                </ul>
            </div>
        </nav>
    </header>

<?php if(!empty($flassMessage["msg"])): ?>
    <div class="msg-container">
        <p class="msg <?= $flassMessage["type"] ?>"><?= $flassMessage["msg"] ?></p>
    </div>
<?php endif; ?>
