<!-- BEGIN: Vendor JS-->
<script src="<?= asset('admin_assets/vendors/js/vendors.min.js') ?>"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<!--<script src="<?= asset('admin_assets/vendors/js/charts/apexcharts.min.js') ?>"></script>-->
<script src="<?= asset('admin_assets/vendors/js/extensions/toastr.min.js') ?>"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?= asset('admin_assets/js/core/app-menu.js') ?>"></script>
<script src="<?= asset('admin_assets/js/core/app.js') ?>"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- <script src="<?= asset('admin_assets/js/scripts/pages/dashboard-ecommerce.js') ?>"></script> -->
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
