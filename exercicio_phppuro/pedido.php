<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP Puro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $cliente = $_GET["nome"];
    $hamburguer = $_GET["hamburguer"];
    $extras = $_GET["extra"];
    //var_dump($extra);
    $quantidade = $_GET["quant"];  
    $pagamento = $_GET["pag"]; 
    ?>
    <main>
        <h1>Pedido Online</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
            <label for="nome"><strong>Nome:</strong></label> <br>
            <input type="text" name="nome" id="nome" value="<?=$cliente?>" required><br>
            <label for="hamburguer"><strong>Hambúrguer:</strong> <br></label>
            <select name="hamburguer" id="hamburguer">
                <option value="X-Burguer">X-Burguer - R$15,00</option>
                <option value="X-Salada">X-Salada - R$18,00</option>
                <option value="X-Bacon">X-Bacon - R$22,00</option>
            </select><br>
            <label for="extra"><strong>Extra:</strong></label><br>
            <input type="checkbox" name="extra[]" id="queijo" value="QueijoExtra">
            Queijo extra - R$3,00 <br>
            <input type="checkbox" name="extra[]" id="bacon" value="BaconExtra">Bacon extra - R$4,00 <br>
            <input type="checkbox" name="extra[]" id="ovo" value="Ovo">Ovo - R$ 2,00 <br>
            <label for="quant"><strong>Quantidade:</strong></label> <br>
            <input type="number" name="quant" id="quant" min="1" max="10" value= <?= $quantidade ?>> <br>
            <label for="pag"><strong>Forma de Pagamento:</strong></label> <br>
            <input type="radio" name="pag" id="pag" value="Dinheiro"> Dinheiro <br>
            <input type="radio" name="pag" id="pag" value="Cartão"> Cartão <br>
            <input type="radio" name="pag" id="pag" value="PIX"> PIX <br>
            <p><input type="submit" value="Finalizar Pedido"></p>
        </form>
        
        <?php              
            
            if ($hamburguer == "X-Burguer") {
                $valorHamburguer = 15;
            }

            if ($hamburguer == "X-Salada") {
                $valorHamburguer = 18;
            }

            if ($hamburguer == "X-Bacon") {
                $valorHamburguer = 22;
            }

            foreach ($extras as $chave => $extra) {
                $resumo_extras .= $extra . "," ;      
	        }
            

            $valorExtras = 0;
            //$resumo_extras = "";

            if (!empty($extras)) {
                foreach ($extras as $extra) {

                    if ($extra == "QueijoExtra") {
                        $valorExtras += 3;
                    }

                    if ($extra == "BaconExtra") {
                    $valorExtras += 4;
                    }

                    if ($extra == "Ovo") {
                    $valorExtras += 2;
                    }
                }  
            }  


           $subtotal = ($valorHamburguer + $valorExtras)* $quantidade;
           

            if ($pagamento == "Dinheiro") {
                $desconto = $subtotal * 10/100;
            }

            if ($pagamento == "PIX") {
                $desconto = $subtotal * 5/100;
            }

            $totalfinal = $subtotal - $desconto;

           
        ?>

        <section>
            <h2>Resumo do Pedido</h2>  
            <p><strong>Cliente:</strong> <?= $cliente ?></p>
            <p><strong>Hambúrguer:</strong> <?= $hamburguer ?></p>
            <p><strong>Extras:</strong> <?= $resumo_extras ?></p>
            <p><strong>Quantidade:</strong> <?= $quantidade ?></p>
            <hr>

            <p><strong>Subtotal:</strong> R$<?= number_format($subtotal,2,",",".") ?></p>
            <p><strong>Desconto:</strong> R$<?= number_format($desconto,2,",",".") ?> </p>
            <p><strong>Total Final:</strong> R$<?= number_format($totalfinal,2,",",".") ?></p>
            <p><strong>Pagamento: </strong><?= $pagamento ?></p>
        </section>    
    </main>
</body>
</html>