<html>

<head>
    <title>Pembayaran</title>
</head>

<body>
    <?php
    $produk = "produk";
    $ID = $_POST["ID"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $alamat = $_POST["alamat"];
    $member = $_POST["member"];
    $pembayaran = $_POST["pembayaran"];
    $harga = 0;

    $hargaProduk = array(
        "produk1" => 350000,
        "produk2" => 465000,
        "produk3" => 485000,
        "produk4" => 865000,
        "produk5" => 1624000
    );

    if (isset($_POST['produk1']))
        $harga += $hargaProduk['produk1'];
    if (isset($_POST['produk2']))
        $harga += $hargaProduk['produk2'];
    if (isset($_POST['produk3']))
        $harga += $hargaProduk['produk3'];
    if (isset($_POST['produk4']))
        $harga += $hargaProduk['produk4'];
    if (isset($_POST['produk5']))
        $harga += $hargaProduk['produk5'];

    $diskonMember = 0;
    if ($member == "Ya") {
        $diskonMember = 0.1 * $harga;
    }

    $pembayaranAkhir = $harga - $diskonMember;
    ?>
    <h1>Info Pembelian</h1>
    <hr>
    Produk yang dibeli &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :
    <?php

    if (isset($_POST['produk1']))
        echo "<br>" . $_POST['produk1'];
    if (isset($_POST['produk2']))
        echo "<br>" . $_POST['produk2'];
    if (isset($_POST['produk3']))
        echo "<br>" . $_POST['produk3'];
    if (isset($_POST['produk4']))
        echo "<br>" . $_POST['produk4'];
    if (isset($_POST['produk5']))
        echo "<br>" . $_POST['produk5']
            ?><br>
        Nomor ID &nbsp&nbsp :
        <?php

    if ((trim($ID) == '') || ($ID < 0) || (!preg_match("/^[0-9]/", $ID)))
        echo "Input ID Anda salah !";
    else
        echo $ID
            ?><br><br>========================================= <br><br>
        Data Customer : <br>
        ID Customer &nbsp :
        <?php

    if (strlen($ID) == 0)
        echo "Silahkan masukkan ID Anda !";
    else
        echo $ID
            ?><br>

        Nama &nbsp :
        <?php

    if (strlen($nama) == 0)
        echo "Silahkan masukkan nama Anda !";
    else
        echo $nama
            ?><br>
        Email &nbsp :
        <?php

    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
        echo "Invalid email !";
    } else
        echo $email
            ?><br>
        Alamat &nbsp :
        <?php

    if (strlen($alamat) == 0)
        echo "Silahkan masukkan alamat Anda !";
    else
        echo $alamat
            ?><br>
        Member &nbsp :
    <?php echo $member ?><br>
    Pembayaran &nbsp :
    <?php echo $pembayaran ?><br>
    Total Pembayaran &nbsp :
    <?php echo $harga ?><br>
    Diskon Member &nbsp :
    <?php echo $diskonMember ?><br>
    Pembayaran Akhir &nbsp :
    <?php echo $pembayaranAkhir ?>
    <br>
</body>

</html>