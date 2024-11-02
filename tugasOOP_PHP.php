<?php

class Buku {
    protected $judul;
    protected $penulis;
    protected $tahunTerbit;

    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function getTahunTerbit() {
        return $this->tahunTerbit;
    }

    public function infoBuku() {
        return "Judul: {$this->judul}\nPenulis: {$this->penulis}\nTahun Terbit: {$this->tahunTerbit}\n";
    }
}

class BukuDigital extends Buku {
    private $ukuranFile;
    private $formatFile;

    public function __construct($judul, $penulis, $tahunTerbit, $ukuranFile, $formatFile) {
        parent::__construct($judul, $penulis, $tahunTerbit);
        $this->ukuranFile = $ukuranFile;
        $this->formatFile = $formatFile;
    }

    public function infoBuku() {
        $info = parent::infoBuku();
        $info .= "Ukuran File: {$this->ukuranFile} MB\nFormat File: {$this->formatFile}\n";
        return $info;
    }
}

// Daftar buku cetak dan digital
$daftarBuku = [
    new Buku("Laskar Pelangi", "Andrea Hirata", 2005),
    new Buku("Bumi Manusia", "Pramoedya Ananta Toer", 1980),
    new Buku("Negeri 5 Menara", "Ahmad Fuadi", 2009),
    new Buku("Supernova: Ksatria, Puteri, dan Bintang Jatuh", "Dewi Lestari", 2001),
    new Buku("Sepatu Dahlan", "Khrisna Pabichara", 2012),
];

$daftarBukuDigital = [
    new BukuDigital("Laskar Pelangi", "Andrea Hirata", 2005, 3, "ePub"),
    new BukuDigital("Bumi Manusia", "Pramoedya Ananta Toer", 1980, 5, "PDF"),
    new BukuDigital("Negeri 5 Menara", "Ahmad Fuadi", 2009, 2, "ePub"),
    new BukuDigital("Supernova: Ksatria, Puteri, dan Bintang Jatuh", "Dewi Lestari", 2001, 4, "Mobi"),
    new BukuDigital("Sepatu Dahlan", "Khrisna Pabichara", 2012, 2, "PDF"),
];

// Menampilkan informasi semua buku cetak
echo "Informasi Buku Cetak:\n";
foreach ($daftarBuku as $buku) {
    echo $buku->infoBuku();
}

echo "\n";

// Menampilkan informasi semua buku digital
echo "Informasi Buku Digital:\n";
foreach ($daftarBukuDigital as $bukuDigital) {
    echo $bukuDigital->infoBuku();
}

?>
