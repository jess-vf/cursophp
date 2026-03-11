<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
           $numero = $_GET["numero"] ?? 0; 
           $antecessor = $numero - 1;
           $sucessor = $numero + 1;
           echo "O número escolhido foi $numero <br>";
           echo "O seu antecessor é $antecessor <br>";
           echo "O seu sucessor é $sucessor";
        ?>
        <button onclick="javascript:window.location.href='index.html'">&#x2B05; Voltar</button>
    <!-- ou 
        <button onclick="javascript:history.go(-1)'">&#x2B05; Voltar</button>
    -->    
    </main>
     
    
     


</body>
</html>