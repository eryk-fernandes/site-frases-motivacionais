<?php

    $tituloPagina = "Criar conta";

    include("partials/head.php");
    
    $botaoLink = "login.php";
    $botaoNome = "Log in";

    include("partials/header.php");
?>

<main>
    <section class="login-signup-section">
        <article>
            <h2>Compartilhe frases motivacionais</h2>
        </article>
        <article class="signup">
            <h2>Criar Conta</h2>
            <form action="signup.php" method="post">
                <label>Nome</label><br>
                <input type="text" name="nome" placeholder="Digite seu nome"><br>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="Digite seu email" ><br>
                <label>Senha</label><br>
                <input type="password" name="senha" placeholder="Digite sua senha"><br>
                <input type="submit" name="log_in" value="Criar conta">
            </form>
            <p>Já tem uma conta? <a href="login.php">Entre!</a></p>
        </article>
    </section>
</main>

<?php

    include("partials/footer.php");

    if (!empty($_POST)) {

        $campos_digitados = true;

        foreach ($_POST as $campo) {
            if (empty($campo)) {
                $campos_digitados = false;
                include("../../public/js/msg_erro_form.js");
                break;
            }
        }

        if ($campos_digitados) {

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            include("../controllers/UsuarioController.php");

            $usuarioController = new UsuarioController();

            $usuarioController -> registrarUsuario($nome, $email, $senha);
        }

    }
?>