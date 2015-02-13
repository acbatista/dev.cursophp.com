<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP com HTML</title>
</head>
<body>
<table>
    <tr>
        <td align="center"><b>Nomes:</b></td>
    </tr>

    <?php
    $nomes = array("Sicrano", "Beltrano", "Fulano","Beer");
    foreach($nomes as $nome):

        echo '<tr>'.'<td>'.$nome.'</td>'.'</tr>';

    endforeach;
    ?>
</table>
</body>
</html>