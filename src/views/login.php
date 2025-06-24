<?php

    $pageTitle = "Log in";

    include("partials/head.php");
    
?>

<header>
    <h1>MotivAção</h1>
    <div>
        <a href="sobre.php">Sobre</a>
        <a href="https://github.com/eryk-fernandes/site-motivacao">Código do site</a>
        <a class="signup" href="signup.php">Sign up</a>
    </div>
</header>
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
        </article>
    </section>
</main>

<?php include("partials/footer.php"); ?>