<!-- src/Template/Equipos/index.ctp -->
<?php
$this->extend('/Common/list');
$this->assign("title", "Lista de Equipos de Cómputo");
$this->assign("descripcion", "En la siguiente tabla se muestra la lista de Equipos de Cómputo");
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
