<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h2>WebDev2023</h2>
    </header>

    <main>
        <h1>Resultado</h1>

        <?php
            $result = 0;

            if (isset($_GET['sum']) == "on") {
                $result = $_GET['n1'] + $_GET['n2'];
                echo "<p>O resultado é $result</p>";
            }
            if (isset($_GET['sub']) == "on") {
                $result = $_GET['n1'] - $_GET['n2'];
                echo "<p>O resultado é $result</p>";
            }
            if (isset($_GET['mult']) == "on") {
                $result = $_GET['n1'] * $_GET['n2'];
                echo "<p>O resultado é $result</p>";
            }
            if (isset($_GET['div']) == "on") {
                $result = $_GET['n1'] / $_GET['n2'];
                echo "<p>O resultado é $result</p>";
            }
        ?>
    </main>
</body>

</html>