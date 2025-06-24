<?php

    $pageTitle = "Criar conta";

    include("partials/head.php");
    
    $botaoLink = "login.php";
    $botaoNome = "Log in";

    include("partials/header.php");
?>

<main>
    <section>
        <article>
            <h2>Compartilhe frases motivacionais</h2>
        </article>
        <article class="signup">
            <h2>Criar Conta</h2>
            <form action="index.php" method="post">
                <label>Nome</label><br>
                <input type="text" name="nome" placeholder="Digite seu nome"><br>
                <label>Data de nascimento</label><br>
                <input type="date" name="data_nascimento"><br>
                <label>Email</label><br>
                <input type="email" name="email" placeholder="Digite seu email" ><br>
                <label>Senha</label><br>
                <input type="password" name="senha" placeholder="Digite sua senha"><br>
                <input type="submit" name="log_in" value="Criar conta">
            </form>
            <p>Já tem uma conta? <a href="signup.php">Entre!</a></p>
        </article>
    </section>
</main>

<?php include("partials/footer.php"); ?>