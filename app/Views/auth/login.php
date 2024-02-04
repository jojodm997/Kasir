       <?= $this->extend('auth/templates/index'); ?>

      <?=  $this->section('content'); ?>
       
       </div>
      </div>
    </div>
    <main class="main-content mt-0">
      <section>
        <div class="page-header min-vh-100">
          <div class="container">
            <div class="row">
              <div class="col-xl-4 col-md-6 d-flex flex-column mx-auto">
                <div class="card card-plain mt-8">
                  <div class="card-header pb-0 text-left bg-transparent">
                    <h3 class="font-weight-black text-dark display-6">
                      <?=lang('Auth.loginTitle')?>
                    </h3>
                    <p class="mb-0"> <?= view('Myth\Auth\Views\_message_block') ?></p>
                  </div>
                  <div class="card-body">
                    <form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>


            
                    <form role="form">
                     <label for="login"><?=lang('Auth.email')?></label>
                      <div class="mb-3">
                        <input
                          type="email"
                          class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                          name="login"
                          placeholder="<?=lang('Auth.email')?>"
                          aria-label="Email"
                          aria-describedby="email-addon"
                        />
                        <div class="invalid-feedback">
								            <?= session('errors.login') ?>
							          </div>
                      </div>

                      <label for="login"><?=lang('Auth.emailOrUsername')?></label>
                      <div class="mb-3">
                        <input
                          type="text"
                          class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                          name="login"
                          placeholder="<?=lang('Auth.emailOrUsername')?>"
                          aria-label="Name"
                          aria-describedby="name-addon"
                        />
                        <div class="invalid-feedback">
								            <?= session('errors.login') ?>
							          </div>
                      </div>
                      
                     <label for="password"><?=lang('Auth.password')?></label>
                      <div class="mb-3">
                        <input
                          type="password"
                          class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                          name="password"
                          placeholder="<?=lang('Auth.password')?>"
                          aria-label="Password"
                          aria-describedby="password-addon"
                        />
                        <div class="invalid-feedback">
								            <?= session('errors.password') ?>
							          </div>
                      </div>

                      <div class="d-flex align-items-center">
                        <div class="form-check form-check-info text-left mb-0">
                          <input
                            class="form-check-input  <?php if (old('remember')) : ?> checked <?php endif ?>"
                            type="checkbox"
                            name="remember"
                            id="flexCheckDefault"
                          />
                          <label
                            class="font-weight-normal text-dark mb-0"
                            for="flexCheckDefault"
                          >
                            <?=lang('Auth.rememberMe')?>
                          </label>
                        </div>
                        <a
                          href="<?= url_to('forgot') ?>"
                          class="text-xs font-weight-bold ms-auto"
                          ><?=lang('Auth.forgotYourPassword')?></a
                        >
                      </div>
                      <div class="text-center">
                        <button
                          type="submit"
                          class="btn btn-dark w-100 mt-4 mb-3"
                        >
                         <?=lang('Auth.loginAction')?>
                        </button>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-4 text-xs mx-auto">
                      <a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div
                  class="position-absolute w-40 top-0 end-0 h-100 d-md-block d-none"
                >
                  <div
                    class="oblique-image position-absolute fixed-top ms-auto h-100 z-index-0 bg-cover ms-n8"
                    style="
                      background-image: url('<?= base_url() ?>/Corporate/assets/img/image-sign-in.jpg');
                    "
                  >
                    <div
                      class="blur mt-12 p-4 text-center border border-white border-radius-md position-absolute fixed-bottom m-4"
                    >
                      <h2 class="mt-3 text-dark font-weight-bold">
                        Enter our global community of developers.
                      </h2>
                      <h6 class="text-dark text-sm mt-5">
                        Copyright © 2022 Corporate UI Design System by Creative
                        Tim.
                      </h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <?= $this->endSection(); ?>