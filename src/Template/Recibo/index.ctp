<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Recibo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Servico'), ['controller' => 'Servico', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Servico'), ['controller' => 'Servico', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Cliente'), ['controller' => 'Cliente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Cliente'), ['controller' => 'Cliente', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recibo index large-9 medium-8 columns content">
    <h3><?= __('Recibo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('servico_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cliente_id') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recibo as $recibo): ?>
            <tr>
                <td><?= $this->Number->format($recibo->id) ?></td>
                <td><?= h($recibo->data) ?></td>
                <td><?= $recibo->has('servico') ? $this->Html->link($recibo->servico->id, ['controller' => 'Servico', 'action' => 'view', $recibo->servico->id]) : '' ?></td>
                <td><?= $recibo->has('cliente') ? $this->Html->link($recibo->cliente->id, ['controller' => 'Cliente', 'action' => 'view', $recibo->cliente->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $recibo->id]) ?>
                    <?= $this->Html->link(__('Edita'), ['action' => 'edit', $recibo->id]) ?>
                    <?= $this->Form->postLink(__('Deleta'), ['action' => 'delete', $recibo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recibo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
