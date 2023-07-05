<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            if ($_GET['type'] == "sum") {
                $result = $_GET['n1'] + $_GET['n2'];
                echo "<p>O resultado é $result</p>";
            }
            if ($_GET['type'] == "sub") {
                $result = $_GET['n1'] - $_GET['n2'];
                echo "<p>O resultado é $result</p>";
            }
            if ($_GET['type'] == "mult") {
                $result = $_GET['n1'] * $_GET['n2'];
                echo "<p>O resultado é $result</p>";
            }
            if ($_GET['type'] == "div") {
                $result = $_GET['n1'] / $_GET['n2'];
                echo "<p>O resultado é $result</p>";
            }
        ?>
    </main>
</body>

</html>