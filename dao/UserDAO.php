<?php 

    require_once("models/User.php");

    class UserDAO implements iUserDAO{

        private $conn;
        private $url;

        public function __construct(PDO $conn, $url){
            $this->conn = $conn;
            $this->url = $url;
        }
        
        public function buildUser($data){

            $user = new User();

            $user->id = $data["id"];
            $user->nome = $data["nome"];
            $user->login = $data["login"];
            $user->email = $data["email"];
            $user->senha = $data["senha"];
            $user->foto = $data["foto"];
            $user->bio = $data["bio"];
            $user->token = $data["token"];

            return $user;
        }
        public function create(User $user, $authUser = false){

        }

        public function update(User $user){

        }

        public function verifyToken($protected = false){

        }

        public function setTokenSession($token, $redirect = true){

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

        }

        public function changePassword(User $user){

        }
    
    }
?>