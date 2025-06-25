<?php
    declare(strict_types=1);
    include("../dao/UsuarioDAO.php");

    class UsuarioController {

        private UsuarioDAO $usuarioDAO;

        public function __construct() {
            $this -> usuarioDAO = new UsuarioDAO();
        }

        public function registrarUsuario($nome, $email, $senha): void {
            $nome = trim($nome);
            $email = trim($email);
            $senha = password_hash(trim($senha), PASSWORD_BCRYPT);

            $usuario = new Usuario();
            $usuario -> setNome($nome);
            $usuario -> setEmail($email);
            $usuario -> setSenha($senha);

            $this -> usuarioDAO -> criar($usuario);
        }

    }

?>
