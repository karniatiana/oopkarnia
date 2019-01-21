<?php 

interface infoProduk {
	public function getInfoProduk();
}

abstract class produk {
	protected $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga; 
	}
	public function setJudul( $judul ){
		$this->judul = $judul;
	}
	public function getJudul() {
		return $this->judul;
	}
	public function setPenulis( $penulis ){
		$this->penulis = $penulis;
	}
	public function getPenulis() {
		return $this->penulis;
	}
	public function setPenerbit( $penerbit ){
		$this->penerbit = $penerbit;
	}
	public function getpenerbit() {
		return $this->penerbit;
	}
	public function setDiskon( $diskon ) {
		$this->diskon = $diskon;
	}
	public function getDiskon() {
		return $this->diskon;
	}
	public function setHarga( $harga ){
		$this->harga = $harga;
	}
	public function getHarga() {
		return $this->harga - ( $this->harga * $this->diskon / 100 );
	}
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfo();
	




	
}


class komik extends produk implements infoProduk {
	public $jmlHalaman;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {

		 parent::__construct($judul, $penulis, $penerbit, $harga);
		 $this->jmlHalaman = $jmlHalaman;

	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		
	return $str;
	}

	public function getInfoProduk() {
		$str = "komik : " . $this->getInfo() . " - {$this->jmlHalaman} halaman."; 
		return $str;
	}
}


class game extends produk implements infoProduk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function getInfo() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
		
	return $str;
	}



	public function getInfoProduk() {
		$str = "game : " . $this->getInfo() . " ~ {$this->waktuMain} jam.";
		return $str;
	}
}




class CetakInfoProduk {
	public $daftarProduk = array();

	public function tambahProduk( produk $produk) {
		$this->daftarProduk[] = $produk;
	}

	public function cetak() {
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}
}


$produk1 = new komik("naruto", "masashi kishimoto", "shonen jump", 30000, 100);


$produk2 = new game("uncharted", "neil drucmann", "sony computer", 25000, 50);
 


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();










 ?>