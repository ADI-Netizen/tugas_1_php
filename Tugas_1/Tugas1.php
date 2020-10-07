<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $aGoreng = 12000;
    $aBakar = 15000;
    $aSayur = 13000;
    $tempe = 1000;
    $tahu = 1000;
    $soto = 3000;
    $nasi = 5000;
    $teh = 4000;
    $tebu = 5000;
    ?>

    <h1>Daftar Menu</h1>

    <table>
        <tbody>
            <tr>
                <td>
                    <li>Ayam Goreng</li>
                </td>
                <td>=</td>
                <td>Rp. <?= $aGoreng ?></td>
            </tr>
            <tr>
                <td>
                    <li>Ayam Bakar</li>
                </td>
                <td>=</td>
                <td>Rp. <?= $aBakar ?></td>
            </tr>
            <tr>
                <td>
                    <li>Ayam Sayur</li>
                </td>
                <td>=</td>
                <td>Rp. <?= $aSayur ?></td>
            </tr>
            <tr>
                <td>
                    <li>Tempe Goreng</li>
                </td>
                <td>=</td>
                <td>Rp. <?= $tempe ?></td>
            </tr>
            <tr>
                <td>
                    <li>Tahu Goreng</li>
                </td>
                <td>=</td>
                <td>Rp. <?= $tahu ?></td>
            </tr>
            <tr>
                <td>
                    <li>Soto</li>
                </td>
                <td>=</td>
                <td>Rp. <?= $soto ?></td>
            <tr>
                <td>
                    <li>Nasi Putih</li>
                </td>
                <td>=</td>
                <td>Rp. <?= $nasi ?></td>
            </tr>
            <tr>
                <td>
                    <li>Es Teh</li>
                </td>
                <td>=</td>
                <td>Rp. <?= $teh ?></td>
            </tr>
            <tr>
                <td>
                    <li>Es Tebu</li>
                </td>
                <td>=</td>
                <td>Rp. <?= $tebu ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>