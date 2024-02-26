<table class="table table-striped table-sm table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Produk</th>
            <th>Qty</th>
            <th>Hrg.Jual</th>
            <th>Sub Total</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 0;
        foreach ($datadetail->getResultArray() as $r) :
        ?>
            <tr>
                <td><?= $nomor++; ?></td>
                <td><?= $r['kode']; ?></td>
                <td><?= $r['namaproduk']; ?></td>
                <td><?= $r['qty']; ?></td>
                <td style="text-align: right;"><?= number_format($r['hargajual'], 0, ",", "."); ?></td>
                <td style="text-align: right;"><?= number_format($r['subtotal'], 0, ",", "."); ?></td>
                <td>

                    <button type="button" class="btn btn-dark btn-icon px-3 me-2" onclick="hapusitem('<?= $r['id'] ?>','<?= $r['namaproduk'] ?>')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>

<script>
    function hapusitem(id, nama) {
        Swal.fire({
            title: "Hapus item ?",
            html: `Yakin Menghapus Data produk? <strong>${nama}</strong>`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Hapus!",
            cancelButtonText: "Tidak"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "post",
                    url: "<?= site_url('penjualan/hapusItem') ?>",
                    data: {
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.sukses == 'berhasil') {
                            dataDetailPenjualan();
                            kosong();
                        }
                    }
                });
            }
        })
    }
</script>