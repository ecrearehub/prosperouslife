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
    <?= $this->Html->css('/vendors/@fortawesome/fontawesome-free/css/all.min'); ?>
    <?= $this->Html->css('/vendors/ionicons-npm/css/ionicons'); ?>
    <?= $this->Html->css('/vendors/linearicons-master/dist/web-font/style'); ?>
    <?= $this->Html->css('/vendors/pixeden-stroke-7-icon-master/pe-icon-7-stroke/dist/pe-icon-7-stroke'); ?>
    <?= $this->Html->css('base'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <!-- Header Start -->
        <?= $this->element('header'); ?>
        <!-- Header End -->
        <div class="app-main">
            <!-- Sidebar Start -->
            <?= $this->element('sidebar'); ?>
            <!-- Sidebar End -->
            <!-- Content Start -->
            <div class="app-main__outer">
                <?= $this->fetch('content') ?>
                <?= $this->element('footer'); ?>
            </div>
            <!-- Content End -->
        </div>
    </div>
    <!-- plugin dependencies -->
    <?= $this->Html->script('/vendors/jquery/dist/jquery.min'); ?>
    <?= $this->Html->script('/vendors/bootstrap/dist/js/bootstrap.bundle.min'); ?>
    <?= $this->Html->script('/vendors/moment/moment'); ?>
    <?= $this->Html->script('/vendors/metismenu/dist/metisMenu'); ?>
    <?= $this->Html->script('/vendors/bootstrap4-toggle/js/bootstrap4-toggle.min'); ?>
    <?= $this->Html->script('/vendors/jquery-circle-progress/dist/circle-progress.min'); ?>
    <?= $this->Html->script('/vendors/perfect-scrollbar/dist/perfect-scrollbar.min'); ?>
    <?= $this->Html->script('/vendors/toastr/build/toastr.min'); ?>
    <?= $this->Html->script('/vendors/jquery.fancytree/dist/jquery.fancytree-all-deps.min'); ?>
    <?= $this->Html->script('/vendors/apexcharts/dist/apexcharts.min'); ?>
    <?= $this->Html->script('/vendors/bootstrap-table/dist/bootstrap-table.min'); ?>
    <?= $this->Html->script('/vendors/datatables.net/js/jquery.dataTables.min'); ?>
    <?= $this->Html->script('/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min'); ?>
    <?= $this->Html->script('/vendors/datatables.net-responsive/js/dataTables.responsive.min'); ?>
    <?= $this->Html->script('/vendors/datatables.net-responsive-bs4/js/responsive.bootstrap4.min'); ?>
    <?= $this->Html->script('/vendors/slick-carousel/slick/slick.min'); ?>
    <!-- custome.js -->
    <?= $this->Html->script('charts/apex-charts'); ?>
    <?= $this->Html->script('circle-progress'); ?>
    <?= $this->Html->script('demo'); ?>
    <?= $this->Html->script('scrollbar'); ?>
    <?= $this->Html->script('toastr'); ?>
    <?= $this->Html->script('treeview'); ?>
    <?= $this->Html->script('form-components/toggle-switch'); ?>
    <?= $this->Html->script('tables'); ?>
    <?= $this->Html->script('carousel-slider'); ?>
    <?= $this->Html->script('app'); ?>
    <!-- tawk -->
    <?= $this->element('tawk-support-member'); ?>

    <!-- Modal -->
    <?= $this->element('modal/terms'); ?>
    <!-- Modal -->
</body>

</html>