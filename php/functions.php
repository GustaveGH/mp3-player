<?php

function obterMusicas() {
    $baseDir = __DIR__ . "/../musicas/audio/";
    $musics = glob($baseDir . "*.mp3");

    foreach($musics as $key => $music) {
        $musics[$key] = str_replace($baseDir, "", $music);;
    }

    return $musics;
}

function obterImagem($nome) {
    $baseDir = "/musicas/img/";
    return $baseDir . str_replace(".mp3", ".jpg", $nome);
}

function obterAudio($nome) {
    return"/musicas/audio/" . $nome;
}