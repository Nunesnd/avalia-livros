<?php 

    require_once("models/User.php");
    require_once("models/Message.php");

    class UserDAO implements iUserDAO{

        private $conn;
        private $url;
        private $message;

        public function __construct(PDO $conn, $url){
            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message($url);
        }
        
        public function buildUser($data){

            $user = new User();

            $user->id = $data["id"];
            $user->nome = $data["nome"];
            $user->login = $data["login"];
            $user->email = $data["email"];
            $user->senha = $data["senha"];
            $user->foto = $data["foto"];
            if (isset($data["bio"])) {
                $user->bio = $data["bio"];
            }
            $user->token = $data["token"];

            return $user;
        }
        public function create(User $user, $authUser = false){

            $stmt = $this->conn->prepare("INSERT INTO tbl_users(nome, login, email, senha, token) VALUES (:name, :login, :email, :password, :token)");

            $stmt->bindParam(":name", $user->nome);
            $stmt->bindParam(":login", $user->login);
            $stmt->bindParam(":email", $user->email);
            $stmt->bindParam(":password", $user->senha);
            $stmt->bindParam(":token", $user->token);

            $stmt->execute();
           
            if($authUser){
                $this->setTokenSession($user->token);
            }
        }

        public function update(User $user){

        }

        public function verifyToken($protected = false){

            if(!empty($_SESSION["token"])){
                
                $token = $_SESSION["token"];

                $user = $this->findToken($token);

                if($user){
                    return $user;
                }else{
                    //redireciona para a página de login
                    $this->message->setMessage("Perfil não encontrado! Por favor verifique os dados ou cadastre-se.", "error", "../index.php");
                }
            }else{
                return false;
            }

        }

        public function setTokenSession($token, $redirect = true){
            //salvar o token na sessão
            $_SESSION["token"] = $token;

            //redireciona para o perfil do usuário junto de uma mensagem de boas vindas
            if($redirect){
                $this->message->setMessage("Seja bem vindo!", "success", "../editprofile.php");
            }
        }

        public function authenticateUser($email, $password){

        }

        public function findEmail($email){
            if($email != ""){
                $stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE email = :email");
                $stmt->bindParam(":email", $email);
                $stmt->execute();

                if($stmt->rowCount() > 0){

                    $data = $stmt->fetch();
                    $user = $this->buildUser($data);

                    return $user;

                }else{
                    return false;
                }

            }else{
                return false;
            }
        }

        public function findId($id){

        }

        public function findLogin($login){
            if($login != ""){
                $stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE login = :login");
                $stmt->bindParam(":login", $login);
                $stmt->execute();

                if($stmt->rowCount() > 0){

                    $data = $stmt->fetch();
                    $user = $this->buildUser($data);

                    return $user;

                }else{
                    return false;
                }

            }else{
                return false;
            }
        }

        public function findToken($token){
            if($token != ""){
                $stmt = $this->conn->prepare("SELECT * FROM tbl_users WHERE token = :token");
                $stmt->bindParam(":token", $token);
                $stmt->execute();

                if($stmt->rowCount() > 0){

                    $data = $stmt->fetch();
                    $user = $this->buildUser($data);

                    return $user;

                }else{
                    return false;
                }

            }else{
                return false;
            }
        }

        public function destroyToken(){
            //remover o token da sessão
            $_SESSION["token"] = "";

            //redirecionar e apresentar mensagem de logout
            $this->message->setMessage("Logout efetuado com sucesso","sucess","index.php");
        }

        public function changePassword(User $user){

        }
    
    }
?>