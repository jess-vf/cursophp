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
            //cotação vinda da API do Banco Central
            
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\'' . $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];

            //$cotacao = 5.17; //cotação copiada do google

            $real = $_REQUEST["din"];
            $dolar = $real / $cotacao; //equivalência em dólar

           //MOSTRAR O RESULTADO
            //Forma tradicional: 
                //echo "Seus R\$" . number_format($numero,2,",",".") . " equivalem a US\$" . number_format($dolares,2,",",".");

            //Formatação de moedas com internacionalização (só alterar o pt-BR para o país de referência)
            //Biblioteca intl (Internationalization PHP)

            $padrão = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            echo "<p>Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrão, $dolar, "USD") ."</strong></p>";

            //echo "Seus R\$" . number_format($real,2,",",".") . " equivalem a US\$" . number_format($dolar,2,",",".");

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
   

    
</body>
</html>