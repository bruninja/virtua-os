<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Recibo'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Servico'), ['controller' => 'Servico', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Servico'), ['controller' => 'Servico', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cliente'), ['controller' => 'Cliente', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Cliente', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="recibo form large-9 medium-8 columns content">
    <?= $this->Form->create($recibo) ?>
    <fieldset>
        <legend><?= __('Add Recibo') ?></legend>
        <?php
            echo $this->Form->input('data', ['empty' => true]);
            echo $this->Form->input('servico_id', ['options' => $servico]);
            echo $this->Form->input('cliente_id', ['options' => $cliente]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
