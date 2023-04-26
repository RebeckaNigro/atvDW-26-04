<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viualizar</title>
</head>
<body style="background-color: <?php echo $_GET['cor'] ?>;">  
<section>
    <h2>
        <?php echo $_GET['frase']; ?>
        <img src="<?php echo $_GET['img']?>" alt="imagem"> </h2>
</section>

<?php include('./footer.html') ?>
</body>
</html>