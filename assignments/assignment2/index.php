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
    <h1>FizzBuzz問題</h1>
    <form method="POST">
        <label for="fizz-num">FizzNum:</label>
        <input type="text" id="fizz-num" name="fizz" placeholder="整数を入力してください。" pattern="^[0-9]*$" title="整数値を入力してください。" required>
        <br />
        <label for="buzz-num">BuzzNum:</label>
        <input type="text" id="buzz-num" name="buzz" placeholder="整数を入力してください。" pattern="^[0-9]*$" title="整数値を入力してください。" required>
        <br />
        <button type="submit">実行</button>
    </form>
    <p>【出力】</p>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $fizz = (int)$_POST['fizz'];
            $buzz = (int)$_POST['buzz'];

            $fizz_num = $fizz;
            $buzz_num = $buzz;

            while($fizz_num < 100 || $buzz_num < 100){
                if($fizz_num === $buzz_num)
                {
                    echo 'FizzBuzz: ' . $fizz_num . '<br />';
                    $fizz_num += $fizz;
                    $buzz_num += $buzz;
                }
                elseif ($fizz_num < $buzz_num)
                {
                    echo 'Fizz: ' . $fizz_num . '<br />';
                    $fizz_num += $fizz;
                }
                else
                {
                    echo 'Buzz: ' . $buzz_num . '<br />';
                    $buzz_num += $buzz;
                }
            }
        }
    ?>
</body>

</html>
