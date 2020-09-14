<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <ul>
            <?php
                foreach ($books as $book) {
                    echo '<l1><a href="book.php?id=' . $book['id'];
                }
            ?>
        </ul>
    <h1>Sticky Fingers of Time, The</h1>
    <img src="http:\/\/dummyimage.com\/216x237.png\/ff4444\/ffffff" alt="dummyimage">
    <table>
        <tbody>
            <tr>
                <td>Aasta:</td>
                <td>1997</td>
            </tr>
                <tr>
                    <td>Kirjeldus:</td>
                        <td>
                            Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat. Praesent blandit.
                        </td>
                    </tr>
                <tr>
                    <td>Hind:</td>
                    <td>2.6300</td>
                </tr>
                    <tr>
                        <td>Lehekülgi:</td>
                        <td>804</td>
                    </tr>
                        <tr>
                            <td>Laos:</td>
                            <td>223</td>
                        </tr>
                            <tr>
                                <td>Tüüp:</td>
                                <td>Eraamat</td>
                            </tr>
                    </tbody>
                </table>
                    <div style="margin-top: 2em;>"</div>
                        <span>
                            <a href="editform.php">muuda</a>
                        </span>
                            <span>
                                <a href="delete.php">kustuta</a>
                            </span>
                    </div>
    </body>
    </html>
