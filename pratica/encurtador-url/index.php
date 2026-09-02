<?php

declare (strict_types = 1);

$listaUrls = [
    "https://www.youtube.com/watch?v=hnfEqbsEapA&list=PLGPvHimgTJid_kfFhmY5ouK3r_V1zsdkG&index=66", 
    "https://www.kaggle.com/code/brunosoaresdossantos/imagens-com-redes-neurais-cachorro-ou-gato",
    "https://www.amazon.com.br/FIFINE-transmiss%C3%A3o-computador-YouTube-AmpliGame-AM8/dp/B0BMFQP2ZZ/?_encoding=UTF8"
];

function quebrarUrl (array $listaUrls){

$urlsEncurtadas = [];

    foreach ($listaUrls as $urlAtual){

        ['scheme' => $protocolo, 'host' => $dominio] = parse_url($urlAtual);
        $chaveGerada = rand(1000, 9999);
        $urlSimplificada = $protocolo . "://" . $dominio . "/" . $chaveGerada;

        $urlsEncurtadas[$chaveGerada] = [
            'original' => $urlAtual,
            'curta' => $urlSimplificada
        ];
        
    }
    
    return $urlsEncurtadas;
}

$urlSimplificada = quebrarUrl ($listaUrls);

echo "Escolha uma url para acessar o link:\n\n";

$contador = 1;

foreach ($urlSimplificada as $urlAtual){
    echo $contador . "- ". $urlAtual['curta'] ."\n";
    $contador++;
}



