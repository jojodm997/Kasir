    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>/Corporate/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>/Corporate/assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/Corporate/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>/Corporate/assets/js/plugins/smooth-scrollbar.min.js"></script>
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
