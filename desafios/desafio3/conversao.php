<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php  
            $cotação = 5.17; //cotação copiada do google
            $real = $_GET["din"];
            $dolar = $real / $cotação; //equivalência em dólar

           //MOSTRAR O RESULTADO
            //Forma tradicional: 
                //echo "Seus R\$" . number_format($numero,2,",",".") . " equivalem a US\$" . number_format($dolares,2,",",".");

            //Formatação de moedas com internacionalização (só alterar o pt-BR para o país de referência)
            //Biblioteca intl (Internationalization PHP)

            $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") ."</strong></p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>

<!--      

Segundo o chat, o mais atual é: 

        $fmt = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);

        echo "Seus "
            . $fmt->formatCurrency($real, 'BRL')
            . " equivalem a "
            . $fmt->formatCurrency($dolar, 'USD');

-->
    
</body>
</html>