<?php
    include 'conexao.php';
    echo "Hello Git!";
?>

<form action="index.php" method="GET">
    <fildset>
        <legend>Cadastro de Cliente</legend>
        <label for="nome">Nome</label> 
        <input type="text" name="nome" id="nome">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha">

        <label for="email">E-mail</label> 
        <input type="text" name="email" id="email">

        <input type="submit" name="" value="">
    </fildset>
</form>