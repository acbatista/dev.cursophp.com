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
            $nomes = array("Sicrano", "Beltrano", "Fulano");
            foreach($nomes as $nome):
        ?>
        <tr>
            <td><?php echo $nome?></td>
        </tr>
        <?php
            endforeach;
        ?>
    </table>
</body>
</html>