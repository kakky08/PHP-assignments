<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="search">
        <input type="submit" value="検索">
    </form>
    <?php

    $fruits = ['apple', 'orange', 'strawberry'];
    if (!empty($_POST)) {
        $search = in_array($_POST['search'], $fruits);
        if ($search) {
            echo sprintf('%sは、配列に含まれます。', $_POST['search']);
        } else {
            echo sprintf('%sは、配列に含まれません。', $_POST['search']);
        }
    }
    ?>
</body>

</html>
