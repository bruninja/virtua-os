<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Recibo'), ['action' => 'edit', $recibo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recibo'), ['action' => 'delete', $recibo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recibo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recibo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recibo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Servico'), ['controller' => 'Servico', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Servico'), ['controller' => 'Servico', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cliente'), ['controller' => 'Cliente', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Cliente', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="recibo view large-9 medium-8 columns content">
    <h3><?= h($recibo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Servico') ?></th>
            <td><?= $recibo->has('servico') ? $this->Html->link($recibo->servico->id, ['controller' => 'Servico', 'action' => 'view', $recibo->servico->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
            <td><?= $recibo->has('cliente') ? $this->Html->link($recibo->cliente->id, ['controller' => 'Cliente', 'action' => 'view', $recibo->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($recibo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($recibo->data) ?></td>
        </tr>
    </table>
</div>
