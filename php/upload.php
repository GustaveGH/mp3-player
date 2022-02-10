<?php

$target_dir = __DIR__ . "/../musicas/";
$target_file_mp3 = $target_dir . "audio/" . $_POST["nome"] . ".mp3";
$target_file_img = $target_dir . "img/". $_POST["nome"] . ".jpg";


if(isset($_POST["submit"])) {
    move_uploaded_file($_FILES["musica"]["tmp_name"], $target_file_mp3);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file_img);
}

header("Location: /");

