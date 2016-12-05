<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $cliente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Cliente'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Listar Recibo'), ['controller' => 'Recibo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Recibo'), ['controller' => 'Recibo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cliente form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('email');
            echo $this->Form->input('cpf');
            echo $this->Form->input('historico');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
