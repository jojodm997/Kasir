       <?= $this->extend('templates/index'); ?>

       <?= $this->section('page-content'); ?>



       <script src="<?= base_url('assets/plugins/autoNumeric.js') ?>"></script>
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
                                       <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2 tombolTambah " onclick="window.location='<?= site_url('produk/index') ?>'">
                                           <span class="btn-inner--icon">
                                               <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                                                   <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                               </svg>
                                           </span>
                                           <span class="btn-inner--text">Kembali</span>
                                       </button>
                                   </div>
                               </div>
                           </div>

                           <div class="card-body">
                               <?= form_open_multipart('', ['class' => 'formsimpanproduk']) ?>
                               <?= csrf_field(); ?>

                               <div class="form-group">
                                   <label for="kodebarcode">Kode Barcode</label>
                                   <div class="col-sm-8">
                                       <input type="text" class="form-control" id="kodebarcode" name="kodebarcode" value="<?= $kode; ?>" readonly>
                                       <div class="errorKodeBarcode" style="display: none;">
                                       </div>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label for="namaproduk">Nama Produk</label>
                                   <div class="col-sm-8">
                                       <input type="text" class="form-control" id="namaproduk" name="namaproduk" value="<?= $nama; ?>">
                                       <div class="errorNamaProduk" style="display: none;">
                                       </div>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label for="stok">Stok tersedia</label>
                                   <div class="col-sm-4">
                                       <input type="text" class="form-control" id="stok" name="stok" value="<?= $stok; ?>">
                                       <div class="errorStok" style="display: none;">
                                       </div>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label for="kategori" class="col-sm-4">Kategori</label>
                                   <div class="col-sm-4">
                                       <div class="input-group">
                                           <select name="kategori" id="kategori" class="form-control">
                                               <?php
                                                foreach ($datakategori as $k) :

                                                    if ($k['katid'] == $produkkategori) :
                                                        echo "<option value=\"$k[katid]\" selected>$k[katnama]</option>";
                                                    else :
                                                        echo "<option value=\"$k[katid]\">$k[katnama]</option>";


                                                    endif;

                                                endforeach;

                                                ?>
                                           </select>

                                       </div>
                                       <div class="errorKategori" style="display: none;">
                                       </div>
                                   </div>

                                   <div class="form-group">
                                       <label for="satuan" class="col-sm-4">Satuan</label>
                                       <div class="col-sm-4">
                                           <div class="input-group">
                                               <select name="satuan" id="satuan" class="form-control">
                                                   <?php
                                                    foreach ($datasatuan as $s) :

                                                        if ($s['satid'] == $produksatuan) :
                                                            echo "<option value=\"$s[satid]\" selected>$s[satnama]</option>";
                                                        else :
                                                            echo "<option value=\"$s[satid]\">$s[satnama]</option>";


                                                        endif;

                                                    endforeach;

                                                    ?>
                                               </select>

                                           </div>
                                           <div class="errorSatuan" style="display: none;">
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <label for="hargabeli">Harga Beli (Rp)</label>
                                           <div class="col-sm-4">
                                               <input type="text" class="form-control" id="hargabeli" value="<?= $hargabeli ?>" name="hargabeli" style="text-align: right;">
                                               <div class="errorHargaBeli" style="display: none;">
                                               </div>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <label for="hargajual">Harga Jual (Rp)</label>
                                           <div class="col-sm-4">
                                               <input type="text" class="form-control" id="hargajual" value="<?= $hargajual ?>" name="hargajual" style="text-align: right;">
                                               <div class="errorHargaJual" style="display: none;">
                                               </div>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <label for="uploadgambar">Gambar Produk</label>
                                           <div class="col-sm-4">
                                               <img src="<?= base_url($gambarproduk) ?>" style="width: 100%;" class="img-thumbnail">
                                               <div class="errorUpload" style="display: none;">
                                               </div>
                                           </div>
                                       </div>

                                       <div class="form-group">
                                           <label for="uploadgambar">Ganti Gambar</label>
                                           <div class="col-sm-4">
                                               <input type="file" class="form-control" id="uploadgambar" name="uploadgambar">
                                               <div class="errorUpload" style="display: none;">
                                               </div>
                                           </div>
                                       </div>



                                       <div class="form-group">
                                           <label for="uploadgambar"></label>
                                           <div class="col-sm-4">
                                               <button type="submit" class="btn btn-dark btn-lg tombolSimpanProduk">Update</button>
                                           </div>
                                       </div>



                                       <?= form_close(); ?>

                                   </div>
                               </div>
                           </div>
                       </div>

                   </div>
                   <div class="viewmodal" style="display:none;"></div>
                   <script>
                       $('.tombolSimpanProduk').click(function(e) {
                           e.preventDefault();

                           let form = $('.formsimpanproduk')[0];

                           let data = new FormData(form);

                           $.ajax({
                               type: "post",
                               url: "<?= site_url('produk/updatedata') ?>",
                               data: data,
                               dataType: "json",
                               enctype: 'multipart/form-data',
                               processData: false,
                               contentType: false,
                               cache: false,
                               beforeSend: function() {
                                   $('.tombolSimpanProduk').html('<i class="spinner-grow spinner-grow-sm"></i>');
                                   $('.tombolSimpanProduk').prop('disabled', true);
                               },
                               complete: function() {
                                   $('.tombolSimpanProduk').html('Update');
                                   $('.tombolSimpanProduk').prop('disabled', false);
                               },
                               success: function(response) {
                                   if (response.error) {
                                       let msg = response.error;


                                       if (msg.errorNamaProduk) {
                                           $('.errorNamaProduk').html(msg.errorNamaProduk).show();
                                           $('#namaproduk').addClass('is-invalid');
                                       } else {
                                           $('.errorNamaProduk').fadeOut();
                                           $('#namaproduk').removeClass('is-invalid');
                                           $('#namaproduk').addClass('is-valid');
                                       }

                                       if (msg.errorStok) {
                                           $('.errorStok').html(msg.errorStok).show();
                                           $('#stok').addClass('is-invalid');
                                       } else {
                                           $('.errorStok').fadeOut();
                                           $('#stok').removeClass('is-invalid');
                                           $('#stok').addClass('is-valid');
                                       }

                                       if (msg.errorHargaBeli) {
                                           $('.errorHargaBeli').html(msg.errorHargaBeli).show();
                                           $('#hargabeli').addClass('is-invalid');
                                       } else {
                                           $('.errorHargaBeli').fadeOut();
                                           $('#hargabeli').removeClass('is-invalid');
                                           $('#hargabeli').addClass('is-valid');
                                       }

                                       if (msg.errorHargaJual) {
                                           $('.errorHargaJual').html(msg.errorHargaJual).show();
                                           $('#hargajual').addClass('is-invalid');
                                       } else {
                                           $('.errorHargaJual').fadeOut();
                                           $('#hargajual').removeClass('is-invalid');
                                           $('#hargajual').addClass('is-valid');
                                       }

                                       if (msg.errorUpload) {
                                           $('.errorUpload').html(msg.errorUpload).show();
                                           $('#uploadgambar').addClass('is-invalid');
                                       }
                                   } else {
                                       Swal.fire({
                                           icon: "success",
                                           title: "Berhasil",
                                           html: "response sukses"
                                       }).then((result) => {
                                           /* Read more about isConfirmed, isDenied below */
                                           if (result.isConfirmed) {
                                               window.location.reload();

                                           }
                                       });;
                                   }
                               },
                               error: function(xhr, thrownError) {
                                   alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                               }




                           });

                       });

                       $(document).ready(function() {
                           $('#hargabeli').autoNumeric('init', {
                               aSep: ',',
                               aDec: '.',
                               mDec: '2'
                           });
                           $('#hargajual').autoNumeric('init', {
                               aSep: ',',
                               aDec: '.',
                               mDec: '2'
                           });
                           $('#stok').autoNumeric('init', {
                               aSep: ',',
                               aDec: '.',
                               mDec: '0'
                           });

                           $('.tombolSimpanProduk').click(function(e) {
                               e.preventDefault();

                               let form = $('.formsimpanproduk')[0];

                               let data = new FormData(form);

                               $.ajax({
                                   type: "post",
                                   url: "<?= site_url('produk/simpandata') ?>",
                                   data: data,
                                   dataType: "json",
                                   enctype: 'multipart/form-data',
                                   processData: false,
                                   contentType: false,
                                   cache: false,
                                   beforeSend: function() {
                                       $('.tombolSimpanProduk').html('<i class="spinner-grow spinner-grow-sm"></i>');
                                       $('.tombolSimpanProduk').prop('disabled', true);
                                   },
                                   complete: function() {
                                       $('.tombolSimpanProduk').html('Simpan');
                                       $('.tombolSimpanProduk').prop('disabled', false);
                                   },
                                   success: function(response) {
                                       if (response.error) {
                                           let msg = response.error;
                                           if (msg.errorKodeBarcode) {
                                               $('.errorKodeBarcode').html(msg.errorKodeBarcode).show();
                                               $('#kodebarcode').addClass('is-invalid');
                                           } else {
                                               $('.errorKodeBarcode').fadeOut();
                                               $('#kodebarcode').removeClass('is-invalid');
                                               $('#kodebarcode').addClass('is-valid');
                                           }

                                           if (msg.errorNamaProduk) {
                                               $('.errorNamaProduk').html(msg.errorNamaProduk).show();
                                               $('#namaproduk').addClass('is-invalid');
                                           } else {
                                               $('.errorNamaProduk').fadeOut();
                                               $('#namaproduk').removeClass('is-invalid');
                                               $('#namaproduk').addClass('is-valid');
                                           }

                                           if (msg.errorStok) {
                                               $('.errorStok').html(msg.errorStok).show();
                                               $('#stok').addClass('is-invalid');
                                           } else {
                                               $('.errorStok').fadeOut();
                                               $('#stok').removeClass('is-invalid');
                                               $('#stok').addClass('is-valid');
                                           }

                                           if (msg.errorKategori) {
                                               $('.errorKategori').html(msg.errorKategori).show();
                                               $('#kategori').addClass('is-invalid');
                                           } else {
                                               $('.errorKategori').fadeOut();
                                               $('#kategori').removeClass('is-invalid');
                                               $('#kategori').addClass('is-valid');
                                           }

                                           if (msg.errorSatuan) {
                                               $('.errorSatuan').html(msg.errorSatuan).show();
                                               $('#satuan').addClass('is-invalid');
                                           } else {
                                               $('.errorSatuan').fadeOut();
                                               $('#satuan').removeClass('is-invalid');
                                               $('#satuan').addClass('is-valid');
                                           }

                                           if (msg.errorHargaBeli) {
                                               $('.errorHargaBeli').html(msg.errorHargaBeli).show();
                                               $('#hargabeli').addClass('is-invalid');
                                           } else {
                                               $('.errorHargaBeli').fadeOut();
                                               $('#hargabeli').removeClass('is-invalid');
                                               $('#hargabeli').addClass('is-valid');
                                           }

                                           if (msg.errorHargaJual) {
                                               $('.errorHargaJual').html(msg.errorHargaJual).show();
                                               $('#hargajual').addClass('is-invalid');
                                           } else {
                                               $('.errorHargaJual').fadeOut();
                                               $('#hargajual').removeClass('is-invalid');
                                               $('#hargajual').addClass('is-valid');
                                           }

                                           if (msg.errorUpload) {
                                               $('.errorUpload').html(msg.errorUpload).show();
                                               $('#uploadgambar').addClass('is-invalid');
                                           }
                                       } else {
                                           Swal.fire({
                                               icon: "success",
                                               title: "Berhasil",
                                               html: "response sukses"
                                           }).then((result) => {
                                               /* Read more about isConfirmed, isDenied below */
                                               if (result.isConfirmed) {
                                                   window.location.reload();

                                               }
                                           });;
                                       }
                                   },
                                   error: function(xhr, thrownError) {
                                       alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                                   }




                               });

                           });

                       });
                   </script>




                   <?= $this->endSection() ?>