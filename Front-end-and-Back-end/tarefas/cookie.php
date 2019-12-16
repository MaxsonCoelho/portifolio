<?php session_start(); ?>
<html>
    <head>
        <title>Contatos</title>
    </head>
    <body>

        <form action="">

            <fieldset>
                <legend>Contatos</legend>
                <label for="">
                    Contatos:
                    <input type="text" name="contato">
                </label>
                <input type="submit" value="Salvar">

            </fieldset>
            <table>
                <th>Lista de contatos</th>
            </table>

        </form>

        <?php 

            $lista_contatos = array();
    

            if(isset($_GET['contato'])) {
                $_COOKIE['lista_contatos'][] = $_GET['contato'];
            }

            $lista_contatos = array();

            if(isset($_COOKIE['lista_contatos'])) {
                $lista_contatos = $_COOKIE['lista_contatos'];
            }
        
        ?>

            <table id="contato">
                <tr>
                    <th>Contatos</th>
                </tr>

                <?php foreach($lista_contatos as $contato) { ?>

                    <tr>
                        <td> <?php echo $contato; ?> </td> 
                    </tr>

                <?php } ?>
            
            </table> 
        
    </body>
</html>