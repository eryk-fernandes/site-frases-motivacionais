<?php

    $pageTitle = "Log in";

    include("partials/head.php");

    $botaoLink = "signup.php";
    $botaoNome = "Sign up";

    include("partials/header.php");
    
?>

<main>
    <section>
        <article>
            <h2>Compartilhe frases motivacionais</h2>
        </article>
        <article class="login">
            <h2>Log in</h2>
            <form action="index.php" method="post">
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

<?php include("partials/footer.php"); ?>