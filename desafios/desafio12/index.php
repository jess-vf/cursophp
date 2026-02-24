<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //1 semana = 604.800s / 10.080min / 168h / 7 dias
        //1 dia = 86400s / 1.440min / 24h
        //1 hora = 3600s / 60min
        //1 min = 60s

        $num = $_GET['num'] ?? '0';
        $resto = $num;
    
        $sem = intdiv($num,604800); 
        $resto = $resto%604800;

        $dia = intdiv($resto,86400);
        $resto = $resto%86400;

        $hor = intdiv($resto,3600); 
        $resto = $resto%3600;

        $min = intdiv($resto,60); 
        $resto = $resto%60;
        
        $seg = $resto;

    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="num">Qual é o total de segundos?</label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong> <?=number_format($num,0,",",".")?> segundos</strong> equivalem a um total de: </p>
        <ul>
            <li> <?=$sem?> semanas</li>
            <li><?= $dia?> dias</li>
            <li><?=$hor?> horas</li>
            <li><?=$min?> minutos</li>
            <li><?=$seg?> segundos</li>
        </ul>
    </section>
</body>
</html>