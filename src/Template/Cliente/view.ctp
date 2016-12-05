<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cliente'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recibo'), ['controller' => 'Recibo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recibo'), ['controller' => 'Recibo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cliente view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($cliente->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cliente->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($cliente->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Historico') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->historico)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Recibo') ?></h4>
        <?php if (!empty($cliente->recibo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Servico Id') ?></th>
                <th scope="col"><?= __('Cliente Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cliente->recibo as $recibo): ?>
            <tr>
                <td><?= h($recibo->id) ?></td>
                <td><?= h($recibo->data) ?></td>
                <td><?= h($recibo->servico_id) ?></td>
                <td><?= h($recibo->cliente_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Recibo', 'action' => 'view', $recibo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Recibo', 'action' => 'edit', $recibo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recibo', 'action' => 'delete', $recibo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recibo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
