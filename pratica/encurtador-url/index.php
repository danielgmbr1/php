<?php

declare (strict_types = 1);

$listaUrls = [
    "https://www.youtube.com/watch?v=hnfEqbsEapA&list=PLGPvHimgTJid_kfFhmY5ouK3r_V1zsdkG&index=66", 
    "https://www.kaggle.com/code/brunosoaresdossantos/imagens-com-redes-neurais-cachorro-ou-gato",
    "https://www.amazon.com.br/FIFINE-transmiss%C3%A3o-computador-YouTube-AmpliGame-AM8/dp/B0BMFQP2ZZ/?_encoding=UTF8",
    "https://chatgpt.com/c/6a9817e4-1468-83e9-a2ae-75d979b5d644",
    "https://gemini.google.com/app/2d2269a2574e4b4d"
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

$contador = 1;

foreach ($urlSimplificada as $urlAtual){
    echo $contador . "- ". $urlAtual['curta'] ."\n";
    $contador++;
}

$resp = (int) readline("\nEscolha uma url para acessar o link:\n\n");

$totalUrls = count($urlSimplificada);

if($resp >= 1 && $resp <= $totalUrls){  
    $chavesArray = array_keys($urlSimplificada);
    $indiceReal = $resp - 1;

    if(isset($chavesArray[$indiceReal])){
        $chaveReal = $chavesArray[$indiceReal];
        $urlParaDirecionar = $urlSimplificada[$chaveReal]['original'];
        echo "\nAqui esta seu link: " . $urlParaDirecionar . "\n\n";
    }
    else {
        echo "Opção invalida!\n";
    }
}
else {
    echo "Opção invalida!\n";
}







        



