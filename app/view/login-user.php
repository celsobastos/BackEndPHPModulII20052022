<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body>
    <?= $data['erro'] ?>
    <form action="/executa-login" method="post">
        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>