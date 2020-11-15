<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Geografis</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <script src="index.js"></script>
</head>
<body>
    <div class="container">
        <div class="header">
            <fieldset>
                <h3>SISTEM INFORMASI GEOGRAFIS</h2>
            </fieldset>
        </div>
        <div class="navigation-menu">
            <fieldset>
                <legend>Navigasi</legend>
                <?php
                    include "navigation.php";
                ?>
            </fieldset>
        </div>

        <div class="content">
            <fieldset>
                <legend>Konten</legend>
                <?php
                    include "page-router.php";
                ?>
            </fieldset>
        </div>
    </div>
</body>
</html>