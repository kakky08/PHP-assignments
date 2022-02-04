<?php
require 'common/connect.php';

$id = $_POST['edit'];
$datebase_handler = connect();
$sql = 'SELECT name, content FROM contributions WHERE id = :edit_id';

try {
    $statement = $datebase_handler->prepare($sql);
    if ($statement)
    {
        $statement->bindParam(':edit_id', $id);
        $statement->execute();
        $post = $statement->fetch(PDO::FETCH_ASSOC);
    }
}
catch (Throwable $e)
{
    echo $e->getMessage();
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
    <h1>編集ページ</h1>
    <form method="POST" action="action/update.php" id="form_update">
        <input type="hidden" name="id" value="<?php echo $id?>">
        <div class="input-name">
            <label for="name">name:</label>
            <input type="text" name="name" id="name" value="<?php echo $post['name'] ?>">
        </div>
        <div class="textarea-content">
            <label for="content" class="label">投稿内容:</label>
            <textarea name="content" id="content" cols="30" rows="10"><?php echo $post['content'] ?></textarea>
        </div>
    </form>
    <button type="submit" form="form_update">更新</button>
    <button onclick="location.href='./index.php'">戻る</button>
</body>

</html>
