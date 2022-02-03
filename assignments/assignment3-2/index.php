<?php
require 'common/connect.php';
$posts = array();
$database_handler = connect();
$sql = 'SELECT id, name, content FROM contributions ORDER BY updated_at ASC';
$statement = $database_handler->prepare($sql);

if($statement)
{
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results as $result)
    {
        $posts[] = $result;
    }

}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <h1>掲示板</h1>
    <h2>新規投稿</h2>
    <form method="POST" action="action/add.php">
        <div class="input-name">
            <label for="name">name:</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="textarea-content">
            <label for="content" class="label">投稿内容:</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">投稿</button>
    </form>
    <h2>投稿内容一覧</h2>
    <?php
        $num = 1;
        foreach ($posts as $post)
        {
        echo <<< EOM
        <div class="post">
        NO:{$num}<br>
        名前:{$post['name']}<br>
        投稿内容:{$post['content']}<br>
        <form action="action/delete.php" method="post">
            <input type="hidden" name="id" value="{$post['id']}">
            <button type="submit">削除</button>
        </form>
        </div>
        EOM;
        $num++;
        }
    ?>
</body>

</html>
