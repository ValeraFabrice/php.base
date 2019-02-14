<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Formulaire d'upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Upload en PHP</h1>
        <form action="" method="post" enctype="multipart/form-data">           
            <input type="file" name="image">
            <button class="btn btn-primary">Uploader</button>
        </form>

        <?php
            var_dump($_FILES);

            if(!empty($_FILES['image'])) {
            // On récupère le fichier temporaire
            $tmpFile = $_FILES['image']['tmp_name'];
            // On récupère le nom du fichier
            $fileName = $_FILES['image']['name'];
            //Générer un nom de fichier unique
            //david-brooke.jpg -> a3d45fe4_david-brooke.jpg
            $fileName = substr(md5(time()), 0, 8) . '_' . $fileName; 
            // On déplace le fichier à l'endroit désiré
            move_uploaded_file($tmpFile, __DIR__.'/upload/'.$fileName);
        }
        ?>

    </div>
</body>

</html>