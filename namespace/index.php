<?php 

require_once 'App/init.php';

// $produk1 = new Komik("naruto", "masashi kishimoto", "shonen jump", 30000, 100);


// $produk2 = new game("uncharted", "neil drucmann", "sony computer", 25000, 50);
 


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";



use App\service\User as serviceUser;
use App\Produk\User as ProdukUser;

new serviceUser();
echo "<br>";
new ProdukUser();


















