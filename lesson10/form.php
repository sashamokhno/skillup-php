<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <?php foreach ($errors as $error){?>
    <p class="error"><?=$error?></p><?php }?>

    <form action="index.php" method="post">
        <label> Email <input type="email" name="email" value="<?= $user['email']?>"></label>
        <button type="submit">Зарегистрировать</button>
    </form>
</body>
</html>