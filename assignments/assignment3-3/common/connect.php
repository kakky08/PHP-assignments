<?php
function connect()
{
    $host = 'db';
    $db_name = 'php_assignments';
    $user = 'root';
    $password = 'password';
    try
    {
        $database_handler = new PDO('mysql:host=' . $host . ';dbname=' . $db_name . ';charset=utf8mb4', $user, $password);
    }
    catch(PDOException $e)
    {
        echo 'DB接続に失敗しました。<br />';
        echo $e->getMessage();
        exit;
    }
    return $database_handler;
}
?>
