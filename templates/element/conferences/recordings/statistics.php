<div class="card-header-tab card-header">
    <div class="card-header-title font-size-lg text-capitalize fw-normal">
        <i class="header-icon pe-7s-help1 icon-gradient bg-amy-crisp"></i>
        Cтатистика
    </div>

</div>
<div class="card-body">
    <table class="mb-0 table">
        <tbody>
            <tr>
                <th scope="row">Количество конференций</th>
                <td>
                    <?= $statistics['number_of_conferences']; ?>
                </td>
            </tr>
            <tr>
                <th scope="row">Количество участников</th>
                <td>
                    <?= $statistics['number_of_views']; ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>