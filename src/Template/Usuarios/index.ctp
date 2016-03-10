<!-- src/Template/Equipos/index.ctp -->
<?php
$this->extend('/Common/list');
$this->assign("title", "Lista de Usuarios");
$this->assign("module-name", "Gestión");
$this->assign("descripcion", "En la siguiente tabla se muestra la lista de Equipos de Cómputo");
?>

<?php echo $this->Bootstrap->options(
    [
        [
            "title" => "boton1", 
            "url" => "sdadsa/dasds",
            "type" => "button"
        ]
    ]
) ?>
<?php echo $this->Bootstrap->options(
    [
        [
            "title" => "postLink1", 
            "url" => "sdadsa/dasds",
            "type" => "postLink",
            "confirmMessage" => "dsada"
        ]
    ]
) ?>
<?php echo $this->Bootstrap->options([[
    "title" => "modal1", 
    "type" => "modal",
    "data-target" => "#id_de_algo",
    "metadata" => [
        "data-id" => "dasda",
        "data-mono" => "tu"
    ]
]]) ?>

<?php 
    echo $this->Bootstrap->options([
        [
            "title" => "boton1", 
            "url" => "sdadsa/dasds",
            "type" => "button"
        ],
        [
            "title" => "postLink1", 
            "url" => "sdadsa/dasds",
            "type" => "postLink",
            "confirmMessage" => "dsada"
        ], 
        [
            "title" => "modal1", 
            "type" => "modal",
            "data-target" => "#id_de_algo",
            "metadata" => [
                "data-id" => "dasda",
                "data-mono" => "tu"
            ]
        ],
        [
            "type" => "divider"
        ],
        [
            "title" => "modal1", 
            "type" => "modal",
            "data-target" => "#id_de_algo",
            "metadata" => [
                "data-id" => "dasda",
                "data-mono" => "tu"
            ]
        ]
    ]);
?>

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <div class="title">Table</div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombres') ?></th>
                    <th><?= $this->Paginator->sort('apellido_paterno') ?></th>
                    <th><?= $this->Paginator->sort('apellido_materno') ?></th>
                    <th><?= $this->Paginator->sort('fecha_nac') ?></th>
                    <th><?= $this->Paginator->sort('estado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <td><?= $this->Number->format($usuario->id) ?></td>
                    <td><?= h($usuario->nombres) ?></td>
                    <td><?= h($usuario->apellido_paterno) ?></td>
                    <td><?= h($usuario->apellido_materno) ?></td>
                    <td><?= h($usuario->fecha_nac) ?></td>
                    <td><?= h($usuario->estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
