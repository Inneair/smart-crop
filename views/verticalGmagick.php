<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crop vertical Gmagick</title>
</head>
<body>
<table>
    <?php
    $images = scandir('../img/');
    foreach ($images as $image) {
        if (strstr($image, '.jpg')) {
            ?>
            <tr style="text-align:center">
                <td style="border:1px solid black">Original picture</td>
                <td style="border:1px solid black">crop basic</td>
                <td style="border:1px solid black">crop balanced</td>
                <td style="border:1px solid black">Crop entropy</td>
            </tr>
            <tr style="text-align:center">
                <td><img src="../img/<?php echo $image ?>" border="0" style="max-width: 200px"/></td>
                <td><img src="../tmp/Gmagick/basic/vertical/<?php echo $image ?>" border="0"/></td>
                <td><img src="../tmp/Gmagick/balanced/vertical/<?php echo $image ?>" border="0"/></td>
                <td><img src="../tmp/Gmagick/Entropy/vertical/<?php echo $image ?>" border="0"/></td>
            </tr>
            <?php
        }
    }
    ?>
</table>

<button style="cursor:pointer; font-weight:700;" type="button">
    <a href="../index.php">Back to menu</a>
</button>

</body>
</html>