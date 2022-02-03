<?php
    require '../common/connect.php';

    $id = $_POST['delete'];

    $database_handler = connect();
    $sql = 'DELETE FROM contributions WHERE id = :id';

    try
    {
        $statement = $database_handler->prepare($sql);
        $statement->bindParam(':id', $id);
        $statement->execute();
    }
    catch (Throwable $e)
    {
        echo $e->getMessage();
        exit;
    }

    header('Location: ../completion_delete.php')
?>
