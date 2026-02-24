<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $v1 = $_GET['v1'] ?? '';
    $p1 = $_GET['p1'] ?? '';
    $v2 = $_GET['v2'] ?? '';
    $p2 = $_GET['p2'] ?? '';
    $mas = ($v1 + $v2)/2;
    $map = (($v1*$p1) + ($v2*$p2))/($p1 + $p2);
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?= $v1 ?>" step="0,01" required>
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" value="<?= $p1 ?>" step="0,01" required>
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?= $v2 ?>" step="0,01" required>
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" value="<?= $p2 ?>" step="0,01" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
        echo "Analisando os valores de $v1 e $v2:";
        echo "<ul>";
        echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ".number_format($mas,2,",",".").".</li>";
        echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a ". number_format($map,2,",",".").".</li>";
        echo "</ul>";
        ?>
    </section>

<!-- Feito em html:
    <section>
        <h2>Cálculo das Médias</h2>
        <p> Analisando os valores <?= $v1 ?> e <?= $v2 ?>: </p>
        <ul>
            <li> A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= number_format($mas,2,",",".") ?>.</li>
            <li> A <strong>Média Aritmética Ponderada</strong> com pesos <?= $p1 ?> e <?= $p2 ?> é igual a <?= number_format($map,2,",",".") ?>.</li>
        </ul>    
    </section>
-->
</body>
</html>