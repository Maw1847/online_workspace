

<?php 
require_once('database.php');

    class Users {
        private $_db;

        public function __construct()
        {
            $inst = new Database();
            $this->_db = $inst->connect();
        }

        public function addUser(string $email, string $nom, string $prenom, string $tel, string $passw, string $username) {

            $sql = "INSERT INTO users (email, nom, prenom, tel, mot_de_passe, username) VALUES (?, ?, ?, ?, ?, ?)";
            $request = $this->_db->prepare($sql);

            $usersdetails = [$email, $nom, $prenom, $tel, $passw, $username];
            $request->execute($usersdetails);
            return $request;
        }

        public function usernameExiste($username) {
            $sql = "SELECT COUNT(*) from users where username = ? ";
            $request = $this->_db->prepare($sql);
            $request->execute($username);
            $val = $request->fetch()[0];
            return $val;
        }

        public function login($username, $passw) {
            $sql = "SELECT username, mot_de_passe from users where username = ? ";
            $request = $this->_db->prepare($sql);
            $request->execute($username);
            return $request;
        }
    }

    


?>