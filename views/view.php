<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Smart-crop</title>
</head>
<body>
    <!-- buttons for difference Balanced -->
    <h1>buttons for difference Balanced</h1>
    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/squareBalanced.php">Crop square with all drivers</a>
    </button>

    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/horizontalBalanced.php">Crop horizontal with all drivers</a>
    </button>

    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/verticalBalanced.php">Crop vertical with all drivers</a>
    </button>

    <!-- buttons for difference Entropy -->
    <h1>buttons for difference Entropy</h1>
    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/squareEntropy.php">Crop square with all drivers</a>
    </button>

    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/horizontalEntropy.php">Crop horizontal with all drivers</a>
    </button>

    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/verticalEntropy.php">Crop vertical with all drivers</a>
    </button>

    <h1>buttons for difference With Gd only</h1>
    <?php
    if (!extension_loaded('Gd')) {
        ?>
        <p> Please install the Gd extension </p>
        <?php
    } else {
        ?>
        <!-- buttons for difference With Gd only -->
        <button style="cursor:pointer; font-weight:700;" type="button">
            <a href="../views/squareGd.php">Crop square with Gd</a>
        </button>

        <button style="cursor:pointer; font-weight:700;" type="button">
            <a href="../views/horizontalGd.php">Crop horizontal with Gd</a>
        </button>

        <button style="cursor:pointer; font-weight:700;" type="button">
            <a href="../views/verticalGd.php">Crop vertical with Gd</a>
        </button>
        <?php
    }
    ?>


    <h1>buttons for difference With Cmagick only</h1>
    <?php
    if (!extension_loaded('Gmagick')) {
        ?>
        <p> Please install the Gmagick extension </p>
        <?php
    } else {
    ?>
    <!-- buttons for difference With Gmagick only -->
    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/squareGmagick.php">Crop square with Gmagick</a>
    </button>

    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/horizontalGmagick.php">Crop horizontal with Gmagick</a>
    </button>

    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/verticalGmagick.php">Crop vertical with Gmagick</a>
    </button>
        <?php
    }
    ?>


    <h1>buttons for difference With Imagick only</h1>
    <?php
    if (!extension_loaded('Imagick')) {
        ?>
        <p> Please install the Imagick extension </p>
        <?php
    } else {
        ?>
    <!-- buttons for difference With Imagick only -->
    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/squareImagick.php">Crop square with Imagick</a>
    </button>

    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/horizontalImagick.php">Crop horizontal with Imagick</a>
    </button>

    <button style="cursor:pointer; font-weight:700;" type="button">
        <a href="../views/verticalImagick.php">Crop vertical with Imagick</a>
    </button>
        <?php
    }
    ?>
</body>
