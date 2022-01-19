<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>問題 日本の首都は？</h1>
    <form method="POST">
        <input type="text" name="answer">
        <input type="submit" value="OK">
    </form>
    <?php
    if (!empty($_POST)) {
        if ($_POST['answer'] === '東京') {
            echo '正解';
        } else {
            echo '不正解';
        }
    }
    ?>

</body>

</html>
