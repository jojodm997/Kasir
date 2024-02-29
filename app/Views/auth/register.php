                 <?= $this->extend('auth/templates/index'); ?>

                 <?= $this->section('content'); ?>

                 </div>
                 </div>
                 </div>
                 <main class="main-content mt-0">
                   <section>
                     <div class="page-header min-vh-100">
                       <div class="container">
                         <div class="row">
                           <div class="col-md-6">
                             <div class="position-absolute w-40 top-0 start-0 h-100 d-md-block d-none">
                               <div class="oblique-image position-absolute d-flex fixed-top ms-auto h-100 z-index-0 bg-cover me-n8" style="
                      background-image: url('<?= base_url() ?>/Corporate/assets/img/image-sign-up.jpg');
                    ">
                                 <div class="my-auto text-start max-width-350 ms-7">
                                   <h1 class="mt-3 text-white font-weight-bolder">
                                     Start your <br />
                                     new journey.
                                   </h1>
                                   <p class="text-white text-lg mt-4 mb-4">
                                     Use these awesome forms to login or create new account
                                     in your project for free.
                                   </p>
                                   <div class="d-flex align-items-center">
                                     <div class="avatar-group d-flex">
                                       <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="Jessica Rowland">
                                         <img alt="Image placeholder" src="<?= base_url() ?>/Corporate/assets/img/team-3.jpg" class="" />
                                       </a>
                                       <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                         <img alt="Image placeholder" src="<?= base_url() ?>/Corporate/assets/img/team-4.jpg" class="rounded-circle" />
                                       </a>
                                       <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="Michael Lewis">
                                         <img alt="Image placeholder" src="<?= base_url() ?>/Corporate/assets/img/marie.jpg" class="rounded-circle" />
                                       </a>
                                       <a href="javascript:;" class="avatar avatar-sm rounded-circle" data-bs-toggle="tooltip" data-original-title="Audrey Love">
                                         <img alt="Image placeholder" src="<?= base_url() ?>/Corporate/assets/img/team-1.jpg" class="rounded-circle" />
                                       </a>
                                     </div>
                                     <p class="font-weight-bold text-white text-sm mb-0 ms-2">
                                       Join 2.5M+ users
                                     </p>
                                   </div>
                                 </div>
                                 <div class="text-start position-absolute fixed-bottom ms-7">
                                   <h6 class="text-white text-sm mb-5">
                                     Copyright © 2022 Corporate UI Design System by Creative
                                     Tim.
                                   </h6>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <div class="col-md-4 d-flex flex-column mx-auto">
                             <div class="card card-plain mt-8">
                               <div class="card-header pb-0 text-left bg-transparent">
                                 <h3 class="font-weight-black text-dark display-6">
                                   <?= lang('Auth.register') ?>
                                 </h3>
                                 <p class="mb-0">
                                   <?= view('Myth\Auth\Views\_message_block') ?>
                                 </p>
                               </div>
                               <div class="card-body">
                                 <form action="<?= url_to('register') ?>" method="post" class="user">
                                   <?= csrf_field() ?>
                                   <label for="username"><?= lang('Auth.username') ?></label>
                                   <div class="mb-3">
                                     <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" aria-label="Name" aria-describedby="name-addon" />
                                   </div>

                                   <label for="email"><?= lang('Auth.email') ?></label>
                                   <div class="mb-3">
                                     <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" aria-label="Email" aria-describedby="email-addon" />
                                     <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                                   </div>

                                   <label for="password"><?= lang('Auth.password') ?></label>
                                   <div class="mb-3">
                                     <input type="password" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" aria-label="Password" aria-describedby="password-addon" />
                                   </div>

                                   <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                   <div class="mb-3">
                                     <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off" aria-label="Password" aria-describedby="password-addon" />
                                   </div>
                                   <div class="form-check form-check-info text-left mb-0">
                                     <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                     <label class="font-weight-normal text-dark mb-0" for="flexCheckDefault">
                                       I agree the
                                       <a href="javascript:;" class="text-dark font-weight-bold">Terms and Conditions</a>.
                                     </label>
                                   </div>
                                   <div class="text-center">
                                     <button type="submit" class="btn btn-dark w-100 mt-4 mb-3">
                                       <?= lang('Auth.register') ?>
                                     </button>
                                   </div>
                                 </form>
                               </div>
                               <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                 <p class="mb-4 text-xs mx-auto"> <?= lang('Auth.alreadyRegistered') ?>
                                   <a href="<?= url_to('login') ?>" class="text-dark font-weight-bold"><?= lang('Auth.signIn') ?></a>
                                 </p>
                               </div>
                             </div>
                           </div>
                         </div>
                       </div>
                     </div>
                   </section>
                 </main>

                 <?= $this->endSection(); ?>