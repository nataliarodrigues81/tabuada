<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>

    <h1 align="center">Tabuada</h1>

    <?php

    // obter os dados e calcular e exibir

    $numero = (int) $_POST['numero'];

    ?>

    <table border="1">

        <thead>
            <tr>
                <th>Operação</th>
                <th>Resultado</th>
            </tr>
        </thead>

        <tbody>

        <?php

        // reabre o php

      /*  for ($i = 1; $i <= 10; $i++) {

            $r = $numero * $i;

            echo "<tr>";
            echo "<td>$numero X $i</td>";
            echo "<td>$r</td>";
            echo "</tr>";
        } */
        $contador=1;
        while ($contador <=10) {
            $r = $numero * $contador;

            echo "<tr>";
            echo "<td>$numero X $contador</td>";
            echo "<td>$r</td>";
            echo "</tr>";

            $contador++;
        }
        ?>
        </tbody>
        <a href="index.html">Voltar</a>
</table>
</body>
</html>