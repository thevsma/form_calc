<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadoras</title>
</head>

<body>
    <header>
        <h2>WebDev2023</h2>
    </header>

    <main>
        <h1>Calculadoras</h1>

        <?php
            $calcs = [
                "index1.php" => "Calculadora 1",
                "index2.php" => "Calculadora 2",
                "index3.php" => "Calculadora 3",
                "index4.php" => "Calculadora 4"
            ]
        ?>

        <ul>
            <?php
                foreach ($calcs as $key => $value) {
                    echo "<li><a href=\"$key\">$value</a></li>\n";
                }
            ?>
        </ul>
    </main>
</body>

</html>