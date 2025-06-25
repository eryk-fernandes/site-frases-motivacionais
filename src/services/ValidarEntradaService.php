<?php

    declare(strict_types=1);

    class ValidarEntradaService {

        public function validarNome(string $nome): string {
            $nome = strlen(trim($nome)) >= 4 ? $nome : null;
            return $nome;
        }

        public function validarEmail(string $email): string {
            return filter_var(trim($email), FILTER_VALIDATE_EMAIL) ? $email : null;
        }

        public function validarSenha($senha): string {
            $senha = strlen(trim($senha)) >= 4 ? $senha : null;
            return $senha;
        }

    }

?>