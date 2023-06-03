<?php 

    require_once("templates/header.php");

?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <div class="row d-flex justify-content-bet" id="auth-row">
            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                <form action="" method="POST">
                    <input type="hidden" name="type" value="login">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha">
                    </div>
                    <input type="submit" class="btn card-btn" value="Entrar">
                </form>
            </div>
            <div class="col-md-4" id="register-container">
                <h2>Criar conta</h2>
                <form action="" method="post">
                    <input type="hidden" name="type" value="login">
                    <div class="form-group">
                        <label for="nome">Nome: </label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome completo">
                    </div>
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login" class="form-control" placeholder="Escolha um nome de login">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Digite sua senha">
                    </div>
                    <div class="form-group">
                        <label for="confirmaPassword">Confirma Senha</label>
                        <input type="password" name="confirmaPassword" id="confirmaPassword" class="form-control" placeholder="Confirme a senha">
                    </div>
                    <input type="submit" class="btn card-btn" value="Cadastrar">
                </form>
            </div>
        </div>
    </div>
</div>

<?php 

    require_once("templates/footer.php");

?>