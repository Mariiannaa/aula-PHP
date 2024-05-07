<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Programinha em PHP</title>
</head>
<body>
    <h1>Isso é html</h1>
    <?php
    $dia = "Terça";
    $temperatura = 18 ;

    if  ($temperatura > 25){
        $clima = "ensolarado";
    }elseif($temperatura <= 25 && $temperatura >=18){
        $clima = "chuvoso";
    }elseif($temperatura < 18){
        $clima = "nevando";
    }
    echo "O clima hoje está $clima, a temperatura está $temperatura graus e hoje é $dia feira.";

    $nomes = array("João Vitor", "Roberto Pink", "Jennifer", "Emile","B.Letigo");

    echo "<br>";

    for($i=0; $i < 5; $i++){
        echo "<br>";
        echo $nomes[$i];
    }
    echo"<br><hr>";
    $total = 0 ;
    foreach ($nomes as $nome){
        echo"<br>";
        echo $nome;
        $total++;
    }

    echo "<br>";
    echo "<b>A quantidade total de nomes é $total </b>";
    

    ?>
</body>
</html>