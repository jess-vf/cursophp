<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET["num"];
        $rq = sqrt($num); 
        $rc = $num ** (1/3); // raiz quadrada tem comando, mas a cúbica não, então coloca em forma de potência, ex raiz quadrada ** (1/2) 
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num">Número</label>
        <input type="number" name="num" id="num" step="0,01">    
        <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "Analisando o <strong>número $num</strong>, temos:";
            echo "<ul>";
            echo "<li> A sua raiz quadrada é <strong>". number_format($rq,2,",",".")."</strong></li>";
            echo "<li> A sua raiz cúbica é <strong>".number_format($rc,2,",",".")."</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>