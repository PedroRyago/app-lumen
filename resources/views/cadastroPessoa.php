<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if (isset($errors) && count($errors) > 0) {
            echo "<ul>";
            foreach ($errors->all() as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
        }
    ?>

    <form method="POST" action="/pessoas">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" maxlength="11">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>