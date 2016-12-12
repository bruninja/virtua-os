<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Edit Servico'), ['action' => 'edit', $servico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Servico'), ['action' => 'delete', $servico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $servico->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Servico'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Servico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Recibo'), ['controller' => 'Recibo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Recibo'), ['controller' => 'Recibo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="servico view large-9 medium-8 columns content">
    <h3><?= h($servico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($servico->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($servico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prazo Medio Dias') ?></th>
            <td><?= $this->Number->format($servico->prazo_medio_dias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Valor') ?></th>
            <td><?= $this->Number->format($servico->valor) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Recibo') ?></h4>
        <?php if (!empty($servico->recibo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Servico Id') ?></th>
                <th scope="col"><?= __('Cliente Id') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
            <?php foreach ($servico->recibo as $recibo): ?>
            <tr>
                <td><?= h($recibo->id) ?></td>
                <td><?= h($recibo->data) ?></td>
                <td><?= h($recibo->servico_id) ?></td>
                <td><?= h($recibo->cliente_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Recibo', 'action' => 'view', $recibo->id]) ?>
                    <?= $this->Html->link(__('Edita'), ['controller' => 'Recibo', 'action' => 'edit', $recibo->id]) ?>
                    <?= $this->Form->postLink(__('Deleta'), ['controller' => 'Recibo', 'action' => 'delete', $recibo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recibo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
