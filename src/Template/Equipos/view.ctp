<!-- src/Template/Equipos/add.ctp -->
<?php
$this->extend('/Common/list');
$this->assign("title", "Ver Equipo de Cómputo");
$this->assign("module-name", "Gestión");
$this->assign("descripcion", "Se muestra la Información del Equipo de Cómputo");
?>
<dl class="dl-horizontal">
    <dt>Código</dt>
    <dd><?= $equipo->id ?></dd>
    
    <dt>Código Patrimonial</dt>
    <dd><?= $equipo->codigo_patrimonial ?></dd>
    
    <dt>Modelo</dt>
    <dd><?= $equipo->modelo ?></dd>
    
    <dt>Marca</dt>
    <dd><?= $equipo->marca ?></dd>
</dl>
<?= $this->Html->link("<span class='glyphicon glyphicon-backward'></span> Regresar a lista de Equipos", [
    "controller" => "equipos"
    ], [
    "escape" => false
])?>