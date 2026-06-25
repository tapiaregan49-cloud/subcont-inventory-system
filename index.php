<?php
// index.php berperan sebagai pintu masuk utama aplikasi

// 1. Panggil file logika Controller yang sudah kita buat
require_once 'controllers/PengirimanController.php';

// 2. Membaca logika: Apakah user mengklik tombol "Konfirmasi & Kirim Barang"?
if (isset($_GET['aksi']) && $_GET['aksi'] == 'proses_kirim') {
    
    // Jalankan fungsi pengiriman barang di controller
    $controller = new PengirimanController();
    
    // Kirim data ke dalam fungsi
    $hasilProses = $controller->kirimBarang("Pipa Besi Baja 2 Inch", 150, "PT. Subcont Maju Jaya");
}

// 3. Panggil dan munculkan halaman tampilan ke layar user
$page = isset($_GET['page']) ? $_GET['page'] : 'kirim';

if (isset($_GET['aksi']) && $_GET['aksi'] == 'proses_terima') {
    $hasilProses = $controller->terimaBarang("Pipa Besi Baja 2 Inch", 148, "PT. Subcont Maju Jaya", "BAGUS");
    $page = 'terima';
}

if ($page == 'terima') {
    require_once 'views/halaman_terima.php';
} else {
    require_once 'views/halaman_kirim.php';
}
?>