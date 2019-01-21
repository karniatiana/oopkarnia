<?php 

class produk {
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

}

// $produk1 = new produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new produk();
// $produk2->judul = "sasuke";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2->judul);

$produk3 = new produk();
$produk3->judul = "naruto";
$produk3->penulis = "masashi kishimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = 40000;

$produk4 = new produk();
$produk4->judul = "uncharted";
$produk4->penulis = "neil drucmann";
$produk4->penerbit = "sony computer";
$produk4->harga = 20000;

echo "komik : " . $produk3->getLabel();
echo "<br>";
echo "game : " . $produk4->getLabel();

 ?>