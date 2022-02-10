<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Musica</title>
</head>

<body>
    <div class="container p-5">
        <form action="php/upload.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
                <label for="nome" class="form-label">Insere o nome da musica(Name)</label>
                <input class="form-control" name="nome" placeholder="Insere o nome da musica aqui" type="text" id="nome">
            </div> 
            <div class="mb-3">
                <label for="musica" class="form-label">Seleciona a musica(Music)</label>
                <input class="form-control" type="file" name="musica" id="musica">
            </div>
            <div class="mb-3">
                <label for="imagem" class="form-label">Seleciona a imagem(Image)</label>
                <input class="form-control" type="file" name="imagem" id="imagem">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>