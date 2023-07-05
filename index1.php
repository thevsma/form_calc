<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora</title>
</head>

<body>
    <header>
        <h2>WebDev2023</h2>
    </header>

    <main>
        <h1>Calculadora</h1>

        <form action="calc1.php" method="get">
            <fieldset>
                <legend>Calculadora</legend>

                <label for="n1">Número 1</label>
                <input type="number" name="n1" id="n1">
                <br>

                <label for="n2">Número 2</label>
                <input type="number" name="n2" id="n2">
                <br><br>

                <select name="type" id="t">
                    <option value="sum">Soma</option>
                    <option value="sub">Subtração</option>
                    <option value="mult">Multiplicação</option>
                    <option value="div">Divisão</option>
                </select>
                <br><br>

                <button type="submit">Calcular</button>
            </fieldset>
        </form>
    </main>
</body>

</html>