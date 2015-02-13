<?php
if(isset($_POST['enviar'])):
    echo $_POST['nome'];
endif;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP com HTML - Formulario</title>
</head>
<body>
<table>
    <form action="" method="post">
        <tr>
            <td>Nomes:</td>
            <td><input type="text" name="nome"/></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="enviar" value="ok"/>
            </td>
        </tr>
    </form>
</table>
</body>
</html>