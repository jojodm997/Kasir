<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid py-4 px-5">
    <div class="row">
        <div class="col-12">
            <div class="card card-background card-background-after-none align-items-start mt-4 mb-5">
                <div class="full-background" style="
                  background-image: url('<?= base_url() ?>/Corporate/assets/img/header-blue-purple.jpg');
                "></div>
                <div class="card-body text-start p-4 w-100">
                    <h3 class="text-white mb-2">Collect your benefits 🔥</h3>
                    <p class="mb-4 font-weight-semibold">
                        Check all the advantages and choose the best.
                    </p>
                    <button type="button" class="btn btn-outline-white btn-blur btn-icon d-flex align-items-center mb-0">
                        <span class="btn-inner--icon">
                            <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="d-block me-2">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7 14C10.866 14 14 10.866 14 7C14 3.13401 10.866 0 7 0C3.13401 0 0 3.13401 0 7C0 10.866 3.13401 14 7 14ZM6.61036 4.52196C6.34186 4.34296 5.99664 4.32627 5.71212 4.47854C5.42761 4.63081 5.25 4.92731 5.25 5.25V8.75C5.25 9.0727 5.42761 9.36924 5.71212 9.52149C5.99664 9.67374 6.34186 9.65703 6.61036 9.47809L9.23536 7.72809C9.47879 7.56577 9.625 7.2926 9.625 7C9.625 6.70744 9.47879 6.43424 9.23536 6.27196L6.61036 4.52196Z" />
                            </svg>
                        </span>
                        <span class="btn-inner--text">Watch more</span>
                    </button>
                    <img src="<?= base_url() ?>/Corporate/assets/img/3d-cube.png" alt="3d-cube" class="position-absolute top-0 end-1 w-25 max-width-200 mt-n6 d-sm-block d-none" />
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card border shadow-xs mb-4">
                <div class="card-header border-bottom pb-0">
                    <div class="d-sm-flex align-items-center mb-3">
                        <div>
                            <h6 class="font-weight-semibold text-lg mb-0">
                                Recent transactions
                            </h6>
                            <p class="text-sm mb-sm-0">
                                These are details about the last transactions
                            </p>
                        </div>
                        <div class="ms-auto d-flex">
                            <div class="input-group input-group-sm ms-auto me-2">
                                <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2 tombolTambah " onclick="window.location='<?= site_url('produk/add') ?>'">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>

                                    <span class="btn-inner--text">Tambah data</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="card card-default color-palette-box">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nofaktur">Faktur</label>
                                        <input type="text" class="form-control form-control-sm" style="color:red;font-weight:bold;" name="nofaktur" id="nofaktur" readonly value="<?= $nofaktur ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control form-control-sm" name="tanggal" id="tanggal" readonly value="<?= date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="napel">Pelanggan</label>
                                        <div class="input-group mb-3">
                                            <input type="text" value="-" class="form-control form-control-sm" name="napel" id="napel" readonly>
                                            <input type="hidden" name="kopel" id="kopel" value="0">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-dark btn-icon px-3 me-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="d-block me-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tanggal">Aksi</label>
                                        <div class="input-group">
                                            <button type="button" class="btn btn-dark btn-icon px-3 me-2" id="btnHapusTransaksi">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>


                                            <button class="btn btn-dark" type="button" id="btnSimpanTransaksi">
                                                <i class="fa fa-save"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="kodebarcode">Kode Produk</label>
                                        <input type="text" class="form-control form-control-sm" name="kodebarcode" id="kodebarcode" autofocus>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Nama Produk</label>
                                        <input type="text" class="form-control form-control-sm" name="namaproduk" id="namaproduk" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="jml">Jumlah</label>
                                        <input type="number" class="form-control form-control-sm" name="jumlah" id="jumlah" value="1">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="jml">Total Bayar</label>
                                        <input type="text" class="form-control form-control-lg" name="totalbayar" id="totalbayar" value="0" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 dataDetailPenjualan">

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="viewmodal" style="display: none;"></div>
    <div class="viewmodalpembayaran" style="display: none;"></div>


    <script>
        $(document).ready(function() {

            $('body').addClass('sidenav-collapse-main');

            dataDetailPenjualan();
            hitungTotalBayar();

            $('#kodebarcode').keydown(function(e) {
                if (e.keyCode == 13) {
                    e.preventDefault();
                    cekKode();
                }
            });

            $('#btnHapusTransaksi').click(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Batal Transaksi ?",
                    text: "Yakin Batal Transaksi ?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya Batal",
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "post",
                            url: "<?= site_url('penjualan/batalTransaksi') ?>",
                            data: {
                                nofaktur: $('#nofaktur').val()
                            },
                            dataType: "json",
                            success: function(response) {
                                if (response.sukses == 'berhasil') {
                                    window.location.reload();
                                }

                            },
                            // error: function(xhr, thrownError) {
                            //     alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                            // }
                        })
                    }
                });
            });
            $('#btnSimpanTransaksi').click(function(e) {
                e.preventDefault();
                pembayaran();

            });
        });

        function pembayaran() {
            let nofaktur = $('#nofaktur').val();
            $.ajax({
                type: "post",
                url: "<?= site_url('penjualan/pembayaran') ?>",
                data: {
                    nofaktur: nofaktur,
                    tglfaktur: $('#tanggal').val(),
                    kopel: $('#kopel').val() // Make sure to get the value correctly
                },
                dataType: "json",
                success: function(response) {
                    if (response.error) {
                        Swal.fire({
                            icon: "warning",
                            title: "Maaf...",
                            text: response.error
                        });
                    }

                    if (response.data) {
                        $('.viewmodalpembayaran').html(response.data).show();
                        $('#modalpembayaran').modal('show');
                    }

                },
                // error: function(xhr, thrownError) {
                //     alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                // }
            });
        }

        // function handleAjaxError(xhr, status, error) {
        //     console.error("AJAX Error:");
        //     console.error("Status:", status);
        //     console.error("Error:", error);
        //     console.log("Response Text:", xhr.responseText);
        //     // You can further customize error handling here, such as displaying a message to the user
        // }

        function dataDetailPenjualan() {
            $.ajax({
                type: "post",
                url: "<?= site_url('penjualan/dataDetail') ?>",
                data: {
                    nofaktur: $('#nofaktur').val()
                },
                dataType: "json",
                beforeSend: function() {
                    $('.dataDetailPenjualan').html('<i   class="spinner-grow spinner-grow-sm"></i>');
                },
                success: function(response) {
                    if (response.data) {
                        $('.dataDetailPenjualan').html(
                            response.data
                        );
                    }

                },
                // error: function(xhr, status, error) {
                //     handleAjaxError(xhr, status, error);
                // }
            });
        }

        function cekKode() {
            let kode = $('#kodebarcode').val();

            if (kode.length == 0) {
                $.ajax({
                    url: "<?= site_url('penjualan/viewDataProduk') ?>",
                    dataType: "json",
                    success: function(response) {
                        $('.viewmodal').html(response.viewmodal).show();
                        $('#modalproduk').modal('show');

                    },
                    // error: function(xhr, thrownError) {
                    //     alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    // }
                });
            } else {
                $.ajax({
                    type: "post",
                    url: "<?= site_url('penjualan/simpanTemp') ?>",
                    data: {
                        kodebarcode: kode,
                        namaproduk: $('#namaproduk').val(),
                        jumlah: $('#jumlah').val(),
                        nofaktur: $('#nofaktur').val(),

                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.totaldata == 'banyak') {
                            $.ajax({
                                url: "<?= site_url('penjualan/viewDataProduk') ?>",
                                dataType: "json",
                                data: {
                                    keyword: kode
                                },
                                type: "post",
                                success: function(response) {
                                    $('.viewmodal').html(response.viewmodal).show();
                                    $('#modalproduk').modal('show');

                                },
                                // error: function(xhr, thrownError) {
                                //     alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                                // }
                            });
                        }

                        if (response.sukses == 'berhasil') {
                            dataDetailPenjualan();
                            kosong();
                        }

                        if (response.error) {
                            Swal.fire({
                                title: "Error..",
                                icon: "error",
                                html: response.error
                            });
                            dataDetailPenjualan();
                            kosong();
                        }

                    },
                    // error: function(xhr, thrownError) {
                    //     alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    // }
                });
            }


        }

        function kosong() {
            $('#kodebarcode').val('');
            $('#namaproduk').val('');
            $('#jumlah').val('1');
            $('#kodebarcode').focus('');

            hitungTotalBayar();

        }

        function hitungTotalBayar() {
            $.ajax({
                url: "<?= site_url('penjualan/hitungTotalBayar') ?>",
                dataType: "json",
                data: {
                    nofaktur: $('#nofaktur').val()
                },
                type: "post",
                success: function(response) {
                    if (response.totalbayar) {
                        $('#totalbayar').val(response.totalbayar);
                    }

                },
                // error: function(xhr, thrownError) {
                //     alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                // }
            });
        }
    </script>

    <?= $this->endSection() ?>