<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Live the Prosperous Life</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
        <meta name="description" content="ArchitectUI HTML Bootstrap 5 Dashboard Template">
        <!-- Disable tap highlight on IE -->
        <meta name="msapplication-tap-highlight" content="no">
        <?php echo $this->Html->css('/vendors/@fortawesome/fontawesome-free/css/all.min'); ?>
        <?php echo $this->Html->css('/vendors/ionicons-npm/css/ionicons'); ?>
        <?php echo $this->Html->css('/vendors/linearicons-master/dist/web-font/style'); ?>
        <?php echo $this->Html->css('/vendors/pixeden-stroke-7-icon-master/pe-icon-7-stroke/dist/pe-icon-7-stroke'); ?>       
        <?php echo $this->Html->css('base'); ?>
    </head>
    <body>
        <?php echo $this->fetch('content'); ?>
        
        <!-- plugin dependencies -->
        <?php echo $this->Html->script('/vendors/jquery/dist/jquery.min'); ?>
        <?php echo $this->Html->script('/vendors/slick-carousel/slick/slick.min'); ?>
        <!-- custome.js -->
        <?php echo $this->Html->script('carousel-slider'); ?>
    </body>
</html>
