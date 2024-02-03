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
            <a class="nav-link active" href="<?= base_url('/Home/dashboard');?>">
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
            <a class="nav-link" href="<?= base_url('/Home/tables');?>">
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
            <a class="nav-link" href="<?= base_url('/Home/wallet');?>">
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
  <?= $this->renderSection('content'); ?>

<footer class="footer pt-3">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6 mb-lg-0 mb-4">
                <div
                  class="copyright text-center text-xs text-muted text-lg-start"
                >
                  Copyright ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  Corporate UI by
                  <a
                    href="https://www.creative-tim.com"
                    class="text-secondary"
                    target="_blank"
                    >Creative Tim</a
                  >.
                </div>
              </div>
              <div class="col-lg-6">
                <ul
                  class="nav nav-footer justify-content-center justify-content-lg-end"
                >
                  <li class="nav-item">
                    <a
                      href="https://www.creative-tim.com"
                      class="nav-link text-xs text-muted"
                      target="_blank"
                      >Creative Tim</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      href="https://www.creative-tim.com/presentation"
                      class="nav-link text-xs text-muted"
                      target="_blank"
                      >About Us</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      href="https://www.creative-tim.com/blog"
                      class="nav-link text-xs text-muted"
                      target="_blank"
                      >Blog</a
                    >
                  </li>
                  <li class="nav-item">
                    <a
                      href="https://www.creative-tim.com/license"
                      class="nav-link text-xs pe-0 text-muted"
                      target="_blank"
                      >License</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </main>
    <div class="fixed-plugin">
      <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
        <i class="fa fa-cog py-2"></i>
      </a>
      <div class="card shadow-lg">
        <div class="card-header pb-0 pt-3">
          <div class="float-start">
            <h5 class="mt-3 mb-0">Corporate UI Configurator</h5>
            <p>See our dashboard options.</p>
          </div>
          <div class="float-end mt-4">
            <button
              class="btn btn-link text-dark p-0 fixed-plugin-close-button"
            >
              <i class="fa fa-close"></i>
            </button>
          </div>
          <!-- End Toggle Button -->
        </div>
        <hr class="horizontal dark my-1" />
        <div class="card-body pt-sm-3 pt-0">
          <!-- Sidebar Backgrounds -->
          <div>
            <h6 class="mb-0">Sidebar Colors</h6>
          </div>
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors my-2 text-start">
              <span
                class="badge filter bg-gradient-primary active"
                data-color="primary"
                onclick="sidebarColor(this)"
              ></span>
              <span
                class="badge filter bg-gradient-info"
                data-color="info"
                onclick="sidebarColor(this)"
              ></span>
              <span
                class="badge filter bg-gradient-success"
                data-color="success"
                onclick="sidebarColor(this)"
              ></span>
              <span
                class="badge filter bg-gradient-warning"
                data-color="warning"
                onclick="sidebarColor(this)"
              ></span>
              <span
                class="badge filter bg-gradient-danger"
                data-color="danger"
                onclick="sidebarColor(this)"
              ></span>
            </div>
          </a>
          <!-- Sidenav Type -->
          <div class="mt-3">
            <h6 class="mb-0">Sidenav Type</h6>
            <p class="text-sm">Choose between 2 different sidenav types.</p>
          </div>
          <div class="d-flex">
            <button
              class="btn bg-gradient-primary w-100 px-3 mb-2 active"
              data-class="bg-slate-900"
              onclick="sidebarType(this)"
            >
              Dark
            </button>
            <button
              class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2"
              data-class="bg-white"
              onclick="sidebarType(this)"
            >
              White
            </button>
          </div>
          <p class="text-sm d-xl-none d-block mt-2">
            You can change the sidenav type just on desktop view.
          </p>
          <!-- Navbar Fixed -->
          <div class="mt-3">
            <h6 class="mb-0">Navbar Fixed</h6>
          </div>
          <div class="form-check form-switch ps-0">
            <input
              class="form-check-input mt-1 ms-auto"
              type="checkbox"
              id="navbarFixed"
              onclick="navbarFixed(this)"
            />
          </div>
          <hr class="horizontal dark my-sm-4" />
          <a
            class="btn bg-gradient-dark w-100"
            href="https://www.creative-tim.com/product/corporate-ui-dashboard"
            >Free Download</a
          >
          <a
            class="btn btn-outline-dark w-100"
            href="https://www.creative-tim.com/learning-lab/bootstrap/license/corporate-ui-dashboard"
            >View documentation</a
          >
          <div class="w-100 text-center">
            <a
              class="github-button"
              href="https://github.com/creativetimofficial/corporate-ui-dashboard"
              data-icon="octicon-star"
              data-size="large"
              data-show-count="true"
              aria-label="Star creativetimofficial/corporate-ui-dashboard on GitHub"
              >Star</a
            >
            <h6 class="mt-3">Thank you for sharing!</h6>
            <a
              href="https://twitter.com/intent/tweet?text=Check%20Corporate%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fcorporate-ui-dashboard"
              class="btn btn-dark mb-0 me-2"
              target="_blank"
            >
              <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
            </a>
            <a
              href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/corporate-ui-dashboard"
              class="btn btn-dark mb-0 me-2"
              target="_blank"
            >
              <i class="fab fa-facebook-square me-1" aria-hidden="true"></i>
              Share
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
    <script src="<?= base_url() ?>/Corporate/assets/js/plugins/chartjs.min.js"></script>
    <script
      src="<?= base_url() ?>/Corporate/assets/js/plugins/swiper-bundle.min.js"
      type="text/javascript"
    ></script>
    <script>
      if (document.getElementsByClassName("mySwiper")) {
        var swiper = new Swiper(".mySwiper", {
          effect: "cards",
          grabCursor: true,
          initialSlide: 1,
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        });
      }

      var ctx = document.getElementById("chart-bars").getContext("2d");

      new Chart(ctx, {
        type: "bar",
        data: {
          labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
          datasets: [
            {
              label: "Sales",
              tension: 0.4,
              borderWidth: 0,
              borderSkipped: false,
              backgroundColor: "#2ca8ff",
              data: [450, 200, 100, 220, 500, 100, 400, 230, 500, 200],
              maxBarThickness: 6,
            },
            {
              label: "Sales",
              tension: 0.4,
              borderWidth: 0,
              borderSkipped: false,
              backgroundColor: "#7c3aed",
              data: [200, 300, 200, 420, 400, 200, 300, 430, 400, 300],
              maxBarThickness: 6,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            },
            tooltip: {
              backgroundColor: "#fff",
              titleColor: "#1e293b",
              bodyColor: "#1e293b",
              borderColor: "#e9ecef",
              borderWidth: 1,
              usePointStyle: true,
            },
          },
          interaction: {
            intersect: false,
            mode: "index",
          },
          scales: {
            y: {
              stacked: true,
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [4, 4],
              },
              ticks: {
                beginAtZero: true,
                padding: 10,
                font: {
                  size: 12,
                  family: "Noto Sans",
                  style: "normal",
                  lineHeight: 2,
                },
                color: "#64748B",
              },
            },
            x: {
              stacked: true,
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
              },
              ticks: {
                font: {
                  size: 12,
                  family: "Noto Sans",
                  style: "normal",
                  lineHeight: 2,
                },
                color: "#64748B",
              },
            },
          },
        },
      });

      var ctx2 = document.getElementById("chart-line").getContext("2d");

      var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke1.addColorStop(1, "rgba(45,168,255,0.2)");
      gradientStroke1.addColorStop(0.2, "rgba(45,168,255,0.0)");
      gradientStroke1.addColorStop(0, "rgba(45,168,255,0)"); //blue colors

      var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);

      gradientStroke2.addColorStop(1, "rgba(119,77,211,0.4)");
      gradientStroke2.addColorStop(0.7, "rgba(119,77,211,0.1)");
      gradientStroke2.addColorStop(0, "rgba(119,77,211,0)"); //purple colors

      new Chart(ctx2, {
        plugins: [
          {
            beforeInit(chart) {
              const originalFit = chart.legend.fit;
              chart.legend.fit = function fit() {
                originalFit.bind(chart.legend)();
                this.height += 40;
              };
            },
          },
        ],
        type: "line",
        data: {
          labels: [
            "Aug 18",
            "Aug 19",
            "Aug 20",
            "Aug 21",
            "Aug 22",
            "Aug 23",
            "Aug 24",
            "Aug 25",
            "Aug 26",
            "Aug 27",
            "Aug 28",
            "Aug 29",
            "Aug 30",
            "Aug 31",
            "Sept 01",
            "Sept 02",
            "Sept 03",
            "Aug 22",
            "Sept 04",
            "Sept 05",
            "Sept 06",
            "Sept 07",
            "Sept 08",
            "Sept 09",
          ],
          datasets: [
            {
              label: "Volume",
              tension: 0,
              borderWidth: 2,
              pointRadius: 3,
              borderColor: "#2ca8ff",
              pointBorderColor: "#2ca8ff",
              pointBackgroundColor: "#2ca8ff",
              backgroundColor: gradientStroke1,
              fill: true,
              data: [
                2828, 1291, 3360, 3223, 1630, 980, 2059, 3092, 1831, 1842, 1902,
                1478, 1123, 2444, 2636, 2593, 2885, 1764, 898, 1356, 2573, 3382,
                2858, 4228,
              ],
              maxBarThickness: 6,
            },
            {
              label: "Trade",
              tension: 0,
              borderWidth: 2,
              pointRadius: 3,
              borderColor: "#832bf9",
              pointBorderColor: "#832bf9",
              pointBackgroundColor: "#832bf9",
              backgroundColor: gradientStroke2,
              fill: true,
              data: [
                2797, 2182, 1069, 2098, 3309, 3881, 2059, 3239, 6215, 2185,
                2115, 5430, 4648, 2444, 2161, 3018, 1153, 1068, 2192, 1152,
                2129, 1396, 2067, 1215, 712, 2462, 1669, 2360, 2787, 861,
              ],
              maxBarThickness: 6,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: true,
              position: "top",
              align: "end",
              labels: {
                boxWidth: 6,
                boxHeight: 6,
                padding: 20,
                pointStyle: "circle",
                borderRadius: 50,
                usePointStyle: true,
                font: {
                  weight: 400,
                },
              },
            },
            tooltip: {
              backgroundColor: "#fff",
              titleColor: "#1e293b",
              bodyColor: "#1e293b",
              borderColor: "#e9ecef",
              borderWidth: 1,
              pointRadius: 2,
              usePointStyle: true,
              boxWidth: 8,
            },
          },
          interaction: {
            intersect: false,
            mode: "index",
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [4, 4],
              },
              ticks: {
                callback: function (value, index, ticks) {
                  return parseInt(value).toLocaleString() + " EUR";
                },
                display: true,
                padding: 10,
                color: "#b2b9bf",
                font: {
                  size: 12,
                  family: "Noto Sans",
                  style: "normal",
                  lineHeight: 2,
                },
                color: "#64748B",
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [4, 4],
              },
              ticks: {
                display: true,
                color: "#b2b9bf",
                padding: 20,
                font: {
                  size: 12,
                  family: "Noto Sans",
                  style: "normal",
                  lineHeight: 2,
                },
                color: "#64748B",
              },
            },
          },
        },
      });
    </script>
    <script>
      var win = navigator.platform.indexOf("Win") > -1;
      if (win && document.querySelector("#sidenav-scrollbar")) {
        var options = {
          damping: "0.5",
        };
        Scrollbar.init(document.querySelector("#sidenav-scrollbar"), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Corporate UI Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url() ?>/Corporate/assets/js/corporate-ui-dashboard.min.js?v=1.0.0"></script>
  </body>
</html>
