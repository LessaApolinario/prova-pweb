<?php
$usuarios = $_REQUEST["usuarios"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>senha</th>
            </tr>
        </thead>

        <tbody>
            <?php
            if (isset($usuarios)) {
                foreach ($usuarios as $usuario) {
                    echo "<tr>";
                    echo "<td>" . $usuario["id"] . "</td>";
                    echo "<td>" . $usuario["username"] . "</td>";
                    echo "<td>" . $usuario["senha"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>

        </tbody>
    </table>
</body>

</html>