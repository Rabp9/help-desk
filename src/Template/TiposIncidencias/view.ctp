<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipos Incidencia'), ['action' => 'edit', $tiposIncidencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipos Incidencia'), ['action' => 'delete', $tiposIncidencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposIncidencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos Incidencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipos Incidencia'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tiposIncidencias view large-9 medium-8 columns content">
    <h3><?= h($tiposIncidencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descripcion') ?></th>
            <td><?= h($tiposIncidencia->descripcion) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($tiposIncidencia->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tiposIncidencia->id) ?></td>
        </tr>
    </table>
</div>
