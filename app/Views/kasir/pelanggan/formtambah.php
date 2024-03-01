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
                                       <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2 tombolTambah " onclick="window.location='<?= site_url('pelanggan/index') ?>'">
                                           <span class="btn-inner--icon">
                                               <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                                                   <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                                               </svg>
                                           </span>
                                           <span class="btn-inner--text">Kembali</span>
                                       </button>
                                   </div>
                               </div>
                           </div>

                           <div class="card-body">
                               <?= form_open_multipart('', ['class' => 'formsimpanpelanggan']) ?>
                               <?= csrf_field(); ?>


                               <div class="form-group">
                                   <label for="pel_nama">Nama Pelanggan</label>
                                   <div class="col-sm-6">
                                       <input type="text" class="form-control" id="pel_nama" name="pel_nama">
                                       <div class="errorPelNama" style="display: none;">
                                       </div>
                                   </div>
                               </div>


                               <div class="form-group">
                                   <label for="pel_alamat">Alamat</label>
                                   <div class="col-sm-6">
                                       <input type="text" class="form-control" id="pel_alamat" name="pel_alamat">
                                       <div class="errorPelAlamat" style="display: none;">
                                       </div>
                                   </div>
                               </div>

                               <div class="form-group">
                                   <label for="pel_telp">Nomor Telepom</label>
                                   <div class="col-sm-6">
                                       <input type="text" class="form-control" id="pel_telp" name="pel_telp">
                                       <div class="errorPelTelp" style="display: none;">
                                       </div>
                                   </div>
                               </div>




                               <div class="form-group">
                                   <label for="uploadgambar"></label>
                                   <div class="col-sm-4">
                                       <button type="submit" class="btn btn-dark btn-lg tombolSimpanPelanggan">Simpan</button>
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
               $(document).ready(function() {


                   $('.tombolSimpanPelanggan').click(function(e) {
                       e.preventDefault();

                       let form = $('.formsimpanpelanggan')[0];

                       let data = new FormData(form);

                       $.ajax({
                           type: "post",
                           url: "<?= site_url('pelanggan/simpandata') ?>",
                           data: data,
                           dataType: "json",
                           enctype: 'multipart/form-data',
                           processData: false,
                           contentType: false,
                           cache: false,
                           beforeSend: function() {
                               $('.tombolSimpanPelanggan').html('<i class="spinner-grow spinner-grow-sm"></i>');
                               $('.tombolSimpanPelanggan').prop('disabled', true);
                           },
                           complete: function() {
                               $('.tombolSimpanPelanggan').html('Simpan');
                               $('.tombolSimpanPelanggan').prop('disabled', false);
                           },
                           success: function(response) {
                               if (response.error) {
                                   let msg = response.error;
                                   if (msg.errorPelNama) {
                                       $('.errorPelNama').html(msg.errorPelNama).show();
                                       $('#pel_nama').addClass('is-invalid');
                                   } else {
                                       $('.errorPelNama').fadeOut();
                                       $('#pel_nama').removeClass('is-invalid');
                                       $('#pel_nama').addClass('is-valid');
                                   }

                                   if (msg.errorPelAlamat) {
                                       $('.errorPelAlamat').html(msg.errorPelAlamat).show();
                                       $('#pel_alamat').addClass('is-invalid');
                                   } else {
                                       $('.errorPelAlamat').fadeOut();
                                       $('#pel_alamat').removeClass('is-invalid');
                                       $('#pel_alamat').addClass('is-valid');
                                   }

                                   if (msg.errorPelTelp) { // Corrected from errorPerTelp to errorPelTelp
                                       $('.errorPelTelp').html(msg.errorPelTelp).show();
                                       $('#pel_telp').addClass('is-invalid');
                                   } else {
                                       $('.errorPelTelp').fadeOut();
                                       $('#pel_telp').removeClass('is-invalid');
                                       $('#pel_telp').addClass('is-valid');
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