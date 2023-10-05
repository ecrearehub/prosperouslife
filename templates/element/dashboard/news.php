<div class="card-header-tab card-header">
    <div class="card-header-title font-size-lg text-capitalize fw-normal">
        <i class="header-icon pe-7s-news-paper icon-gradient bg-amy-crisp"></i>
        Новости
    </div>
</div>
<div class="card-body">
    <?php if ($news != null): ?>
        <table class="mb-0 table table-borderless">
            <thead>
                <tr>
                    <th>
                        <?php echo date_format($news->created, "d.m.Y"); ?>
                        <?php echo $news->subject; ?>
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
    <?php else: ?>
        <table class="mb-0 table table-borderless">
            <tbody>
                <tr>
                    <td>
                        Нет новостей
                    </td>
                </tr>
            </tbody>
        </table>
    <?php endif ?>
</div>
<div class="card-footer">
    <?php echo $this->Html->link('<i class="pe-7s-news-paper btn-icon-wrapper"></i> Архив новостей', '/news/index/', ['class' => 'mb-2 me-2 btn btn-shadow btn-light', 'escape' => false]); ?>
</div>