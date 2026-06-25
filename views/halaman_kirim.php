<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Subkontrak - Pengiriman</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f9;">

    <h2 style="color: #333;">Form Pengiriman Barang Subkontrak</h2>
    <hr>
    
    <?php if (isset($hasilProses)): ?>
        <div style="padding: 15px; margin-bottom: 20px; background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; border-radius: 4px;">
            <strong>Status Transaksi:</strong> <?php echo $hasilProses['pesan']; ?>
        </div>
    <?php endif; ?>

    <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); width: 400px;">
        <h3>Detail Pengiriman:</h3>
        <ul style="line-height: 1.8;">
            <li><strong>Item Material:</strong> Pipa Besi Baja 2 Inch</li>
            <li><strong>Jumlah (Qty):</strong> 150 Pcs</li>
            <li><strong>Tujuan Vendor:</strong> PT. Subcont Maju Jaya</li>
        </ul>
        
        <br>
        <a href="index.php?aksi=proses_kirim" style="display: inline-block; padding: 10px 20px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px; font-weight: bold;">Konfirmasi & Kirim Barang</a>
    </div>

</body>
</html>