<?php
        include_once("validar.php");
        $nome = $_SESSION["nome"];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login bem sucedido</title>
    </head>
    <body>
        <?php
        echo "<h3>" . "Bem vindo " . $nome . "</h3>";
        ?>        
    </body>
</html>
