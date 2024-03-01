<style>
    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #f2f2f2;
        text-align: left;
    }

    .table tbody tr:hover {
        background-color: #f5f5f5;
    }

    .text-sm {
        font-size: 0.875rem;
        /* Adjust as needed */
    }

    .text-xs {
        font-size: 0.75rem;
        /* Adjust as needed */
    }

    .font-weight-semibold {
        font-weight: 600;
    }

    .text-dark {
        color: #343a40;
        /* Adjust as needed */
    }

    .text-secondary {
        color: #6c757d;
        /* Adjust as needed */
    }

    .opacity-7 {
        opacity: 0.7;
        /* Adjust as needed */
    }

    .align-items-center {
        align-items: center;
    }

    .d-flex {
        display: flex;
    }

    .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }

    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .ms-1 {
        margin-left: 0.25rem;
    }

    .ps-2 {
        padding-left: 0.5rem;
    }
</style>

<table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="d-flex align-items-center py-3 px-4 text-sm">

                <span class="text-xs font-weight-semibold opacity-7 ms-1">No</span>
            </th>
            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Barcode</th>
            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Nama Produk</th>
            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Stok</th>
            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Harga Beli</th>
            <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Harga Jual</th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1 + (($nohalaman - 1)  * 5);
        foreach ($dataproduk as $row) :  ?>
            <tr>
                <td class="d-flex align-items-center py-3 px-4 text-sm">

                    <span class="font-weight-semibold text-dark ms-1"><?= $nomor++; ?></span>
                </td>
                <td>
                    <span class="text-sm"><?= $row['kodebarcode']; ?></span>
                </td>
                <td>
                    <span class="text-sm"><?= $row['namaproduk']; ?></span>
                </td>
                <td>
                    <span class="text-sm"><?= $row['stok_tersedia'] ?></span>
                </td>
                <td>
                    <span class="text-sm"><?= $row['harga_beli'] ?></span>
                </td>
                <td>
                    <span class="text-sm"><?= $row['harga_jual'] ?></span>
                </td>

            </tr>

        <?php endforeach; ?>

    </tbody>
</table>