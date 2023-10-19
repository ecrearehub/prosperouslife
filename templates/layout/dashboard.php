<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Live the Prosperous Life</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- <link href="./vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <?php echo $this->Html->css('/vendors/@fortawesome/fontawesome-free/css/all.min'); ?>
    <?php echo $this->Html->css('/vendors/ionicons-npm/css/ionicons'); ?>
    <?php echo $this->Html->css('/vendors/linearicons-master/dist/web-font/style'); ?>
    <?php echo $this->Html->css('/vendors/pixeden-stroke-7-icon-master/pe-icon-7-stroke/dist/pe-icon-7-stroke'); ?>
    <?php echo $this->Html->css('base'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <!-- Header Start -->
        <?php echo $this->element('header'); ?>
        <!-- Header End -->
        <div class="app-main">
            <!-- Sidebar Start -->
            <?php echo $this->element('sidebar'); ?>
            <!-- Sidebar End -->
            <!-- Content Start -->
            <div class="app-main__outer">
                <?php echo $this->fetch('content') ?>
                <?php echo $this->element('footer'); ?>
            </div>
            <!-- Content End -->
        </div>
    </div>
    <!-- plugin dependencies -->
    <?php echo $this->Html->script('/vendors/jquery/dist/jquery.min'); ?>
    <?php echo $this->Html->script('/vendors/bootstrap/dist/js/bootstrap.bundle.min'); ?>
    <?php echo $this->Html->script('/vendors/moment/moment'); ?>
    <?php echo $this->Html->script('/vendors/metismenu/dist/metisMenu'); ?>
    <?php echo $this->Html->script('/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min'); ?>
    <?php echo $this->Html->script('/vendors/jquery-circle-progress/dist/circle-progress.min'); ?>
    <?php echo $this->Html->script('/vendors/perfect-scrollbar/dist/perfect-scrollbar.min'); ?>
    <?php echo $this->Html->script('/vendors/toastr/build/toastr.min'); ?>
    <?php echo $this->Html->script('/vendors/jquery.fancytree/dist/jquery.fancytree-all-deps.min'); ?>
    <?php echo $this->Html->script('/vendors/apexcharts/dist/apexcharts.min'); ?>
    <?php echo $this->Html->script('/vendors/bootstrap-table/dist/bootstrap-table.min'); ?>
    <?php echo $this->Html->script('/vendors/datatables.net/js/jquery.dataTables.min'); ?>
    <?php echo $this->Html->script('/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min'); ?>
    <?php echo $this->Html->script('/vendors/datatables.net-responsive/js/dataTables.responsive.min'); ?>
    <?php echo $this->Html->script('/vendors/datatables.net-responsive-bs4/js/responsive.bootstrap4.min'); ?>
    <?php echo $this->Html->script('/vendors/slick-carousel/slick/slick.min'); ?>
    <!-- custome.js -->
    <?php echo $this->Html->script('charts/apex-charts'); ?>
    <?php echo $this->Html->script('circle-progress'); ?>
    <?php echo $this->Html->script('demo'); ?>
    <?php echo $this->Html->script('scrollbar'); ?>
    <?php echo $this->Html->script('toastr'); ?>
    <?php echo $this->Html->script('treeview'); ?>
    <?php echo $this->Html->script('form-components/toggle-switch'); ?>
    <?php echo $this->Html->script('tables'); ?>
    <?php echo $this->Html->script('carousel-slider'); ?>
    <?php echo $this->Html->script('app'); ?>
    <!-- tawk -->
    <?php echo $this->element('tawk-support-member'); ?>
</body>

</html>