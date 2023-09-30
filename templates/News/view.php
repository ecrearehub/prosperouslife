<?php
/**
 * @var \App\View\AppView      $this
 * @var \App\Model\Entity\News $news
 */
?>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-news-paper icon-gradient bg-mean-fruit"></i>
                </div>
                <div>
                    Новости
                    <?php /*
<div class="page-title-subheading">This is an example dashboard created using build-in elements and components.</div>
*/?>
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
                    <div class="card-header-tab card-header">
                        <div class="card-header-title font-size-lg text-capitalize fw-normal">
                            <i class="header-icon lnr-menu icon-gradient bg-happy-itmeo"></i>
                            <?php echo date_format($news->created, "d.m.Y"); ?>
                            <?php echo $news->subject; ?>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php echo $news->message; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4">
                <div class="card-hover-shadow-2x mb-3 card">
                    <?php echo $this->element('support'); ?>
                </div>
            </div>
        </div>
    </div>
</div>