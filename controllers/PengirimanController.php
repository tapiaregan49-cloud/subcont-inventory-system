<?php
// Ini adalah Controller (Otak Aplikasi untuk Logika Bisnis)

class PengirimanController {
    
    // Fungsi untuk memproses data pengiriman barang ke subcont
    public function kirimBarang($namaBarang, $jumlahKirim, $namaVendor) {
        
        // Membaca kodingan:
        // Di sini kita bisa menaruh aturan, misalnya mengurangi stok gudang utama
        $status = "SUKSES";
        $pesan = "Konfirmasi Gudang: Berhasil mengirimkan " . $jumlahKirim . " unit " . $namaBarang . " ke Vendor Subcont: " . $namaVendor;
        
        // Mengembalikan hasil proses dalam bentuk Array agar bisa dibaca oleh Tampilan (View)
        return [
            'status' => $status,
            'pesan' => $pesan
        ];
    }
}
?>