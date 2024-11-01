<?php
//fungsi sapaan untuk menyapa seseorang berdasarkan nama dan waktu
function sapaan($nama = "Tamu", $waktu = null) {
    //jika waktu tidak diisi, gunakan sapaan umum
    if ($waktu === null) {
        return "Halo, $nama! Selamat datang!";
    }

    //memastikan sapaan sesuai dengan waktu yang diberikan
    switch ($waktu) {
        case "pagi":
            return "Selamat pagi, $nama! Semoga harimu penuh semangat dan produktif.";
        case "siang":
            return "Selamat siang, $nama! Jangan lupa istirahat sejenak dan makan siang.";
        case "sore":
            return "Selamat sore, $nama! Waktu yang pas untuk menikmati teh atau kopi.";
        case "malam":
            return "Selamat malam, $nama! Semangatt menjadi anak pertama yang penuh tanggung jawab. GOOD LUCK!!";
        default:
            return "Halo, $nama! Selamat datang!";
    }
}

//contoh pemanggilan fungsi dengan newline setelah setiap output
echo sapaan() . "\n";               // Output: Halo, Tamu! Selamat datang!
echo sapaan("Nanda") . "\n";         // Output: Halo, Nanda! Selamat datang!
echo sapaan("Nanda", "pagi") . "\n"; // Output: Selamat pagi, Nanda! Semoga harimu penuh semangat dan produktif.
echo sapaan("Putra", "siang") . "\n";// Output: Selamat siang, Putra! Jangan lupa istirahat sejenak dan makan siang.
echo sapaan("Prasetyo", "malam") . "\n";// Output: Selamat malam, Prasetyo! Semoga istirahatmu tenang dan mimpi indah.
?>
