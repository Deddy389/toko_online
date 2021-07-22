<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            text-align: center;
        }
    </style>
</head>

<body>
    <div style="font-size:15px Arial; color:'#dddddd'; text-align:center ">PEMERINTAH Kab. Pandeglang</div>
    <div style="font-size:15px Arial; color:'#dddddd';text-align:center ">SKPD Rumah Sakit Umum Daerah (RSUD) Berkah</div>
    <hr>
    <div style="text-align: center;">
        SURAT PERNYATAAN PENGAJUAN SPP-LS<br>
        Nomor : <?= $pembeli->username ?>
    </div>
    <div style="text-align: justify;">
        Sehubungan dengan Surat Perintah Pembayaran Langsung (SPP-LS) Nomor : <?= $pembeli->username ?> Tanggal <?= date('d-m-Y', strtotime($transaksi->created_date)) ?> yang kami ajukan sebesar <?= "Rp" . number_format($transaksi->total_harga, 2, ',', '.') ?> (<?= terbilang("$transaksi->total_harga") ?>) Untuk Keperluan SKPD Rumah Sakit Umum Daerah (RSUD) Berkah Kabupaten Pandeglang Tahun Anggaran 2021, dengan ini menyatakan dengan sebenarnya bahwa :<br>
        1. Jumlah Langsung (LS) tersebut diatas akan digunakan untuk keperluan guna membiayai kegiatan yang akan kami laksanakan sesuai DPA-SKPD.<br>
        2. Jumlah Langsung (LS) tersebut tidak akan digunakan untuk membiayai pengeluaran-pengeluaran yang menurut ketentuan yang berlaku harus dilakukan dengan pembayaran Langsung (LS).<br>
        Demikian surat pernyataan ini dibuat untuk melengkapi persyaratan pengajuan SPP-LS SKPD kami.<br>
        <p></p>
        <table>
            <tr>
                <td></td>
                <td>Mengetahui,<br>
                    Pengguna Anggaran/Kuasa Pengguna Anggaran<br>
                    <p></p>
                    <p></p>
                    dr. Cut Budiarti Emansada<br>
                    Pembina / IV.a<br>
                    Nip. 19700729 200911 2 001
                </td>
            </tr>
        </table>
    </div>
</body>

</html>