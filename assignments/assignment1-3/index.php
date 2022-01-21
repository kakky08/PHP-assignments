<?php
$question["問題"] = "日本の首都は？";
$answer["回答1"] = "大阪";
$answer["回答2"] = "北海道";
$answer["回答3"] = "箱根";
$answer["回答4"] = "東京";
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
    <?php
    echo sprintf('<h1>%s %s</h1> <br/>',  key($question), $question['問題']);
    PHP_EOL;
    foreach ($answer as $key => $value) {
        echo sprintf('%s %s<br/>', $key, $value);
    }
    ?>
</body>

</html>
