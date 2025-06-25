<?php

    declare(strict_types=1);

    class Database {

        private $host = "localhost";
        private $db = "db-motivacao";
        private $user = "root";
        private $pass = "";
        private $conn;

        public function conectar() {

            try {
                $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
            }
            catch (mysqli_sql_exception) {
                echo "Erro na conexão com o banco de dados";
            }

        }

        public function getConn() {
            return $this->conn;
        }

        public function executarQuery(string $sql) {
            mysqli_query($this -> getConn(), $sql);
        }

        public function fecharConn() {
            mysqli_close($this -> conn);
        }

    }

?>