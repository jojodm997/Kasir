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
                                    <span class="btn-inner--icon">
                                        <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                        </svg>
                                    </span>
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
                                                <button class="btn btn-sm btn-primary" type="button">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tanggal">Aksi</label>
                                        <div class="input-group">
                                            <button class="btn btn-danger btn-sm" type="button" id="btnHapusTransaksi">
                                                <i class="fa fa-trash-alt"></i>
                                            </button>&nbsp;
                                            <button class="btn btn-success" type="button" id="btnSimpanTransaksi">
                                                <i class="fa fa-save"></i>
                                            </button>&nbsp;
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


    <script>
        $(document).ready(function() {

            $('body').addClass('sidenav-collapse-main');

            dataDetailPenjualan();

            $('#kodebarcode').keydown(function(e) {
                if (e.keyCode == 13) {
                    e.preventDefault();
                    cekKode();
                }
            });
        });

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
                error: function(xhr, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
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
                    error: function(xhr, thrownError) {
                        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                    }
                });
            } else {
                alert('ada');
            }
        }
    </script>

    <?= $this->endSection() ?>