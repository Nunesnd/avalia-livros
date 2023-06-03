<?php 

    require_once("templates/header.php");

?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <div class="row d-flex justify-content-bet" id="auth-row">
            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                <form action="<?php echo $BASE_URL; ?>/auth_process.php" method="POST">
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
                <form action="<?php echo $BASE_URL; ?>/auth_process.php" method="post">
                    <input type="hidden" name="type" value="register">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome completo" required oninvalid="this.setCustomValidity('Por favor, preencha seu nome.')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login" class="form-control" placeholder="Escolha um nome de login" required oninvalid="this.setCustomValidity('Por favor, escolha um login.')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Digite seu email" required oninvalid="this.setCustomValidity('Por favor, informe seu email')" oninput="this.setCustomValidity('')">                        
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" required oninvalid="this.setCustomValidity('Defina uma senha')" oninput="this.setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="confirmaPassword">Confirma Senha</label>
                        <input type="password" name="confirmaPassword" id="confirmaPassword" class="form-control" placeholder="Confirme a senha" required oninvalid="this.setCustomValidity('Por favor, confirme sua senha')" oninput="this.setCustomValidity('')">                        
                    </div>
                    <input type="submit" class="btn card-btn" value="Cadastrar">
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    
    const passwordField = document.getElementById("senha");
    const confirmPasswordField = document.getElementById("confirmaPassword");

    confirmPasswordField.addEventListener("blur", () => {

        const passwordValue = passwordField.value;
        const confirmPasswordValue = confirmPasswordField.value;

        if (passwordValue != confirmPasswordValue) {
            alert("As senhas não correspondem. Por favor, tente novamente.");
            confirmPasswordField.value = "";
        }
    });

</script>

<?php 

    require_once("templates/footer.php");

?>