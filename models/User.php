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
        public function changePassword(User $user);

    }

?>