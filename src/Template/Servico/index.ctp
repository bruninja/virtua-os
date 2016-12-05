<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Servico'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recibo'), ['controller' => 'Recibo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recibo'), ['controller' => 'Recibo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servico index large-9 medium-8 columns content">
    <h3><?= __('Servico') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prazo_medio_dias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('valor') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($servico as $servico): ?>
            <tr>
                <td><?= $this->Number->format($servico->id) ?></td>
                <td><?= h($servico->descricao) ?></td>
                <td><?= $this->Number->format($servico->prazo_medio_dias) ?></td>
                <td><?= $this->Number->format($servico->valor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $servico->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $servico->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $servico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servico->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
