<div class="Marcas form">
    <?php echo $this->Form->create('Marca'); ?>
    <fieldset>
        <legend>Editar Marca</legend>
	<?php
            //echo $this->Form->input('id');
            echo $this->Form->input('nombre');
	?>
    </fieldset>
    <?php echo $this->Form->end('Actualizar'); ?>
</div>
<div class="actions">
    <h3>Acciones</h3>
    <ul>
        <li><?php echo $this->Html->link('Listado de Marcas', array('action' => 'index')); ?></li>
    </ul>
</div>
