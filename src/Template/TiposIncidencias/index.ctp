<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipos Incidencia'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tiposIncidencias index large-9 medium-8 columns content">
    <h3><?= __('Tipos Incidencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descripcion') ?></th>
                <th><?= $this->Paginator->sort('estado') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tiposIncidencias as $tiposIncidencia): ?>
            <tr>
                <td><?= $this->Number->format($tiposIncidencia->id) ?></td>
                <td><?= h($tiposIncidencia->descripcion) ?></td>
                <td><?= h($tiposIncidencia->estado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tiposIncidencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tiposIncidencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tiposIncidencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tiposIncidencia->id)]) ?>
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
