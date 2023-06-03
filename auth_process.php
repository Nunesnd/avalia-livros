<?php 

    require_once("config/db.php");
    require_once("config/globals.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("dao/UserDAO.php");

    $userDao = new UserDAO($conn, $BASE_URL);

    //identifica o tipo de formulário
    $type = filter_input(INPUT_POST, "type");

    //condiciona se autentica ou cria novo usuário
    if($type === "register"){

        $name = filter_input(INPUT_POST, "nome");
        $login = filter_input(INPUT_POST, "login");
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "senha");
        $confirmaPassword = filter_input(INPUT_POST, "confirmaPassword");

        if($name && $login && $email && $password){

            //verificando se o email já esta cadastrado
            if($userDao->findEmail($email) === false){

                if($userDao->findLogin($login) === false){

                    echo "ESTOU AQUI";

                }else{
                    $message->setMessage("Login já está cadastrado", "error", "back");
                }               

            }else{
                $message->setMessage("E-mail já cadastrado", "error", "back");
            }

        } 
    
    }else if($type === "login"){

        echo "FEZ O LOGIN";
    }

?>