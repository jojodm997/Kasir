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
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="<?= base_url() ?>/Corporate/assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="<?= base_url() ?>/Corporate/assets/img/favicon.png" />
    <title><?= $title; ?></title>
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Noto+Sans:300,400,500,600,700,800|PT+Mono:300,400,500,600,700"
      rel="stylesheet"
    />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>/Corporate/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/Corporate/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/349ee9c857.js"
      crossorigin="anonymous"
    ></script>
    <link href="<?= base_url() ?>/Corporate/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link
      id="pagestyle"
      href="<?= base_url() ?>/Corporate/assets/css/corporate-ui-dashboard.css?v=1.0.0"
      rel="stylesheet"
    />
  </head>

  <body class="g-sidenav-show bg-gray-100">
    <aside
      class="sidenav navbar navbar-vertical navbar-expand-xs border-0 bg-slate-900 fixed-start"
      id="sidenav-main"
    >
      <div class="sidenav-header">
        <i
          class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
          aria-hidden="true"
          id="iconSidenav"
        ></i>
        <a
          class="navbar-brand d-flex align-items-center m-0"
          href=" https://demos.creative-tim.com/corporate-ui-dashboard/pages/dashboard.html "
          target="_blank"
        >
          <span class="font-weight-bold text-lg">APLIKASI KASIR</span>
        </a>
      </div>
      <div
        class="collapse navbar-collapse px-4 w-auto"
        id="sidenav-collapse-main"
      >
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?= base_url('/');?>">
              <div
                class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center"
              >
                <svg
                  width="30px"
                  height="30px"
                  viewBox="0 0 48 48"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>dashboard</title>
                  <g
                    id="dashboard"
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      id="template"
                      transform="translate(12.000000, 12.000000)"
                      fill="#FFFFFF"
                      fill-rule="nonzero"
                    >
                      <path
                        class="color-foreground"
                        d="M0,1.71428571 C0,0.76752 0.76752,0 1.71428571,0 L22.2857143,0 C23.2325143,0 24,0.76752 24,1.71428571 L24,5.14285714 C24,6.08962286 23.2325143,6.85714286 22.2857143,6.85714286 L1.71428571,6.85714286 C0.76752,6.85714286 0,6.08962286 0,5.14285714 L0,1.71428571 Z"
                        id="Path"
                      ></path>
                      <path
                        class="color-background"
                        d="M0,12 C0,11.0532171 0.76752,10.2857143 1.71428571,10.2857143 L12,10.2857143 C12.9468,10.2857143 13.7142857,11.0532171 13.7142857,12 L13.7142857,22.2857143 C13.7142857,23.2325143 12.9468,24 12,24 L1.71428571,24 C0.76752,24 0,23.2325143 0,22.2857143 L0,12 Z"
                        id="Path"
                      ></path>
                      <path
                        class="color-background"
                        d="M18.8571429,10.2857143 C17.9103429,10.2857143 17.1428571,11.0532171 17.1428571,12 L17.1428571,22.2857143 C17.1428571,23.2325143 17.9103429,24 18.8571429,24 L22.2857143,24 C23.2325143,24 24,23.2325143 24,22.2857143 L24,12 C24,11.0532171 23.2325143,10.2857143 22.2857143,10.2857143 L18.8571429,10.2857143 Z"
                        id="Path"
                      ></path>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/Kasir/tables');?>">
              <div
                class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center"
              >
                <svg
                  width="30px"
                  height="30px"
                  viewBox="0 0 48 48"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>table</title>
                  <g
                    id="table"
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      id="view-grid"
                      transform="translate(12.000000, 12.000000)"
                      fill="#FFFFFF"
                      fill-rule="nonzero"
                    >
                      <path
                        class="color-foreground"
                        d="M3.42857143,0 C1.53502286,0 0,1.53502286 0,3.42857143 L0,6.85714286 C0,8.75069143 1.53502286,10.2857143 3.42857143,10.2857143 L6.85714286,10.2857143 C8.75069143,10.2857143 10.2857143,8.75069143 10.2857143,6.85714286 L10.2857143,3.42857143 C10.2857143,1.53502286 8.75069143,0 6.85714286,0 L3.42857143,0 Z"
                        id="Path"
                      ></path>
                      <path
                        class="color-background"
                        d="M3.42857143,13.7142857 C1.53502286,13.7142857 0,15.2492571 0,17.1428571 L0,20.5714286 C0,22.4650286 1.53502286,24 3.42857143,24 L6.85714286,24 C8.75069143,24 10.2857143,22.4650286 10.2857143,20.5714286 L10.2857143,17.1428571 C10.2857143,15.2492571 8.75069143,13.7142857 6.85714286,13.7142857 L3.42857143,13.7142857 Z"
                        id="Path"
                      ></path>
                      <path
                        class="color-background"
                        d="M13.7142857,3.42857143 C13.7142857,1.53502286 15.2492571,0 17.1428571,0 L20.5714286,0 C22.4650286,0 24,1.53502286 24,3.42857143 L24,6.85714286 C24,8.75069143 22.4650286,10.2857143 20.5714286,10.2857143 L17.1428571,10.2857143 C15.2492571,10.2857143 13.7142857,8.75069143 13.7142857,6.85714286 L13.7142857,3.42857143 Z"
                        id="Path"
                      ></path>
                      <path
                        class="color-foreground"
                        d="M13.7142857,17.1428571 C13.7142857,15.2492571 15.2492571,13.7142857 17.1428571,13.7142857 L20.5714286,13.7142857 C22.4650286,13.7142857 24,15.2492571 24,17.1428571 L24,20.5714286 C24,22.4650286 22.4650286,24 20.5714286,24 L17.1428571,24 C15.2492571,24 13.7142857,22.4650286 13.7142857,20.5714286 L13.7142857,17.1428571 Z"
                        id="Path"
                      ></path>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Tables</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/Kasir/wallet');?>">
              <div
                class="icon icon-shape icon-sm px-0 text-center d-flex align-items-center justify-content-center"
              >
                <svg
                  width="30px"
                  height="30px"
                  viewBox="0 0 48 48"
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                >
                  <title>wallet</title>
                  <g
                    id="wallet"
                    stroke="none"
                    stroke-width="1"
                    fill="none"
                    fill-rule="evenodd"
                  >
                    <g
                      id="credit-card"
                      transform="translate(12.000000, 15.000000)"
                      fill="#FFFFFF"
                    >
                      <path
                        class="color-background"
                        d="M3,0 C1.343145,0 0,1.343145 0,3 L0,4.5 L24,4.5 L24,3 C24,1.343145 22.6569,0 21,0 L3,0 Z"
                        id="Path"
                        fill-rule="nonzero"
                      ></path>
                      <path
                        class="color-foreground"
                        d="M24,7.5 L0,7.5 L0,15 C0,16.6569 1.343145,18 3,18 L21,18 C22.6569,18 24,16.6569 24,15 L24,7.5 Z M3,13.5 C3,12.67155 3.67158,12 4.5,12 L6,12 C6.82842,12 7.5,12.67155 7.5,13.5 C7.5,14.32845 6.82842,15 6,15 L4.5,15 C3.67158,15 3,14.32845 3,13.5 Z M10.5,12 C9.67158,12 9,12.67155 9,13.5 C9,14.32845 9.67158,15 10.5,15 L12,15 C12.82845,15 13.5,14.32845 13.5,13.5 C13.5,12.67155 12.82845,12 12,12 L10.5,12 Z"
                        id="Shape"
                      ></path>
                    </g>
                  </g>
                </svg>
              </div>
              <span class="nav-link-text ms-1">Wallet</span>
            </a>
          </li>
        </ul>
      </div>
  
    </aside>
    <main
      class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"
    >
      <!-- Navbar -->
      <nav
        class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded"
        id="navbarBlur"
        navbar-scroll="true"
      >
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                <a
                  href="javascript:;"
                  class="nav-link text-body p-0"
                  id="iconNavbarSidenav"
                >
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                    <i class="sidenav-toggler-line"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <svg
                    width="16"
                    height="16"
                    xmlns="http://www.w3.org/2000/svg"
                    class="fixed-plugin-button-nav cursor-pointer"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </a>
              </li>
              <li class="nav-item ps-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <img
                    src="<?= base_url() ?>/Corporate/assets/img/team-2.jpg"
                    class="avatar avatar-sm"
                    alt="avatar"
                  />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->