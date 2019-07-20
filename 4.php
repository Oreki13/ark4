<?php



$harga = 153000;
$vocher = "ARKAFOOD5";
$pajak = true;
$ongkir = 1;




// ARKAFOOD5
function diskon50pajak1($harga, $ongkir)
{
    $diskon = $harga * 50 / 100;

    $jarak = $ongkir - 1;
    $jarak2 = $jarak * 3000;
    $paket = $diskon + $jarak2 + 5000;

    $ppn = $paket * 5 / 100;
    $total = $paket + $ppn;
    return $total;
}
function plusdiskon50pajak1($harga, $ongkir)
{
    $diskon = $harga - 50000;

    $jarak = $ongkir - 1;
    $jarak2 = $jarak * 3000;
    $paket = $diskon + $jarak2 + 5000;

    $ppn = $paket * 5 / 100;
    $total = $paket + $ppn;
    return $total;
}
function diskon50pajak0($harga, $ongkir)
{
    $diskon = $harga * 50 / 100;

    $jarak = $ongkir - 1;
    $jarak2 = $jarak * 3000;
    $total = $diskon + $jarak2 + 5000;
    return $total;
}
function plusdiskon50pajak0($harga, $ongkir)
{
    $diskon = $harga - 50000;

    $jarak = $ongkir - 1;
    $jarak2 = $jarak * 3000;
    $total = $diskon + $jarak2 + 5000;
    return $total;
}
function plusdiskon50pajak0me($harga)
{
    $diskon = $harga - 50000;

    $total = $diskon + 5000;
    return $total;
}
function plusdiskon50pajak1me($harga)
{
    $diskon = $harga - 50000;

    $paket = $diskon + 5000;

    $ppn = $paket * 5 / 100;
    $total = $paket + $ppn;
    return $total;
}
function diskon50pajak0me($harga)
{
    $diskon = $harga * 50 / 100;

    $total = $diskon + 5000;
    return $total;
}
function diskon50pajak1me($harga)
{
    $diskon = $harga * 50 / 100;

    $paket = $diskon + 5000;

    $ppn = $paket * 5 / 100;
    $total = $paket + $ppn;
    return $total;
}


// DITRAKTIRDENY
function diskon25pajak1($harga, $ongkir)
{
    $diskon = $harga * 25 / 100;

    $jarak = $ongkir - 1;
    $jarak2 = $jarak * 3000;
    $paket = $diskon + $jarak2 + 5000;

    $ppn = $paket * 5 / 100;
    $total = $paket + $ppn;
    return $total;
}
function plusdiskon25pajak1($harga, $ongkir)
{
    $diskon = $harga - 30000;

    $jarak = $ongkir - 1;
    $jarak2 = $jarak * 3000;
    $paket = $diskon + $jarak2 + 5000;

    $ppn = $paket * 5 / 100;
    $total = $paket + $ppn;
    return $total;
}
function diskon25pajak0($harga, $ongkir)
{
    $diskon = $harga * 25 / 100;

    $jarak = $ongkir - 1;
    $jarak2 = $jarak * 3000;
    $total = $diskon + $jarak2 + 5000;
    return $total;
}
function plusdiskon25pajak0($harga, $ongkir)
{
    $diskon = $harga * 25 / 100;

    $jarak = $ongkir - 1;
    $jarak2 = $jarak * 3000;
    $total = $diskon + $jarak2 + 5000;
    return $total;
}
function plusdiskon25pajak0me($harga)
{
    $diskon = $harga * 25 / 100;

    $total = $diskon + 5000;
    return $total;
}
function plusdiskon25pajak1me($harga)
{
    $diskon = $harga * 25 / 100;

    $paket = $diskon + 5000;

    $ppn = $paket * 5 / 100;
    $total = $paket + $ppn;
    return $total;
}
function diskon25pajak0me($harga)
{
    $diskon = $harga * 25 / 100;

    $total = $diskon + 5000;
    return $total;
}
function diskon25pajak1me($harga)
{
    $diskon = $harga * 25 / 100;

    $paket = $diskon + 5000;

    $ppn = $paket * 5 / 100;
    $total = $paket + $ppn;
    return $total;
}
function pajak1($harga, $ongkir)
{

    $jarak = $ongkir - 1;
    $jarak2 = $jarak * 3000;
    $paket = $harga + $jarak2 + 5000;

    $ppn = $paket * 5 / 100;
    $total = $paket + $ppn;
    return $total;
}
function pajak0($harga, $ongkir)
{

    $jarak = $ongkir - 1;
    $jarak2 = $jarak * 3000;
    $total = $harga + $jarak2 + 5000;
    return $total;
}
function pajak1me($harga)
{

    $paket = $harga + 5000;

    $ppn = $paket * 5 / 100;
    $total = $paket + $ppn;
    return $total;
}
function pajak0me($harga)
{

    $total = $harga + 5000;

    return $total;
}






if ($harga > 50000 and $harga < 100000 and $vocher == "ARKAFOOD5" and $pajak === true and $ongkir > 1.5) {
    $total = diskon50pajak1($harga, $ongkir);
    echo "Rp. $total";
} elseif ($harga > 100000 and $vocher == "ARKAFOOD5" and $ongkir > 1.5 and $pajak === true) {
    $total = plusdiskon50pajak1($harga, $ongkir);
    echo "Rp. $total";
} elseif ($harga > 50000 and $harga < 100000 and $vocher == "ARKAFOOD5" and $ongkir > 1.5 and $pajak === false) {
    $total = diskon50pajak0($harga, $ongkir);
    echo "Rp. $total";
} elseif ($harga > 100000 and $vocher == "ARKAFOOD5" and $ongkir > 1.5 and $pajak === false) {
    $total = plusdiskon50pajak0($harga, $ongkir);
    echo "Rp. $total";
} elseif ($harga > 100000 and $vocher == "ARKAFOOD5" and $ongkir < 1.5 and $pajak === false) {
    $total = plusdiskon50pajak0me($harga);
    echo "Rp. $total";
} elseif ($harga > 100000 and $vocher == "ARKAFOOD5" and $ongkir < 1.5 and $pajak === true) {
    $total = plusdiskon50pajak1me($harga);
    echo "Rp. $total";
} elseif ($harga > 50000 and $harga < 100000 and $vocher == "ARKAFOOD5" and $ongkir < 1.5 and $pajak === true) {
    $total = diskon50pajak1me($harga);
    echo "Rp. $total";
} elseif ($harga > 50000 and $harga < 100000 and $vocher == "ARKAFOOD5" and $ongkir < 1.5 and $pajak === false) {
    $total = diskon50pajak0me($harga);
    echo "Rp. $total";
} elseif ($harga > 25000 and $harga < 50000 and $vocher == "DITRAKTIRDENY" and $ongkir > 1.5 and $pajak === true) {
    $total = diskon25pajak1($harga, $ongkir);
    echo "Rp. $total";
} elseif ($harga > 25000 and $harga < 50000 and $vocher == "DITRAKTIRDENY" and $ongkir > 1.5 and $pajak === false) {
    $total = diskon25pajak0($harga, $ongkir);
    echo "Rp. $total";
} elseif ($harga > 50000 and $vocher == "DITRAKTIRDENY" and $ongkir > 1.5 and $pajak === true) {
    $total = plusdiskon25pajak1($harga, $ongkir);
    echo "Rp. $total";
} elseif ($harga > 50000 and $vocher == "DITRAKTIRDENY" and $ongkir > 1.5 and $pajak === false) {
    $total = plusdiskon25pajak0($harga, $ongkir);
    echo "Rp. $total";
} elseif ($harga > 50000 and $vocher == "DITRAKTIRDENY" and $ongkir < 1.5 and $pajak === false) {
    $total = plusdiskon25pajak0me($harga);
    echo "Rp. $total";
} elseif ($harga > 50000 and $vocher == "DITRAKTIRDENY" and $ongkir < 1.5 and $pajak === true) {
    $total = plusdiskon25pajak1me($harga);
    echo "Rp. $total";
} elseif ($harga > 25000 and $harga < 50000 and $vocher == "DITRAKTIRDENY" and $ongkir < 1.5 and $pajak === true) {
    $total = diskon25pajak1me($harga);
    echo "Rp. $total";
} elseif ($harga > 25000 and $harga < 50000 and $vocher == "DITRAKTIRDENY" and $ongkir < 1.5 and $pajak === false) {
    $total = diskon25pajak0me($harga);
    echo "Rp. $total";
} elseif ($ongkir > 1.5 and $pajak === true) {
    $total = pajak1($harga, $ongkir);
    echo "Rp. $total";
} elseif ($ongkir > 1.5 and $pajak === false) {
    $total = pajak0($harga, $ongkir);
    echo "Rp. $total";
} elseif ($ongkir < 1.5 and $pajak === true) {
    $total = pajak1me($harga);
    echo "Rp. $total";
} elseif ($ongkir < 1.5 and $pajak === false) {
    $total = pajak0me($harga);
    echo "Rp. $total";
}
