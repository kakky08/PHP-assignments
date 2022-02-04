<?php
    require '../common/connect.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $content = $_POST['content'];
    $datebase_handler = connect();
    $sql = 'UPDATE contributions SET name = :name, content = :content WHERE id = :update_id';

    try {
        $statement = $datebase_handler->prepare($sql);
        if($statement)
        {
            $statement->bindParam(':name', htmlspecialchars($name));
            $statement->bindParam(':content', htmlspecialchars($content));
            $statement->bindParam(':update_id', $id);
            $statement->execute();
        }
    }
    catch (Throwable $e)
    {
        echo $e->getMessage();
        exit;
    }

    header('Location: ../completion_update.php')
?>
