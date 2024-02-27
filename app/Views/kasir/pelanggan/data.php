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
                                       <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 me-2 tombolTambah " onclick="window.location='<?= site_url('pelanggan/add') ?>'">
                                           <span class="btn-inner--icon">
                                               <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                                                   <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                               </svg>
                                           </span>
                                           <span class="btn-inner--text">Tambah data</span>
                                       </button>
                                   </div>
                               </div>
                           </div>

                           <div class="card-body px-0 py-0">
                               <!-- <?= form_open('produk/index') ?>
                               <?= csrf_field(); ?>
                               <div class="input-group mb-3">
                                   <input type="text" class="form-control" placeholder="Cari Produk" name="cariproduk" autofocus>
                                   <button type="submit" name="tombolcariproduk" class="btn btn-dark btn-icon d-flex align-items-center">
                                       <span class="btn-inner--icon">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" class="d-block me-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                               <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                           </svg>
                                       </span>
                                       <span class="btn-inner--text">Search</span>
                                   </button>
                               </div>
                               <?= form_close(); ?> -->

                               <div class="table-responsive p-0">
                                   <table class="table align-items-center justify-content-center mb-0">
                                       <thead class="bg-gray-100">
                                           <tr>
                                               <th class="text-secondary text-xs font-weight-semibold opacity-7">
                                                   No
                                               </th>
                                               <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                                   Kode pelanggan
                                               </th>
                                               <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                                   Nama pelanggan
                                               </th>
                                               <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                                   Alamat
                                               </th>
                                               <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                                   Nomor Telepon
                                               </th>

                                               <th class="text-center text-secondary text-xs font-weight-semibold opacity-7"></th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <?php $nomor = 1 + (($nohalaman - 1)  * 5);
                                            foreach ($datapelanggan as $row) :  ?>




                                               <tr>

                                                   <td>
                                                       <p class="text-sm font-weight-normal mb-0"><?= $nomor++; ?></p>
                                                   </td>
                                                   <td>
                                                       <p class="text-sm font-weight-normal mb-0"><?= $row['pel_kode']; ?></p>
                                                   </td>
                                                   <td>
                                                       <p class="text-sm font-weight-normal mb-0"><?= $row['pel_nama']; ?></p>
                                                   </td>
                                                   <td>
                                                       <p class="text-sm font-weight-normal mb-0"><?= $row['pel_alamat']; ?></p>
                                                   </td>
                                                   <td>
                                                       <p class="text-sm font-weight-normal mb-0"><?= $row['pel_telp']; ?></p>
                                                   </td>




                                                   <td class="align-middle">
                                                       <a type="button" onclick="hapus('<?= $row['pel_kode'] ?>','<?= $row['pel_nama'] ?>')" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Edit user">
                                                           <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                               <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                           </svg>
                                                       </a>
                                                   </td>

                                                   <td class="align-middle">
                                                       <a type="button" onclick="window.location='/pelanggan/edit/<?= $row['pel_kode'] ?>'" class="text-secondary font-weight-bold text-xs" data-bs-toggle="tooltip" data-bs-title="Edit user">
                                                           <svg width="14" height="14" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                               <path d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z" fill="#64748B" />
                                                           </svg>
                                                       </a>
                                                   </td>

                                               </tr>

                                           <?php endforeach; ?>


                                       </tbody>
                                   </table>
                               </div>
                               <div class="float-center">
                                   <?= $pager->links('produk', 'paging_data'); ?>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

           </div>
           <div class="viewmodal" style="display: none;"></div>
           <script>
               function hapus(kode, nama) {
                   Swal.fire({
                       html: `Yakin hapus data produk dengan nama <strong>${nama}</strong> ini ?`,
                       icon: "warning",
                       showCancelButton: true,
                       confirmButtonColor: "#3085d6",
                       cancelButtonColor: "#d33",
                       confirmButtonText: "Yes, hapus",
                       cancelButtonText: "Tidak"
                   }).then((result) => {
                       if (result.isConfirmed) {
                           $.ajax({
                               type: "post",
                               url: "<?= site_url('pelanggan/hapus') ?>",
                               data: {
                                   kode: kode
                               },
                               dataType: "json",
                               success: function(response) {
                                   if (response.sukses) {
                                       Swal.fire({
                                           icon: "success",
                                           title: "Berhasil",
                                           text: "response.sukses",
                                       }).then((result) => {
                                           if (result.isConfirmed) {
                                               window.location.reload();
                                           }

                                       })

                                   }
                               },

                           });
                       }
                   })
               }
           </script>

           <?= $this->endSection() ?>