<!-- src/Template/Equipos/edit.ctp -->
<?php
$this->extend('/Common/list');
$this->assign("title", "Modificar Equipo de Cómputo");
$this->assign("module-name", "Gestión");
$this->assign("descripcion", "Completa los campos solicitados");
?>
<?= $this->Form->create($equipo) ?>
<?= $this->Form->input("codigo_patrimonial") ?>
<?= $this->Form->input("modelo") ?>
<?= $this->Form->input("marca") ?>
<?= $this->Form->button("Registrar", [
    "class" => "btn btn-primary",
    "type" => "submit"
]) ?>