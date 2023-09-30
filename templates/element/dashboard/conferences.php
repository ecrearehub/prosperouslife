<div class="card-header-tab card-header">
    <div class="card-header-title font-size-lg text-capitalize fw-normal">
        <i class="header-icon pe-7s-display2 icon-gradient bg-amy-crisp"></i>
        Когда следующее мероприятие?
    </div>
</div>
<div class="card-body">

    <table class="mb-0 table table-borderless">
        <thead>
            <tr>
                <th>
                    Дата
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo preg_replace("/[^ ]*$/", '', substr($news->message, 0, 100)); ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo $this->Html->link('Полный текст...', '/news/view/' . $news->id); ?>
                </td>
            </tr>
        </tbody>
    </table>

</div>
<div class="card-footer">
    <?php echo $this->Html->link('<i class="pe-7s-news-paper btn-icon-wrapper"></i>  Расписание конференций', '/conferences/index/', ['class' => 'mb-2 me-2 btn btn-shadow btn-light', 'escape' => false]); ?>
</div>