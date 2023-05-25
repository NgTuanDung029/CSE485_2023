<?php
    require_once('../app/config/config.php');
    class Database 
    {
        private $host;
        private $username;
        private $password;
        private $conn;
        private $dbname;
        public $error;

        public function __construct()
        {
            $this->host = DB_HOST;
            $this->username = DB_USER;
            $this->password = DB_PASS;
            $this->dbname = DB_NAME;
            try
            {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}",$this->username,$this->password);
            }
            catch (PDOException $e)
            {
                $this->conn = null;
            }
        }

        public function getConnection()
        {
            return $this->conn;
        }

        public function executeQuery($query, $params = [])
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                return $stmt;
            }
            catch (PDOException $e)
            {
                echo "Query failed: ". $e->getMessage();
            }
        }
    }
?>