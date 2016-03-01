<!-- src/Template/Equipos/index.ctp -->
<?php
$this->extend('/Common/list');
$this->assign("title", "Lista de Equipos de Cómputo");
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
                    <th>Código</th>
                    <th>Código Patrimonial</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>72.20.24.001</td>
                    <td>PRO x2</td>
                    <td>HP</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Opción <span class="caret"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Detalle</a></li>
                                <li><a href="#">Modificar</a></li>
                                <li><a href="#">Eliminar</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Adicional</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
