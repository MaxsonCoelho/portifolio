<html>
    <head>
        <meta charset="utf-8">
        <title>Gerenciador de tarefas</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        
    </head>
    <body>
        <h1>Gerenciador de tarefas</h1>
        <?php include ('formulario.php'); ?>

        <?php if($exibir_tabela) : ?>
            <?php include ('tabela.php'); ?>
        <?php endif; ?>

    </body>
</html>