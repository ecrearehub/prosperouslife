<div class="card-header-tab card-header">
    <div class="card-header-title font-size-lg text-capitalize fw-normal">
        <i class="header-icon pe-7s-settings icon-gradient bg-amy-crisp"></i>
        Projects
    </div>
</div>
<div class="card-body">
    <h5>Support Sustainable Living In Chile</h5>
    <hr>
    <?php echo $this->Html->image('projects/1.jpeg', ['alt' => 'CakePHP']); ?>
    <hr>
    Juan Pizarro Rojas lives in the rural part of Chile and strives to create sustainable living for his community.
    Corona virus pandemic hit Chile really hard, and many people are starving. There is not enough food and water
    supplies are on limit.
    <hr>
    <?= $this->Html->link('<i class="lnr-heart"></i> Support the Project', '/users/login/', ['class' => 'btn btn-primary btn-lg', 'escape' => false]); ?>
    <?= $this->Html->link('<i class="lnr-text-align-justify"></i> All projects', '/projects/index/', ['class' => 'btn btn-light btn-lg', 'escape' => false]); ?>
</div>