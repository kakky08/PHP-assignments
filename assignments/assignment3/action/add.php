<?php
    require '../common/connect.php';

    $name = $_POST['name'];
    $content = $_POST['content'];

    $database_handler = connect();

    $sql = 'INSERT INTO posts (name, content) VALUES(:name, :content)';
    try
    {
        $statement = $database_handler->prepare($sql);
        if($statement)
        {
            $statement->bindParam(':name', htmlspecialchars($name));
            $statement->bindParam(':content', htmlspecialchars($content));
            $statement->execute();
        }
    }
    catch (Throwable $e)
    {
        echo $e->getMessage();
        exit;
    }

    header('Location: ../completion.php');
?>
