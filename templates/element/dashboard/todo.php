<div class="card-header-tab card-header">
    <div class="card-header-title font-size-lg fw-normal" style="text-transform: none;">
        <i class="header-icon pe-7s-target icon-gradient bg-happy-itmeo"></i>
        Пошаговый план действий
    </div>
</div>
<div class="p-0 card-body">
    <table style="margin: 20px;">
        <tbody>
            <tr>
                <td class="text-center p-4">
                    <?= $this->Html->image('todo/1.jpg', ['width' => '250', 'alt' => 'Шаг 1', 'class' => 'img-thumbnail rounded shadow-sm']); ?>
                </td>
                <td style="padding: 10px; border: 0px;">
                    <h5 class="card-title mt-2">Шаг 1</h5>
                    <h6 class="mt-4">Ситуация в финансах и мире</h6>
                    <ul class="mt-3">
                        <li>Lorem ipsum dolor sit amet.</li>
                        <li>Duis autem vel eum iriure dolor in hendrerit in. </li>
                        <li>Vulputate velit esse molestie consequat. </li>
                        <li>Vel illum dolore eu feugiat nulla facilisis</li>
                    </ul>
                    <?= $this->Html->link('<i class="pe-7s-study"></i>  Модуль изучить', '/steps/index/1', ['class' => 'mt-3', 'escape' => false]); ?>
                </td>
            </tr>

            <?php if ($user->step_id >= 2): ?>

                <tr>
                    <td class="text-center p-4">
                        <?= $this->Html->image('todo/2.jpg', ['width' => '250', 'alt' => 'Шаг 1', 'class' => 'img-thumbnail rounded shadow-sm']); ?>
                    </td>
                    <td style="padding: 10px; border: 0px;">
                        <h5 class="card-title mt-2">Шаг 2</h5>
                        <h6 class="mt-4">Lorem ipsum</h6>
                        <ul class="mt-3">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Duis autem vel eum iriure dolor in hendrerit in. </li>
                            <li>Vulputate velit esse molestie consequat. </li>
                            <li>Vel illum dolore eu feugiat nulla facilisis</li>
                        </ul>
                        <?= $this->Html->link('<i class="pe-7s-study"></i>  Модуль изучить', '/steps/index/2', ['class' => 'mt-3', 'escape' => false]); ?>
                    </td>
                </tr>

            <?php else: ?>

                <tr>
                    <td class="text-center p-4">
                        <?= $this->Html->image('unlocked_1040248.png', ['width' => '250', 'alt' => 'Шаг 2', 'class' => 'img-thumbnail rounded shadow-sm']); ?>
                    </td>
                    <td style="padding: 10px;">
                        <h5 class="card-title mt-4">Шаг 2</h5>
                        <h6 class="mt-4">Модуль закрыт</h6>
                    </td>
                </tr>

            <?php endif ?>


            <?php if ($user->step_id >= 3): ?>
                <tr>
                    <td class="text-center p-4">
                        <?= $this->Html->image('todo/3.jpg', ['width' => '250', 'alt' => 'Шаг 1', 'class' => 'img-thumbnail rounded shadow-sm']); ?>
                    </td>
                    <td style="padding: 10px; border: 0px;">
                        <h5 class="card-title mt-2">Шаг 3</h5>
                        <h6 class="mt-4">Lorem ipsum</h6>
                        <ul class="mt-3">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Duis autem vel eum iriure dolor in hendrerit in. </li>
                            <li>Vulputate velit esse molestie consequat. </li>
                            <li>Vel illum dolore eu feugiat nulla facilisis</li>
                        </ul>
                        <?= $this->Html->link('<i class="pe-7s-study"></i>  Модуль изучить', '/steps/index/3', ['class' => 'mt-3', 'escape' => false]); ?>
                    </td>
                </tr>
            <?php else: ?>
                <tr>
                    <td class="text-center p-4">
                        <?= $this->Html->image('unlocked_1040248.png', ['width' => '250', 'alt' => 'Шаг 3', 'class' => 'img-thumbnail rounded shadow-sm']); ?>
                    </td>
                    <td style="padding: 10px;">
                        <h5 class="card-title mt-4">Шаг 3</h5>
                        <h6 class="mt-4">Модуль закрыт</h6>
                    </td>
                </tr>
            <?php endif ?>


            <?php if ($user->step_id >= 4): ?>
                <tr>
                    <td class="text-center p-4">
                        <?= $this->Html->image('todo/4.jpg', ['width' => '250', 'alt' => 'Шаг 4', 'class' => 'img-thumbnail rounded shadow-sm']); ?>
                    </td>
                    <td style="padding: 10px; border: 0px;">
                        <h5 class="card-title mt-2">Шаг 4</h5>
                        <h6 class="mt-4">Lorem ipsum</h6>
                        <ul class="mt-3">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Duis autem vel eum iriure dolor in hendrerit in. </li>
                            <li>Vulputate velit esse molestie consequat. </li>
                            <li>Vel illum dolore eu feugiat nulla facilisis</li>
                        </ul>
                        <?= $this->Html->link('<i class="pe-7s-study"></i>  Модуль изучить', '/steps/index/4', ['class' => 'mt-3', 'escape' => false]); ?>
                    </td>
                </tr>
            <?php else: ?>
                <tr>
                    <td class="text-center p-4">
                        <?= $this->Html->image('unlocked_1040248.png', ['width' => '250', 'alt' => 'Шаг 4', 'class' => 'img-thumbnail rounded shadow-sm']); ?>
                    </td>
                    <td style="padding: 10px;">
                        <h5 class="card-title mt-4">Шаг 4</h5>
                        <h6 class="mt-4">Модуль закрыт</h6>
                    </td>
                    </td>
                </tr>
            <?php endif ?>

            <?php if ($user->step_id >= 5): ?>
                <tr>
                    <td class="text-center p-4">
                        <?= $this->Html->image('todo/5.jpg', ['width' => '250', 'alt' => 'Шаг 5', 'class' => 'img-thumbnail rounded shadow-sm']); ?>
                    </td>
                    <td style="padding: 10px; border: 0px;">
                        <h5 class="card-title mt-2">Шаг 5</h5>
                        <h6 class="mt-4">Lorem ipsum</h6>
                        <ul class="mt-3">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Duis autem vel eum iriure dolor in hendrerit in. </li>
                            <li>Vulputate velit esse molestie consequat. </li>
                            <li>Vel illum dolore eu feugiat nulla facilisis</li>
                        </ul>
                        <?= $this->Html->link('<i class="pe-7s-study"></i>  Модуль изучить', '/steps/index/5', ['class' => 'mt-3', 'escape' => false]); ?>
                    </td>
                </tr>
            <?php else: ?>
                <tr>
                    <td class="text-center p-4">
                        <?= $this->Html->image('unlocked_1040248.png', ['width' => '250', 'alt' => 'Шаг 5', 'class' => 'img-thumbnail rounded shadow-sm']); ?>
                    </td>
                    <td style="padding: 10px;">
                        <h5 class="card-title mt-4">Шаг 5</h5>
                        <h6 class="mt-4">Модуль закрыт</h6>
                    </td>
                    </td>
                </tr>
            <?php endif ?>

            <?php if ($user->step_id >= 5): ?>
                <tr>
                    <td class="text-center p-4">
                        <?= $this->Html->image('todo/6.jpg', ['width' => '250', 'alt' => 'Шаг 6', 'class' => 'img-thumbnail rounded shadow-sm']); ?>
                    </td>
                    <td style="padding: 10px; border: 0px;">
                        <h5 class="card-title mt-2">Шаг 6</h5>
                        <h6 class="mt-4">Lorem ipsum</h6>
                        <ul class="mt-3">
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Duis autem vel eum iriure dolor in hendrerit in. </li>
                            <li>Vulputate velit esse molestie consequat. </li>
                            <li>Vel illum dolore eu feugiat nulla facilisis</li>
                        </ul>
                        <?= $this->Html->link('<i class="pe-7s-study"></i>  Модуль изучить', '/steps/index/6', ['class' => 'mt-3', 'escape' => false]); ?>
                    </td>
                </tr>
            <?php else: ?>
                <tr>
                    <td class="text-center p-4">
                        <?= $this->Html->image('unlocked_1040248.png', ['width' => '250', 'alt' => 'Шаг 6', 'class' => 'img-thumbnail rounded shadow-sm']); ?>
                    </td>
                    <td style="padding: 10px;">
                        <h5 class="card-title mt-4">Шаг 6</h5>
                        <h6 class="mt-4">Модуль закрыт</h6>
                    </td>
                    </td>
                </tr>
            <?php endif ?>
        </tbody>
    </table>
</div>