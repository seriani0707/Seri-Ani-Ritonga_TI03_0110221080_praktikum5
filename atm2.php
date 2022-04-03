<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Seri Ani Ritonga</title>
  </head>
  <body>
  <div class="container-fluid">
  <table class="table table-success table-striped">
  <thead class="table-dark">
    <tr>
        <th scope="col">No</th>
        <th scope="col">No Account</th>
        <th scope="col">Pemilik</th>
        <th scope="col">Saldo</th>
    </tr>
    </thead>

<?php
require_once 'class_accountbank.php';

$ab1 = new AccountBank("C001",6000000,"Ahmad");
$ab2 = new AccountBank("C002",5350000,"Budi");
$ab3 = new AccountBank("C003",2500000,"Kurniawan");

echo '<tbody>
    <tr>
        <th scope="row">1</th>
        <td>'.$ab1->nomor.'</td>
        <td>'.$ab1->pemilik.'</td>
        <td>'.$ab1->saldo.'</td>
    </tr>

    <tr>
        <th scope="row">2</th>
        <td>'.$ab2->nomor.'</td>
        <td>'.$ab2->pemilik.'</td>
        <td>'.$ab2->saldo.'</td>
    </tr>

    <tr>
        <th scope="row">3</th>
        <td>'.$ab3->nomor.'</td>
        <td>'.$ab3->pemilik.'</td>
        <td>'.$ab3->saldo.'</td>
    </tr>
</tbody>'.'<br/>'.'</table>';



echo '<h4>Saldo Awal Ahmad</h4>';
$ab1->cetak();

echo '<h4>Saldo Awal Budi</h4>';
$ab2->cetak();

echo '<h4>Saldo Awal Kurniawan</h4>';
$ab3->cetak();

echo '<h4>Ahmad Nabung</h4>';
$ab1->deposit(1000000);
echo 'nabung : 1000000 <br/>';
$ab1->cetak();

echo '<h4>Ahmad Transfer Ke Kurniawan</h4>';
$ab3->cetak();
echo '<br>Ahmad transfer uang ke Kurniawan 1500000<br/>';
echo 'Biaya Admin : '.AccountBank::$biaya_admin.'<br/>';
$ab1->transfer($ab3,1500000);
$ab1->cetak();

echo '<h4>Saldo Akhir Kurniawan</h4>';
$ab3->cetak();

echo '<h4>Ahmad Transfer Ke Budi</h4>';
$ab2->cetak();
echo '<br>Ahmad transfer uang ke Budi 500000<br/>';
echo 'Biaya Admin : '.AccountBank::$biaya_admin.'<br/>';
$ab1->transfer($ab2,500000);
$ab1->cetak();

echo '<h4>Saldo Budi</h4>';
$ab2->cetak();

echo '<h4>Budi Tarik Uang</h4>';
$ab2->witdrawl(2500000);
echo 'tarik uang : 2500000 <br/>';
$ab2->cetak();

?>