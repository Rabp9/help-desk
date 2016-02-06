<!-- src/Template/Common/list.ctp -->
<?php 
$this->extend('/Common/wo_padding');
?>
<div class="page-title">
    <span class="title"><?= $this->fetch("title"); ?></span>
    <div class="description"><?= $this->fetch("descripcion") ?></div>
</div>
<div class="row">
    <div class="col-xs-12">
        <?= $this->fetch("content") ?>
    </div>
</div>