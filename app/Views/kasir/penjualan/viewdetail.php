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
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>