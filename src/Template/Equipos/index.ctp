<!-- src/Template/Equipos/index.ctp -->
<?php
$this->extend('/Common/list');
$this->assign("title", "Lista de Equipos de Cómputo");
$this->assign("module-name", "Gestión");
$this->assign("descripcion", "En la siguiente tabla se muestra la lista de Equipos de Cómputo");
?>
<?= $this->Html->link("Nuevo Equipo", [
    "controller" => "equipos", "action" => "add"
    ], [
        "class" => "btn btn-primary"
    ]
) ?>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Código</th>
            <th>Código Patrimonial</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($equipos as $equipo) {
            echo $this->Html->tableCells(
                [
                    $this->Number->format($equipo->id),
                    h($equipo->codigo_patrimonial),
                    h($equipo->modelo),
                    h($equipo->marca),
                    $this->Bootstrap->options([[
                        "title" => "Ver", 
                        "url" => [
                            "controller" => "Equipos",
                            "action" => "view", $equipo->id
                        ],
                        "type" => "link"
                    ], [
                        "title" => "Editar", 
                        "url" => [
                            "controller" => "Equipos",
                            "action" => "edit", $equipo->id
                        ],
                        "type" => "link"
                    ]])
                ], [
                    "class" => ""
                ], [
                    "class" => "active"
                ]
            );
        } ?>
    </tbody>
</table>