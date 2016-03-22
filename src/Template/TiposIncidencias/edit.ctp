<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tiposIncidencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tiposIncidencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipos Incidencias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tiposIncidencias form large-9 medium-8 columns content">
    <?= $this->Form->create($tiposIncidencia) ?>
    <fieldset>
        <legend><?= __('Edit Tipos Incidencia') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
            echo $this->Form->input('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
