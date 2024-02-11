<!--
=========================================================
* Corporate UI - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/corporate-ui
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/Corporate/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url() ?>/Corporate/assets/img/favicon.png">
  <title>
    Corporate UI by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="<?= base_url() ?>/Corporate/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="<?= base_url() ?>/Corporate/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/349ee9c857.js" crossorigin="anonymous"></script>
  <link href="<?= base_url() ?>/Corporate/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="<?= base_url() ?>/Corporate/assets/css/corporate-ui-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
  <main class="main-content max-height-vh-100 h-100">
    <!-- Sidenav Top -->
    <nav class="navbar bg-slate-900 navbar-expand-lg flex-wrap top-0 px-0 py-0">
      <div class="container py-2">
        <nav aria-label="breadcrumb">
          <div class="d-flex align-items-center">
            <span class="px-3 font-weight-bold text-lg text-white me-4">Corporate UI</span>
          </div>
        </nav>
        <ul class="navbar-nav d-none d-lg-flex">
          <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
            <a href="/" class="nav-link text-white p-0">
              Dashboard
            </a>
          </li>
          <li class="nav-item px-3 py-3 border-radius-sm  d-flex align-items-center">
            <a href="/Admin/muser" class="nav-link text-white p-0">
              Tables
            </a>
          </li>
          <li class="nav-item px-3 py-3 border-radius-sm bg-slate-800 d-flex align-items-center">
            <a href="../pages/wallet.html" class="nav-link text-white p-0">
              Wallet
            </a>
          </li>
        </ul>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav ms-md-auto  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" class="fixed-plugin-button-nav cursor-pointer" viewBox="0 0 24 24" fill="currentColor">
                  <path fill-rule="evenodd" d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z" clip-rule="evenodd"></path>
                </svg>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="cursor-pointers">
                  <path fill-rule="evenodd" d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z" clip-rule="evenodd" />
                </svg>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?= base_url() ?>/Corporate/assets/img/team-2.jpg" class="avatar avatar-sm  me-3 " alt="user image">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?= base_url() ?>/Corporate/assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item d-flex align-items-center ps-2">
              <a href="javascript:;" class="nav-link text-white font-weight-bold px-0">
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <div class="avatar avatar-sm position-relative">
                <img src="<?= base_url() ?>/Corporate/assets/img/team-2.jpg" alt="profile_image" class="w-100 border-radius-md">
              </div>
            </li>
            </a>
            </li>
          </ul>
        </div>
      </div>
      <hr class="horizontal w-100 my-0 dark">
    </nav>
    <!-- End Sidenav Top -->
    <div class="pt-5 pb-6 bg-cover" style="background-image: url('<?= base_url() ?>/Corporate/assets/img/header-blue-purple.jpg')"></div>
    <div class="container my-3 py-3">
      <div class="row mt-n6 mb-6">
        <div class="col-lg-3 col-sm-6">
          <div class="card blur border border-white mb-4 shadow-xs">
            <div class="card-body p-4">
              <div class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M11.584 2.376a.75.75 0 01.832 0l9 6a.75.75 0 11-.832 1.248L12 3.901 3.416 9.624a.75.75 0 01-.832-1.248l9-6z" />
                  <path fill-rule="evenodd" d="M20.25 10.332v9.918H21a.75.75 0 010 1.5H3a.75.75 0 010-1.5h.75v-9.918a.75.75 0 01.634-.74A49.109 49.109 0 0112 9c2.59 0 5.134.202 7.616.592a.75.75 0 01.634.74zm-7.5 2.418a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75zm3-.75a.75.75 0 01.75.75v6.75a.75.75 0 01-1.5 0v-6.75a.75.75 0 01.75-.75zM9 12.75a.75.75 0 00-1.5 0v6.75a.75.75 0 001.5 0v-6.75z" clip-rule="evenodd" />
                  <path d="M12 7.875a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z" />
                </svg>
              </div>
              <p class="text-sm mb-1">Today's Revenue</p>
              <h3 class="mb-0 font-weight-bold">$8,093.00</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card blur border border-white mb-4 shadow-xs">
            <div class="card-body p-4">
              <div class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 24 24" fill="currentColor"">
          <path d=" M19.5 22.5a3 3 0 003-3v-8.174l-6.879 4.022 3.485 1.876a.75.75 0 01-.712 1.321l-5.683-3.06a1.5 1.5 0 00-1.422 0l-5.683 3.06a.75.75 0 01-.712-1.32l3.485-1.877L1.5 11.326V19.5a3 3 0 003 3h15z" />
                <path d="M1.5 9.589v-.745a3 3 0 011.578-2.641l7.5-4.039a3 3 0 012.844 0l7.5 4.039A3 3 0 0122.5 8.844v.745l-8.426 4.926-.652-.35a3 3 0 00-2.844 0l-.652.35L1.5 9.59z" />
                </svg>
              </div>
              <p class="text-sm mb-1">Marketing</p>
              <h3 class="mb-0 font-weight-bold">$37,193.00</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card blur border border-white mb-4 shadow-xs">
            <div class="card-body p-4">
              <div class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                </svg>
              </div>
              <p class="text-sm mb-1">Human Resources</p>
              <h3 class="mb-0 font-weight-bold">$25,426.70</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card blur border border-white mb-4 shadow-xs">
            <div class="card-body p-4">
              <div class="icon icon-shape bg-white shadow shadow-xs text-center border-radius-md d-flex align-items-center justify-content-center mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" height="19" width="19" viewBox="0 0 24 24" fill="currentColor">
                  <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z" />
                  <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z" clip-rule="evenodd" />
                </svg>
              </div>
              <p class="text-sm mb-1">Wallet</p>
              <h3 class="mb-0 font-weight-bold">$2,400.10</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="d-flex align-items-center mb-4">
            <h3 class="mb-1 font-weight-bold">
              Wallet
            </h3>
          </div>
          <div class="d-md-flex align-items-center mb-4">
            <div class="mb-md-0 mb-3">
              <h5 class="font-weight-semibold mb-1">Billing and invoicing</h5>
              <p class="text-sm mb-0">Pick an account plan that fits your workflow.</p>
            </div>
            <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center mb-0 ms-md-auto">
              <span class="btn-inner--icon">
                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"></path>
                </svg>
              </span>
              <span class="btn-inner--text">Download</span>
            </button>
          </div>
        </div>
      </div>
      <hr class="horizontal mb-4 dark">
      <div class="row">
        <div class="col-md-12 mb-6">
          <div class="card shadow-xs border mb-4">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="d-flex align-items-center py-3 px-4 text-sm">
                      <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      </div>
                      <span class="text-xs font-weight-semibold opacity-7 ms-1">All invoices</span>
                    </th>
                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Status</th>
                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Amount</th>
                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">Plan</th>
                    <th class="text-secondary text-xs font-weight-semibold opacity-7 ps-2"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="d-flex align-items-center py-3 px-4 text-sm">
                      <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      </div>
                      <span class="font-weight-semibold text-dark ms-1">Jan 2022</span>
                    </td>
                    <td>
                      <span class="badge badge-sm border border-success text-success bg-success border-radius-sm">
                        <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="me-1">
                          <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Paid
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">USD $30.00</span>
                    </td>
                    <td>
                      <span class="text-sm">Basic Plan</span>
                    </td>
                    <td class="text-sm font-weight-semibold text-dark">
                      <span class="text-sm">Download</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center py-3 px-4 text-sm">
                      <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      </div>
                      <span class="font-weight-semibold text-dark ms-1">Feb 2022</span>
                    </td>
                    <td>
                      <span class="badge badge-sm border border-success text-success bg-success border-radius-sm">
                        <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="me-1">
                          <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Paid
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">USD $30.00</span>
                    </td>
                    <td>
                      <span class="text-sm">Basic Plan</span>
                    </td>
                    <td class="text-sm font-weight-semibold text-dark">
                      <span class="text-sm">Download</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center py-3 px-4 text-sm">
                      <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      </div>
                      <span class="font-weight-semibold text-dark ms-1">Mar 2022</span>
                    </td>
                    <td>
                      <span class="badge badge-sm border border-success text-success bg-success border-radius-sm">
                        <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="me-1">
                          <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Paid
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">USD $30.00</span>
                    </td>
                    <td>
                      <span class="text-sm">Basic Plan</span>
                    </td>
                    <td class="text-sm font-weight-semibold text-dark">
                      <span class="text-sm">Download</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center py-3 px-4 text-sm">
                      <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      </div>
                      <span class="font-weight-semibold text-dark ms-1">Apr 2022</span>
                    </td>
                    <td>
                      <span class="badge badge-sm border border-success text-success bg-success border-radius-sm">
                        <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="me-1">
                          <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Paid
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">USD $30.00</span>
                    </td>
                    <td>
                      <span class="text-sm">Basic Plan</span>
                    </td>
                    <td class="text-sm font-weight-semibold text-dark">
                      <span class="text-sm">Download</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center py-3 px-4 text-sm">
                      <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      </div>
                      <span class="font-weight-semibold text-dark ms-1">May 2022</span>
                    </td>
                    <td>
                      <span class="badge badge-sm border border-success text-success bg-success border-radius-sm">
                        <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="me-1">
                          <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Paid
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">USD $30.00</span>
                    </td>
                    <td>
                      <span class="text-sm">Basic Plan</span>
                    </td>
                    <td class="text-sm font-weight-semibold text-dark">
                      <span class="text-sm">Download</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center py-3 px-4 text-sm">
                      <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      </div>
                      <span class="font-weight-semibold text-dark ms-1">Jun 2022</span>
                    </td>
                    <td>
                      <span class="badge badge-sm border border-success text-success bg-success border-radius-sm">
                        <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="me-1">
                          <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Paid
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">USD $30.00</span>
                    </td>
                    <td>
                      <span class="text-sm">Basic Plan</span>
                    </td>
                    <td class="text-sm font-weight-semibold text-dark">
                      <span class="text-sm">Download</span>
                    </td>
                  </tr>
                  <tr>
                    <td class="d-flex align-items-center py-3 px-4 text-sm">
                      <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      </div>
                      <span class="font-weight-semibold text-dark ms-1">Jul 2022</span>
                    </td>
                    <td>
                      <span class="badge badge-sm border border-success text-success bg-success border-radius-sm">
                        <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor" class="me-1">
                          <path d="M1 4.42857L3.28571 6.71429L9 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Paid
                      </span>
                    </td>
                    <td>
                      <span class="text-sm">USD $30.00</span>
                    </td>
                    <td>
                      <span class="text-sm">Basic Plan</span>
                    </td>
                    <td class="text-sm font-weight-semibold text-dark">
                      <span class="text-sm">Download</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="card shadow-xs border mb-4">
                <div class="card-body py-0">
                  <div class="row">
                    <div class="col-4 pe-1">
                      <div class="chart">
                        <canvas id="chart-doughnut-info" class="chart-canvas" height="150"></canvas>
                      </div>
                    </div>
                    <div class="col-8 my-auto">
                      <div class="d-flex">
                        <div>
                          <h4 class="font-weight-semibold text-lg mb-4">Primary Wallet</h4>
                          <p class="text-sm mb-1">Current Balance</p>
                          <h3 class="mb-0 font-weight-bold">$20,450.80</h3>
                        </div>
                        <div class="ms-auto text-end d-flex flex-column">
                          <div class="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="ms-auto cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              <path fill-rule="evenodd" d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" clip-rule="evenodd" />
                            </svg>
                            <ul class="dropdown-menu dropdown-menu-end me-n4">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div>
                          <span class="badge badge-sm border border-success text-success bg-success border-radius-sm mt-auto mb-2">
                            <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.46967 4.46967C0.176777 4.76256 0.176777 5.23744 0.46967 5.53033C0.762563 5.82322 1.23744 5.82322 1.53033 5.53033L0.46967 4.46967ZM5.53033 1.53033C5.82322 1.23744 5.82322 0.762563 5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967L5.53033 1.53033ZM5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967C4.17678 0.762563 4.17678 1.23744 4.46967 1.53033L5.53033 0.46967ZM8.46967 5.53033C8.76256 5.82322 9.23744 5.82322 9.53033 5.53033C9.82322 5.23744 9.82322 4.76256 9.53033 4.46967L8.46967 5.53033ZM1.53033 5.53033L5.53033 1.53033L4.46967 0.46967L0.46967 4.46967L1.53033 5.53033ZM4.46967 1.53033L8.46967 5.53033L9.53033 4.46967L5.53033 0.46967L4.46967 1.53033Z" fill="#67C23A" />
                            </svg>
                            10.5%
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card shadow-xs border mb-4">
                <div class="card-body py-0">
                  <div class="row">
                    <div class="col-4 pe-1">
                      <div class="chart">
                        <canvas id="chart-doughnut-dark" class="chart-canvas" height="150"></canvas>
                      </div>
                    </div>
                    <div class="col-8 my-auto">
                      <div class="d-flex">
                        <div>
                          <h4 class="font-weight-semibold text-lg mb-4">Secondary Wallet</h4>
                          <p class="text-sm mb-1">Current Balance</p>
                          <h3 class="mb-0 font-weight-bold">$10,250.60</h3>
                        </div>
                        <div class="ms-auto text-end d-flex flex-column">
                          <div class="dropdown">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor" class="ms-auto cursor-pointer dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              <path fill-rule="evenodd" d="M10.5 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm0 6a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" clip-rule="evenodd" />
                            </svg>
                            <ul class="dropdown-menu dropdown-menu-end me-n4">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                          </div>
                          <span class="badge badge-sm border border-success text-success bg-success border-radius-sm mt-auto mb-2">
                            <svg width="9" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.46967 4.46967C0.176777 4.76256 0.176777 5.23744 0.46967 5.53033C0.762563 5.82322 1.23744 5.82322 1.53033 5.53033L0.46967 4.46967ZM5.53033 1.53033C5.82322 1.23744 5.82322 0.762563 5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967L5.53033 1.53033ZM5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967C4.17678 0.762563 4.17678 1.23744 4.46967 1.53033L5.53033 0.46967ZM8.46967 5.53033C8.76256 5.82322 9.23744 5.82322 9.53033 5.53033C9.82322 5.23744 9.82322 4.76256 9.53033 4.46967L8.46967 5.53033ZM1.53033 5.53033L5.53033 1.53033L4.46967 0.46967L0.46967 4.46967L1.53033 5.53033ZM4.46967 1.53033L8.46967 5.53033L9.53033 4.46967L5.53033 0.46967L4.46967 1.53033Z" fill="#67C23A" />
                            </svg>
                            33.8%
                          </span>
                        </div>
                      </div>
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
  </main>
  <!--   Core JS Files   -->
  <script src="<?= base_url() ?>/Corporate/assets/js/core/popper.min.js"></script>
  <script src="<?= base_url() ?>/Corporate/assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/Corporate/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url() ?>/Corporate/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?= base_url() ?>/Corporate/assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-doughnut-info").getContext("2d");
    var ctx2 = document.getElementById("chart-doughnut-dark").getContext("2d");

    new Chart(ctx, {
      type: "doughnut",
      data: {
        labels: ["EGLD", "ETH", "SOL", "BTC"],
        datasets: [{
          label: "Wallet",
          cutout: 40,
          backgroundColor: ["#c3e1ff", "#add4fc", "#78baff", "#419eff"],
          data: [450, 200, 100, 220],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
          tooltip: {
            backgroundColor: '#fff',
            bodyColor: '#1e293b',
            borderColor: '#e9ecef',
            borderWidth: 1,
            usePointStyle: true
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              display: false
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });

    new Chart(ctx2, {
      type: "doughnut",
      data: {
        labels: ["EGLD", "ETH", "SOL", "BTC"],
        datasets: [{
          label: "Wallet",
          cutout: 40,
          backgroundColor: ["#d3d8e1", "#1f293b", "#666f7f", "#3b465a"],
          data: [350, 200, 150, 300],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          },
          tooltip: {
            backgroundColor: '#fff',
            bodyColor: '#1e293b',
            borderColor: '#e9ecef',
            borderWidth: 1,
            usePointStyle: true
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
            },
            ticks: {
              display: false
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false
            },
            ticks: {
              display: false
            },
          },
        },
      },
    });
  </script>
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

</html>