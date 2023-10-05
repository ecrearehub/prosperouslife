<div class="card-header-tab card-header">
    <div class="card-header-title font-size-lg text-capitalize fw-normal">
        <i class="header-icon pe-7s-graph2 icon-gradient bg-amy-crisp"></i>
        Ваша статистика приглашений
    </div>

</div>
<div class="card-body">
    <table class="mb-0 table">
        <tbody>
            <tr>
                <th scope="row">Разослали приглашений</th>
                <td>
                    <?= $statistics['invitations']['sent']; ?>
                </td>
            </tr>
            <tr>
                <th scope="row">Открытые приглашения</th>
                <td>
                    <?= $statistics['invitations']['open']; ?>
                </td>
            </tr>
            <tr>
                <th scope="row">Принятые приглашения</th>
                <td>
                    <?= $statistics['invitations']['accepted']; ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>