<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Listar Servico'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Recibo'), ['controller' => 'Recibo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Recibo'), ['controller' => 'Recibo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="servico form large-9 medium-8 columns content">
    <?= $this->Form->create($servico) ?>
    <fieldset>
        <legend><?= __('Adicionar Servico') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('prazo_medio_dias');
            echo $this->Form->input('valor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
