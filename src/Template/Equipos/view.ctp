<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipo'), ['action' => 'edit', $equipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipo'), ['action' => 'delete', $equipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipos view large-9 medium-8 columns content">
    <h3><?= h($equipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Codigo Patrimonial') ?></th>
            <td><?= h($equipo->codigo_patrimonial) ?></td>
        </tr>
        <tr>
            <th><?= __('Modelo') ?></th>
            <td><?= h($equipo->modelo) ?></td>
        </tr>
        <tr>
            <th><?= __('Marca') ?></th>
            <td><?= h($equipo->marca) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= h($equipo->estado) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($equipo->id) ?></td>
        </tr>
    </table>
</div>
