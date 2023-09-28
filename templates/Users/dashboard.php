<?php
/**
 * @var \App\View\AppView                $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-home icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Главная
                    <?php /*
<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
*/ ?>
                </div>
            </div>
            <div class="page-title-actions">

            </div>
        </div>
    </div>

    <div class="tabs-animation">
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <div class="mb-3 card">
                    <?php echo $this->element('dashboard/welcome'); ?>
                </div>
                <div class="mb-3 card">
                    <?php echo $this->element('dashboard/todo'); ?>
                </div>
                <div class="mb-3 card">
                    <?php echo $this->element('dashboard/support'); ?>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">                
                <div class="card-hover-shadow-2x mb-3 card">
                    <?php echo $this->element('dashboard/news'); ?>
                </div>
                <div class="card-hover-shadow-2x mb-3 card">
                    <?php echo $this->element('dashboard/conferences'); ?>
                </div>
            </div>
        </div>
    </div>
</div>