<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $cireng = 1000;
    $duren = 15000;
    $milo = 20000;
    $sTeh = 5000;
    $piscok = 1000;
    ?>

    <h1>Daftar Menu </h1>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama Menu</td>
                <td>Harga</td>
            </tr>
            </tead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Cireng</td>
                <td>Rp. <?= $cireng ?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Es Duren</td>
                <td>Rp. <?= $duren ?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Es Milo</td>
                <td>Rp. <?= $milo ?></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Es Teh</td>
                <td>Rp. <?= $sTeh ?></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Piscok</td>
                <td>Rp. <?= $piscok ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>