<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora 3</title>
</head>

<body>
    <header>
        <h2>WebDev2023</h2>
    </header>

    <main>
        <h1>Calculadora 3</h1>

        <form action="calc3.php" method="get">
            <fieldset>
                <legend>Calculadora 3</legend>

                <label for="n1">Número 1</label>
                <input type="number" name="n1" id="n1">
                <br>

                <label for="n2">Número 2</label>
                <input type="number" name="n2" id="n2">
                <br>

                <input type="checkbox" name="sum" id="sum">
                <label for="sum">Soma</label>
                <br>

                <input type="checkbox" name="sub" id="sub">
                <label for="sub">Subtração</label>
                <br>

                <input type="checkbox" name="mult" id="mult">
                <label for="mult">Multiplicação</label>
                <br>

                <input type="checkbox" name="div" id="div">
                <label for="div">Divisão</label>
                <br>

                <button type="submit">Calcular</button>
            </fieldset>
        </form>
    </main>
</body>

</html>