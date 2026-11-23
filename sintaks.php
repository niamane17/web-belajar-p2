<?php

// 1. Deklarasi empat variabel
$nama = "Pulpen";
$harga = 2500;
$diskon = 0.1;
$member = true;

// 2. Menampilkan tipe data
var_dump($nama, $harga, $diskon, $member);

echo "<hr>";

// 3. Menghitung total dengan diskon
$qty = 3;
$total = $harga * $qty * (1 - $diskon);

echo "<p>Total bayar: Rp " .
number_format($total, 0, ',', '.') . "</p>";

echo "<hr>";

// 4. Menguji perbedaan tanda kutip
echo "Barang: $nama<br>";
echo 'Barang: $nama';

?>
