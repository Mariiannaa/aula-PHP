<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pista</title>
</head>
<body>
<h1>__________________________________________________</h1><br>

    <h3>-------------------------------------------------------------------------------------------------------------------------------</h3><br>

    <h1>__________________________________________________</h1>
    <?php 
    
    
    require_once('carro.php');

    $meu_carro = new Carro;

    $meu_carro->ligar();
    
    $carrinho = $meu_carro->andar();

    $meu_carro->andar();
    
    
    
    
    ?>
</body>
</html>