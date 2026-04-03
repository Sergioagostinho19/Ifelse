<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora IRPF 2026</title>
</head>

<body>

    <div class="caixa">

        <h1>Calculadora IRFP 2026</h1>

        <form method="POST">
            <label for="salario"></label>

            <input type="number" id="salario" placeholder="Insira seu salário..." step="0.001" name="salario" autofocus required>
        </form>
        <div class="salario">

            <?php


            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                if (isset($_POST["salario"])) {

                    $salario = $_POST["salario"];
                }
            }

            if (isset($salario)) {


                if ($salario <= 2259.20) {
                    echo "<br> A alíquota é 0%. A parcela deduzida do IR é R$0,00";
                } else if ($salario > 2259.20 && $salario <= 2826.65) {
                    echo "<br> A alíquota é 7,5%. A parcela deduzida do IR é R$169,44";
                } else if ($salario > 2826.65 && $salario <= 3751.05) {
                    echo "<br> A alíquota é 15%. A parcela deduzida do IR é R$381,44";
                } else if ($salario > 3751.05 && $salario <= 4664.68) {
                    echo "<br> A alíquota é 22,5%. A parcela deduzida do IR é R$662,77";
                } else if ($salario > 4664.68) {
                    echo "<br> A alíquota é 27,5%. A parcela deduzida do IR é R$896";
                }
            }

            ?>


        </div>
    </div>


</body>


</html>