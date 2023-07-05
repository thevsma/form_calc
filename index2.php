<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora 2</title>
</head>

<body>
    <header>
        <h2>WebDev2023</h2>
    </header>

    <main>
        <h1>Calculadora 2</h1>

        <form action="calc2.php" method="get">
            <fieldset>
                <legend>Calculadora 2</legend>

                <label for="n1">Número 1</label>
                <input type="number" name="n1" id="n1">
                <br>

                <label for="n2">Número 2</label>
                <input type="number" name="n2" id="n2">
                <br>

                <input type="radio" name="type" id="sum" value="sum">
                <label for="sum">Soma</label>
                <br>

                <input type="radio" name="type" id="sub" value="sub">
                <label for="sub">Subtração</label>
                <br>

                <input type="radio" name="type" id="mult" value="mult">
                <label for="mult">Multiplicação</label>
                <br>

                <input type="radio" name="type" id="div" value="div">
                <label for="div">Divisão</label>
                <br>

                <button type="submit">Calcular</button>
            </fieldset>
        </form>
    </main>
</body>

</html>