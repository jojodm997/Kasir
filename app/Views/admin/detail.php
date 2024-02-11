      <?= $this->extend('xtemplates/index'); ?>

      <?= $this->section('page-content'); ?>

<body class="g-sidenav-show bg-gray-100">
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    
    <div class="pt-7 pb-6 bg-cover" style="background-image: url('<?= base_url() ?>/Corporate/assets/img/header-orange-purple.jpg'); background-position: bottom;"></div>
    <div class="container">
      <div class="card card-body py-2 bg-transparent shadow-none">
        <div class="row">
          <div class="col-auto">
            <div class="avatar avatar-2xl rounded-circle position-relative mt-n7 border border-gray-100 border-4">
              <img src="<?= base_url('/Corporate/assets/img/' . $user->userimage); ?>" alt="<?= $user->username; ?>" class="w-100">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h3 class="mb-0 font-weight-bold">
                <?= $user->username; ?>
              </h3>
              <p class="mb-0">
                <?= $user->email; ?>
              </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3 text-sm-end">
            <a href="<?= base_url('admin') ?>" class="btn btn-sm btn-dark">&laquo; back</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-3 py-3">
      <div class="row">

        <div class="col-12 col-xl-4 mb-4">
          <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 col-9">
                  <h6 class="mb-0 font-weight-semibold text-lg">Profile information</h6>
                  <p class="text-sm mb-1">Edit the information about you.</p>
                </div>
                <div class="col-md-4 col-3 text-end">
                  <button type="button" class="btn btn-white btn-icon px-2 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                      <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="card-body p-3">
              <p class="text-sm mb-4">
                Hi, I’m <?= $user->username ?>, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
              </p>
              <ul class="list-group">
                <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pt-0 pb-1 text-sm"><span class="text-secondary">Name:</span> &nbsp; <?= $user->username ?></li>
                <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span class="text-secondary">Role:</span> &nbsp; <?= $user->name ?></li>
                <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm"><span class="text-secondary">Location:</span> &nbsp; Indonesia</li>
                <li class="list-group-item border-0 ps-0 text-dark font-weight-semibold pb-1 text-sm">
                  <span class="text-secondary">Social:</span> &nbsp;
                 
                  <a class="btn btn-link text-dark mb-0 ps-1 pe-1 py-0" href="https://github.com/jojodm997/Kasir">
                    <i class="fab fa-github fa-lg"></i>
                  </a>
               
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-4 mb-4">
          <div class="card border shadow-xs h-100">
            <div class="card-header pb-0 p-3">
              <div class="row mb-sm-0 mb-2">
                <div class="col-md-8 col-9">
                  <h6 class="mb-0 font-weight-semibold text-lg">Internal chat</h6>
                  <p class="text-sm mb-0">/marketing channel</p>
                </div>
                <div class="col-md-4 col-3 text-end">
                  <button type="button" class="btn btn-white btn-icon px-2 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="currentColor">
                      <path fill-rule="evenodd" d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" clip-rule="evenodd" />
                    </svg>
                  </button>
                </div>
              </div>
            </div>
            <div class="card-body p-3 pt-0">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                  <div class="avatar avatar-sm rounded-circle me-2">
                    <img src="<?= base_url() ?>/Corporate/assets/img/team-1.jpg" alt="kal" class="w-100">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm font-weight-semibold">Sarah Lamalo</h6>
                    <p class="mb-0 text-sm text-secondary">Hi! I need more information about ...</p>
                  </div>
                  <span class="p-1 bg-success rounded-circle ms-auto me-3">
                    <span class="visually-hidden">Online</span>
                  </span>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                  <div class="avatar avatar-sm rounded-circle me-2">
                    <img src="<?= base_url() ?>/Corporate/assets/img/marie.jpg" alt="kal" class="w-100">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm font-weight-semibold">Vicky Hladynets</h6>
                    <p class="mb-0 text-sm text-secondary">Hello, Noah!</p>
                  </div>
                  <span class="p-1 bg-success rounded-circle ms-auto me-3">
                    <span class="visually-hidden">Online</span>
                  </span>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                  <div class="avatar avatar-sm rounded-circle me-2">
                    <img src="<?= base_url() ?>/Corporate/assets/img/team-5.jpg" alt="kal" class="w-100">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm font-weight-semibold">Charles Deluvio</h6>
                    <p class="mb-0 text-sm text-secondary">Great, thank you!</p>
                  </div>
                  <span class="p-1 bg-success rounded-circle ms-auto me-3">
                    <span class="visually-hidden">Online</span>
                  </span>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                  <div class="avatar avatar-sm rounded-circle me-2">
                    <img src="<?= base_url() ?>/Corporate/assets/img/team-4.jpg" alt="kal" class="w-100">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm font-weight-semibold">Leio Mclaren</h6>
                    <p class="mb-0 text-sm text-secondary">Don't worry! 🙏🏻</p>
                  </div>
                  <span class="p-1 bg-success rounded-circle ms-auto me-3">
                    <span class="visually-hidden">Online</span>
                  </span>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                  <div class="avatar avatar-sm rounded-circle me-2">
                    <img src="<?= base_url() ?>/Corporate/assets/img/team-3.jpg" alt="kal" class="w-100">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm font-weight-semibold">Mateus Campos</h6>
                    <p class="mb-0 text-sm text-secondary">Call me, please.</p>
                  </div>
                  <span class="p-1 bg-success rounded-circle ms-auto me-3">
                    <span class="visually-hidden">Online</span>
                  </span>
                </li>
                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-1">
                  <div class="avatar avatar-sm rounded-circle me-2">
                    <img src="<?= base_url() ?>/Corporate/assets/img/team-2.jpg" alt="kal" class="w-100">
                  </div>
                  <div class="d-flex align-items-start flex-column justify-content-center">
                    <h6 class="mb-0 text-sm font-weight-semibold">Miriam Lore</h6>
                    <p class="mb-0 text-sm text-secondary">Well done!</p>
                  </div>
                  <span class="p-1 bg-success rounded-circle ms-auto me-3">
                    <span class="visually-hidden">Online</span>
                  </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="card shadow-xs border mb-4 pb-3">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0 font-weight-semibold text-lg">Last articles</h6>
              <p class="text-sm mb-1">Here you will find the latest articles.</p>
            </div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                    <div class="full-background bg-cover" style="background-image: url('<?= base_url() ?>/Corporate/assets/img/img-8.jpg')"></div>
                    <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                    <div class="card-body text-start p-3 w-100">
                      <div class="row">
                        <div class="col-12">
                          <div class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                            <div class="w-50">
                              <p class="text-dark text-sm font-weight-bold mb-1">Sara Lamalo</p>
                              <p class="text-xs text-secondary mb-0">20 Jul 2022</p>
                            </div>
                            <p class="text-dark text-sm font-weight-bold ms-auto">Growth</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="javascript:;">
                    <h4 class="font-weight-semibold">
                      Best strategy games
                    </h4>
                  </a>
                  <p class="mb-4">
                    As Uber works through a huge amount of internal management turmoil.
                  </p>
                  <a href="javascript:;" class="text-dark font-weight-semibold icon-move-right mt-auto w-100 mb-5">
                    Read post
                    <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>
                  </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                  <div class="card card-background border-radius-xl card-background-after-none align-items-start mb-4">
                    <div class="full-background bg-cover" style="background-image: url('<?= base_url() ?>/Corporate/assets/img/img-9.jpg')"></div>
                    <span class="mask bg-dark opacity-1 border-radius-sm"></span>
                    <div class="card-body text-start p-3 w-100">
                      <div class="row">
                        <div class="col-12">
                          <div class="blur shadow d-flex align-items-center w-100 border-radius-md border border-white mt-8 p-3">
                            <div class="w-50">
                              <p class="text-dark text-sm font-weight-bold mb-1">Charles Deluvio</p>
                              <p class="text-xs text-secondary mb-0">17 Jul 2022</p>
                            </div>
                            <p class="text-dark text-sm font-weight-bold ms-auto">Education</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="javascript:;">
                    <h4 class="font-weight-semibold">
                      Don't be afraid to be wrong
                    </h4>
                  </a>
                  <p class="mb-4">
                    As Uber works through a huge amount of internal management turmoil.
                  </p>
                  <a href="javascript:;" class="text-dark font-weight-semibold icon-move-right mt-auto w-100 mb-5">
                    Read post
                    <i class="fas fa-arrow-right-long text-sm ms-1" aria-hidden="true"></i>
                  </a>
                </div>
                <div class="col-xl-4 col-md-6 mb-xl-0 mb-4">
                  <div class="card h-100 card-plain border border-dashed px-5">
                    <div class="card-body d-flex flex-column justify-content-center text-center">
                      <a href="javascript:;">
                        <div class="icon icon-shape bg-dark text-center text-white rounded-circle mx-auto d-flex align-items-center justify-content-center mb-2">
                          <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                          </svg>
                        </div>
                        <h5 class="text-dark text-lg"> Create new post </h5>
                        <p class="text-sm text-secondary mb-0">Drive into the editor and add your content.</p>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-xs text-muted text-lg-start">
                Copyright
                © <script>
                  document.write(new Date().getFullYear())
                </script>
                Corporate UI by
                <a href="https://www.creative-tim.com" class="text-secondary" target="_blank">Creative Tim</a>.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-xs text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-xs text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-xs text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link text-xs pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"></i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Corporate UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-slate-900" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/corporate-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/corporate-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/corporate-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/corporate-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Corporate%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fcorporate-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/corporate-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= base_url() ?>/Corporate/assets/js/core/popper.min.js"></script>
  <script src="<?= base_url() ?>/Corporate/assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/Corporate/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url() ?>/Corporate/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url() ?>/Corporate/assets/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>
</body>

  <?= $this->endSection() ?>
 

