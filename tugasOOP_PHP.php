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

    public function setTahunTerbit($tahunTerbit) {
        $this->tahunTerbit = $tahunTerbit;
    }

    public function infoBuku() {
        return "Judul: {$this->judul}, Penulis: {$this->penulis}, Tahun Terbit: {$this->tahunTerbit}";
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

    public function getUkuranFile() {
        return $this->ukuranFile;
    }

    public function setUkuranFile($ukuranFile) {
        $this->ukuranFile = $ukuranFile;
    }

    public function getFormatFile() {
        return $this->formatFile;
    }

    public function setFormatFile($formatFile) {
        $this->formatFile = $formatFile;
    }

    public function infoBuku() {
        $info = parent::infoBuku();
        $info .= ", Ukuran File: {$this->ukuranFile} MB, Format File: {$this->formatFile}";
        return $info;
    }
}

//contoh penggunaan
$bukuCetak = new Buku("Laskar Pelangi", "Andrea Hirata", 2005);
echo $bukuCetak->infoBuku() . PHP_EOL;

$bukuDigital = new BukuDigital("Laskar Pelangi", "Andrea Hirata", 2005, 3, "ePub");
echo $bukuDigital->infoBuku() . PHP_EOL;
?>
