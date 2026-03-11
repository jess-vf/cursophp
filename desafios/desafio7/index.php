<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $sal = $_GET["sal"] ?? 0;
            $min = 1621.00;
            $tot = intdiv($sal,$min);
            $resto = $sal % $min; 
        ?>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário (R$)</label>
            <input type="number" name="sal" id="sal" value="" step="0,01">
            <p>Considerando o salário mínimo de <strong>R$ <?= number_format($min,2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            print "Quem recebe um salário de <strong>R\$". number_format($sal,2,",",".")." </strong> ganha <strong>$tot</strong> sálários mínimos + <strong>R\$". number_format($resto,2,",",".")." </strong>";
        ?>
    </section>
</body>
</html>