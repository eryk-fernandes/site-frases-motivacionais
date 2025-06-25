<?php

    $tituloPagina = "Log in";

    include("partials/head.php");

    $botaoLink = "signup.php";
    $botaoNome = "Sign up";

    include("partials/header.php");

?>

<main>
    <section class="login-signup-section">
        <article>
            <h2>Compartilhe frases motivacionais</h2>
        </article>
        <article class="login">
            <h2>Log in</h2>
            <form action="login.php" method="post">
                <label>Email</label><br>
                <input type="email" name="email" placeholder="Digite seu email" ><br>
                <label>Senha</label><br>
                <input type="password" name="password" placeholder="Digite sua senha"><br>
                <input type="submit" name="log_in" value="Log In">
            </form>
            <p>Não tem uma conta? <a href="signup.php">Criar conta!</a></p>
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
    }

?>