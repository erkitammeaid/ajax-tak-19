<?php


require_once 'connect.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

$stmt = $pdo->prepare('SELECT * FROM books WHERE id=:id');
$stmt->execute (['id' => $id]);
$book = $stmt->fetch();

//echo json_encode($book);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php echo $book['title'] ?></h1>
    <img src="http:\/\/dummyimage.com\/216x237.png\/ff4444\/ffffff" alt="dummyimage">
    <table>
        <tbody>
            <tr>
                <td>Aasta:</td>
                <td><?php echo $book['release_date'] ?></td>
            </tr>
                <tr>
                    <td>Kirjeldus:</td>
                        <td><?php echo $book['summary'] ?></td>
                    </tr>
                <tr>
                    <td>Hind:</td>
                    <td><?php echo round($book['price'], 2)?></td>
                </tr>
                    <tr>
                        <td>Lehekülgi:</td>
                        <td><?php echo $book['pages'] ?></td>
                    </tr>
                        <tr>
                            <td>Laos:</td>
                            <td><?php echo $book['stock_saldo'] ?></td>
                        </tr>
                            <tr>
                                <td>Tüüp:</td>
                                <td><?php echo $book['type'] ?></td>
                            </tr>
                    </tbody>
                </table>
                    <div style="margin-top: 2em;>"</div>
                        <span>
                            <a href="editform.php">muuda</a>
                        </span>
                            <span>
                                <a href="delete.php?id=<?php echo $book['id']; ?>">kustuta</a>
                            </span>
                    </div>
</body>
</html>
