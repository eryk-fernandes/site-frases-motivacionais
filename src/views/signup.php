<?php

    session_start();

    include("../../lib/database.php");

    $tituloPagina = "Criar conta";

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
            <form action="signup.php" method="post">
                <label>Nome</label><br>
                <input type="text" name="nome" placeholder="Digite seu nome"><br>
                <label>Data de nascimento</label><br>
                <input type="date" name="dataNascimento"><br>
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
                include("../../public/js/mensagem_erro_form.js");
                break;
            }
        }

        if ($campos_digitados) {

            $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);;
            $senha = password_hash(filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS), PASSWORD_DEFAULT);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            $dataNascimento = filter_input(INPUT_POST, "dataNascimento", FILTER_SANITIZE_SPECIAL_CHARS);

            $sql = "
                INSERT INTO usuario (nome, dataNascimento, email, senha)
                VALUES ('$nome','$dataNascimento','$email','$senha');
            ";

            try {
                mysqli_query($conn, $sql);
                include("../../public/js/mensagem_conta_criada.js");
            }
            catch (mysqli_sql_exception) {
                include("../../public/js/mensagem_erro_usuario.js");
            }
        }

    }

    mysqli_close($conn);
?>