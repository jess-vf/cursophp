<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $nasc = $_GET['nasc'];
    $ano = $_GET['ano'] ?? $atual;
    $idade = $ano - $nasc;
    $atual = date('Y'); 
    
    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="nasc" max="<?= $atual ?>" value="<?= $nasc ?>">
            <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <?= $atual ?>)</label>
            <input type="number" name="ano" id="ano" value="<?= $ano ?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $nasc ?> vai ter <strong><?= $idade ?> anos</strong> em <?= $ano ?>!</p>
    </section>
</body>
</html>