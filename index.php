<?php

    include 'contagem.php';
    $num = 100;
    $contagem = new Contagem($num);

    foreach ($contagem->final as $finalok)
    {
        echo $finalok."<br/>";
    }

?>