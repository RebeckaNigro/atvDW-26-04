<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<?php include('./header.html') ?>    

<form action="./controle.php" method="post" >
    <label>Nome:</label>
    <select name="usuario">
        <option value="0">Alessandra Silva</option>
        <option value="1">Gilberto Astolf</option>
        <option value="2">Marcio Perez</option>
        <input type="submit">

    </select>
</form>


<?php include('./footer.html') ?>
</body>
</html>