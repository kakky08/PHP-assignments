<?php
if (!empty($_POST)) {
    $player = $_POST['player'];
}
$com = mt_rand(0, 2);

$hand = ['グー', 'チョキ', 'パー'];
function result($player, $com)
{
    $result = ($player - $com + 3) % 3;

    switch ($result)
    {
        case 0:
            echo 'あいこ';
            break;
        case 1:
            echo 'あなたの敗北です。。。';
            break;
        case 2:
            echo 'あなたの勝利です!';
            break;
    }
}
?>
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
        <select name="player">
            <option value="0">グー</option>
            <option value="1">チョキ</option>
            <option value="2">パー</option>
        </select>
        <br />
        <input type="submit" value="じゃんけん!">
    </form>
    <?php
    if (!empty($_POST)) {
        echo sprintf('自分: %s', $hand[$player]);
        echo '<br />';
        echo sprintf('相手: %s', $hand[$com]);
        echo '<br />';
        echo result($player, $com);
    }
    ?>
</body>

</html>
