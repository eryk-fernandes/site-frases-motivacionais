<?php
    include("../lib/Database.php");
    include("../models/Usuario.php");

    class UsuarioDAO {

        private Database $db;

        public function __construct() {
            $this -> db = new Database();
        }

        public function criar(Usuario $usuario) {
            $nome = $usuario -> getNome();
            $email = $usuario -> getEmail();
            $senha = $usuario -> getSenha();

            $sql = "
                INSERT INTO usuarios (nome, email, senha)
                VALUES ('{$nome}','{$email}','{$senha}');
            ";

            $this -> db -> conectar();

            $this -> db -> executarQuery($sql);

            $this -> db -> fecharConn();
        }
    }
?>