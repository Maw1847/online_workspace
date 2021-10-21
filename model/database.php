
<?php 

class Database {

    private $_db;

    public function connect()
    {
        $dsn = "mysql:host=localhost;dbname=online_workspace";
        $username = "root";
        $passw = "packchiefasthomasSHELBY7";

        $this->_db = new PDO($dsn, $username, $passw);

        return $this->_db;
    }
}

?>