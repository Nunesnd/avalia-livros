<?php 

    class User{

        public $id;
        public $nome;
        public $login;
        public $email;
        public $senha;
        public $foto;
        public $bio;
        public $token;

        public function generateToken(){
            return bin2hex(random_bytes(50));
        }

        public function generatePassword($password){
            return password_hash($password, PASSWORD_DEFAULT);
        }

    }

    interface iUserDAO{

        public function buildUser($data);
        public function create(User $user, $authUser = false);
        public function update(User $user);
        public function verifyToken($protected = false);
        public function setTokenSession($token, $redirect = true);
        public function authenticateUser($email, $senha);
        public function findEmail($email);
        public function findId($id);
        public function findToken($token);
        public function destroyToken();
        public function changePassword(User $user);

    }

?>