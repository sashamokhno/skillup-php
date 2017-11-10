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
        <label> Имя <input name="first_name" value="<?= $user['first_name']?>"> </label>
        <label> Фамилия <input name="last_name" value="<?= $user['last_name']?>"></label>
        <label> Email <input type="email" name="email" value="<?= $user['email']?>"></label>
        <label> Телефон <input name="phone" value="<?= $user['phone']?>"></label>
        <input type="checkbox" name="confirm" value="1" <?=$user['confirm']?'checked':''?>>Я согласен с условиями сайта</label>
        <button type="submit">Зарегистрировать</button>
    </form>
</body>
</html>