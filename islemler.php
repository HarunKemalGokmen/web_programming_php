<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hesap Makinesi</h2>


    <form action="" method="post">

        <label>1. Sayı</label>
        <input type="number" name="sayi1" required><br><br>

        <label>2. Sayı</label>
        <input type="number" name="sayi2" required><br><br>

        <label>İşlem Türü</label>
        <select name="islem">
            <option value="topla">Toplama</option>
            <option value="cikar">Çıkarma</option>
            <option value="carpma">Çarpma</option>
            <option value="bolme">Bölme</option>
        </select><br><br>

        <button type="submit" name="hesapla">Hesapla</button>
    </form>

    <br>

    <?php

    $sayi1 = $_POST["sayi1"] ?? 0;
    $sayi2 = $_POST["sayi2"] ?? 0;
    $islem = $_POST["islem"] ?? "topla";
    $sonuc = 0;

    if ($islem == "topla") {
        $sonuc = $sayi1 + $sayi2;
    }
    if ($islem == "cikar") {
        $sonuc = $sayi1 - $sayi2;
    }
    if ($islem == "carpma") {
        $sonuc = $sayi1 * $sayi2;
    }
    if ($islem == "bolme") {
        $sonuc = $sayi1 / $sayi2;
    }

    echo"<h3>Sonuç: " . $sonuc . "</h3>";





?>






</body>
</html>