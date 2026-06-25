<?php
// Ini adalah Controller (Otak Aplikasi untuk Logika Bisnis)

class PengirimanController {
    
    // Fungsi 1: Memproses data pengiriman barang ke subcont
    public function kirimBarang($namaBarang, $jumlahKirim, $namaVendor) {
        $status = "SUKSES";
        $pesan = "Konfirmasi Gudang: Berhasil mengirimkan " . $jumlahKirim . " unit " . $namaBarang . " ke Vendor Subcont: " . $namaVendor;
        
        return [
            'status' => $status,
            'pesan' => $pesan
        ];
    }

    // Fungsi 2: Memproses data penerimaan kembali dari subcont
    public function terimaBarang($namaBarang, $jumlahTerima, $namaVendor, $kondisi) {
        $status = "SUKSES";
        $pesan = "Konfirmasi Gudang: Berhasil menerima kembali " . $jumlahTerima . " Pcs " . $namaBarang . " dari " . $namaVendor . " dengan kondisi " . $kondisi;

        return [
            'status' => $status,
            'pesan' => $pesan
        ];
    }
}
?>